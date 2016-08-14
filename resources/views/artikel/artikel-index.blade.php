@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<a href="{{ route('artikel-create') }}" class="btn btn-primary">Add Artikel&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></a>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr >
						<th>title</th>
						<th>description</th>
						<th>foto</th>
						<th>Action</th>
					</tr>
				</thead>		
	    		<tbody>
					@foreach($data as $row)
					<tr>
						<td>{{ $row->title }}</td>
						<td>{{ $row->description }}</td>
						<td><img src="{{ asset('img/'.$row->foto) }}" width="100" height="100" /></td>
						<td><a href="{{ route('artikel-delete',$row->id) }}" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash "></i></a>&nbsp;&nbsp;<a href="{{ route('artikel-edit',$row->id) }}" class="btn btn-success"><i class="fa fa-pencil"></i></a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>	
@endsection