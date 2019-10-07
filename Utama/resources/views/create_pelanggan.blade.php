@extends('layout')

@section('judul')
	PELANGGAN PLN BARU
@stop

@section('isi')
@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>
					{{$error}}
				</li>
			@endforeach
		</ul>
	</div>
@endif
{!! Form::open(['url'=>'pelanggan/tambah'])!!}
	<div class="row">
		<div class="col-md-3">
			<label for="nama">Nama</label>	
		</div>
		<div class="col-md-9">
			{!!Form::text('nama', null, ['class'=>'form-control'])!!}
		</div> 
	</div>
	<div class="row">
		<div class="col-md-3">
			<label for="alamat">Alamat</label>	
		</div>
		<div class="col-md-9">
			{!!Form::text('alamat', null, ['class'=>'form-control'])!!}
		</div> 
	</div>
	<div class="row">
		<div class="col-md-3">
			<label for="tanggal_lahir">Tanggal Lahir</label>	
		</div>
		<div class="col-md-9">
			{!!Form::text('tanggal_lahir', null, ['class'=>'form-control'])!!}
		</div> 
	</div>
	<div class="row">
		<div class="col-md-3">
			<label for="umur">Umur</label>	
		</div>
		<div class="col-md-9">
			{!!Form::text('umur', null, ['class'=>'form-control'])!!}
		</div> 
	</div>
	<button type="submit" class="btn btn-success">Save</button>
	<button type="button" class="btn btn-danger" onclick="location.href='/pelanggan';">Cancel</button>
	{!!Form::close()!!}
@stop