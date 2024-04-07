@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card-header border-dark text-center"><h2>{{ __('menu.settings') }}</h2></div>

                <profile-image-upload :user="{{ json_encode(Auth::user()) }}" :user-profile="{{ json_encode(Auth::user()->profile) }}" :lng-upload="{{ json_encode(__('menu.upload')) }}" :lng-no-img="{{ json_encode(__('menu.no_image_selected')) }}" :lng-select-img="{{ json_encode(__('menu.select_image')) }}" ></profile-image-upload>
                <div style="height: 30px;"></div>
            </div>
        </div>
    </div>
</div>
@endsection
