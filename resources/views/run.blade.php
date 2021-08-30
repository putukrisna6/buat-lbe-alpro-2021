@extends('layouts.base')

@section('content')
    <p class="">Pick</p>
    <input type="radio" id="html" name="pick" value="HTML">
    <label for="html">HTML</label><br>
    <input type="radio" id="js" name="pick" value="JS">
    <label for="js">JS</label><br>
    <input type="radio" id="css" name="pick" value="CSS">
    <label for="css">CSS</label><br>
    <hr>
    <p>Pick Many</p>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label for="vehicle1"> I have a bike</label><br>
    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
    <label for="vehicle2"> I have a car</label><br>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
    <label for="vehicle3"> I have a boat</label><br>
    <hr>
    <label for="comment">Comment</label>
    <input class="border ml-1 rounded px-1" type="text" id="comment" name="comment">
@endsection
