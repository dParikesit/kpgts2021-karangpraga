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
              <h4> <strong> Muhammad Irsyad Yusufa (SI 16) </strong> </h4>

              <h2> Kesekjenan </h2>
              <h4> <strong> Tuah Kudratzat </strong> </h4>
              <div class="columns is-multiline">
                <div class="column is-4"> <strong> Sekretaris </strong> </div>
                <div class="column is-8">
                  Husein Naufal (MA 16)
                </div>
                <div class="column is-4"> <strong> Bendahara </strong> </div>
                <div class="column is-8">
                  Agha Maretha (EL 16)
                </div>
                <div class="column is-4"> <strong> Perizinan </strong> </div>
                <div class="column is-8">
                  Rahma Rizky (EB 16) <br/>
                  Ferdy Santoso (STEI 17) <br/>
                  Habiib Tsabit Az Zumar (STEI 17) <br/>
                  Jessica Larasati (SITHS 17) <br/>
                  Johanes Marcel Susilo (STEI 17) <br/>
                  Kevin Theodore Putra Iroth (FTMD 17) <br/>
                  Dewa Gede Surya Eka Natha (FTMD 17)
                </div>
                <div class="column is-4"> <strong> MSDM </strong> </div>
                <div class="column is-8">
                  M Ali Syaifudin (AS 16) <br/>
                  Cantika Zinedine Yuswindia (SITHS 17) <br/>
                  Martin Bangun Christmas (FTI 17) <br/>
                  Taufiq Narendra Purnama (FTI 17) <br/>
                  Monica Gunadharma (SF 17) <br/>
                  Febri Setyawan (FTI 17) <br/>
                  Zharfa Haidan Nafiilah (STEI 17)
                </div>
              </div>

              <h2> Divisi </h2>
              <div class="columns is-multiline">
                <div class="column is-4"> <strong> Roadshow </strong> </div>
                <div class="column is-8">
                  Hanafi Kusumayudha (TF 16) <br/>
                  Almira Aviorizki (FMIPA 17) <br/>
                  Dzikry Arrahim (SBM 17) <br/>
                  Gusma Sendika (FTTM 17) <br/>
                  Michael Leonardo (FTMD 17) <br/>
                  Naufal Fadli Ikhsanudin (FIMPA 17) <br/>
                  Muhammad Hanindya Budi P (STEI 17) <br/>
                  Nafis Salman B (STEI 17)
                </div>
                <div class="column is-4"> <strong> TONAMPTN </strong> </div>
                <div class="column is-8">
                  Chairul Naufal (MS 16) <br/>
                  Airlangga Ario Pamungkas (FTMD 17) <br/>
                  Christofel Rio G (STEI 17) <br/>
                  Reynaldo Ivander (FTI 17) <br/>
                  Fahmi Abdillah Samboda (FTMD 17) <br/>
                  Laurenzius Yudha Prasetya Tama (FMIPA 17) <br/>
                  Naqita Ramadhani (STEI 17)
                </div>
                <div class="column is-4"> <strong> Fundraising </strong> </div>
                <div class="column is-8">
                  Azka Bella (PL 16)<br/>
                  Yunianti Khotimah (STEI 17) <br/>
                  Alfian Mauana Ibrahim (STEI 17) <br/>
                  Fatwa Cahya Mustika (FITB 17) <br/>
                  Madha Ramadhan (SBM 17)
                </div>
                <div class="column is-4"> <strong> Registrasi </strong> </div>
                <div class="column is-8">
                  Haditya Kukuh (TK 16) <br/>
                  Alexander Baskoro P (FTSL 17) <br/>
                  Alfania Elian Diva (FMIPA 17) <br/>
                  Angelia Oktaviani Purnomo (FTI 17)
                </div>
                <div class="column is-4"> <strong> Operasional </strong> </div>
                <div class="column is-8">
                  S. S. Diwangkara (IF 16) <br/>
                  Anifa Farah Suryandari (SAPPK 17) <br/>
                  Zahra Kinanti (FTI 17) <br/>
                  Muhammad Luthfi Utomo (SBM 17) <br/>
                  Edison Budi Setiawan Djunaidi (SAPPK 17) <br/>
                  Kelvina Gemilang (SITHS 17) <br/>
                  Nikolau Evan Reinaldo (FTMD 17) <br/>
                  Ahmad Nazhief As-shofy (FTTM 17) <br/>
                  Ali Zein (FTTM 17) <br/>
                  Steven Kurniawan Chandra (FTMD 17) <br/>
                  Robby Lysander Aurelio (FTI 17)
                </div>
                <div class="column is-4"> <strong> Grapubdekdok </strong> </div>
                <div class="column is-8">
                  Yonas Adiel Wiguna (IF 16) <br/>
                  Josephin Maria Pastika (AR 16) <br/>
                  Alfredo Fikri Akbar (FTSL 17) <br/>
                  Farrell Rasyid Fadhlillah (FSRD 17) <br/>
                  Royyan Adiwijaya (SF 17) <br/>
                  Shafira Ersasiwi Aziza (FMIPA 17) <br/>
                  Devananda (STEI 17) <br/>
                  Ananda Fitria Firdausy (FSRD 17) <br/>
                  R. Keanu Pranindhia Benedetto (FTTM 17) <br/>
                  Jesslyn Athalia Sumardi (FTTM 17) <br/>
                  Khalisha Hamida (FMIPA 17) <br/>
                  Aulia Salsabella Suwarno (FITB 17) <br/>
                  Denti Rizki Kinanti (SITHS 17) <br/>
                  Evan Vilio (SBM 17) <br/>
                  Safiranissa Adityarani (FSRD 17)
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