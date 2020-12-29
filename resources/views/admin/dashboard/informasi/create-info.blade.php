@extends('admin/section/app')
@section('stylesheets')
<style>
</style>
@endsection

@section('content')
<div class="content-wrapper">
    {{--<link rel="stylesheet" href="{{asset('css/admin_side.css')}}" type="text/css"/>--}}
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TAMBAHKAN INFORMASI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Informasi</li>
              <li class="breadcrumb-item text-blue"><a href="{{ route('admin/create/info') }}">Tambahkan Informasi</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          @if ($message = Session::get('sukses'))
            <div class="alert alert-success">
                {{$message}}
            </div>
          @elseif($message = Session::get('gagal'))
            <div class="alert alert-danger">
                {{$message}}
            </div>
          @endif
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
                <form role="form" action="{{ route('admin/create/info/process') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row px-3">
                            <label class="mb-1"> <h6 class="mb-0 text-sm text-bold">Judul</h6></label>
                            <input class="form-control" type="text" name="nama" placeholder="Masukkan Judul Informasi" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row px-3">
                            <label class="mb-1"> <h6 class="mb-0 text-sm text-bold">Deskripsi Informasi</h6></label>
                            <textarea type="text" name="deskripsi" class="form-control" id="inputDescription" placeholder="Deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row px-3">
                            <label class="mb-1"> <h6 class="mb-0 text-sm text-bold">Gambar</h6></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" id="inputGroupFileAddon03"><i class="fas fa-file-upload"></i>
                                    </button>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" accept="image/png" id="gambar" aria-describedby="inputGroupFileAddon03">
                                    <label class="custom-file-label"  id="idgambar" for="gambar">Upload Gambar</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col px-3">
                            <label class="mb-1"> <h6 class="mb-0 text-sm text-bold">Tipe Informasi: </h6></label><br>
                            <select id="tipe" name="tipe">
                                <option value="Artikel">Artikel</option>
                                <option value="Kegiatan">Kegiatan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-primary text-center">Create</button> </div>
                </form>
            </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection

@section('scripts')
<script>
$(document).ready(function(){
  $('#gambar').change(function(e2){
		var gambar = e2.target.files[0].name;
        // dd(gambar);
		$('#idgambar').html(gambar);
	});
});
</script>
@endsection
