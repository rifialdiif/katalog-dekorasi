<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticable
{
    use HasFactory, Notifiable;
    protected $table = 'admin';
    protected $primaryKey = 'AdminID';
    protected $fillable = ['Username', 'Password', 'Email'];
    protected $hidden = ['Password'];
    public $timestamps = false;
}
