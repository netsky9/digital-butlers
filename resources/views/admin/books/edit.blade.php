@extends('admin.layouts.app')

@section('title') {{ __('Edit book') }} "{{ $book->title }}" @endsection

@section('content')
	<div class="row">
		<div class="col-sm-11">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<h1 class="h2">{{ __('Edit book') }} "{{ $book->title }}"</h1>
				<div class="btn-toolbar mb-2 mb-md-0">
					<a href="{{ route('admin.books.index') }}" class="btn btn-dark">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
						</svg>
						{{ __('Back to list') }}
					</a>
				</div>
			</div>
		</div>
	</div>
	<form method="post" action="{{ route('admin.books.update', $book->id) }}">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="row">
			<div class="col-sm-8">
				@include('admin.include.notifications')
				<div class="card p-3">
					<label for="title" class="form-label">{{ __('Title') }}</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="" value="{{ $book->title }}" required>

					<label for="slug" class="form-label mt-3">{{ __('Slug') }}</label>
					<input type="text" class="form-control" name="slug" id="slug" placeholder="" value="{{ $book->slug }}" >

					<label for="annotation" class="form-label mt-3">{{ __('Annotation') }}</label>
					<textarea class="form-control" name="annotation" id="annotation" cols="30" rows="3">{{ $book->annotation }}</textarea>

					<label for="cover_url" class="form-label mt-3">{{ __('Cover url') }}</label>
					<input type="text" class="form-control" name="cover_url" id="cover_url" placeholder="" value="{{ $book->cover_url }}" >
					<br>
					<label for="author_id" class="form-label">{{ __('Author') }}</label>
					<select name="author_id" class="form-control" id="author_id">
						@foreach($authors as $item)
							<option value="{{ $item->id }}" @if($item->id == $book->author_id) {{ 'selected' }} @endif>
								{{ $item->name.' '.$item->last_name }}
							</option>
						@endforeach
					</select>

					<label for="release_date" class="form-label mt-3">{{ __('Release date') }}</label>
					<input type="text" class="form-control" name="release_date" id="release_date" placeholder="" value="{{ $book->release_date }}" >
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card p-3 mb-3">
					<input type="submit" class="btn btn-primary" value="{{ __('Save') }}">
				</div>
				<ul class="list-group mb-3">
					@if($book->created_at)
						<li class="list-group-item d-flex justify-content-between lh-condensed">
							<div>
								<h6 class="my-0">{{ __('Created at') }}</h6>
							</div>
							<span class="text-muted">{{ $book->created_at }}</span>
						</li>
					@endif
					@if($book->updated_at)
						<li class="list-group-item d-flex justify-content-between lh-condensed">
							<div>
								<h6 class="my-0">{{ __('Updated at') }}</h6>
							</div>
							<span class="text-muted">{{ $book->updated_at }}</span>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</form>
@endsection

@section('scripts')
	@if($book->release_date)
		<script>
			$('#release_date').datepicker({
				value: '{{ $book->release_date }}'
			});
		</script>
	@else
		<script>
			$('#release_date').datepicker();
		</script>
	@endif
@endsection