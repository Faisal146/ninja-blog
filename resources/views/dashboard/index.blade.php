@extends('layouts.dashmaster');

@section('content')

<h1>Your Profile</h1>
<h2 class="mt-3">{{ auth()->user()->name}}</h2>
<h2 class="">{{ auth()->user()->email}}</h2>

@endsection
