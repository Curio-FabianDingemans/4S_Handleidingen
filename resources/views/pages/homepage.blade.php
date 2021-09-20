@extends('layouts.default')

@section('introduction_text')
    <p>{{ __('introduction_texts.homepage_line_1') }}</p>
    <p>{{ __('introduction_texts.homepage_line_2') }}</p>
    <p>{{ __('introduction_texts.homepage_line_3') }}</p>
@endsection

@section('content')

    <h1>
        @section('title')
            {{ __('misc.all_brands') }}
        @show
    </h1>


    <?php
    $size = count($brands);
    $columns = 3;
    $chunk_size = ceil($size / $columns);
    ?>

    <div class="container">
        <div class="brands-grid">
            @foreach($brands as $brand)
                <div class="brand-item">
                    <h1>{{ ucfirst($brand->name) }}</h1>
                    <a href="/{{ $brand->id }}/{{ $brand->name_url_encoded }}/">Meer informatie</a>
                </div>
            @endforeach
        </div>

    </div>

@endsection
