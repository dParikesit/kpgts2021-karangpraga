@extends('layout')

@section('title') Login @endsection

@section('before-styles')
@endsection

@section('after-styles')
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-12">
          <h1> Log In Peserta </h1>
        </div>
      </div>
      <div class="columns">
        <div class="column is-half">
          <form action="/user/login" method="POST">
          {{ csrf_field() }}
          @if (isset($fail))
            <p style="color: red!important; font-weight: 700"> {{ $fail }} </p> <br>
          @endif
          <div class="field">
            <label class="label"> Email </label>
            <div class="control has-icons-left">
              <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
              </span>
              <input class="input" type="email" name="email" placeholder="Email" value="{{ (isset($old['email'])? $old['email']:'') }}">
            </div>
          </div>
          <div class="field">
            <label class="label"> Password </label>
            <div class="control has-icons-left">
              <span class="icon is-small is-left">
                <i class="fa fa-lock"></i>
              </span>
              <input class="input" id="pwd1" type="password" name="password" placeholder="Password" value="">
            </div>
          </div>
          <div class="field">
            <p class="control">
              <button class="button is-success">
                Log In
              </button>
            </p>
          </div>
          <div class="field">
            <p class="control">
              <small>Lupa password? Kontak kami di <strong><a href="/kontak">sini</a></strong></small>
            </p>
          </div>
          </form>
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