<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Expense;
use App\Models\ExpenseCategory;

use function Ramsey\Uuid\v1;

class ExpenseController extends Controller
{
    public function expense(Request $request)
    {
        $query = Auth::user()->expenses();
    
        if ($request->has('month')) {
            $query->whereMonth('created_at', $request->month);
        }
    
        $totalExpense = (clone $query)->sum("amount");
        $avgExpense = number_format((clone $query)->average("amount"), 2);
    
        $userExpenses = $query->orderBy('created_at', 'desc')->paginate(8);
    
        return view("loggedin.expenses", compact("userExpenses", "totalExpense", "avgExpense"));
    }

    public function create()
    {
        $categories = ExpenseCategory::all();
        return view("expense.create", compact("categories"));
    }

    public function store(Request $request)
    {
        if(empty($request->title) or empty($request->expense_category_id) or empty($request->amount)){
            return back()->with("error","Data cannot be left blank!");
        }

        $expense = new Expense();
        $expense->title = $request->title;
        $expense->expense_category_id = $request->expense_category_id;
        $expense->amount = $request->amount;
        $expense->description = $request->description;
        $expense->created_at = $request->created_at;
        $expense->user_id = Auth::user()->id;
        $expense->save();

        return redirect()->route("loggedin.expenses")->with("success", "Expense is successfully added!");
    }

    public function edit($id)
    {
        $expense = Expense::find($id);

        $categories = ExpenseCategory::all();
        return view("expense.edit", ["expense" => $expense], compact("categories"));
    }

    public function update(Request $request, $id)
    {
        if(empty($request->title) or empty($request->expense_category_id) or empty($request->amount)){
            return redirect()->back()->with("error","Data cannot be left blank!");
        }

        $expense = Expense::findOrFail( $id );
        $expense->title = $request->title;
        $expense->expense_category_id = $request->expense_category_id;
        $expense->amount = $request->amount;
        $expense->description = $request->description;
        $expense->created_at = $request->created_at;
        $expense->user_id = Auth::user()->id;
        $expense->save();

        return redirect()->route("loggedin.expenses")->with("info","Income is successfuly edited!");
    }

    public function delete($id)
    {
        return view("expense.delete", ["id" => $id, "expense" => Expense::findOrFail($id) ]);
    }

    public function destroy(Request $request, $id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete();

        return redirect()->route("loggedin.expenses")->with("success","Deleted successfully");
    }

    public function details($id)
    {
        $expense = Expense::findOrFail($id);
        return view("expense.details", ["expense" => $expense ]);
    }
}
