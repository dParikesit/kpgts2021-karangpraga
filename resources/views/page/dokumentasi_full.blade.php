@extends('layout')

@section('title', trans('menu.documentation'))
@section('description', 'Dokumentasi Roadshow KPGTS yang sudah berlalu')
@section('url', '/dokumentasi')

@section('before-styles')
@endsection

@section('after-styles')
<style>
  .gallery {
    float: left;
  }

  .gallery img {
    width: 270px;
    margin: 5px;
    transition: all 0.2s ease;
  }

  .gallery img:hover {opacity: 0.7;}
  .pagination { clear: both; }
  .paginationjs-pages { margin:auto; }
</style>
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
              <h1> {{ trans('menu.documentation') }} </h1>
            </div>
            @foreach ($smas as $sma)
              <div class="column is-12">
              <h5> {{ $sma[0] }} </h5>
              <div class="gallery">
                <img id="{{ $sma[1] }}01" src="/img/roadshow/{{ $sma[1] }}01.jpg"></img>
                <img id="{{ $sma[1] }}02" src="/img/roadshow/{{ $sma[1] }}02.jpg"></img>
                <img id="{{ $sma[1] }}03" src="/img/roadshow/{{ $sma[1] }}03.jpg"></img>
              </div>
              <p> <a href="/dokumentasi/{{ $sma[1] }}"> Lihat lebih banyak ... </a> </p>
              </div>
            @endforeach
            <div class="modal">
              <div class="modal-background"></div>
              <div class="modal-content">
                @foreach ($smas as $sma)
                  <img id="{{ $sma[1] }}01mod" src="/img/roadshow/{{ $sma[1] }}01.jpg" alt="{{ $sma[1] }}-01"></img>
                  <img id="{{ $sma[1] }}02mod" src="/img/roadshow/{{ $sma[1] }}02.jpg" alt="{{ $sma[1] }}-02"></img>
                  <img id="{{ $sma[1] }}03mod" src="/img/roadshow/{{ $sma[1] }}03.jpg" alt="{{ $sma[1] }}-03"></img>
                  @endforeach
            </div>
              <button class="modal-close is-large" aria-label="close"></button>
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
<script type="text/javascript" src="/js/modal.js"></script>
@endsection