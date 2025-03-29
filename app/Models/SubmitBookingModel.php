<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitBookingModel extends Model
{
    use HasFactory;

    protected $table = 'bookings'; // Specify the table name if it's different from the model name
    // protected $fillable = ['date', 'note', 'selectedDays', 'selectedTime'];
}
