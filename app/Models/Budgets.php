<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budgets extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','ctgr_id','amount','start_date','end_date'];

    public function transactions () {
        return $this->hasMany(Transactions::class);
    }
}
