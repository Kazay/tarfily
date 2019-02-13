@extends('layouts.front')

@section('content')

<blockquote>
        <p><em>So much choices !</em></p>
      </blockquote>
<div class="row row-wrap">
@foreach ($voyages as $item)
    <div class="cards">
            <img class="cards-image" src="{{ $item->picture }}" alt=" {{ $item->label }}">

        <div class="cards-content">
            <div class="cards-label">{{ $item->label }}</div>
            <div class="cards-price">{{ $item->price }} €</div>
        </div>
        <div class="clearfix">`
            <div class="float-right">
                <a class="button cards-more" href="/voyage/{{ $item->id }}">Discover</a>
            </div>    
        </div>
    </div>

@endforeach
</div>
@endsection