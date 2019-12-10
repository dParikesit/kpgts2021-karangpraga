@extends('layout')

@section('title'){{ $post->post_title }}@endsection
@section('description'){{ $post->desc }}@endsection
@section('url')/berita/{{ $post->slug }}@endsection

@section('before-styles')

@endsection

@section('after-styles')
<style type="text/css">
  @media screen and (min-width: 769px), print {
    .field-label {
      text-align: left;
    }
  }
</style>
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-3 is-hidden-mobile">
          @include('inc.menu.main')
        </div>
        <span class="menu-border"> </span>
        <div class="column is-9">
          <h1> {{ $post->post_title }} </h1>
          
          <div class="column is-half" style="margin: auto">
            <figure class="image">
              <img src="{{ $post->post_media }}" alt="{{ $post->post_slug }}.jpg">
            </figure>
          </div>

          <div class="box">
            <div class="content">
              {!! $post->post_content !!} 
            </div>

            <br/>
            <p> <small> Ditulis oleh {{ $post->author->name }} pada {{ date('D, d M Y h:i', strtotime($post->post_date)) }} di {{ $post->post_cat }} </small> </p>
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
<script type="text/javascript">
  $('#post-slug').on('keyup', function() {
    $('#post-slug-update').html($('#post-slug').val());
  });
  $('#post-media').on('change', function() {
    var url = $('#post-media').val();
    url = url.substring(url.lastIndexOf('\\')+1, url.length);
    $('#post-media-update').html(url);
  })
  $('#post-status').on('change', function() {
    if ($('#post-status').val() == 'Pending') {
      $('#post-date-update').css('display', 'flex');
    } else {
      $('#post-date-update').css('display', 'none');
    }
  });
</script>

@endsection