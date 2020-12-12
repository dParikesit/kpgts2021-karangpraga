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
            </div>
            <div class="column is-12" >
              <div class="content">
                <table style="overflow-x:auto;">
                  <tr>
                    <th> Sekolah </th>
                    <th> Tanggal </th>
                    <th> Mulai Pukul </th>
                    <th> Metode </th>
                  </tr>
                  <tr>
                    <td> SMAN 1 Ungaran </td>
                    <td> Kamis, 2 Januari 2020 </td>
                    <td> 09.00 </td>
                    <td> Terpusat </td>
                  </tr>
                  <tr>
                    <td> SMAN 1 Semarang </td>
                    <td> Jumat, 3 Januari 2020 </td>
                    <td> 10.00 </td>
                    <td> Terpusat </td>
                  </tr>
                  <tr>
                    <td> SMAN 11 Semarang </td>
                    <td> Senin, 6 Januari 2020 </td>
                    <td> 9.00 </td>
                    <td> Kelas (2 org/kelas) </td>
                  </tr>
                  <tr>
                    <td> SMAN 5 Semarang </td>
                    <td> Senin, 6 Januari 2020 </td>
                    <td> 13.00 </td>
                    <td> Kelas </td>
                  </tr>
                  <tr>
                    <td> SMAN 3 Semarang </td>
                    <td> Senin, 6 Januari 2020 </td>
                    <td> 15.30 </td>
                    <td> Terpusat </td>
                  </tr>
                  <tr>
                    <td> SMA YSKI Semarang </td>
                    <td> Selasa, 7 Januari 2020 </td>
                    <td> 08.00 </td>
                    <td> Terpusat </td>
                  </tr>
                  <tr>
                    <td> SMAN 1 Demak </td>
                    <td> Selasa, 7 Januari 2020 </td>
                    <td> 12.30 </td>
                    <td> Terpusat </td>
                  </tr>
                  <tr>
                    <td> SMA Kolese Loyola </td>
                    <td> Selasa, 7 Januari 2020 </td>
                    <td> 13.30 </td>
                    <td> Terpusat </td>
                  </tr>
                  <tr>
                    <td> SMAN 2 Semarang </td>
                    <td> Rabu, 8 Januari 2020 </td>
                    <td> 08.00 </td>
                    <td> Terpusat </td>
                  </tr>
                  <tr>
                    <td> SMAN 1 Kendal </td>
                    <td> Kamis, 9 Januari 2020 </td>
                    <td> 09.00 </td>
                    <td> Kelas </td>
                  </tr>
                </table>
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