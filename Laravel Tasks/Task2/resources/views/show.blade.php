@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Movies Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $Movies->movie_name }}</h5>
        <p class="card-text">Description : {{ $Movies->movie_description }}</p>
        <p class="card-text">Generation : {{ $Movies->movie_gener }}</p>
  </div>
       
    </hr>
  
  </div>
</div>