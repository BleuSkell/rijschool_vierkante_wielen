<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

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

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        // Validate and store the invoice data
        // Redirect or return a response
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
