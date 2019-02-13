@extends('layouts.admin')

@section('content')

<div class="bloc-options clearfix">
    <span class="title">Add a new destination</span>
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

<form action="{{ route('voyage.store') }}" method="POST">
    @csrf
    @method('POST')
        <fieldset>
            <label for="label">Label</label>
            <input type="text" placeholder="Name your voyage" name="label" id="label">
            <label for="country">Country</label>
            <input type="text" placeholder="What's the country destination ?" name="country" id="country">
            <label for="city">City</label>
            <input type="text" placeholder="The city destination ?" name="city" id="city">
            <label for="dateStart">Starts</label>
            <input type="date" placeholder="" name="dateStart" id="dateStart">
            <label for="dateEnd">Ends</label>
            <input type="date" placeholder="The city destination ?" name="dateEnd" id="dateEnd">
            <label for="price">Price</label>
            <input type="text" placeholder="A price, maybe ?" name="price" id="price">
            <label for="picture">Picture URL</label>
            <input type="text" placeholder="Enter an URL" name="picture" id="picture">
            <label for="availability">Places availables</label>
            <input type="number" placeholder="How many places ?" name="availability" id="availability">
            <label for="description">Description</label>
            <textarea placeholder="Show me your excite !" name="description" id="description"></textarea>
            <input class="button-primary" type="submit" value="Send">
        </fieldset>
</form>



@endsection