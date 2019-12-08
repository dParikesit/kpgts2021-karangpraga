@extends('layout')

@section('title') Login @endsection

@section('before_styles')
@endsection

@section('after_styles')
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-12">
          <h1> Admin Log In </h1>
        </div>
      </div>
      <div class="columns">
        <div class="column is-half">
          <form action="/admin/login" method="POST">
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
              <small> Kontak Yonas Adiel kalau lupa password.</small>
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

@section('before_scripts')
@endsection

@section('after_scripts')
@endsection