<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Expense;
class BudgetController extends Controller
{
    public function budget()
    {
        $budgets = Budget::with("category")
        ->where("user_id", Auth::user()->id)
        ->get();

        foreach($budgets as $budget){
            $spent = Expense::where("user_id", Auth::user()->id)
                ->where('expense_category_id', $budget->expense_category_id)
                ->whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->sum('amount');

            $budget->spent = $spent;
            $budget->remaining = $budget->amount - $spent;
            
            $budget->percentage = ($budget->amount > 0) ? ($spent / $budget->amount) * 100 : 0;

            $budget->color = 'success';
            if ($budget->percentage >= 75) $budget->color = 'warning';
            if ($budget->percentage >= 100) $budget->color = 'danger';

        }

        $categories = ExpenseCategory::all();
        return view("loggedin.budget", compact("categories", "budgets"));
    }

    public function create(Request $request)
    {
        $categories = ExpenseCategory::all();
        return view("budget.create", compact("categories"));
    }

    public function store(Request $request)
    {
        if(empty($request->expense_category_id) or empty($request->amount) or empty($request->period))
        {
            return redirect()->back()->with("error","Please complete all required fields to proceed.");
        }

        $budget = new Budget();
        $budget->amount = $request->amount;
        $budget->period = $request->period;
        $budget->expense_category_id = $request->expense_category_id;
        $budget->user_id = Auth::user()->id;
        $budget->save();

        return redirect()->route("loggedin.budget")->with("success","Budget created successfully!");
    }

    public function delete($id)
    {
        return view("budget.delete", ["id" => $id]);
    }

    public function destroy($id)
    {
        $budget = Budget::findOrFail($id);
        $budget->delete();

        return redirect()->route("loggedin.budget")->with("success","Deleted successfully");
    }

    public function update(Request $request, $id)
    {
        if(empty($request->amount))
        {
            return redirect()->back()->with("error","You cannot leave the fields empty!");
        }

        $budget =  Budget::findOrFail($id);
        $budget->amount = $request->amount;
        $budget->user_id = Auth::user()->id;
        $budget->save();
        
        return redirect()->route("loggedin.budget")->with("success","Edited successfully");
    }
}
