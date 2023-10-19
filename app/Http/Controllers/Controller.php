<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Customers;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

class DashboardController extends Controller
{
    public function getStats()
    {
        $totalCustomers = Customer::count();

        return response()->json([
            'total_customers' => $totalCustomers
        ]);
    }
}