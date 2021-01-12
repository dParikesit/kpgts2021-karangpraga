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
          <h1> Registrasi Akun Peserta TONAMPTN </h1>
        </div>
      </div>
      
      <div class="columns">
        <div class="column is-half">
          @if (isset($fail))
          <p style="color: red!important; font-weight: 700"> {{ $fail }} </p>
          @endif
          <!-- <p>Pembuatan akun bukan berarti peserta sudah terdaftar. Peserta baru resmi terdaftar setelah membayar dan mendapat email kartu peserta.</p> -->
          <p> Registrasi sudah ditutup.</p>
        </div>
      </div>
      
      <!-- 
      <div class="columns">
        <div class="column is-half">
          <form action="/user/register" method="POST">
          {{ csrf_field() }}
          <div class="field">
            <label class="label"> Nama </label>
            <div class="control has-icons-left">
              <span class="icon is-small is-left">
                <i class="fa fa-user"></i>
              </span>
              <input class="input" type="text" name="name" placeholder="Nama Lengkap, bukan panggilan">
            </div>
          </div>
          <div class="field">
            <label class="label"> Email </label>
            <div class="control has-icons-left">
              <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
              </span>
              <input class="input" type="email" name="email" placeholder="Email">
              <p class="help"> Gunakan email yang aktif karena kartu peserta dan kode ujian akan dikirim ke email </p>
            </div>
          </div>
          <div class="field">
            <label class="label"> Password </label>
            <div class="control has-icons-left">
              <span class="icon is-small is-left">
                <i class="fa fa-lock"></i>
              </span>
              <input class="input" id="pwd1" type="password" name="password" placeholder="8-32 karakter">
            </div>
          </div>
          <div class="field">
            <label class="label"> Masukan kembali Password </label>
            <div class="control has-icons-left">
              <span class="icon is-small is-left">
                <i class="fa fa-lock"></i>
              </span>
              <input class="input" id="pwd2" type="password" placeholder="Masukkan kembali">
              <p class="help is-danger" id="pwd2msg" style="display: none">password tidak sesuai</p>
            </div>
          </div>
          <div class="field">
            <p class="control">
              <button class="button is-success">
                Daftar
              </button>
            </p>
          </div>
          </form>
        </div>
      </div>
      -->
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