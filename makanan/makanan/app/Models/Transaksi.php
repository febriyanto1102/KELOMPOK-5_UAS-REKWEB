<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Transaksi extends Model
{
    protected $table = 'table_transaksi';

    protected $fillable = [ 'tgl_transaksi', 'pelangan', 'nama_menu', 'qty', 'harga', 'total_harga', 'metode_pembayaran'];
}