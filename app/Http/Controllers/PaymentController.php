<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {   
        $payments = DB::select('CALL sp_get_all_payments()');
        
        return view('payments.index', compact('payments'));
    }
}
