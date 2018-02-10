@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Barang Mainan
			  	<div class="panel-title pull-right"><a href="{{ route('data3.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>nama_mainan</th>
					  <th>kode</th>
					  <th>harga</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($data3 as $saya3)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $saya3->nama_mainan }}</td>
				    	<td><p>{{ $saya3->kode }}</p></td>
				    	<td><p>{{ $saya3->harga }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('data3.edit',$saya3->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('data3.show',$saya3->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('data3.destroy',$saya3->id) }}">
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