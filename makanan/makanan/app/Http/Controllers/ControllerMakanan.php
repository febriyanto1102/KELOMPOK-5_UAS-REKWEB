<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Makanan;

class ControllerMakanan extends  BaseController 
{
    public function create(Request $request)
    {
        $data = $request->all();
        $makanan = Makanan::create($data);

        return response()->json($makanan);
    }
    public function index()
    {
        $makanan = Makanan::all();
        return response()->json($makanan);
    }
    public function detail($id){
        $makanan = Makanan::find($id);
        return response()->json($makanan);
    }
    public function update(Request $request, $id)
    {
        $makanan = Makanan::whereId($id)->update([ 
            'nama_menu' => $request->input('nama_menu'),
            'harga' => $request->input('harga'),
            'deskripsi' => $request->input('deskripsi'),
        ]);
    
        if($makanan){
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil diupdate',
                'data' => $makanan
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
        $makanan = Makanan::whereId($id)->first();
        $makanan->delete();

        if($makanan)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil di hapus'
            ],200);
        }
    }
}