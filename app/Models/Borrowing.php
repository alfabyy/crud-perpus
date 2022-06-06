<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;
    protected $table = 'borrowing';
    protected $fillable = ['nis_peminjam','nama_peminjam','judul_buku','tgl_pinjam','tgl_kembali','ket'];
}
