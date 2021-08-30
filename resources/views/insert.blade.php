@extends('layouts.base')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-1 text-gray-800 ml-2">Create Profile</h1>
</div>
<div class="emp-profile mt-0">
    <form method="post" action="/store" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name" class="">Name</label>
            <input id="name"
                    type="text"
                    class="form-control"
                    name="name"
                    value="{{ old('name') }}"
                    autocomplete="name" autofocus required>
        </div>
        <div class="form-group">
            <label for="description" class="">Description</label>
            <input id="description"
                    type="text"
                    class="form-control"
                    name="description"
                    value="{{ old('description') }}"
                    autocomplete="description" autofocus required>
        </div>
        <div class="form-group">
            <label for="email" class="">Email</label>
            <input id="email"
                    type="email"
                    class="form-control"
                    name="email"
                    value="{{ old('email') }}"
                    autocomplete="email" autofocus required>
        </div>
        <div class="form-group">
            <label for="phone" class="">Phone Number</label>
            <input id="phone"
                    type="text"
                    class="form-control"
                    name="phone"
                    value="{{ old('phone') }}"
                    autocomplete="phone" autofocus required>
        </div>
        <div class="form-group">
            <label for="education" class="">Education</label>
            <input id="education"
                    type="text"
                    class="form-control"
                    name="education"
                    value="{{ old('education') }}"
                    autocomplete="education" autofocus required>
        </div>

        <button class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
