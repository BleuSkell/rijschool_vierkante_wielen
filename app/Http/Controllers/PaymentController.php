<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

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
}
