@extends('layouts.admin')

@section('content')

<div class="bloc-options clearfix">
    <span class="title">Edit : {{ $voyage->label }}</span>
    <div class="float-right">
        <a class="button" href="{{ route('voyage.index') }}">Return</a>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    

<form action="{{ route('voyage.update', ['id' => $voyage->id]) }}">
    @csrf
    @method('PUT')
        <fieldset>
            <label for="label">Label</label>
            <input type="text" placeholder="Name your voyage" value="{{ $voyage->label }}" name="label" id="label">
            <label for="country">Country</label>
            <input type="text" placeholder="What's the country destination ?" value="{{ $voyage->country }}" name="country" id="country">
            <label for="city">City</label>
            <input type="text" placeholder="The city destination ?" value="{{ $voyage->city }}" name="city" id="city">
            <label for="dateStart">Starts</label>
            <input type="date" value="{{ $voyage->dateStart }}" name="dateStart" id="dateStart">
            <label for="dateEnd">Ends</label>
            <input type="date" value="{{ $voyage->dateEnd }}" name="dateEnd" id="dateEnd">
            <label for="price">Price</label>
            <input type="text" placeholder="A price, maybe ?" value="{{ $voyage->price }}" name="price" id="price">
            <label for="picture">Picture URL</label>
            <input type="text" placeholder="Enter an URL"  value="{{ $voyage->picture }}" name="picture" id="picture">
            <label for="availability">Places availables</label>
            <input type="number" placeholder="How many places ?" value="{{ $voyage->availability }}" name="availability" id="availability">
            <label for="description">Description</label>
            <textarea placeholder="Show me your excite !" value="{{ $voyage->description }}" name="description" id="description">{{ $voyage->description }}</textarea>
            <input class="button-primary" type="submit" value="Send">
        </fieldset>
</form>

@endsection