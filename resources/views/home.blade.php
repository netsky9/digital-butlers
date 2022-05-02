@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Authors') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($authors as $item)
                            <button type="button" class="btn btn-light">{{ $item->name.' '.$item->last_name }}</button>
                    @endforeach
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">{{ __('Books') }}</div>

                <div class="card-body" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    @foreach($books as $item)
                        <div class="card" style="width: 18rem; margin-bottom: 20px;">
                            <img src="{{ $item->cover_url }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->annotation }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
