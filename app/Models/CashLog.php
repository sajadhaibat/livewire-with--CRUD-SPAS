<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashLog extends Model
{
    use HasFactory;
    protected $table = 'cash_logs';

    public function payer(){
        return $this->belongsTo(Employee::class, 'receiver_id');
    }

    public function approver(){
        return $this->belongsTo(Employee::class, 'approve_id');
    }
}
