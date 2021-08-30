@extends('layouts.base')

@section('content')
@foreach ($data as $d)
    <div class="card bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header">User Profile</div>
        <div class="card-body">
        <h5 class="card-title">{{ $d->name }}</h5>
        <p class="card-text">{{ $d->description }}</p>
        <div style="display: none">
            <ul>
                <li>{{ $d->email }}</li>
                <li>{{ $d->phone }}</li>
                <li>{{ $d->education }}</li>
            </ul>
        </div>
        </div>
    </div>
@endforeach
@endsection
