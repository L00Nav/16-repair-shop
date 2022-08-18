@extends('layouts.app')

@section('content')
<h2>Create a branch</h2>
<ul>
    <form action="{{route('branches-store')}}" method="post">
        <input type="text" name="address" />
        <input type="text" name="name" />
        <input type="number" name="phone_number" />
        @csrf
        <button type="submit">Open a new one</button>
    </form>
</ul>
@endsection