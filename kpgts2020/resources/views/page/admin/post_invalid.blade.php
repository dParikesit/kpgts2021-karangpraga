@extends('layout')

@section('title') Not Authorized @endsection

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

          <div class="box">
            <h4 class="is-danger"> Error: Tidak ada otorisasi </h4>
            <p> Maaf, Anda harus menjadi super-admin untuk membuat/mengedit/menghapus post, atau author untuk mengedit post </p>
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