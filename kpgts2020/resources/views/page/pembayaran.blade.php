@extends('layout')

@section('title'){{ trans('menu.payment') }}@endsection
@section('description')Cara melakukan pembayaran untuk TONAMPTN 2020@endsection
@section('url')/pembayaran@endsection

@section('before-styles')
@endsection

@section('after-styles')
<style type="text/css">
  .content figure {
    margin-left: 0;
    margin-right: 0;
    max-width: 300px;
  }
</style>
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-3 is-hidden-mobile">
          @include('inc.menu.tonamptn')
        </div>
        <span class="menu-border"> </span>
        <div class="column is-9">
          <div class="columns is-multiline">
            <div class="column is-12">
              <h1> {{ trans('menu.payment') }} </h1>
            </div>
            <div class="column is-12" >
              <div class="box">
              <div class="content">
                <p> Masih bingung cara bayar? Bingung registrasi? Takut salah? Yuk cek tutorial di bawah! </p>
                <p> Pilih cara pembayaran:
                  <select id="cara-pembayaran">
                    <option value="transfer"> Transfer </option>
                    <option value="pj"> PJ Sekolah </option>
                  </select>
                </p>

                <p>Pertama, <strong> <a target="_blank" href="/user/register">buat akun peserta</a></strong>. Pastikan email yang terisi valid, karena kartu peserta akan dikirim ke email yang dimasukkan. </p>
                <figure class="image">
                  <img src="/img/pembayaran/step1.png">
                </figure>

                <p>Kedua, <strong><a target="_blank" href="/user/login">login ke akun yang baru dibuat</a></strong>. Gunakan email dan password yang digunakan di langkah pertama. Bila lupa password, silakan <strong><a target="_blank" href="/kontak">kontak kami</a></strong>. </p>
                <figure class="image">
                  <img src="/img/pembayaran/step2.png">
                </figure>

                <div id="transfer" style="display:block">
                  <p>Ketiga, <strong><a target="_blank" href="/user/redirect-edit-data">isi data peserta</a></strong>. Pastikan semua data diisi. Pendaftaran hanya valid jika semua data sudah diisi, kecuali ID Line. Kalau sudah, klik tombol Save.</p>
                  <figure class="image">
                    <img src="/img/pembayaran/step3-trf.png">
                  </figure>

                  <p>Keempat, ikuti cara pembayaran yang tertera di <strong><a target="_blank" href="/user/dashboard">dashboard</a></strong>. Transfer ke rekening yang tertera <strong>sampai 3 digit terakhir</strong>.</p>
                  <figure class="image">
                    <img src="/img/pembayaran/step4-trf.png">
                  </figure>
                </div>
                <div id="pj" style="display:none">
                  <p>Ketiga, <strong><a target="_blank" href="/user/redirect-edit-data">isi data peserta</a></strong>. Pastikan semua data diisi. Pendaftaran hanya valid jika semua data sudah diisi, kecuali ID Line. Kalau sudah, klik tombol Save.</p>
                  <figure class="image">
                    <img src="/img/pembayaran/step3-pj.png">
                  </figure>

                  <p>Keempat, ikuti cara pembayaran yang tertera di <strong><a target="_blank" href="/user/dashboard">dashboard</a></strong>. Bayar sebesar biaya yang tertera ke PJ Sekolah kamu, yang namanya ada di dashboard. Jangan lupa beritahu nomor registrasi ke PJ Sekolah ya.</p>
                  <figure class="image">
                    <img src="/img/pembayaran/step4-pj.png">
                  </figure>
                </div>

                <p>Kelima, tunggu konfirmasi dari panitia. Bila sudah, akan dikirim email ke email yang kamu daftarkan. Email akan dikirim <strong> paling lambat 3 hari setelah pembayaran</strong>. Bila masih belum dapat, silakan <strong><a target="_blank" href="/kontak">kontak kami</a></strong> secepatnya. Email akan berisi seperti ini:</p>
                <figure class="image">
                  <img src="/img/pembayaran/step5.png">
                </figure>
                <p> <strong><a target="_blank" href="/user/dashboard"> Dashboard </a> </strong> juga akan terupdate berisi kartu peserta. Jika demikian, SELAMAT! Kamu sudah resmi menjadi peserta TONAMPTN KPGTS2020! </p> 

                <p> Bila ada pertanyaan, tanyakan <strong><a target="_blank" href="/kontak">pada kami</a></strong>. </p> 

              </div>
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
  $('select#cara-pembayaran').on('change', function() {
    $('#transfer').css('display','none');
    $('#pj').css('display','none');
    $('#'+this.value).css('display','block');
  });
</script>
@endsection