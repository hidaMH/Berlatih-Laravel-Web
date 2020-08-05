@extends('layouts.app')
@section('content')

<div class="col-8 offset-md-2">
	<div class="card">
		<div class="card-header">
			<div class="card-tittle">List Task</div>
		</div>
		<div class="card-body">
			<table class="table">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Tittle</th>
					<th scope="col">Author</th>
					<th scope="col">Category</th>
					<th scope="col">Date</th>
					<th colspan="5">Action</th>
				</tr>
				@foreach($notes as $key => $note)
				<tr>
					<td>{{ $note->id }}</td>
					<td>{{ $note->tittle }}</td>
					<td>{{ $note->user->name }}</td>
					<td>{{ $note->category->name }}</td>
					<td>{{ $note->created_at->toFormattedDateString() }}</td>
					<td><a href="{{ route('task.show', $note->id) }}" class="btn btn-primary">Show</a></td>
					<td><a href="{{ route('task.edit', $note->id) }}" class="btn btn-warning">Edit</a></td>
					<td>
						<form method="POST" action="{{ route('task.delete', $note->id) }}">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection