@extends('layout')

@section('title') Create User @endsection

@section('before-styles')

@endsection

@section('after-styles')
<style type="text/css">
  @media screen and (min-width: 769px), print {
    .field-label {
      text-align: left;
    }
  }
</style>
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
          <h1> Buat Peserta </h1>
          <button class="button" onclick="window.location.href='/admin/user'"><i class="fa fa-arrow-left"> </i> &nbsp; Back </button> <br/> <br/>

          <div class="box">
          <form action="/admin/user" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="field">
              <label class="label">Nama</label>
              <div class="control">
                <input class="input" type="text" name="name" placeholder="Nama Lengkap">
              </div>
            </div>

            <div class="field">
              <label class="label"> Email </label>
              <div class="control has-icons-left">
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
                <input class="input" type="email" name="email" placeholder="Email">
                <p class="help"> Gunakan email yang aktif karena kartu peserta akan dikirim ke email </p>
              </div>
            </div>

            <div class="field">
              <label class="label">Kelompok Ujian</label>
              <div class="control">
                <div class="select">
                  <select name="kelompok-ujian">
                    <option value="Saintek">Saintek</option>
                    <option value="Soshum">Soshum</option>
                    <option value="Soshum">Campuran</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">Asal SMA</label>
              <div class="control">
                <div class="select">
                <select id="asal-sma-select">
                    @foreach ($smas as $sma)
                    <option value="{{ $sma }}">{{ $sma }}</option>
                    @endforeach
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input
                  class="input"
                  name="asal-sma"
                  placeholder="Asal SMA"
                  id="asal-sma"
                  type="hidden"
                >
              </div>
            </div>

            <div class="field">
              <label class="label">Metode Pembayaran</label>
              <div class="control">
                <div class="select">
                  <select name="metode-pembayaran">
                    <option value="Roadshow">OTS</option>
                  </select>
                </div>
              </div>
              <small> * Tidak semua SMA memiliki PJ Sekolah </small>
            </div>

            <div class="field">
              <label class="label">Nomor HP*</label>
              <div class="control">
                <input class="input" type="text" name="no-hp" placeholder="08xxxxxxxxxx">
              </div>
            </div>

            <div class="field">
              <label class="label">Nomor WA*</label>
              <div class="control">
                <input class="input" type="text" name="no-wa" placeholder="08xxxxxxxxxx">
              </div>
            </div>

            <div class="field">
              <label class="label">ID Line</label>
              <div class="control">
                <input class="input" type="text" name="id-line" placeholder="id line">
              </div>
            </div>

            <button class="button is-success" type="submit"> <i class="fa fa-check"> </i>&nbsp; Save </button>
            <button class="button" type="button" onclick="window.location.href='/user'"> <i class="fa fa-close"> </i>&nbsp; Cancel </a>
          </form>

          </div>
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
<script type="text/javascript">
  function refresh() {
    if ($('#asal-sma-select').val() == 'Lainnya') {
      $('#asal-sma').attr('type', 'text');
    } else {
      $('#asal-sma').attr('type', 'hidden');
      $('#asal-sma').val($('#asal-sma-select').val());
    }
  }
  $('#asal-sma-select').on('change', refresh);
  refresh();
</script>
@endsection