@extends('layouts.admin')

@section('content')

<a class="button cards-more" href="{{ route('voyage.create') }}">Add a new destination</a>
<a class="button" href="{{ route('entry-admin') }}">Return</a>

<table class="listing-voyages">
    <thead>
        <tr>
        <th>Label</th>
        <th>Starts</th>
        <th>Ends</th>
        <th>Price</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($voyages as $item)
        <tr>    
            <td>{{ $item->label }}</td>
            <td>{{ \Carbon\Carbon::parse($item->dateStart)->format('m.d.Y') }}</td>
            <td>{{ \Carbon\Carbon::parse($item->dateEnd)->format('m.d.Y') }}</td>
            <td>{{ $item->price }} €</td>
            <td>
                <a class="button cards-more" href="{{ route('voyage.show', ['id' => $item->id]) }}">Edit</a>
                <a class="button button-outline cards-more" href="{{ route('voyage.destroy', ['id' => $item->id]) }}"
                    onclick="event.preventDefault();
                                    document.getElementById('delete-form[{{$item->id}}]').submit();">
                        Delete
                    </a>
                    <form id="delete-form[{{$item->id}}]" action="{{ route('voyage.destroy', ['id' => $item->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection