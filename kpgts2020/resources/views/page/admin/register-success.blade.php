@extends('layout')

@section('title') Register @endsection

@section('before-styles')
@endsection

@section('after-styles')
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-12">
          <h1> Admin Sign Up </h1>
        </div>
      </div>
      <div class="columns">
        <div class="column is-half">
          <p> Sign Up success. Login <a href="/admin/login">here</a>. </p>
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
  <script>
    function check_pwd() {
      var pwd2 = $('#pwd2')[0];
      var pwd1 = $('#pwd1')[0];
      if (pwd2.value !== pwd1.value) {
        $(pwd2).addClass('is-danger');
        $('#pwd2msg').css('display', 'block');
      } else {
        $(pwd2).removeClass('is-danger');
        $('#pwd2msg').css('display', 'none');
      }
    }
    $('#pwd2').on('keyup', check_pwd);
  </script>
@endsection