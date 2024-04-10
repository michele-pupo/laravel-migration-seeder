@extends('layouts/app')

@section('content')
<div class="container py-5 d-flex flex-column justify-content-center">
    <h1 class="text-center fw-bold">Tutti i treni in partenza oggi</h1>
    
    @foreach($trainsToday as $trainToday)
    <div class="row row-cols-1">
        <div class="card">
            <div class="card-body">
                <h2 class="train-agency">Azienda: {{$trainToday->agency}}</h2>
                <h3 class="train-departure-station">Stazione di partenza: {{$trainToday->departure_station}}</h3>
            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection