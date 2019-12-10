@extends('layout')

@section('title', 'Info Fakultas')
@section('description', 'Informasi mengenai Fakultas dan Sekolah yang ada di ITB')
@section('url', '/info-fakultas')

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
        <div class="column is-3 is-hidden-mobile">
          @include('inc.menu.roadshow')
        </div>
        <span class="menu-border"> </span>
        <div class="column is-9">
          <h1> Info Fakultas </h1>

          <div class="box">
            <div class="content">
              <p> Fakultas / Sekolah yang ada di ITB: </p>
              <ul>
                <li> <a href="/berita/fmipa"> FMIPA (Fakultas Matematika dan Ilmu Pengetahuan Alam) </a> </li>
                <li> <a href="/berita/siths"> SITH-S (Sekolah Ilmu dan Teknologi Hayati - Sains) </a> </li>
                <li> <a href="/berita/sithr"> SITH-R (Sekolah Ilmu dan Teknologi Hayati - Rekayasa) </a> </li>
                <li> <a href="/berita/sf"> SF (Sekolah Farmasi) </a> </li>
                <li> <a href="/berita/fttm"> FTTM (Fakultas Teknik Pertambangan dan Perminyakan) </a> </li>
                <li> <a href="/berita/fitb"> FITB (Fakultas Ilmu dan Teknologi Kebumian) </a> </li>
                <li> <a href="/berita/fti"> FTI (Fakultas Teknologi Industri) </a> </li>
                <li> <a href="/berita/stei"> STEI (Sekolah Teknik Elektro dan Informatika) </a> </li>
                <li> <a href="/berita/ftmd"> FTMD (Fakultas Teknik Mesin dan Dirgantara) </a> </li>
                <li> <a href="/berita/ftsl"> FTSL (Fakultas Teknik Sipil dan Lingkungan) </a> </li>
                <li> <a href="/berita/sappk"> SAPPK (Sekolah Arsitektur, Perencanaan, dan Pengembangan Kebijakan) </a> </li>
                <li> <a href="/berita/fsrd"> FSRD (Fakultas Seni Rupa dan Desain) </a> </li>
                <li> <a href="/berita/sbm"> SBM (Sekolah Bisnis dan Manajemen) </a> </li>
              </ul>
              <p> <a href="/berita/fakultas-dan-sekolah"> Apa itu fakultas dan sekolah? </a> </p>
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