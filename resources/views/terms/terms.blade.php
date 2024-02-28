@extends('layouts.app_simple')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('menu.aj_terms') }}</div>

                <div class="card-body">
                    <h5><strong>{{ __('terms.h5_1') }}</strong></h5>
                    <p>{{ __('terms.p_1') }}</p>
                    <h5 class="mt-4"><strong>{{ __('terms.h5_2') }}</strong></h5>
                    <p>{{ __('terms.p_2') }}</p>
                    <h5 class="mt-4"><strong>{{ __('terms.h5_3') }}</strong></h5>
                    <p>{{ __('terms.p_3a') }}</p>
                    <p>{{ __('terms.p_3b') }}</p>
                    <h5 class="mt-4"><strong>{{ __('terms.h5_4') }}</strong></h5>
                    <p>{{ __('terms.p_4') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-4 text-center">
    <a href="{{ route('privacy') }}" class="ml-3">{{ __('menu.aj_privacy') }}</a>
</div>
@endsection
