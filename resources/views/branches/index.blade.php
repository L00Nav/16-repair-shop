@extends('layouts.app')

@section('content')
<h2>Our branches:</h2>
    <hr>
@forelse($branches as $branch)
    {{$branch->address}}<br>
    {{$branch->name}}<br>
    {{$branch->phone_number}}<br>
    <form class="delete" action="{{route('branches-delete', $color)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Nuke</button>
    </form>
    <hr>
@empty
    We're out of business, apparently
@endforelse
@endsection