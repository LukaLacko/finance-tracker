<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = [
        'user_id',
        'expense_category_id',
        'amount',
        'period',
    ] ;

    public function category()
    {
        return $this->belongsTo(ExpenseCategory ::class, 'expense_category_id');
    }
}
