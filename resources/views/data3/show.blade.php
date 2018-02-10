@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Barang Mainan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Mainan</label>	
			  			<input type="text" name="nama_mainan" class="form-control" value="{{ $data3->nama_mainan }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('kode') ? ' has-error' : '' }}">
			  			<label class="control-label">Kode</label>	
			  			<input type="text" name="kode" class="form-control" value="{{ $data3->kode }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $data3->harga }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection