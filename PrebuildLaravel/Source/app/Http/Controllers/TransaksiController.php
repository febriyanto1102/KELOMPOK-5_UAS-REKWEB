<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        // return view('Dashboard.index', [
        // ]);
    
        // Ini adalah scrip unutk melakukan request data dari Rekweb API yang telah kita buat
        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");
    
        $headers = [];
        $headers[] = "Authorization: Basic {$credentials}";
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'Cache-Control: no-cache';
    
        // Initializing curl
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,"127.0.0.2:8001/transaksi");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
        // Executing curl
        $response = curl_exec($curl);
    
        // Checking if any error occurs during request or not
        if($e = curl_error($curl)) {
             echo $e;
        } else {
             // Decoding JSON data
             $decodedData =
                json_decode($response, true);
            // Outputting JSON data in
            // Decoded form
            //  var_dump($decodedData);   
            $data = $decodedData;
        }
    
        // Closing curl
        curl_close($curl);
        return view('Transaksi.index', ["data"=>$data]);
       }

    public function create()
    {
        return view('Transaksi.create', [
            // Sesuaikan data yang ingin Anda kirim ke view
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tgl_transaksi' => 'required',
            'pelangan' => 'required',
            'nama_menu' => 'required',
            'qty' => 'required',
            'harga' => 'required',
            'total_harga'=> 'required',
            'metode_pembayaran' => 'required',
        ]);

        $postData = [
            "tgl_transaksi" => $request->input('tgl_transaksi'),
            "pelangan" => $request->input('pelangan'),
            "nama_menu" => $request->input('nama_menu'),
            "qty" => $request->input('qty'),
            "harga" => $request->input('harga'),
            "total_harga" => $request->input('total_harga'),
            "metode_pembayaran" => $request->input('metode_pembayaran'),
        ];

        $data_string = json_encode($postData);

        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [
            "Authorization: Basic {$credentials}",
            'Content-Type: application/json',
            'Cache-Control: no-cache',
            'Content-Length: ' . strlen($data_string),
        ];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://127.0.0.2:8001/transaksi");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

        $response = curl_exec($curl);

        if ($e = curl_error($curl)) {
            echo $e;
        }

        curl_close($curl);
        return redirect()->to('/transaksi')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [
            "Authorization: Basic {$credentials}",
            'Content-Type: application/x-www-form-urlencoded',
            'Cache-Control: no-cache',
        ];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://127.0.0.2:8001/transaksi/detail/$id");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        if ($e = curl_error($curl)) {
            echo $e;
        } else {
            $decodedData = json_decode($response, true);
            $data = $decodedData;
        }

        curl_close($curl);
        return view('Transaksi.edit', ["data" => $data]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tgl_transaksi' => 'required',
            'pelangan' => 'required',
            'nama_menu' => 'required',
            'qty' => 'required',
            'harga' => 'required',
            'total_harga' => 'required',
            'metode_pembayaran' => 'required',
        ]);

        $postData = [
            "tgl_transaksi" => $request->input('tgl_transaksi'),
            "pelangan" => $request->input('pelangan'),
            "nama_menu" => $request->input('nama_menu'),
            "qty" => $request->input('qty'),
            "harga" => $request->input('harga'),
            "total_harga" => $request->input('total_harga'),
            "metode_pembayaran" => $request->input('metode_pembayaran'),
        ];

        $data_string = json_encode($postData);

        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [
            "Authorization: Basic {$credentials}",
            'Content-Type: application/json',
            'Cache-Control: no-cache',
            'Cache-Length: ' . strlen($data_string),
        ];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://127.0.0.2:8001/transaksi/update/$id");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

        $response = curl_exec($curl);

        if ($e = curl_error($curl)) {
            echo $e;
        }

        curl_close($curl);
        return redirect()->to('/transaksi')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [
            "Authorization: Basic {$credentials}",
            'Content-Type: application/json',
            'Cache-Control: no-cache',
            'Content-Length',
        ];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://127.0.0.2:8001/transaksi/delete/$id");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        if ($e = curl_error($curl)) {
            echo $e;
        }

        curl_close($curl);
        return redirect()->to('/transaksi')->with('success', 'Data Berhasil Dihapus');
    }
}
