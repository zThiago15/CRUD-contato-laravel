<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoModel extends Model
{
    use HasFactory;

    protected $table = "tbContato";

    public $timestamps = false;
    protected $fillable = ['Nome', 'email', 'assunto', 'mensagem'];

    protected $primaryKey = "idContato";
}
