@extends('layout')

@section('title')
About
@stop

@section('header')
<header>
  <nav>
    <ul>
      <li>
        <a href="/">Home</a>
      </li>
      <li>
        <a href="/healthcheck">Health Check</a>
      </li>
      <li>
        <!-- <a href="/about">About</a> -->
        <p>About</p>
      </li>
    </ul>
  </nav>
</header>
@stop


@section('content')
<div class="title">
  Tools used:
  <ul>
    <li>PHP</li>
    <li>Laravel</li>
    <li>Composer</li>
    <li>Artisan</li>    
  </ul>
</div>
@stop


@section('footer')
<footer>
  <small>Built with PHP/Laravel using Artisan</small>
  <br>
  <small>Dev: Michael Marlow</small>
</footer>
@stop
