@extends('layout')

@section('title') Dashboard @endsection

@section('before-styles')
@endsection

@section('after-styles')
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-3">
          @include('inc.menu.admin')
        </div>
        <span class="menu-border"> </span>
        <div class="column is-9">
          <h1> Dashboard </h1>
          <p> <strong> {{ $peserta_cnt }} peserta </strong> sudah membuat akun. </p>
          <p> <strong> {{ $peserta_reg_cnt }} peserta </strong> sudah terverifikasi. </p>
          <div id="peserta-chart">
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
  {!! $lava->render('LineChart', 'Progress Peserta', 'peserta-chart') !!}
@endsection