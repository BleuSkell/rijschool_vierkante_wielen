<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Student;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {   
        $perPage = 5;
        $page = $request->input('page', 1);
        $offset = ($page - 1) * $perPage;

        $total = DB::table('invoices')->count();

        $invoices = DB::select('CALL sp_get_all_invoices(?, ?)', [$perPage, $offset]);

        $paginatedInvoices = new LengthAwarePaginator(
            $invoices,
            $total,
            $perPage,
            $page,
            ['path' => url()->current(), 'query' => $request->query()]
        );

        return view('invoices.index', ['invoices' => $paginatedInvoices]);
    }

    public function show($id)
    {   
        $invoice = DB::select('CALL sp_get_invoices_by_id(?)', [$id]);
        
        return view('invoices.show', compact('invoice'));
    }

    public function getStudentDetails($studentId)
    {
        $details = DB::select('CALL sp_get_students_with_enrollment_details(?)', [$studentId]);

        return response()->json($details);
    }

    public function create()
    {   
        $students = DB::table('students')
            ->join('users', 'students.userId', '=', 'users.id')
            ->select('students.id', 'users.name')
            ->get();

        return view('invoices.create', compact('students'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student' => 'required|exists:students,id',
            'amountExcBtw' => 'required|numeric',
            'btw' => 'required|numeric',
            'amountIncBtw' => 'required|numeric',
        ]);

        // zoek de enrollmentId op basis van de studentId
        $enrollment = DB::table('enrollments')
                        ->where('studentId', $request->student)
                        ->latest('startDate')
                        ->first();

        if (!$enrollment) {
            return back()->withErrors(['student' => 'Geen inschrijvingen gevonden voor deze student.']);
        }

        // maak een uniek factuurnummer aan
        $today = Carbon::today()->format('Ymd');
        $latestInvoice = DB::table('invoices')
                            ->whereDate('invoiceDate', Carbon::today())
                            ->orderByDesc('id')
                            ->first();

        $nexSequence = $latestInvoice ? ((int)substr($latestInvoice->invoiceNumber, -4)) + 1 : 1;
        $invoiceNumber = 'INV-' . $today . '-' . str_pad($nexSequence, 4, '0', STR_PAD_LEFT);

        // maak de factuur aan
        DB::table('invoices')->insert([
            'enrollmentId' => $enrollment->id,
            'invoiceNumber' => $invoiceNumber,
            'invoiceDate' => now(),
            'amountExcBtw' => $request->amountExcBtw,
            'btw' => $request->btw,
            'amountIncBtw' => $request->amountIncBtw,
            'invoiceStatus' => 'Unpaid',
        ]);

        return redirect()->route('invoices.index')->with('success', 'Factuur succesvol aangemaakt.');
    }

    public function edit($id)
    {
        return view('invoices.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the invoice data
        // Redirect or return a response
    }

    public function destroy($id)
    {
        // Delete the invoice
        // Redirect or return a response
    }
}
