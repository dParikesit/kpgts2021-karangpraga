@extends('layout')

@section('title') {{ trans('menu.schedule_school') }} @endsection

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
                <table>
                  <tr>
                    <th> Sekolah </th>
                    <th> Tanggal </th>
                    <th> Mulai Pukul </th>
                    <th> Tempat </th>
                  </tr>
                  <tr>
                    <td> SMAN 1 </td>
                    <td> 3 Januari </td>
                    <td> 07.00 </td>
                    <td> Kelas </td>
                  </tr>
                  <tr>
                    <td> SMAN 2 </td>
                    <td> 4 Januari </td>
                    <td> 13.45 </td>
                    <td> Kelas </td>
                  </tr>
                  <tr>
                    <td> SMAN 4 </td>
                    <td> 3 Januari </td>
                    <td> 14.00 </td>
                    <td> Kelas </td>
                  </tr>
                  <tr>
                    <td> SMAN 5 </td>
                    <td> 4 Januari </td>
                    <td> 12.30 </td>
                    <td> Aula </td>
                  </tr>
                  <tr>
                    <td> SMAN 12 </td>
                    <td> 4 Januari </td>
                    <td> 08.00 </td>
                    <td> Kelas </td>
                  </tr>
                  <tr>
                    <td> SMAN 15 </td>
                    <td> 5 Januari </td>
                    <td> 11.00 </td>
                    <td> Kelas </td>
                  </tr>
                  <tr>
                    <td> SMAN 1 Ungaran </td>
                    <td> 2 Januari </td>
                    <td> 10.00 </td>
                    <td> Kelas </td>
                  </tr>
                  <tr>
                    <td> Karang Turi </td>
                    <td> 9 Januari </td>
                    <td> 08.10 </td>
                    <td> R. Teater </td>
                  </tr>
                  <tr>
                    <td> Kolese Loyola </td>
                    <td> 5 Januari </td>
                    <td> 12.10 </td>
                    <td> R. Pertemuan </td>
                  </tr>
                  <tr>
                    <td> Sedes Sapientiae </td>
                    <td> 2 Januari </td>
                    <td> 10.00 </td>
                    <td> R. Audio Visual </td>
                  </tr>
                  <tr>
                    <td> Semesta </td>
                    <td> 10 Januari </td>
                    <td> 15.00 </td>
                    <td> Aula </td>
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