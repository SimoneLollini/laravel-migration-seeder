@extends('layouts.app')

@section('contents')


@forelse ($trains as $train)

<div class="container">
    <div>
        {{$train->company}}|
        {{$train->from}}|
        {{$train->to}}|
        {{$train->code}}|
        {{$train->departure_time}}|
        {{$train->arrival_time}}|
    </div>
</div>

@empty
<p>Nessun treno disponibile!</p>
@endforelse

@endsection