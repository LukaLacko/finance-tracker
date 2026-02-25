<?php

namespace App\Exports;

use App\Models\Expense;
use App\Models\Income;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class TransactionsExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $expenses = Expense::where("user_id", auth()->id())->selectRaw('"Expense" as type, title, amount, description, created_at')->get();
        $income = Income::where("user_id", auth()->id())->selectRaw('"Income" as type, title, amount, description, created_at')->get();

        $transactions = $income->concat($expenses);
        return $transactions->sortByDesc('created_at');
    }

    public function map($transactions): array    
    {   
        $isIncome = $transactions->type === 'Income';
        return [
            $transactions->title,
            ($isIncome ? '+' : '-'). $transactions->amount,
            $transactions->description,
            $transactions->created_at->format('Y.m.d')
        ];
    }

    public function headings(): array
    {
        return ['Title', 'Amount', 'Description', 'Date'];
    }
}
