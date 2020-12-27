@extends('layout')

@section('title', 'Panitia')
@section('description', 'Daftar dan susunan panitia yang bertugas di KPGTS 2021')
@section('url', '/panitia')

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
              <h4> <strong> Muhammad Faiq Dhiya Ul Haq (STI 19) </strong> </h4>

              <h2> Sekretaris </h2>
              <h4> <strong> Rahma Zanafia Priyanta (MR 19) </strong></h4>

              <h2> Bendahara </h2>
              <h4> <strong> Dina Syarafina Aribah (MB 22) </strong></h4>

              <h2> Acara </h2>
              <h4> <strong> Ihza Fikry Aryaditama Arrozie (MG 19) </strong> </h4>
              <div class="columns is-multiline">
                <div class="column is-4"> <strong> Roadshow </strong> </div>
                <div class="column is-8">
                  <strong> Ilham Rahadian Widyananda (SI 19) </strong> <br>
                  Yumaa Fadhil Naufal Hidayat (FTMD 20) <br>
                  Salsabila Gitta Arifani (FTI 20) <br>
                  Farrel Rheza Prakusya (FTTM 20) <br>
                  Laksamana Vixell Tanjaya Hartono (STEI 20) <br>
                  Fadya Zalfa Rahmanita (FTTM 20) <br>
                  Gibran Kastara Pandega Pragata (FTSL 20) <br>
                  Immanuella Natasha Girsang (FTMD 20) <br>
                  Risyad Rachman (SBM 23)
                </div>
                <div class="column is-4"> <strong> Tryout </strong> </div>
                <div class="column is-8">
                  <strong> Widya Anugerah Putra (IF 19) </strong> <br>
                  Muhammad Faishol Arriq (FTTM 20) <br>
                  Reinaldi Santoso (FTTM 20) <br>
                  Rafida Khairani (FTI 20) <br>
                  Della Altania Yuwono (SF 20) <br>
                  Dave Theopilus Soegiharto (FTSL 20) <br>
                  Khansa Kamila Qurrota A'yun (FTI 20)
                </div>
              </div>

              <h2> Humas </h2>
              <h4> <strong> Azis Arbi Kurniawan (KL 19) </strong></h4>
              <div class="columns is-multiline">
                <div class="column is-4"> <strong> Publikasi dan Dokumentasi </strong> </div>
                <div class="column is-8">
                  <strong> Yudith Pratama Ibrahim (TG 19) </strong> </br>
                  Dinda Desintya Ramadani (FTSL 20) <br>
                  Rizky Maulana Acyuta Dzaky (FTSL 20) <br>
                  Dani Hibatullah (FTMD 20) <br>
                  Adelia Paramesti (FTSL 20) <br>
                  Talitha Amalia Salsabila (FTI 20) <br>
                  Muhammad Ammarul Nafi' (FTMD 20) <br>
                  Muhammad Rey Shazni Helmi (STEI 20) <br>
                  Binar Waskito (FTI 20) <br>
                  Elvina Permata Putri Purwanto (SBM 23) <br>
                  Yubella Ratna Feirani (FTSL 2020)
                </div>
                <div class="column is-4"> <strong> Desain Grafis </strong> </div>
                <div class="column is-8">
                  <strong> Qanissa Aghara (SR 19) </strong> </br>
                </div>
              </div>

              <h2> Operasional </h2>
              <h4> <strong> Allandra Dewantara (TI 19) </strong></h4>
              <div class="columns is-multiline">
                <div class="column is-4"> <strong> Registrasi </strong> </div>
                <div class="column is-8">
                  <strong> Tito Wijayanto (TK 19) </strong> <br>
                  Ashfia Pramita Nurfitriani (FTSL 20) <br>
                  Wahyu Sasangka Jati (FTSL 20) <br>
                  Khoirunnisa Aprilia Santikasari (SITH-S 20) <br>
                  Chairul Syifa (FTI 20) <br>
                  Syifa Mutia Rahma (FMIPA 20) <br>
                  Adelia Sheralyn Najwa (FTI 20) <br>
                  Hughie Raymonelika Manggala (STEI 20) <br>
                  Marshal Zulkarnaen Hartono (FTTM 20) <br>
                  Nadhira (SBM 23) <br>
                  Cisna Argipuspa Rahmaesthi S (FTSL 20)
                </div>
                <div class="column is-4"> <strong> IT </strong> </div>
                <div class="column is-8">
                  <strong> Akeyla Pradia Naufal (IF 19) </strong> <br>
                  Marcellus Michael Herman Kahari (STEI 20) <br>
                  Dimas Shidqi Parikesit (STEI 20) <br>
                  Aditya Prawira Nugroho (STEI 20) <br>
                  Kristo Abdi Wiguna (STEI 20)
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