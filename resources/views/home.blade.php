@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1 class="mb-3">Trains</h1>

        <div class="row row-cols-2">
            @forelse($trains as $train)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <ul>
                                <li>Company: {{ $train->company }}</li>
                                <li>From: {{ $train->origin_station }}</li>
                                <li>Departure: {{ $train->departure_datetime }}</li>
                                <li>To: {{ $train->destination_station }}</li>
                                <li>Arrival: {{ $train->arrival_datetime }}</li>
                                <li>Train code: {{ $train->train_code }}</li>
                                <li>Num. of coaches: {{ $train->coaches }}</li>
                                <li>Train code: {{ $train->train_code }}</li>
                                <li>On time: {{ $train->on_time ? 'Yes' : 'No' }}</li>
                                <li>Cancelled: {{ $train->cancelled ? 'Yes' : 'No' }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @empty
                No trains available.
            @endforelse
        </div>
    </section>
@endsection
