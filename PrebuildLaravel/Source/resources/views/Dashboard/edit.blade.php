@extends('../layout/' . $layout)

@section('subhead')
    <title>Edit Data With API</title>
@endsection
@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Tambah Data Menu Makanan</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
        @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('dashboardupdate',$data['id']) }}" method='POST'>
            @csrf
            @method("put")
            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">Nama Menu</label>
                    <input id="nama_menu" type="text" class="form-control w-full" name="nama_menu" 
                    value="{{ $data['nama_menu'] }}" >
                </div>
                <div class="mt-3">
                <div>
                    <label for="crud-form-1" class="form-label">Harga </label>
                    <input id="harga" type="text" class="form-control w-full" name="harga" 
                    value="{{ $data['harga'] }}" >
                </div>
                <div class="mt-3">
                <div>
                    <label for="crud-form-1" class="form-label">Deskripsi </label>
                    <input id="deskripsi" type="text" class="form-control w-full" name="deskripsi" 
                    value="{{ $data['deskripsi'] }}" >
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