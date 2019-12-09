@extends('layout')

@section('title') Panitia @endsection

@section('before-styles')
@endsection

@section('after-styles')
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
              <h1> {{ trans('menu.committee') }} </h1>
            </div>
            <div class="column is-half" style="margin: auto">
              <figure class="image">
                <img src="/img/organigram.jpg" alt="organigram">
              </figure>
            </div>
            <div class="column is-12">
              <h2> Ketua </h2>
              <h4> <strong> Teresa Amalia (GD 18) </strong> </h4>

              <h2> Roadshow </h2>
              <h4> <strong> Gian Vere Adonis (MG 18) </strong> </h4>
              <div class="columns is-multiline">
                  NAMA_BOCAHE_VERE_DIGANTI_YAA <br/>
                  NAMA_BOCAHE_VERE_DIGANTI_YAA
              </div>

              <h2> TONAMPTN </h2>
              <h4> <strong> Nanda Yulanda (TK 18) </strong></h4>
              <div class="columns is-multiline">
                  NAMA_BOCAHE_NANDO_DIGANTI_YAA <br/>
                  NAMA_BOCAHE_NANDO_DIGANTI_YAA
              </div>

              <h2> Lapangan </h2>
              <h4> <strong> Eduardus Ariasena (EB 18) </strong></h4>
              <div class="columns is-multiline">
                <div class="column is-4"> <strong> Registrasi </strong> </div>
                <div class="column is-8">
                  <strong> Adhi Satriyatama (TK 18) </strong> </br>
                  NAMA_BOCAHE_ADHI_DIGANTI_YAA
                </div>
                <div class="column is-4"> <strong> Logistik </strong> </div>
                <div class="column is-8">
                  <strong> Dismas W (EL 18) </strong> </br>
                  NAMA_BOCAHE_DISMAS_DIGANTI_YAA
                </div>
                <div class="column is-4"> <strong> Konsumsi </strong> </div>
                <div class="column is-8">
                  <strong> Dewi Mawaddatus S (TK 18) </strong> <br>
                  DIGANTI_YAA
                </div>
              </div>

              <h2> Humas </h2>
              <h4> <strong> Hilman Danu (MS 18) </strong></h4>
              <div class="columns is-multiline">
                <div class="column is-4"> <strong> Perizinan </strong> </div>
                <div class="column is-8">
                  <strong> Faiz Hasan (TL 18) </strong> </br>
                  NAMA_BOCAHE_FAIZ_DIGANTI_YAA
                </div>
                <div class="column is-4"> <strong> Publikasi </strong> </div>
                <div class="column is-8">
                  <strong> Qorry Aina (KU 18) </strong> </br>
                  NAMA_BOCAHE_QORRY_DIGANTI_YAA
                </div>
              </div>

              <h2> Sekretaris </h2>
              <h4> <strong> Audrey Xaveria (PG 18) </strong></h4>
              <div class="columns is-multiline">
                <div class="column is-4"> <strong> Relasi Panitia </strong> </div>
                <div class="column is-8">
                  <strong> Andjani Widya (EB 18) </strong> <br>
                  DIGANTI_YAA
                </div>
                <div class="column is-4"> <strong> Pengarsipan </strong> </div>
                <div class="column is-8">
                  <strong> Labitta Qonitah (AR 18) </strong> <br>
                  DIGANTI_YAA
                </div>
              </div>

              <h2> Bendahara </h2>
              <h4> <strong> Mutia Nabila (TA 18) </strong></h4>
              <div class="columns is-multiline">
                <div class="column is-4"> <strong> Sponsorship </strong> </div>
                <div class="column is-8">
                  <strong> Fadhillah Hidayat (AR 18) </strong> <br>
                  DIGANTI_YAA
                </div>
                <div class="column is-4"> <strong> Dana Usaha </strong> </div>
                <div class="column is-8">
                  <strong> Michelle Theresia (IF 18) </strong> <br>
                  DIGANTI_YAA
                </div>
              </div>

              <h2> Kreatif </h2>
              <h4> <strong> Nadia Winda (TI 18) </strong></h4>
              <div class="columns is-multiline">
                <div class="column is-4"> <strong> Dokumentasi </strong> </div>
                <div class="column is-8">
                  <strong> Aulia Azizah (FKK 18) </strong> <br>
                  Johanes <br>
                  Anggid Primastiti
                </div>
                <div class="column is-4"> <strong> IT </strong> </div>
                <div class="column is-8">
                  <strong> Jonathan Yudi Gunawan (IF 18) </strong> <br>
                  Widya Anugrah P (STEI 18) <br>
                  M Fatchur Rochman (STEI 18)
                </div>
                <div class="column is-4"> <strong> Desain </strong> </div>
                <div class="column is-8">
                  <strong> Azalea Ardra (DKV 18) </strong> <br>
                  Qanisha (FSRD 18)
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
@endsection