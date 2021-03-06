@extends('admin.admin_template')

@section('content')

@if (count ($errors) > 0)
    <div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</div>
@endif

<h2>Tambah Dokumentasi</h2>

<form class="{{$errors->has('img')?'has-error':''}}" action="{{ url('/') }}/dokumentasi_store" method="post" enctype="multipart/form-data">

	<b for="img">Upload Foto</b>
	<input style="margin-left:10px;" type="file" name="input_foto" id="img" multiple="multilple"><br><br>

	<b>Judul Foto</b> (maximal 100 karakter)
	<textarea class="form-control" style="height:50px; width:400px;" type="text" name="input_judulfoto"></textarea><br><br><br>

	<b>Tanggal Foto Foto</b>
	<textarea class="form-control" style="height:50px; width:400px;" type="text" name="input_tanggalfoto"></textarea><br><br><br>

	<b>Keterangan Foto</b> (maximal 300 karakter)
	<textarea class="form-control" style="height:200px; width:700px;" type="text" name="input_keteranganfoto"></textarea><br><br><br>

	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}

</form>

@stop

@extends('admin.footapp')
