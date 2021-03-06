@extends('admin.admin_template')

@section('content')

<section class="content-header">
	<h1>QUOTE</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}/dokumentasi"><i class="fa fa-picture-o"></i> Dokumentasi</a></li>
		<li class="active">Quote Index</li>
	</ol>
</section>

<div class="box">
	<div class"box-header" style="margin-top:10px;">
		<div class="col-sm-12">
			<a class="btn btn-success" href="{{ url('/') }}/quote_create" style="float: right;">TAMBAH</a>
		</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-hover dataTable">
				<thead>
						<tr>
            <th>No.</th>
						<th>Quote</th>
						<th>Aksi</th>
						</tr>
				</thead>

				<tbody>
	            @foreach ($quotes as $quote_list)
	                <tr>
                  <td>{{ $quote_list->id }}</td>
				          <td>{{ $quote_list->quote }}</td>
                  <td>
										<a class="btn btn-warning btn-xs" href="{{ url('/') }}/quote_edit/{{ $quote_list -> id }}">EDIT</a>
										<a class="btn btn-danger btn-xs" href="{{ url('/') }}/quote_delete/{{ $quote_list -> id }}">HAPUS</a>
                  </td>
	                </tr>
	            @endforeach
	        </tbody>
				</table>
		</div>
</div>
@stop

@extends('admin.footapp')
