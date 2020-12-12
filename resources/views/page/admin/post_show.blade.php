@extends('layout')

@section('title') Show Post @endsection

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
        <div class="column is-3">
          @include('inc.menu.admin')
        </div>
        <span class="menu-border"> </span>
        <div class="column is-9">
          <h1> {{ trans('menu.news') }} </h1>
          <div class="field is-grouped">
            <p class="control is-expanded">
              <a class="button is-success" href="/admin/post">
                <i class="fa fa-arrow-left"> </i> &nbsp;
                Back
              </a>
            </p>
            <p class="control">
              <a class="button is-success" href="/admin/post/{{ $post->id }}/edit">
                <i class="fa fa-edit"> </i> &nbsp;
                Edit
              </a>
            </p>
            <p class="control">
              <a class="button is-danger" href="/admin/post/{{ $post->id }}/delete" onclick="return confirm('Yakin hapus?')" data-method="delete">
                <i class="fa fa-trash"> </i> &nbsp;
                Delete
              </a>
            </p>
          </div>

          <div class="box">
            <h3> {{ $post->post_title }} </h3>
            <p> Date : {{ date('D, d M Y h:i', strtotime($post->post_date)) }} </p>
            <p> Author : {{ $post->author->name }} </p>
            <p> Status : {{ $post->post_status }} </p>
          </div>

          <div class="box">
            <h4> Deskripsi </h4>
            <p> {{ $post->post_desc }} </p>
          </div>

          <div class="box">
            <h4> Konten </h4>
            <div class="content">
              {!! $post->post_content !!} 
            </div>
          </div>

          <div class="box">
            <h4> Media </h4>
              <figure class="image is-100x100">
                <img src="{{ $post->post_media }}" alt="thumb" style="max-width: 250px;">
              </figure>
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