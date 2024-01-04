@extends('../layout/' . $layout)

@section('subhead')
    <title>Create Data With API</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Tambahkan Data Menu Makanan</h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-warning">{{ $error }}</div>
                @endforeach
            @endif

            <!-- BEGIN: Form Layout -->
            <form action="{{ route('dashboardstore') }}" method="POST">
                @csrf
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">Nama menu</label>
                        <input id="nama_menu" type="text" class="form-control w-full" name="nama_menu">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Harga</label>
                        <input id="harga" type="text" class="form-control w-full" name="harga">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Deskripsi</label>
                        <input id="deskripsi" type="text" class="form-control w-full" name="deskripsi">
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
