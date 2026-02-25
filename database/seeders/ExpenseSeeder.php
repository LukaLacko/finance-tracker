<?php

namespace Database\Seeders;

use App\Models\Expense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $expense = new Expense();
        $expense->user_id = 1;
        $expense->title = "Coca Cola";
        $expense->expense_category_id = 1;
        $expense->amount = 10;
        $expense->save();

        $expense = new Expense();
        $expense->user_id = 2;
        $expense->title = "Steak";
        $expense->expense_category_id = 2;
        $expense->amount = 60;
        $expense->save();

        $expense = new Expense();
        $expense->user_id = 3;
        $expense->title = "Electricity";
        $expense->expense_category_id = 3;
        $expense->amount = 270;
        $expense->save();

        $expense = new Expense();
        $expense->user_id = 1;
        $expense->title = "Water";
        $expense->expense_category_id = 4;
        $expense->amount = 100;
        $expense->save();


        $expense = new Expense();
        $expense->user_id = 1;
        $expense->title = "Monthly Rent";
        $expense->expense_category_id = 1;
        $expense->amount = 550;
        $expense->description = "Monthly apartment rent payment.";
        $expense->created_at = '2026-01-05';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 1;
        $expense->title = "Electricity Bill";
        $expense->expense_category_id = 2;
        $expense->amount = 85;
        $expense->description = null;
        $expense->created_at = '2026-02-10';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 1;
        $expense->title = "Internet Subscription";
        $expense->expense_category_id = 3;
        $expense->amount = 40;
        $expense->description = "Monthly home internet and router service.";
        $expense->created_at = '2026-03-12';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 1;
        $expense->title = "Health Insurance";
        $expense->expense_category_id = 4;
        $expense->amount = 120;
        $expense->description = null;
        $expense->created_at = '2026-04-15';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 1;
        $expense->title = "Groceries Shopping";
        $expense->expense_category_id = 5;
        $expense->amount = 95;
        $expense->description = "Weekly grocery shopping at supermarket.";
        $expense->created_at = '2026-05-18';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 1;
        $expense->title = "Dinner at Restaurant";
        $expense->expense_category_id = 6;
        $expense->amount = 45;
        $expense->description = null;
        $expense->created_at = '2026-06-20';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 1;
        $expense->title = "Fuel";
        $expense->expense_category_id = 7;
        $expense->amount = 70;
        $expense->description = "Fuel refill for personal car.";
        $expense->created_at = '2026-07-22';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 1;
        $expense->title = "Cleaning Supplies";
        $expense->expense_category_id = 8;
        $expense->amount = 30;
        $expense->description = null;
        $expense->created_at = '2026-08-25';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 1;
        $expense->title = "Gym Membership";
        $expense->expense_category_id = 9;
        $expense->amount = 40;
        $expense->description = "Monthly gym membership fee.";
        $expense->created_at = '2026-09-27';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 1;
        $expense->title = "New Shoes";
        $expense->expense_category_id = 10;
        $expense->amount = 110;
        $expense->description = null;
        $expense->created_at = '2026-10-29';
        $expense->save();
        
        /* ---------- USER 2 ---------- */
        
        $expense = new Expense();
        $expense->user_id = 2;
        $expense->title = "Apartment Rent";
        $expense->expense_category_id = 1;
        $expense->amount = 480;
        $expense->description = null;
        $expense->created_at = '2026-02-02';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 2;
        $expense->title = "Water & Utilities";
        $expense->expense_category_id = 2;
        $expense->amount = 60;
        $expense->description = "Monthly utility bills including water.";
        $expense->created_at = '2026-02-05';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 2;
        $expense->title = "Phone Plan";
        $expense->expense_category_id = 3;
        $expense->amount = 35;
        $expense->description = null;
        $expense->created_at = '2026-01-07';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 2;
        $expense->title = "Car Insurance";
        $expense->expense_category_id = 4;
        $expense->amount = 90;
        $expense->description = "Quarterly car insurance payment.";
        $expense->created_at = '2026-03-10';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 2;
        $expense->title = "Groceries";
        $expense->expense_category_id = 5;
        $expense->amount = 120;
        $expense->description = null;
        $expense->created_at = '2026-04-12';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 2;
        $expense->title = "Lunch Outside";
        $expense->expense_category_id = 6;
        $expense->amount = 25;
        $expense->description = "Quick lunch during work break.";
        $expense->created_at = '2026-05-14';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 2;
        $expense->title = "Public Transport";
        $expense->expense_category_id = 7;
        $expense->amount = 40;
        $expense->description = null;
        $expense->created_at = '2026-06-16';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 2;
        $expense->title = "Laundry Supplies";
        $expense->expense_category_id = 8;
        $expense->amount = 22;
        $expense->description = null;
        $expense->created_at = '2026-07-18';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 2;
        $expense->title = "Pharmacy";
        $expense->expense_category_id = 9;
        $expense->amount = 35;
        $expense->description = "Basic medicines and vitamins.";
        $expense->created_at = '2026-08-20';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 2;
        $expense->title = "Clothes Shopping";
        $expense->expense_category_id = 10;
        $expense->amount = 95;
        $expense->description = null;
        $expense->created_at = '2026-09-22';
        $expense->save();
        
        /* ---------- USER 3 ---------- */
        
        $expense = new Expense();
        $expense->user_id = 3;
        $expense->title = "Mortgage Payment";
        $expense->expense_category_id = 1;
        $expense->amount = 620;
        $expense->description = null;
        $expense->created_at = '2026-03-01';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 3;
        $expense->title = "Electricity & Gas";
        $expense->expense_category_id = 2;
        $expense->amount = 95;
        $expense->description = "Monthly energy bills.";
        $expense->created_at = '2026-04-04';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 3;
        $expense->title = "Internet & Phone";
        $expense->expense_category_id = 3;
        $expense->amount = 55;
        $expense->description = null;
        $expense->created_at = '2026-05-06';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 3;
        $expense->title = "Health Checkup";
        $expense->expense_category_id = 9;
        $expense->amount = 150;
        $expense->description = "Annual medical examination.";
        $expense->created_at = '2026-06-08';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 3;
        $expense->title = "Online Course";
        $expense->expense_category_id = 11;
        $expense->amount = 120;
        $expense->description = null;
        $expense->created_at = '2026-01-10';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 3;
        $expense->title = "Cinema Tickets";
        $expense->expense_category_id = 12;
        $expense->amount = 30;
        $expense->description = "Weekend movie night.";
        $expense->created_at = '2026-07-12';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 3;
        $expense->title = "Loan Repayment";
        $expense->expense_category_id = 13;
        $expense->amount = 200;
        $expense->description = null;
        $expense->created_at = '2026-08-15';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 3;
        $expense->title = "ETF Investment";
        $expense->expense_category_id = 14;
        $expense->amount = 300;
        $expense->description = "Monthly ETF investment contribution.";
        $expense->created_at = '2026-09-18';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 3;
        $expense->title = "Birthday Gift";
        $expense->expense_category_id = 15;
        $expense->amount = 70;
        $expense->description = null;
        $expense->created_at = '2026-10-20';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 3;
        $expense->title = "Unexpected Repair";
        $expense->expense_category_id = 16;
        $expense->amount = 90;
        $expense->description = "Minor home repair expenses.";
        $expense->created_at = '2026-11-22';
        $expense->save();
        
        /* ---------- USER 4 ---------- */
        
        $expense = new Expense();
        $expense->user_id = 4;
        $expense->title = "Room Rent";
        $expense->expense_category_id = 1;
        $expense->amount = 400;
        $expense->description = null;
        $expense->created_at = '2026-01-01';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 4;
        $expense->title = "Mobile Internet";
        $expense->expense_category_id = 3;
        $expense->amount = 25;
        $expense->description = "Monthly mobile data plan.";
        $expense->created_at = '2026-02-03';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 4;
        $expense->title = "Fast Food";
        $expense->expense_category_id = 6;
        $expense->amount = 20;
        $expense->description = null;
        $expense->created_at = '2026-03-05';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 4;
        $expense->title = "Bus Ticket";
        $expense->expense_category_id = 7;
        $expense->amount = 30;
        $expense->description = null;
        $expense->created_at = '2026-04-07';
        $expense->save();
        
        $expense = new Expense();
        $expense->user_id = 4;
        $expense->title = "Gaming Subscription";
        $expense->expense_category_id = 12;
        $expense->amount = 15;
        $expense->description = "Monthly entertainment subscription.";
        $expense->created_at = '2026-05-10';
        $expense->save();
        
    }
}
