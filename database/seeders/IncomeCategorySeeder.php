<?php

namespace Database\Seeders;

use App\Models\IncomeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncomeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $income_category = new IncomeCategory();
        $income_category->name = "Salary";
        $income_category->save();

        $income_category = new IncomeCategory();
        $income_category->name = "Bonus";
        $income_category->save();

        $income_category = new IncomeCategory();
        $income_category->name = "Freelance / Side Hustle";
        $income_category->save();

        $income_category = new IncomeCategory();
        $income_category->name = "Dividends";
        $income_category->save();

        $income_category = new IncomeCategory();
        $income_category->name = "Interests";
        $income_category->save();

        $income_category = new IncomeCategory();
        $income_category->name = "Rental Income";
        $income_category->save();

        $income_category = new IncomeCategory();
        $income_category->name = "Selling Items";
        $income_category->save();

        $income_category = new IncomeCategory();
        $income_category->name = "Government Support";
        $income_category->save();
    }
}
