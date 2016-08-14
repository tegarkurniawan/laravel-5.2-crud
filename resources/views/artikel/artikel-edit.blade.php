@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">

		{!! Form::model($data, ['route' => ['artikel-update', $data->id], 'method' => 'PATCH', 'files' => true ]) !!}
		  <div class="form-group">
		    <label for="name">Title:</label>
		    {!! Form::text('title', null, ['class' => 'form-control']) !!}
		  </div>
		  <div class="form-group">
		    <label for="name">Description:</label>
		    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		  </div>
		  <div class="form-group">
		    <label for="name">Foto:</label>
		    {!! Form::file('foto', ['class' => 'form-control']) !!}
		  </div>
		  
		  {!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		{!! Form::close() !!}
		<br>
		@if($errors->any())
                  
          	 <ul class="alert alert-danger">
                    
                @foreach($errors->all() as $error)

                   <li style="margin-left:5px;">{{ $error }}</li>

                @endforeach

            </ul>

         @endif
	</div>
</div>
@endsection