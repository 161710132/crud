@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Sepatu
			  	<div class="panel-title pull-right"><a href="{{ route('data1.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>jenisSepatu</th>
					  <th>ukuran</th>
					  <th>harga</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($data1 as $saya1)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $saya1->jenisSepatu }}</td>
				    	<td><p>{{ $saya1->ukuran }}</p></td>
				    	<td><p>{{ $saya1->harga }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('data1.edit',$saya1->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('data1.show',$saya1->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('data1.destroy',$saya1->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection