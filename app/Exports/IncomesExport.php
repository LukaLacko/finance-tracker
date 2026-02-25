<?php

namespace App\Exports;

use App\Models\Income;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class IncomesExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Income::where("user_id", auth()->id())->select('title', 'amount', 'description', 'created_at')->get()->sortByDesc('created_at');
    }

    public function map($income): array
    {
        return[
            $income->title,
            $income->amount,
            $income->description,
            $income->created_at->format("Y.m.d")
        ];
    }

    public function headings(): array
    {
        return ['Title', 'Amount', 'Description', 'Date'];
    }
}
