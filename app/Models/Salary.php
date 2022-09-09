<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'date'];

    public function employee(){
        return $this->belongsTo(Salary::class);
    }

}
