@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - Rekayasa Web</title>
@endsection
@section('subcontent')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="style.css" class="css">
    <!-- FONT AWESOME LINK USING BOXICON -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

   <style> di bagian <head> HTML:
 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

 

        .wrapper h1 {
            font-size: 3em;
            margin: 25px;
        }

        .content-box {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            width: 1000px;
            margin-top: 30px;
        }

        .card {
            min-height: 220px;
            width: 320px;
            padding: 30px;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: #2D3250;
            margin: 10px 4px;
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.2);
        }

        .card i {
            margin: 20px;
            color: #581ed6;
        }

        .card h2 {
            margin-bottom: 12px;
            font-weight: 400;
            text-align: center;
        }

        .card p {
            color: #6c757d;
            text-align: center;
        }

        .card:hover i,
        .card:hover p {
            color: #fff;
        }

        .card:hover h2 {
            font-weight: 600;
        }

        .card:nth-child(1):hover {
            background: linear-gradient(45deg,
                rgba(88, 70, 159, 0.7) 0% ,
                rgba(136, 113, 199, 0.7)100% ) ,
                url('bg.jpg');
            background-size: cover;
        }

        .card:nth-child(2):hover {
            background: linear-gradient(45deg,
                rgba(88, 70, 159, 0.7) 0% ,
                rgba(136, 113, 199, 0.7)100% ) ,
                url('bg2.jpg');
            background-size: cover;
        }

        .card:nth-child(3):hover {
            background: linear-gradient(45deg,
                rgba(88, 70, 159, 0.7) 0% ,
                rgba(136, 113, 199, 0.7)100% ) ,
                url('bg3.jpg');
            background-size: cover;
        }

        .card:nth-child(4):hover {
            background: linear-gradient(45deg,
                rgba(88, 70, 159, 0.7) 0% ,
                rgba(136, 113, 199, 0.7)100% ) ,
                url('bg4.jpg');
            background-size: cover;
        }

        .card:nth-child(5):hover {
            background: linear-gradient(45deg,
                rgba(88, 70, 159, 0.7) 0% ,
                rgba(136, 113, 199, 0.7)100% ) ,
                url('bg5.jpg');
            background-size: cover;
        }

        .card:nth-child(6):hover {
            background: linear-gradient(45deg,
                rgba(88, 70, 159, 0.7) 0% ,
                rgba(136, 113, 199, 0.7)100% ) ,
                url('bg2.jpg');
            background-size: cover;
        }

        @media (max-width: 991px) {
            .wrapper {
                padding: 25px;
            }

            .wrapper h1 {
                font-size: 2.5em;
                font-weight: 600;
            }

 

            .card {
                min-width: 300px;
                margin: 10px auto;
            }
        }
    </style>
</head>
<body>

    <div class="wrapper">
    <h2 style="text-align: center;"><b>𝑺𝑬𝑳𝑨𝑴𝑨𝑻 𝑫𝑨𝑻𝑨𝑵𝑮 𝑨𝑫𝑴𝑰𝑵 𝑲𝑨𝑴𝑰</b></h2>
    <P style="text-align: center;">Ingatlah untuk selalu merapkan</P>

             <div class="content-box">
                <div class="card">
                    <i class="bx bx-bar-chart-alt bx-md"></i>
                    <h2>Marketing Price</h2>
                  <p>Kelola harga sesuai dengan persaingan pasar untuk dapat bersaing maksimal. </p>

                </div>
                <div class="card">
                    <i class="bx bx-laptop bx-md"></i>
                    <h2>Kelola Data</h2>
                   <p>Masukan data produk makanan terjual dengan benar aktual.</p>
                         
                </div>
                <div class="card">
                    <i class='bx bx-user bx-md'></i>

                    <h2>Kepuasan Pelanggan</h2>
                <p>Utamakan senyum, salam, sapa untuk pelanggan karna pelanggan adalah keluarga.</p>
                         
                </div>
             </div>
    </div>
    


<h2 class="intro-y text-lg font-medium mt-10">List Data Menu</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{ route('dashboardcreate') }}"><button class="btn btn-primary shadow-md mr-2">
                Tambah Menu </button></a>
            <div class="hidden md:block mx-auto text-slate-500"></div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            </div>
        </div>
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                @if(session('success'))
                {{session('success')}}
                @endif
                <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">ID</th>
                        <th class="whitespace-nowrap">Nama Menu</th>
                        <th class="text-center whitespace-nowrap">Harga</th>
                        <th class="text-center whitespace-nowrap">Deskripsi</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $value)
                        <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                    {{ $value['id'] }} 
                                    </div>
                                </div>
                            </td>
                            <td>
                               
                                <div class="text-slate-500">{{ $value['nama_menu'] }}</div>
                            </td>
                            <td class="text-center">{{ $value['harga'] }}</td>
                            <td class="">
                                <div class="flex items-center justify-center {{ $value['deskripsi'] }}">
                                     {{ $value['deskripsi'] }}
                                </div>
                            </td>
                            <td class="table-report__action w-56">
                                
                                    <form action="{{ route('dashboardestroy' , $value['id']) }}" method='POST'>
                                    @csrf
                                    @method("delete")
                                    <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="{{ route('dashboardedit',$value['id']) }}">
                                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                    </a>
                                    <button class="flex items-center text-danger" type="submit"
                                    data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                        </button>
                                   
                                </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br><br><br><br>
</body>
</html>













@endsection