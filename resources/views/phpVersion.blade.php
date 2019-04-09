@extends('layout')

@section('title')
PHP Version
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
        <a href="/about">About</a>
      </li>
      <li>
        <p>PHP Version</p>
      </li>
    </ul>
  </nav>
</header>
@stop

@section('content')
<div>
  <?php
    phpInfo();
  ?>
</div>
@stop

@section('footer')
<footer>
  <small>Built with PHP/Laravel using Artisan</small>
  <br>
  <small>Dev: Michael Marlow</small>
</footer>
@stop
