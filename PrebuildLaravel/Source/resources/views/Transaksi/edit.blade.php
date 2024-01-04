@extends('../layout/' . $layout)

@section('subhead')
    <title>Edit Data With API</title>
@endsection
@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Tambah Data  Transaksi</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
        @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('transaksiupdate',$data['id']) }}" method='POST'>
            @csrf
            @method("put")
            <div class="intro-y box p-5">
            <div>
                    <label for="crud-form-1" class="form-label">Tgl transaksi</label>
                    <input id="tgl_transaksi" type="text" class="form-control w-full" name="tgl_transaksi" 
                    value="{{ $data['tgl_transaksi'] }}" >
                </div>
                <div>
                    <label for="crud-form-1" class="form-label">Pelangan</label>
                    <input id="pelangan" type="text" class="form-control w-full" name="pelangan" 
                    value="{{ $data['pelangan'] }}" >
                </div>
                <div>
                    <label for="crud-form-1" class="form-label">Nama Menu</label>
                    <input id="nama_menu" type="text" class="form-control w-full" name="nama_menu" 
                    value="{{ $data['nama_menu'] }}" >
                </div>
                <div class="mt-3">
                <div>
                    <label for="crud-form-1" class="form-label">QTY</label>
                    <input id="qty" type="text" class="form-control w-full" name="qty" 
                    value="{{ $data['qty'] }}" >
                </div>
                <div class="mt-3">
                <div>
                    <label for="crud-form-1" class="form-label">Harga </label>
                    <input id="harga" type="text" class="form-control w-full" name="harga" 
                    value="{{ $data['harga'] }}" >
                </div>
                <div>
                    <label for="crud-form-1" class="form-label">Total Harga </label>
                    <input id="total_harga" type="text" class="form-control w-full" name="total_harga" 
                    value="{{ $data['total_harga'] }}" >
                </div>
                <div>
                    <label for="crud-form-1" class="form-label">Metode Pembayaran</label>
                    <input id="metode_pembayaran" type="text" class="form-control w-full" name="metode_pembayaran" 
                    value="{{ $data['metode_pembayaran'] }}" >
                </div>
                <div class="mt-3">
                <div class="text-right mt-5">
                    <button type="reset" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary w-24">Save</button>
                </div>
            </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection