<?php

namespace App\Exports;

use App\Models\Expense;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ExpensesExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return Expense::where('user_id', auth()->id())
                      ->select('title', 'amount', 'description', 'created_at')
                      ->get()->sortByDesc('created_at');
    }

    public function map($expenses): array
    {
        return [
            $expenses->title,
            $expenses->amount,
            $expenses->description,
            $expenses->created_at->format("Y.m.d"),
        ];
    }

    public function headings(): array
    {   
        return ['Title', 'Amount', 'Description', 'Date'];
    }
}
