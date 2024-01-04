<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class ControllerTransaksi extends  BaseController 
{
    public function create(Request $request)
    {
        $data = $request->all();
        $transaksi = Transaksi::create($data);

        return response()->json($transaksi);
    }
    public function index()
    {
        $transaksi = Transaksi::all();
        return response()->json($transaksi);
    }
    public function detail($id){
        $transaksi = Transaksi::find($id);
        return response()->json($transaksi);
    }
    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::whereId($id)->update([
            'tgl_transaksi' => $request->input('tgl_transaksi'), 
            'pelangan' => $request->input('pelangan'),
            'nama_menu' => $request->input('nama_menu'),
            'qty' => $request->input('qty'),
            'harga' => $request->input('harga'),
            'total_harga' => $request->input('total_harga'),
            'metode_pembayaran' => $request->input('metode_pembayaran'),
        ]);
    
        if($transaksi){
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil diupdate',
                'data' => $transaksi
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal diupdate',
            ],400);
        }
    }

    public function delete($id)
    {
        $transaksi = Transaksi::whereId($id)->first();
        $transaksi->delete();

        if($transaksi)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil di hapus'
            ],200);
        }
    }
}