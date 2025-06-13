<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index(Request $request)
    {   
        $perPage = 5;
        $page = $request->input('page', 1);
        $offset = ($page - 1) * $perPage;

        // Haal het totaal aantal betalingen op voor paginatie
        $total = DB::table('payments')->count();

        // Haal alleen de betalingen voor deze pagina op
        $payments = DB::select('CALL sp_get_all_payments(?, ?)', [$perPage, $offset]);

        $paginatedPayments = new LengthAwarePaginator(
            $payments,
            $total,
            $perPage,
            $page,
            ['path' => url()->current(), 'query' => $request->query()]
        );

        return view('payments.index', ['payments' => $paginatedPayments]);
    }

    public function create($invoiceId)
    {   
        return view('payments.create', compact('invoiceId'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'invoiceId' => 'required|exists:invoices,id',
            'bankingDetails' => 'required|string',
            'bankingDetailsCheck' => 'required|same:bankingDetails'
        ]);

        Payment::create([
            'invoiceId' => $request->invoiceId,
            'date' => now(),
            'status' => 'Paid',
            'isActive' => true,
            'note' => null,
            'dateCreated' => now(),
            'dateModified' => now(),
        ]);

        return redirect()->route('invoices.index')->with('success', 'Factuur betaald.');
    }
}
