@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
		<div class="panel-heading">Data Barang Sekolah
			<div class="panel-title pull-right"><a href="{{ route('data2.index') }}">Back</a>
			</div>
		</div>
			<div class="panel-body">
				<form action="{{ route('data2.store') }}" method="post" >
					{{ csrf_field()}}
					<div class="form-group {{ $errors->has('nama_barang') ? ' has-error':''}}">
					<label class="control-label">Nama Barang</label>
					<input type="text"  class="form-control" name="nama_barang" required>
					@if ($errors->has('nama_barang'))
						<span class="help-block">
							<strong>{{ $errors->first('nama_barang') }}</strong>
						</span>
						@endif
						</div>

						<div class="form-group {{ $errors->has('jumlah') ? ' has-error':'' }}">
						<label class="control-label">Jumlah</label>
						<input type="text"  class="form-control" name="jumlah" required>
						@if ( $errors->has('jumlah'))
							<span class="help-block">
								<strong>{{ $errors->first('jumlah') }}</strong>			
							</span>
							@endif
							</div>

							<div class="form-group {{ $errors->has('harga') ? ' has-error':'' }}">
						<label class="control-label">Harga</label>
						<input type="text"  class="form-control" name="harga" required>
						@if ( $errors->has('harga'))
							<span class="help-block">
								<strong>{{ $errors->first('harga') }}</strong>			
							</span>
							@endif
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Tambah</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				</div>
				@endsection

