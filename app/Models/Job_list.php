<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_list extends Model
{
    use HasFactory;
    protected $fillable = ['invoice_id','title','amount', 'description'];
}
