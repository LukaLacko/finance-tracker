<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\IncomeCategory;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    public function income(Request $request){

        $query = Auth::user()->incomes();

        if($request->has('month')){
            $query->whereMonth('created_at', $request->month);
        }

        $totalIncome = (clone $query)->sum("amount");
        $avgIncome = number_format((clone $query)->average("amount"),2);
        $userIncomes = $query->orderBy('created_at', 'desc')->paginate(8);

        return view("loggedin.income",compact("userIncomes" , "totalIncome", "avgIncome",));
    }

    public function create(){

        $categories = IncomeCategory::all();

        return view("income.create", compact('categories'));
    }

    public function store(Request $request){
    
        if(empty($request->title) or empty($request->amount) or empty($request->income_category_id)){
            return redirect()->back()->with("error", "Data cannot be left blank!");
        }

        $income = new Income();
        $income->title = $request->title;
        $income->amount = $request->amount;
        $income->income_category_id = $request->income_category_id;
        $income->description = $request->description;
        $income->created_at = $request->created_at;
        $income->user_id = Auth::user()->id;
        $income->save();

        return redirect(url('/loggedin/income'))->with("success", "Income is successfully added!");

    }


    public function edit($id){
        $income = Income::find($id);
        $categories = IncomeCategory::all();
        return view("income.edit", ["income" => $income], compact("categories"));
    }

    public function update(Request $request, $id){
    
        if(empty($request->income_category_id) or empty($request->amount) or empty($request->title)){
            return redirect()->back()->with("error", "Data cannot be left blank!");       
    }
    $income = Income::findOrFail($id);
    $income->income_category_id = $request->income_category_id;
    $income->amount = $request->amount;
    $income->description = $request->description;
    $income->created_at = $request->created_at;
    $income->title = $request->title;
    $income->save();

    return redirect(url("/loggedin/income"))->with("info","Income is successfuly edited!");
    }

    public function delete($id){
        return view("income.delete", [
            "id" => $id,
            "income" => Income::findOrFail($id)
        ]);
    }

    public function destroy(Request $request, $id){
        $income = Income::findOrFail($id);
        $income->delete();

        return redirect(url("/loggedin/income"))->with("success","Deleted successfully");
    }

    public function details($id){
        $income = Income::findOrFail($id);
        return view("income.details", ["income" => $income]);
    }

}
