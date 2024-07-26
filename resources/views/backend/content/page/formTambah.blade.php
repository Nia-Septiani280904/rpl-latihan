@extends('backend/layout/main')
@section('content')

    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Form Tambah Page</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{route('page.prosesTambah')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- JUDUL BERITA --}}
                    <div class="mb-3">
                        <label class="form-label">Judul Page</label>
                        <input type="text" name="judul_page" value="{{old('judul_page')}}" class="form-control @error('judul_page') is-invalid @enderror">
                        @error('judul_page')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>
                    
                    
                    {{-- ISI BERITA --}}
                    <div class="mb-3">
                        <label class="form-label">Isi Page</label>
                        <textarea id="editor" name="isi_page" class="form-control @error('isi_page') is-invalid @enderror">{{old('isi_page')}}</textarea>
                        @error('isi_page')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{route('page.index')}}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

@endsection

<script>
    function tampilkanpreview(input, idpreview) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById(idpreview).src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
