@extends('layout')

@section('title') {{ trans('others.bad_request') }} @endsection

@section('before-styles')
@endsection

@section('after-styles')
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-12">
          <h1> {{ trans('others.bad_request') }} </h1>
        </div>
      </div>
      <div class="columns is-centered">
        <div class="column is-half">
          <figure class="image is-300x300">
            <img src="https://cdn.shopify.com/s/files/1/1061/1924/products/Sad_Face_Emoji_large.png?v=1480481055" style="width:480px;">
          </figure>
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