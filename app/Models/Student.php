<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory; // serve para colocar dados fictisios no banco
    protected $table = "students";
    protected $primarykey = "id";
    protected $fillable = ["name", "address","mobile"];
}
