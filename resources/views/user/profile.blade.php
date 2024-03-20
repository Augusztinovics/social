@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card-header border-dark text-center"><h2>{{ __('menu.settings') }}</h2></div>

                <div class="card-body">
                    @if(Auth::user()->profile->profile_photo)
                        <div class="w-full" style="height: 400px; background-image: url('{{Auth::user()->profile->getProfilePhotoUrl}}');"></div>
                    @else
                        <div class="w-full bg-secondary" style="height: 400px;"></div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
