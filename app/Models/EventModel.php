<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    use HasFactory;

    protected $table = 'events';

    // protected $fillable = [
    //     'tittle',
    //     'vanue',
    //     'date',
    //     'organizer_id',
    //     'created_at',
    //     'updated_at',
    // ];
}
