@extends('layouts.front')

@section('content')

<a class="button" href="/">Return</a>
<div class="voyage-container">
    <div class="clearfix">
        <h2>{{ $voyage->label }}</h2>
        <div class="float-right">
            <img src="{{ $voyage->picture }}" alt="{{ $voyage->label }}">
        </div>
        <p><em>{{ \Carbon\Carbon::parse($voyage->dateStart)->format('m.d.Y') }} - {{ \Carbon\Carbon::parse($voyage->dateEnd)->format('m.d.Y') }}</em></p>
        <p>{{ $voyage->description }}</p>
        <p class="price">{{ $voyage->price }} € TTC</p>
        <p>Availability : {{ $voyage->availability }} places.</p>
       
    </div>
       


   
</div>

@endsection