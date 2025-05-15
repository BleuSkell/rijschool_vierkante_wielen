<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function index()
    {   
        $invoices = DB::select('CALL sp_get_all_invoices()');

        return view('invoices.index', compact('invoices'));
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
