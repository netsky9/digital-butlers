@extends('admin.layouts.app')

@section('title') {{ __('Create new author') }} @endsection

@section('content')
	<br>
	<h1 class="title">
		{{ __('Create new author') }}
	</h1>
	<br>
	<form method="post" action="{{ route('admin.authors.store') }}">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-sm-8">
				@include('admin.include.notifications')
				<div class="card p-3">
					<label for="name" class="form-label">{{ __('Name') }}</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ old('name') }}" required>

					<label for="last_name" class="form-label mt-3">{{ __('Last name') }}</label>
					<input type="text" class="form-control" name="last_name" id="last_name" placeholder="" value="{{ old('last_name') }}" >

					<label for="biography" class="form-label mt-3">{{ __('Biography') }}</label>
					<textarea class="form-control" name="biography" id="biography" cols="30" rows="3">{{ old('biography') }}</textarea>

					<label for="photo_url" class="form-label mt-3">{{ __('Photo url') }}</label>
					<input type="text" class="form-control" name="photo_url" id="photo_url" placeholder="" value="{{ old('photo_url') }}" >
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card p-3 mb-3">
					<input type="submit" class="btn btn-primary" value="Create">
				</div>
			</div>
		</div>
	</form>
@endsection