@extends('layout')

@section('title') FAQ @endsection

@section('before-styles')
@endsection

@section('after-styles')
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
          <h1> Frequently Asked Question </h1>
          @foreach ($faqs as $faq)
          <h5> <strong> {{ $faq["question"] }} </strong> </h5>
          <p> {{ $faq["answer"] }} </p>
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endsection

@section('footer')
@endsection

@section('before-scripts')
@endsection

@section('after-scripts')
@endsection