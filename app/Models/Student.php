<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model{
    use HasFactory;
    protected $table = 'students'; // espesificação de qual tabel esta usando
    protected $primaryKey = 'id';// a chave primaria da tabela
    protected $fillable = ['name', 'address', 'mobile']; // quais colunas vão ser preenchidas
}
