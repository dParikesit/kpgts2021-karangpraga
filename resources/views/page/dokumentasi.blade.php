@extends('layout')

@section('title', 'KPGTS 2021 di {{ $sma_long }}')
@section('description', 'Dokumentasi Roadshow KPGTS di {{ $sma_long }}')
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
              <h1> {{ $sma_long }} </h1>
              <div class="field is-grouped">
                <p class="control is-expanded">
                  <a class="button" href="/dokumentasi">
                    <i class="fa fa-arrow-left"> </i> &nbsp;
                    Kembali
                  </a>
                </p>
              </div>
            </div>
            <div class="column is-12" >
            <div class="gallery"></div>
            <div class="modal">
              <div class="modal-background"></div>
              <div class="modal-content"></div>
              <button class="modal-close is-large" aria-label="close"></button>
            </div>
            </div>
            <div class="column is-12" >
              <div id="pagination"></div>
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
<script src="/js/pagination.js"></script>
<script>
  $('#pagination').pagination({
    dataSource: {!! json_encode($pictures) !!},
    pageSize: 9,
    className: 'custom-paginationjs',
    ulClassName: 'pagination-list',
    callback: function(data, pagination) {
      var templated = '';
      var templated_modal = '';
      $('.gallery').fadeOut(function() {
        for (i = 0; i < data.length; i++) {
          templated += '<img id="' + data[i] + '" src="/img/roadshow/{{ $sma }}' + data[i] + '.jpg"></img>';
          templated_modal += '<img id="' + data[i] + 'mod" src="/img/roadshow/{{ $sma }}' + data[i] + '.jpg" alt="{{ $sma }}-' + data[i] + '"></img>';
        }
        $('.gallery').html(templated);
        $('.modal-content').html(templated_modal);
      });
      $('.gallery').fadeIn();
    }
  });

  $("body").keydown(function(e) {
    if(e.keyCode == 37) { // left
      $("#pagination").pagination('previous');
    }
    else if(e.keyCode == 39) { // right
      $("#pagination").pagination('next');
    }
  });
</script>
<script type="text/javascript" src="/js/modal.js"></script>
@endsection