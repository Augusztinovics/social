@extends('layouts.app_simple')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Privacy') }}</div>

                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quos temporibus consequatur soluta commodi rerum incidunt exercitationem tenetur sunt, reprehenderit magni vitae, repudiandae autem accusantium cum porro. Ab, praesentium tempora!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex magnam nulla ipsa assumenda vero dolores modi qui itaque, suscipit atque omnis id possimus repellendus dolorem facilis pariatur numquam dolor deserunt?</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-4 text-center">
    <a href="{{ route('terms') }}">{{ __('menu.aj_terms') }}</a>
</div>
@endsection
