@extends('layout')

@section('title') Ganti Password @endsection

@section('before_styles')
@endsection

@section('after_styles')
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-3">
          @include('inc.menu.user')
        </div>
        <span class="menu-border"> </span>
        <div class="column is-9">
          <h1> Ganti Password </h1>
          <p> Sukses mengganti password. </p>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('footer')
@endsection

@section('before_scripts')
@endsection

@section('after_scripts')
@endsection