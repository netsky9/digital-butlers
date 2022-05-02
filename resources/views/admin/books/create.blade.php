@extends('admin.layouts.app')

@section('title') {{ __('Create new book') }} @endsection

@section('content')
	<br>
	<h1 class="title">
		{{ __('Create new book') }}
	</h1>
	<br>
	<form method="post" action="{{ route('admin.books.store') }}">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-sm-8">
				@include('admin.include.notifications')
				<div class="card p-3">
					<label for="title" class="form-label">{{ __('Title') }}</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="" value="{{ old('title') }}" required>

					<label for="slug" class="form-label mt-3">{{ __('Slug') }}</label>
					<input type="text" class="form-control" name="slug" id="slug" placeholder="" value="{{ old('slug') }}" >

					<label for="annotation" class="form-label mt-3">{{ __('Annotation') }}</label>
					<textarea class="form-control" name="annotation" id="annotation" cols="30" rows="3">{{ old('annotation') }}</textarea>

					<label for="cover_url" class="form-label mt-3">{{ __('Cover url') }}</label>
					<input type="text" class="form-control" name="cover_url" id="cover_url" placeholder="" value="{{ old('cover_url') }}" >
					<br>
					<label for="author_id" class="form-label">{{ __('Author') }}</label>
					<select name="author_id" class="form-control" id="author_id">
						@foreach($authors as $item)
							<option value="{{ $item->id }}">
								{{ $item->name.' '.$item->last_name }}
							</option>
						@endforeach
					</select>
					<p>
						{{ __("If you can't find author, you can add it on ") }}
						<a href="{{ route('admin.authors.create') }}">{{ __("this page") }}</a>
					</p>

					<label for="release_date" class="form-label mt-3">{{ __('Release date') }}</label>
					<input type="text" class="form-control" name="release_date" id="release_date" placeholder="" value="{{ old('release_date') }}" >
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card p-3 mb-3">
					<input type="submit" class="btn btn-primary" value="{{ __('Create') }}">
				</div>
			</div>
		</div>
	</form>
@endsection

@section('scripts')
	<script>
		$('#release_date').datepicker();
	</script>
@endsection