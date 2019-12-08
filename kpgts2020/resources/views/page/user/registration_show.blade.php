@extends('layout')

@section('title') Data Peserta @endsection

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
          <h1> Data Peserta </h1>
          <div class="field is-grouped">
            @if ($registration->nomor_peserta == '')
            <p class="control">
              <a class="button is-success" href="/user/registration/{{ $registration->id }}/edit">
                <i class="fa fa-edit"> </i> &nbsp;
                Edit
              </a>
            </p>
            @endif
          </div>
          <div class="box">
            @if ($registration->nomor_peserta == '')
            <div class="columns">
              <div class="column is-4"> <strong> Nomor Registrasi </strong> </div>
              <div class="column is-8"> {{ Auth::user()->registration->id }} </div>
            </div>
            @endif
            <div class="columns">
              <div class="column is-4"> <strong> Nama Lengkap* </strong> </div>
              <div class="column is-8"> {{ Auth::user()->name }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> Email* </strong> </div>
              <div class="column is-8"> {{ Auth::user()->email }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> Asal SMA* </strong> </div>
              <div class="column is-8"> {{ $registration->sma }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> Kelompok Ujian* </strong> </div>
              <div class="column is-8"> {{ $registration->kelompok_ujian }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> Metode Pembayaran* </strong> </div>
              <div class="column is-8"> {{ $registration->metode_pembayaran }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> No HP </strong> </div>
              <div class="column is-8"> {{ $registration->no_hp }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> No WA </strong> </div>
              <div class="column is-8"> {{ $registration->no_wa }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> ID Line </strong> </div>
              <div class="column is-8"> {{ $registration->id_line }} </div>
            </div>
            @if ($registration->nomor_peserta != '')
            <div class="columns">
              <div class="column is-4"> <strong> Nomor Peserta </strong> </div>
              <div class="column is-8"> {{ $registration->nomor_peserta }} </div>
            </div>
            @endif
            <div class="columns">
              <div class="column is-12">
                <p class="help"> *wajib supaya data dapat diverifikasi </p>
                @if ($registration->nomor_peserta != '')
                <p class="help"> **masih bisa berubah pada hari H TO </p>
                @endif
              </div>
            </div>
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
  $('#post-slug').on('keyup', function() {
    $('#post-slug-update').html($('#post-slug').val());
  });
  $('#post-media').on('change', function() {
    var url = $('#post-media').val();
    url = url.substring(url.lastIndexOf('\\')+1, url.length);
    $('#post-media-update').html(url);
  })
  $('#post-status').on('change', function() {
    if ($('#post-status').val() == 'Pending') {
      $('#post-date-update').css('display', 'flex');
    } else {
      $('#post-date-update').css('display', 'none');
    }
  });
</script>

@endsection