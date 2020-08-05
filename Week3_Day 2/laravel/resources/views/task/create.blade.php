@extends('layouts.app')
@section('content')

<div class="col-6 offset-md-3">
	<div class="card">
		<div class="card-header">
			<div class="card-tittle">Create a New Task</div>
		</div>
		<div class="card-body">
			<form class="form" method="POST" action="{{ route('task.store') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<input type="text" name="tittle" class="form-control" placeholder="Tittle">
				</div>
				<div class="form-group">
					<textarea class="form-control" name="description" placeholder="Description"></textara>
				</div>
				<div class="form-group">
					<select class="form-control" name="categoryid">
						@foreach($categories as $key => $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>
				</div>
				<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
					<div class="form-group">
						<button class="btn btn-primary btn-block">Submit</button>
					</div>
			</form>
		</div>
	</div>
</div>

@endsection