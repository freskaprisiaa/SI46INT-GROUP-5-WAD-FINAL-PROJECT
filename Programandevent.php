<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramAndEvent extends Model
{
    use HasFactory;

    protected $table = 'programandevent';

    protected $fillable = [
        'title', 'description', 'event_date', 'location', 'form_link', 'status'
    ];
}