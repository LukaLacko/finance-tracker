<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExpenseCategory;

class ExpenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Housing/Rent";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Utilities";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Internet/Phone";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Insurance";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Groceries";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Dining Out";
        $expense_category->save();
        
        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Transportation";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Household Supplies";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Health & Wellnesss";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Shopping";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Education";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Hobbies/Entertainment";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Debt/Loans";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Savings/Investments";
        $expense_category->save();
        
        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Gifts/Donations";
        $expense_category->save();

        $expense_category = new ExpenseCategory ();
        $expense_category->name = "Misc/Others";
        $expense_category->save();

    }
}
