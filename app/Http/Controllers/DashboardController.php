<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Expense;
use App\Models\Income;
use App\Models\IncomeCategory;
use App\Models\ExpenseCategory;
use Maatwebsite\Excel\Concerns\ToArray;

class DashboardController extends Controller
{
    public function dashboard(){

        $user = Auth::user();
        $year = date("Y");
        

        $incomeData = collect(range(1,12))->map(function($month) use ($user, $year) {
            return $user->incomes()
            ->whereYear("created_at", $year)
            ->whereMonth("created_at", $month)
            ->sum("amount");
        })->ToArray();

        $expenseData = collect(range(1,12))->map(function($month) use ($user, $year) {
            return $user->expenses()
            ->whereYear("created_at", $year)
            ->whereMonth("created_at", $month)
            ->sum("amount");
        })->toArray();


        $userExpenses = Auth::user()->expenses()->get();
        $userIncomes = Auth::user()->incomes()->get();
        
        $transactions = $userExpenses->concat($userIncomes)->sortByDesc('created_at');

        $incomeCategories = IncomeCategory::all();
        $expenseCategories = ExpenseCategory::with(['expenses' => function($query) use ($user) {
            $query->where('user_id', $user->id);
        }])->get();

        $pieData = $expenseCategories->map(function($cat){
            return [
                'name' => $cat->name,
                'total' => $cat->expenses->sum('amount') ?? 0,
            ];
        })->filter(fn($item) => $item['total'] > 0);

        $pieLabels = $pieData->pluck('name');
        $pieValues = $pieData->pluck('total');



        
        return view("loggedin.dashboard", compact("userExpenses","userIncomes", "transactions", "incomeData" , 'expenseData', 'incomeCategories', 'expenseCategories', 'pieLabels', 'pieValues'));
    }
}
