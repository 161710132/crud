@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Sepatu
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Jenis Sepatu</label>	
			  			<input type="text" name="jenisSepatu" class="form-control" value="{{ $data1->jenisSepatu }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('ukuran') ? ' has-error' : '' }}">
			  			<label class="control-label">Ukuran</label>	
			  			<input type="text" name="ukuran" class="form-control" value="{{ $data1->ukuran }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $data1->harga }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection