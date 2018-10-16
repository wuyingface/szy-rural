@extends('layouts.default')
@section('content')
  <div class="jumbotron">
    <h1>Hello Welcome</h1>
    <p class="lead">
      村村汇
    </p>
    <p>
      引领深化改革新征程，建设社会主义新农村
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
@stop