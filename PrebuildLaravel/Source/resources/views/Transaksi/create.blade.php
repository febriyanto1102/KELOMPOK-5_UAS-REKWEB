@extends('../layout/' . $layout)

@section('subhead')
    <title>Create Data With API</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Tambahkan Data Transaksi</h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-warning">{{ $error }}</div>
                @endforeach
            @endif

            <!-- BEGIN: Form Layout -->
            <form action="{{ route('transaksistore') }}" method="POST">
                @csrf
                <div class="intro-y box p-5">
                <div>
                        <label for="crud-form-1" class="form-label">Tgl Transaksi</label>
                        <input id="tgl_transaksi" type="text" class="form-control w-full" name="tgl_transaksi">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">Pelangan</label>
                        <input id="pelangan" type="text" class="form-control w-full" name="pelangan">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">Nama menu</label>
                        <input id="nama_menu" type="text" class="form-control w-full" name="nama_menu">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">QTY</label>
                        <input id="qty" type="text" class="form-control w-full" name="qty">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Harga</label>
                        <input id="harga" type="text" class="form-control w-full" name="harga">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Total Harga</label>
                        <input id="total_harga" type="text" class="form-control w-full" name="total_harga">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">Metode Pembayaran</label>
                        <input id="metode_pembayaran" type="text" class="form-control w-full" name="metode_pembayaran">
                    </div>
                    <div class="mt-3">
                    <div class="text-right mt-5">
                        <button type="riset" class="btn btn-outline-secondary w-24 mr-2">Cancel</button> <!-- Increased margin to mr-2 -->
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

<!-- ... kode yang sudah ada ... -->

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
    <script>
        // Fungsi untuk menghitung total harga
        function calculateTotal() {
            // Ambil nilai harga dan qty dari input
            var harga = parseFloat(document.getElementById('harga').value) || 0;
            var qty = parseFloat(document.getElementById('qty').value) || 0;

            // Hitung total harga
            var totalHarga = harga * qty;

            // Isi nilai total harga ke input
            document.getElementById('total_harga').value = totalHarga.toFixed(2); // Menetapkan dua angka desimal
        }

        // Tambahkan event listener untuk memanggil fungsi saat nilai harga atau qty berubah
        document.getElementById('harga').addEventListener('input', calculateTotal);
        document.getElementById('qty').addEventListener('input', calculateTotal);
    </script>
@endsection

