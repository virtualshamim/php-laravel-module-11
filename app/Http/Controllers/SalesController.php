<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SalesController extends Controller
{
    public function salesReport()
    {
        // Get today's date
        $today = Carbon::today();

        // Get yesterday's date
        $yesterday = Carbon::yesterday();

        // Calculate the first day of this month
        $startOfMonth = Carbon::now()->startOfMonth();

        // Calculate the first day of last month
        $startOfLastMonth = Carbon::now()->subMonth()->startOfMonth();

        // Calculate the last day of last month
        $endOfLastMonth = Carbon::now()->subMonth()->endOfMonth();

        // Retrieve today's sales
        $todaySales = DB::table('sales')
            ->whereDate('created_at', $today)
            ->sum('total_amount');

        // Retrieve yesterday's sales
        $yesterdaySales = DB::table('sales')
            ->whereDate('created_at', $yesterday)
            ->sum('total_amount');

        // Retrieve this month's sales
        $thisMonthSales = DB::table('sales')
            ->whereBetween('created_at', [$startOfMonth, Carbon::now()])
            ->sum('total_amount');

        // Retrieve last month's sales
        $lastMonthSales = DB::table('sales')
            ->whereBetween('created_at', [$startOfLastMonth, $endOfLastMonth])
            ->sum('total_amount');

        return view('dashboard', [
            'todaySales' => $todaySales,
            'yesterdaySales' => $yesterdaySales,
            'thisMonthSales' => $thisMonthSales,
            'lastMonthSales' => $lastMonthSales,
        ]);
    }
}
