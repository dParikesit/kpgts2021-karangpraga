@extends('layout')

@section('title') Make Post @endsection

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
          <button class="button is-success" onclick="window.location.href='/admin/post/'"> Back </button> <br/> <br/>

          <div class="box">
          <form action="/admin/post" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="field">
              <label class="label">Post Title</label>
              <div class="control">
                <input class="input" type="text" name="post-title" placeholder="Judul">
              </div>
            </div>
            <div class="field">
              <label class="label">Post Description</label>
              <div class="control">
                <textarea class="textarea" placeholder="Deskripsi singkat mengenai berita" name="post-desc"></textarea>
              </div>
            </div>
            <div class="field">
              <label class="label">Post Content</label>
              <div class="control">
                <textarea class="textarea" placeholder="Isi berita" name="post-content" id="post-content"></textarea>
              </div>
            </div>
            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Post Media</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="file has-name">
                    <label class="file-label">
                      <input class="file-input" type="file" name="post-media" id="post-media">
                      <span class="file-cta">
                        <span class="file-icon">
                          <i class="fa fa-upload"></i>
                        </span>
                        <span class="file-label">
                          Upload Picture ...
                        </span>
                      </span>
                      <span class="file-name" id="post-media-update">
                        ...
                      </span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Post Category</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <div class="select">
                      <select id="post-cat" name="post-cat">
                        <option selected>Uncategorized</option>
                        <option>Roadshow</option>
                        <option>TONAMPTN</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Post Status</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <div class="select">
                      <select id="post-status" name="post-status">
                        <option>Draft</option>
                        <option>Publish</option>
                        <option>Pending</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="field is-horizontal" id="post-date-update" style="display: none;">
              <div class="field-label is-normal">
                <label class="label">Post Date</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <p class="control is-expanded has-icons-left">
                    <input class="input" type="date" placeholder="Tanggal" name="post-date">
                    <span class="icon is-small is-left">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
                  <p class="control is-expanded has-icons-left">
                    <input class="input" type="time" placeholder="Jam" name="post-time">
                    <span class="icon is-small is-left">
                      <i class="fa fa-clock-o"></i>
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <button class="button is-success" type="submit"> <i class="fa fa-check"> </i>&nbsp; Save </button>
            <button class="button" type="button" onclick="window.location.href='/admin/post/'"> <i class="fa fa-close"> </i>&nbsp; Cancel </a>
          </form>

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
<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<script>CKEDITOR.replace('post-content');</script>
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