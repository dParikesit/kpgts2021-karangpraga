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
          @include('inc.menu.admin')
        </div>
        <span class="menu-border"> </span>
        <div class="column is-9">
          <h1> Edit Data Peserta </h1>
          <button class="button" onclick="window.location.href='/admin/user'"><i class="fa fa-arrow-left"> </i> &nbsp; Back </button> <br/> <br/>

          <div class="box">
          <form action="/admin/user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

            <div class="field">
              <label class="label">Nama</label>
              <div class="control">
                <input class="input" type="text" name="name" placeholder="Nama Lengkap" value="{{ isset($old['nama'])?:$user->name }}">
              </div>
            </div>

            <div class="field">
              <label class="label">Kelompok Ujian</label>
              <div class="control">
                <div class="select">
                  <select name="kelompok-ujian">
                    <option
                    @if ((isset($old['kelompok-ujian']) && $old['kelompok-ujian']=='Saintek') || $user->registration->kelompok_ujian=='Saintek')
                    selected
                    @endif
                    value="Saintek"
                    >Saintek</option>
                    <option
                    @if ((isset($old['kelompok-ujian']) && $old['kelompok-ujian']=='Soshum') || $user->registration->kelompok_ujian=='Soshum')
                    selected
                    @endif
                    value="Soshum"
                    >Soshum</option>
                    <option
                    @if ((isset($old['kelompok-ujian']) && $old['kelompok-ujian']=='Campuran') || $user->registration->kelompok_ujian=='Campuran')
                    selected
                    @endif
                    value="Campuran"
                    >Campuran</option>
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
                    @if ((isset($old['asal-sma']) && $old['asal-sma']==$sma) || $user->registration->sma==$sma)
                    selected
                    @endif
                    value="{{ $sma }}"
                    >{{ $sma }}</option>
                    @endforeach
                    <option value="Lainnya"
                    @if ($user->registration->sma != '' && !in_array($user->registration->sma, $smas))
                    selected
                    @endif
                    >Lainnya</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input class="input" name="asal-sma" placeholder="Asal SMA" id="asal-sma" value="{{ isset($old['asal_sma'])?:$user->registration->sma }}"
                @if ($user->registration->sma != '' && !in_array($user->registration->sma, $smas))
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
                  <select id="metode-pembayaran-select" name="metode-pembayaran">
                    <option
                    @if ((isset($old['metode-pembayaran']) && $old['metode-pembayaran']=='PJ Sekolah') || $user->registration->metode_pembayaran=='PJ Sekolah')
                    selected
                    @endif
                    value="PJ Sekolah"
                    >PJ Sekolah (Cash)</option>
                    <option
                    @if ((isset($old['metode-pembayaran']) && $old['metode-pembayaran']=='Transfer') || $user->registration->metode_pembayaran=='Transfer')
                    selected
                    @endif
                    value="Transfer"
                    >Transfer</option>
                    <option
                    @if ((isset($old['metode-pembayaran']) && $old['metode-pembayaran']=='Roadshow') || $user->registration->metode_pembayaran=='Roadshow')
                    selected
                    @endif
                    value="Roadshow"
                    >Roadshow</option>
                  </select>
                </div>
              </div>
              <small> * Tidak semua SMA memiliki PJ Sekolah </small>
            </div>

            <div class="field">
              <label class="label">Nomor HP</label>
              <div class="control">
                <input class="input" type="text" name="no-hp" placeholder="08xxxxxxxxxx" value="{{ isset($old['no-hp'])?:$user->registration->no_hp }}">
              </div>
            </div>

            <div class="field">
              <label class="label">ID Line</label>
              <div class="control">
                <input class="input" type="text" name="id-line" placeholder="id line" value="{{ isset($old['id-line'])?:$user->registration->id_line }}">
              </div>
            </div>

            <button class="button is-success" type="submit"> <i class="fa fa-check"> </i>&nbsp; Save </button>
            <button class="button" type="button" onclick="window.location.href='/admin/user/{{ $user->id }}'"> <i class="fa fa-close"> </i>&nbsp; Cancel </a>
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