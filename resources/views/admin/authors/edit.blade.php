@extends('admin.layouts.app')

@section('title') {{ __('Edit author') }} "{{ $author->name.' '.$author->last_name }}" @endsection

@section('content')
	<div class="row">
		<div class="col-sm-11">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<h1 class="h2">{{ __('Edit author') }} "{{ $author->name.' '.$author->last_name }}"</h1>
				<div class="btn-toolbar mb-2 mb-md-0">
					<a href="{{ route('admin.authors.index') }}" class="btn btn-dark">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
						</svg>
						{{ __('Back to list') }}
					</a>
				</div>
			</div>
		</div>
	</div>
	<form method="post" action="{{ route('admin.authors.update', $author->id) }}">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="row">
			<div class="col-sm-8">
				@include('admin.include.notifications')
				<div class="card p-3">
					<label for="name" class="form-label">{{ __('Name') }}</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ $author->name }}" required>

					<label for="last_name" class="form-label mt-3">{{ __('Last name') }}</label>
					<input type="text" class="form-control" name="last_name" id="last_name" placeholder="" value="{{ $author->last_name }}" >

					<label for="biography" class="form-label mt-3">{{ __('Biography') }}</label>
					<textarea class="form-control" name="biography" id="biography" cols="30" rows="3">{{ $author->biography }}</textarea>

					<label for="photo_url" class="form-label mt-3">{{ __('Photo url') }}</label>
					<input type="text" class="form-control" name="photo_url" id="photo_url" placeholder="" value="{{ $author->photo_url }}" >
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card p-3 mb-3">
					<input type="submit" class="btn btn-primary" value="{{ __('Save') }}">
				</div>
				<ul class="list-group mb-3">
					@if($author->created_at)
						<li class="list-group-item d-flex justify-content-between lh-condensed">
							<div>
								<h6 class="my-0">{{ __('Created at') }}</h6>
							</div>
							<span class="text-muted">{{ $author->created_at }}</span>
						</li>
					@endif
					@if($author->updated_at)
						<li class="list-group-item d-flex justify-content-between lh-condensed">
							<div>
								<h6 class="my-0">{{ __('Updated at') }}</h6>
							</div>
							<span class="text-muted">{{ $author->updated_at }}</span>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</form>
@endsection