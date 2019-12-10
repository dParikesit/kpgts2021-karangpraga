@extends('layout')

@section('title', trans('menu.gallery'))
@section('description', 'Galeri foto KPGTS yang sudah berlalu')
@section('url', '/galeri')

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
          @include('inc.menu.tonamptn')
        </div>
        <span class="menu-border"> </span>
        <div class="column is-9">
          <div class="columns is-multiline is-centered">
            <div class="column is-12">
              <h1> {{ trans('menu.gallery') }} </h1>
            </div>
            <div class="column is-12" >
              <div class="gallery"></div>
              <div class="modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                  @foreach ($pictures as $picture)
                    <img id="{{ $picture }}mod" src="img/gallery17/{{ $picture }}.jpg" alt="{{ $picture }}"></img>
                  @endforeach
                </div>
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
<script src="js/pagination.js"></script>
<script>
  $('#pagination').pagination({
    dataSource: {!! json_encode($pictures) !!},
    pageSize: 9,
    className: 'custom-paginationjs',
    ulClassName: 'pagination-list',
    callback: function(data, pagination) {
      var templated = '';
      $('.gallery').fadeOut(function() {
        for (i = 0; i < data.length; i++) {
          templated += '<img id="' + data[i] + '" src="img/gallery17/' + data[i] + '.jpg"></img>';
        }
        $('.gallery').html(templated);
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
<script defer src="js/modal.js"></script>
@endsection