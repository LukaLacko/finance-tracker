<?php

namespace Database\Seeders;

use App\Models\Expense;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserSeeder::class,    
        ]);    

        $this->call([
            ExpenseCategorySeeder::class,
        ]);
        
        $this->call([
            IncomeCategorySeeder::class,
        ]);
    
    
        $this->call ([
            ExpenseSeeder::class,
        ]);

        $this->call ([
            IncomeSeeder::class,
        ]);
    
    
    }



}
