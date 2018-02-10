@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Barang Sekolah
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Barang</label>	
			  			<input type="text" name="nama_barang" class="form-control" value="{{ $data2->nama_barang }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah</label>	
			  			<input type="text" name="jumlah" class="form-control" value="{{ $data2->jumlah }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $data2->harga }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection