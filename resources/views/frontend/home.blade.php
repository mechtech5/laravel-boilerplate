@extends('layouts.frontend')

@section('body_class', 'page-home')

@section('highlight')
    <div class="jumbotron">
        <div class="container">
            @include('frontend.partials.slider')
        </div>
    </div>
@endsection

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            @lang('labels.frontend.titles.home')
        </div>

        <div class="card-body">
            <p>
                
            </p>
        </div>
    </div>

    {{-- <div class="card mb-3">
        <div class="card-header">Font Awesome</div>

        <div class="card-body">
            <font-awesome-icon icon="home"></font-awesome-icon>
            <font-awesome-icon :icon="['fab', 'facebook']"></font-awesome-icon>
            <font-awesome-icon :icon="['fab', 'twitter']"></font-awesome-icon>
            <font-awesome-icon :icon="['fab', 'pinterest']"></font-awesome-icon>
        </div>
    </div> --}}
@endsection
