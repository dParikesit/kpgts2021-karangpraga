@extends('layout')

@section('title') Edit Account @endsection

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
          <h1> Edit Data Peserta </h1>
          <button class="button" onclick="window.location.href='/user/registration'"><i class="fa fa-arrow-left"> </i> &nbsp; Back </button> <br/> <br/>

          <div class="box">
          <form action="/user/registration/{{ $registration->id }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

            <div class="field">
              <label class="label">Nama</label>
              <div class="control">
                <input class="input" type="text" name="name" placeholder="Nama Lengkap" value="{{ isset($old['nama'])?:Auth::user()->name }}">
              </div>
            </div>

            <div class="field">
              <label class="label">Kelompok Ujian</label>
              <div class="control">
                <div class="select">
                  <select name="kelompok-ujian">
                    <option
                    @if ((isset($old['kelompok-ujian']) && $old['kelompok-ujian']=='Saintek') || $registration->kelompok_ujian=='Saintek')
                    selected
                    @endif
                    value="Saintek"
                    >Saintek</option>
                    <option
                    @if ((isset($old['kelompok-ujian']) && $old['kelompok-ujian']=='Soshum') || $registration->kelompok_ujian=='Soshum')
                    selected
                    @endif
                    value="Soshum"
                    >Soshum</option>
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
                    <option
                    @if ((isset($old['asal-sma']) && $old['asal-sma']==$sma) || $registration->sma==$sma)
                    selected
                    @endif
                    value="{{ $sma }}"
                    >{{ $sma }}</option>
                    @endforeach
                    <option value="Lainnya"
                    @if ($registration->sma != '' && !in_array($registration->sma, $smas))
                    selected
                    @endif
                    >Lainnya</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input class="input" name="asal-sma" placeholder="Asal SMA" id="asal-sma" value="{{ isset($old['asal_sma'])?:$registration->sma }}"
                @if ($registration->sma != '' && !in_array($registration->sma, $smas))
                type="text"
                @else
                type="hidden"
                @endif
                >
              </div>
            </div>

            <div class="field">
              <label class="label">Metode Pembayaran</label>
              <div class="control">
                <div class="select">
                  <select id="metode-pembayaran-select">
                    <option
                    @if ((isset($old['metode-pembayaran']) && $old['metode-pembayaran']=='PJ Sekolah') || $registration->metode_pembayaran=='PJ Sekolah')
                    selected
                    @endif
                    value="PJ Sekolah"
                    >PJ Sekolah (Cash)</option>
                    <option
                    @if ((isset($old['metode-pembayaran']) && $old['metode-pembayaran']=='Transfer') || $registration->metode_pembayaran=='Transfer')
                    selected
                    @endif
                    value="Transfer"
                    >Transfer</option>
                  </select>
                  <input name="metode-pembayaran" id="metode-pembayaran" value="{{ isset($old['metode_pembayaran'])?:$registration->metode_pembayaran }}" type="hidden" >
                </div>
              </div>
              <small> * Tidak semua SMA memiliki PJ Sekolah </small>
            </div>

            <div class="field">
              <label class="label">Nomor HP*</label>
              <div class="control">
                <input class="input" type="text" name="no-hp" placeholder="08xxxxxxxxxx" value="{{ isset($old['no-hp'])?:$registration->no_hp }}">
              </div>
            </div>

            <div class="field">
              <label class="label">Nomor WA*</label>
              <div class="control">
                <input class="input" type="text" name="no-wa" placeholder="08xxxxxxxxxx" value="{{ isset($old['no-wa'])?:$registration->no_wa }}">
              </div>
            </div>

            <div class="field">
              <label class="label">ID Line</label>
              <div class="control">
                <input class="input" type="text" name="id-line" placeholder="id line" value="{{ isset($old['id-line'])?:$registration->id_line }}">
              </div>
            </div>

            <button class="button is-success" type="submit"> <i class="fa fa-check"> </i>&nbsp; Save </button>
            <button class="button" type="button" onclick="window.location.href='/user/registration/'"> <i class="fa fa-close"> </i>&nbsp; Cancel </a>
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
      $('#metode-pembayaran-select').prop('disabled', true);
      $('#metode-pembayaran-select option[value="Transfer"]').prop('selected', true);
      $('#metode-pembayaran-select option[value="PJ Sekolah"]').prop('selected', false);
    } else {
      $('#asal-sma').attr('type', 'hidden');
      $('#asal-sma').val($('#asal-sma-select').val());
      $('#metode-pembayaran-select').prop('disabled', false);
    }
    $('#metode-pembayaran').val($('#metode-pembayaran-select').val())
  }
  $('#asal-sma-select').on('change', refresh);
  $('#metode-pembayaran-select').on('change', refresh);
  refresh();
</script>
@endsection