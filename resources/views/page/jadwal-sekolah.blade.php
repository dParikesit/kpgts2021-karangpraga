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