@extends('layouts.app_simple')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('menu.aj_privacy') }}</div>

                <div class="card-body">
                    <h5><strong>{{ __('terms.ph5_1') }}</strong></h5>
                    <p>{{ __('terms.pp_1a') }}</p>
                    <p>{{ __('terms.pp_1b') }}</p>
                    <h5 class="mt-4"><strong>{{ __('terms.ph5_2') }}</strong></h5>
                    <p>{{ __('terms.pp_2') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-4 text-center">
    <a href="{{ route('terms') }}">{{ __('menu.aj_terms') }}</a>
</div>
@endsection
