@extends('layout')

@section('title'){{ trans('menu.schedule_to') }}@endsection
@section('description')Jadwal pelaksanaan TONAMPTN 2020 di Semarang@endsection
@section('url')/jadwal-to@endsection

@section('before-styles')
@endsection

@section('after-styles')
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
              <h1> {{ trans('menu.schedule_to') }} </h1>
            </div>
            <div class="column is-12" >
            <p> Belum ditentukan. </p>
            {{--
              <div class="content">
                <table>
                  <tr><td>Pendaftaran ulang</td><td>3.00</td></tr>
                  <tr><td>Lingak-linguk nggoleki ruangan</td><td>5.00</td></tr>
                  <tr><td>Akhire raksido TO, ruangane rak ketemu</td><td>17.00</td></tr>
                </table>
              </div>
              --}}
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