<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $table = 'participants';
<<<<<<< HEAD
=======

    protected $fillable = [
        'user_id',
        'event_id',
        'attending',
        'reason_for_not_attending',
      ];
>>>>>>> ecb0711b0d991e0567f72bdf1cee0b1593c36e61
}
