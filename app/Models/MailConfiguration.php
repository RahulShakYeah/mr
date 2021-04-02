<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailConfiguration extends Model
{
    use HasFactory;

    protected $fillable = [
        "driver",
        "host",
        "port",
        "encryption",
        "user_name" ,
        "password",
        "sender_name",
        "sender_email"
    ];
}
