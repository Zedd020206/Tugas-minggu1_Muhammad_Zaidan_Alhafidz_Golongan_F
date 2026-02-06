<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class BiodataMahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nama',
        'nim',
        'jurusan',
        'email'
    ];
}