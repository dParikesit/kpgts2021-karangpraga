@extends('layout')

@section('title'){{ trans('menu.schedule_school') }}@endsection
@section('description')Jadwal dari sekolah yang dikunjungi KPGTS! Nantikan kami di sekolahmu!@endsection
@section('url')/roadshow-sekolah@endsection

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
                    <td> SMAN 1 UNGARAN </td>
                    <td> 2 Januari </td>
                    <td> 09.00 </td>
                    <td> Terpusat </td>
                  </tr>
                  <tr>
                    <td> SMAN 5 SEMARANG </td>
                    <td> 6 Januari </td>
                    <td> 13.00 </td>
                    <td> Kelas </td>
                  </tr>
                  <tr>
                    <td> SMAN 3 SEMARANG </td>
                    <td> 6 Januari </td>
                    <td> 15.30 </td>
                    <td> Terpusat </td>
                  </tr>
                  <tr>
                    <td> SMA YSKI SEMARANG </td>
                    <td> 7 Januari </td>
                    <td> 08.00 </td>
                    <td> Terpusat </td>
                  </tr>
                  <tr>
                    <td> SMAN 1 DEMAK </td>
                    <td> 7 Januari </td>
                    <td> 08.00 </td>
                    <td> Terpusat </td>
                  </tr>
                  <tr>
                    <td> SMAN 2 SEMARANG </td>
                    <td> 8 Januari </td>
                    <td> 08.00 </td>
                    <td> Terpusat </td>
                  </tr>
                  <tr>
                    <td> SMAN 1 KENDAL </td>
                    <td> 9 Januari </td>
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