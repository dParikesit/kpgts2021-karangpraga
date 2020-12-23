@extends('layout')

@section('title') Edit Post @endsection

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
          <form action="/admin/post/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="field">
              <label class="label">Post Title</label>
              <div class="control">
                <input class="input" type="text" name="post-title" placeholder="Judul" value="{{ $post->post_title }}">
              </div>
            </div>
            <div class="field">
              <label class="label">Post Slug</label>
              <div class="control">
                <input class="input" type="text" id="post-slug" name="post-slug" placeholder="berita-baru" value="{{ $post->post_slug }}">
              </div>
              <p class="help">Permalink: https://kpgts2021.com/berita/<span id="post-slug-update"></span></p>
            </div>
            <div class="field">
              <label class="label">Post Description</label>
              <div class="control">
                <textarea class="textarea" placeholder="Deskripsi singkat mengenai berita" name="post-desc">{{ $post->post_desc }}</textarea>
              </div>
            </div>
            <div class="field">
              <label class="label">Post Content</label>
              <div class="control">
                <textarea class="textarea" placeholder="Isi berita" name="post-content" id="post-content">{{ $post->post_content }}</textarea>
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
                        {{ $post->post_media }}
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
                        <option
                        @if ($post->post_cat == 'Uncategorized')
                        selected
                        @endif
                        >Uncategorized</option>
                        <option
                        @if ($post->post_cat == 'Roadshow')
                        selected
                        @endif
                        >Roadshow</option>
                        <option
                        @if ($post->post_cat == 'TONAMPTN')
                        selected
                        @endif
                        >TONAMPTN</option>
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
                      <select id="post-status" name="post-status" value="{{ $post->post_status }}">
                        <option
                          @if ($post->post_status == 'Draft')
                          selected
                          @endif
                        >Draft</option>
                        <option
                          @if ($post->post_status == 'Publish' && $post_date->isPast())
                          selected
                          @endif
                        >Publish</option>
                        <option
                          @if ($post->post_status == 'Publish' && !$post_date->isPast())
                          selected
                          @endif
                        >Pending</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="field is-horizontal" id="post-date-update"
            @if ($post->post_status == 'Draft')
            style="display: none;"
            @endif
            >
              <div class="field-label is-normal">
                <label class="label">Post Date</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <p class="control is-expanded has-icons-left">
                    <input class="input" type="date" placeholder="Tanggal" name="post-date" value="{{ $post_date->toDateString() }}">
                    <span class="icon is-small is-left">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
                  <p class="control is-expanded has-icons-left">
                    <input class="input" type="time" placeholder="Jam" name="post-time" value="{{ $post_date->toTimeString() }}">
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