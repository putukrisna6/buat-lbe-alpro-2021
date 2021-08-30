@extends('layouts.base')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4 px-3">Selamat datang di materi <br> Chrome Dev Tools</h1>
      <hr>
      <p class="lead px-3">Website ini dikembangkan untuk membantu pembelajaran dan pemanfaatan Chrome Dev Tools</p>
    </div>
</div>
<section>
    <div class="container px-5">
        <h2>Edit</h2>
        <hr class="mt-0">
        <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        </blockquote>
    </div>
</section>
<section>
    <div class="container px-5">
        <h2>See Margin/Padding</h2>
        <hr class="mt-0">
        <div class="row">
            <div class="weird-div"></div>
            <div class="weird-div"></div>
        </div>
    </div>
</section>
<section>
    <div class="container px-5">
        <h2>Force Hover</h2>
        <hr class="mt-0">
        <div class="row" style="max-width: 500px">
            <div class="col-lg-6">
                <img src="{{ asset('img/1_8aMac_-Ib6dtmHMldCwgMw.png') }}" class="hoverable img-fluid img-thumbnail" alt="">
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/1_8aMac_-Ib6dtmHMldCwgMw.png') }}" class="hoverable img-fluid img-thumbnail" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
