@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Barang Sekolah
			  	<div class="panel-title pull-right"><a href="{{ route('data2.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>nama_barang</th>
					  <th>jumlah</th>
					  <th>harga</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($data2 as $saya2)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $saya2->nama_barang }}</td>
				    	<td><p>{{ $saya2->jumlah }}</p></td>
				    	<td><p>{{ $saya2->harga }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('data2.edit',$saya2->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('data2.show',$saya2->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('data2.destroy',$saya2->id) }}">
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