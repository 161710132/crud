@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Barang Sekolah
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('data3.update',$data3->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_mainan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mainan</label>	
			  			<input type="text" name="nama_mainan" class="form-control" value="{{ $data3->nama_mainan }}"  required>
			  			@if ($errors->has('nama_mainan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_mainan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kode') ? ' has-error' : '' }}">
			  			<label class="control-label">Kode</label>	
			  			<input type="text" name="kode" class="form-control" value="{{ $data3->kode }}"  required>
			  			@if ($errors->has('kode'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $data3->harga }}"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection