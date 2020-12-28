@extends('layout')

@section('title', trans('menu.schedule_school'))
@section('description', 'Jadwal dari sekolah yang dikunjungi KPGTS! Nantikan kami di sekolahmu!')
@section('url', '/roadshow-sekolah')

@section('before-styles')
@endsection

@section('after-styles')
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
          <div class="columns is-multiline">
            <div class="column is-12">
              <h1> {{ trans('menu.schedule_school') }} </h1>
              <h2> <strong> Roadshow KPGTS hadir kembali tahun ini! </strong> </h2>
              <p> <strong> Acara Roadshow ini apa sih? </strong> <br> 
              Jadi, roadshow adalah salah satu rangkaian acara dari KPGTS untuk mengenalkan Institut Teknologi Bandung kepada para siswa  kelas 12 SMA sederajat. Diharapkan acara ini bisa membantu teman-teman untuk mendapat gambaran yang lebih jelas tentang fakultas dan semua hal yang berkaitan dengan ITB! <br> &nbsp; </p>
              <p> <strong> Kalau tahun ini roadshownya gimana kak? </strong> <br>
              Nah, tahun ini  Roadshow KPGTS bakal sedikit berbeda dengan tahun sebelumnya karena acaranya  akan dilakukan melalui platform zoom! Jadi, kita bisa ngikutin acaranya di rumah masing-masing!! <br> &nbsp; </p>
              <p> <strong> Kapan sih kak Roadshownya? </strong> <br>
              Roadshownya bakal dilaksanain tanggal 15 Januari 2021. Buat waktu dan linknya bakal menyusul. Jadi stay tune ya buat kabar berikutnya!! <br> &nbsp; &nbsp; </p>
              <strong> Yakali kalian gak ikut? </strong> <br>
              <strong> Yuk langsung daftar aja!! </strong> 

            </div>
            <div class="column is-12" >
              <div class="content">
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
@endsection