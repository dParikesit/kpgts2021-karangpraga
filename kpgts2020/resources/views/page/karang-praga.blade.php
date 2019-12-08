@extends('layout')

@section('title') {{ trans('menu.karang_praga') }} @endsection

@section('before-styles')
@endsection

@section('after-styles')
<style>
  .gallery {
    margin: 5px;
    float: left;
  }

  .gallery img {
    width: 270px;
    height: 180px;
    transition: all 0.2s ease;
  }

  .gallery img:hover {opacity: 0.7;}
</style>
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-3 is-hidden-mobile">
          @include('inc.menu.main')
        </div>
        <span class="menu-border"> </span>
        <div class="column is-9">
          <div class="columns is-multiline">
            <div class="column is-12">
              <h1> {{ trans('menu.karang_praga') }} </h1>
            </div>
            <div class="column is-half" style="margin: auto">
              <figure class="image">
                <img src="/img/logo-kp.png" alt="Karangpraga">
              </figure>
            </div>
            <div class="column is-12" >
              <div class="content">
                <p> Karang Praga sendiri adalah kependekan dari Keluarga Semarang Putra Ganesha, sebuah perkumpulan mahasiswa dan alumni ITB asal Semarang, baik SMA maupun tempat tinggal. Karang Praga ter-deklarasi tanggal 20 November 2011. Karang Praga juga dapat berarti pelaku, ataupun teladan yang kuat bagaikan batu karang, yang berarti kita berharap anggota Karang Praga dapat menjadi contoh bagi masyarakat umum di sekitar kita. </p>
                <p>Karang Praga hanya merupakan wadah, ia terbuka bagi mahasiswa yang memang berasal dari Semarang maupun pernah berkesempatan tinggal dan merasa dibesarkan oleh Kota Semarang. Hingga saat ini cukup banyak kegiatan yang telah dilaksanakan didalam Karang Praga : antara lain Malam Keakraban, Tutorial untuk mahasiswa tingkat pertama, duduk bareng alumni ngopi sore sambil cerita Kota Semarang serta acara andalan yang ditunggu anak SMA di Semarang: Karang Praga Goes to School (KPGTS), yaitu pengenalan program studi dan kehidupan di kampus ITB.</p>
                <h2>Latar Belakang</h2>
                <p>Pada sekitaran Masa Penerimaan Mahasiswa Baru ITB 2011, beberapa mahasiswa perwakilan suku alumni SMA asal Semarang berkumpul untuk membahas suatu gagasan untuk mempersatukan mahasiswa ITB asal Semarang. Gagasan yang terbilang berani untuk pemuda-pemudi Semarang yang masih polos kala itu. Gagasan ini muncul pada awalnya karena urgensi untuk memperkuat rasa kekeluargaan sesama mahasiswa asal ibukota Jawa tengah yang agak mengalami gegar budaya melihat kehidupan kampus dan kota Bandung yang begitu berbeda. Urgensi itu semakin menguat karena kesamaan rasa untuk berterima kasih kepada Kota Semarang. Kota yang telah memberikan pendidikan dan membentuk pribadi sejak hayat dikandung badan. </p>
                <p>Tanpa banyak berwacana, kesepakatan pun dibuat. Pada tangal 20 bulan 11 tahun 2011, ‘bayi’ yang diberi nama Karang Praga lahir. Nama Karang Praga tidak hanya merupakan singkatan dari ‘Keluarga Semarang Putra Ganesa’, melainkan juga melambangkan harapan sesama mahasiswa asal Semarang yang kokoh laksana karang. Kuat dan menaungi.</p>
                <h2>Momen Kami</h2>
                <div class="gallery">
                  <img id = "1" src="img/momen-kp/kereta.jpg" alt="kereta"></img>
                  <img id = "2" src="img/momen-kp/syukwis.jpg" alt="syukwis"></img>
                  <img id = "3" src="img/momen-kp/kpgts_2017.jpg" alt="kpgts 2017"></img>
                  <img id = "4" src="img/momen-kp/kawah_putih.jpg" alt="kawah putih"></img>
                  <img id = "5" src="img/momen-kp/angkatan_12.jpg" alt="2012"></img>
                  <img id = "6" src="img/momen-kp/turunan.jpg" alt="turunan buku"></img>
                  <img id = "7" src="img/momen-kp/kp17_gath.jpg" alt="gathering kp17"></img>
                  <img id = "8" src="img/momen-kp/angkatan_13.jpg" alt="2013"></img>
                  <img id = "9" src="img/momen-kp/stand_itb.jpg" alt="stand ITB"></img>
                </div>
                <div class="modal">
                  <div class="modal-background"></div>
                  <div class="modal-content">
                    <img id = "1mod" src="img/momen-kp/kereta.jpg" alt="kereta"></img>
                    <img id = "2mod" src="img/momen-kp/syukwis.jpg" alt="syukwis"></img>
                    <img id = "3mod" src="img/momen-kp/kpgts_2017.jpg" alt="kpgts 2017"></img>
                    <img id = "4mod" src="img/momen-kp/kawah_putih.jpg" alt="kawah putih"></img>
                    <img id = "5mod" src="img/momen-kp/angkatan_12.jpg" alt="2012"></img>
                    <img id = "6mod" src="img/momen-kp/turunan.jpg" alt="turunan buku"></img>
                    <img id = "7mod" src="img/momen-kp/kp17_gath.jpg" alt="gathering kp17"></img>
                    <img id = "8mod" src="img/momen-kp/angkatan_13.jpg" alt="2013"></img>
                    <img id = "9mod" src="img/momen-kp/stand_itb.jpg" alt="stand ITB"></img>
                  </div>
                  <button class="modal-close is-large" aria-label="close"></button>
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
<script type="text/javascript" src="js/modal.js"></script>
@endsection