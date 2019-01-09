@extends('master')
@section('content')
  <div class="container">
    <div class="content">
      @foreach($data as $d)
      <div class="panel panel-default">
        <div class="panel-heading">$d->title</div>
        <div class="panel-body">
          $d->content
        </div>
        <div class="panel-footer">$d->date</div>
      </div>
      @endforeach
    </div>
  </div>
