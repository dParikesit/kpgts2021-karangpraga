@extends('layout')

@section('title') Request Nomor Peserta @endsection

@section('before-styles')
@endsection

@section('after-styles')
@endsection

@section('main')
<div class="modal" id="modal-nomor-pag">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Daftar Nomor Paguyuban</p>
    </header>
    <section class="modal-card-body">
      <ul>
        <li> 001 Widyakelana (Surakarta) </li>
        <li> 002 KMC ITB (Ciamis) </li>
        <li> 003 Ganesha Jogja (Yogyakarta) </li>
        <li> 004 KMJB (Jember) </li>
        <li> 005 Kapur Ganesha </li>
        <li> 006 UKB Debust ITB (Banten) </li>
        <li> 007 KARIB (Tuban) </li>
        <li> 008 Kemala Bandung (Lumajang) </li>
        <li> 009 Perhimak (Kebumen) </li>
        <li> 010 PKB Bali Dwipa </li>
        <li> 011 Unit Kebudayaan Aceh </li>
        <li> 012 Gamas (Banyumas) </li>
        <li> 013 Setyaki (Klaten) </li>
        <li> 014 Paguyuban Purbalingga </li>
        <li> 015 KMT ITB (Tasikmalaya) </li>
        <li> 016 Ganong (Ponorogo) </li>
        <li> 017 Keluarga Mahasiswa Pati (KMP) ITB </li>
        <li> 018 Ganesha Bersenyum (Temanggung) </li>
        <li> 019 KPMM (Magelang) </li>
        <li> 020 Rumah Asik (Kota Sukabumi) </li>
        <li> 021 FORMAGA ITB (Trenggalek) </li>
        <li> 022 Formasi B (Bogor) </li>
        <li> 023 UBALA (Lampung) </li>
        <li> 024 Karang Praga (Semarang) </li>
        <li> 025 Wijaya Ganesha (Mojokerto) </li>
        <li> 026 UKSS (Makassar) </li>
        <li> 027 MIB (Bekasi) </li>
        <li> 028 UKMR (Riau) </li>
        <li> 029 KGMC (Cirebon) </li>
        <li> 030 PMKB (Kab. Bandung) </li>
        <li> 031 ALD Kediri </li>
        <li> 032 GAMA TB (Tegal-Brebes) </li>
        <li> 033 Unit Kebudayaan Kalimantan </li>
        <li> 034 Ikamanggaluh (Surabaya, Sidoarjo, Gresik) </li>
        <li> 035 Tadulako (Sulawesi Tengah) </li>
        <li> 036 BASIC (Blora) </li>
      </ul>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success" id="close-modal">Tutup</button>
    </footer>
  </div>
</div>
  <section class="section">
    <div class="container">
      <div class="columns is-multiline">
        <div class="column is-12">
          <h1> Request Nomor Peserta TO </h1>
        </div>
        <div class="column">
          <div class="field">
            <label class="label">Nomor Paguyuban</label>
            <div class="control">
              <input class="input" type="number" id="no-pag" placeholder="AAA">
            </div>
            <p class="help" id="open-modal"><a href="#">Lihat nomor paguyuban</a></p>
          </div>
        </div>
        <div class="column">
          <div class="field">
            <label class="label">Kode Soal</label>
            <p class="control">
              <span class="select">
                <select id="no-soal">
                  <option value="1" selected>Saintek</option>
                  <option value="2">Soshum</option>
                </select>
              </span>
            </p>
          </div>
        </div>
        <div class="column">
          <div class="field">
            <label class="label">Jumlah Nomor</label>
            <div class="control">
              <input class="input" type="number" id="no-peserta" placeholder="CCC">
            </div>
            <p class="help">jumlah maksimal nomor</p>
          </div>
        </div>
        <div class="column">
          <div class="field">
            <label class="label">Pemisah</label>
            <div class="control">
              <input class="input" type="text" id="pemisah" placeholder="Text input">
            </div>
            <p class="help">Separator</p>
          </div>
        </div>
        <div class="column is-12" id="result">
          No Input.
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
<script type="text/javascript" src="/js/nomor-peserta.js"></script>
@endsection