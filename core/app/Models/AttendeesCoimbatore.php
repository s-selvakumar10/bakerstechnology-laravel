<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendeesCoimbatore extends Model
{
    use HasFactory;
   
    protected $connection =  'old_mysql';
    public $timestamps =  false;
    protected $guarded = [];
    protected $table = 'attendees_coimbatore';
}
