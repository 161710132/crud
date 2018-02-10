@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
		<div class="panel-heading">Data Sepatu
			<div class="panel-title pull-right"><a href="{{ route('data1.index') }}">Back</a>
			</div>
		</div>
			<div class="panel-body">
				<form action="{{ route('data1.store') }}" method="post" >
					{{ csrf_field()}}
					<div class="form-group {{ $errors->has('jenisSepatu') ? ' has-error':''}}">
					<label class="control-label">Jenis Sepatu</label>
					<input type="text"  class="form-control" name="jenisSepatu" required>
					@if ($errors->has('jenisSepatu'))
						<span class="help-block">
							<strong>{{ $errors->first('jenisSepatu') }}</strong>
						</span>
						@endif
						</div>

						<div class="form-group {{ $errors->has('ukuran') ? ' has-error':'' }}">
						<label class="control-label">Ukuran</label>
						<input type="text"  class="form-control" name="ukuran" required>
						@if ( $errors->has('ukuran'))
							<span class="help-block">
								<strong>{{ $errors->first('ukuran') }}</strong>			
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

