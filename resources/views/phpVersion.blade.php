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

@section('version')
<div>
  <?php
    // phpInfo();
      ob_start();
      phpinfo();
      $pinfo = ob_get_contents();
      ob_end_clean();

      $pinfo = preg_replace( '%^.*<body>(.*)</body>.*$%ms','$1',$pinfo);
      echo $pinfo;
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
