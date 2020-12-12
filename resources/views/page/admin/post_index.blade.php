@extends('layout')

@section('title') Post @endsection

@section('before-styles')
@endsection

@section('after-styles')
<style type="text/css">
  .box.Pending {
    background-color: #ffffc7;
  }
  .box.Draft {
    background-color: #ffeeee;
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
          <button class="button is-success" onclick="window.location.href='/admin/post/create'"> Add New </button> <br/> <br/>

          @foreach ($posts as $post)
          <div class="box {{ $post->post_status }}" id="post-{{ $post->id }}">
            <div class="columns">
              <div class="column is-3">
                <figure class="image is-100x100">
                  <img src="{{ $post->post_media }}" alt="thumb">
                </figure>
              </div>
              <div class="column is-9">
                <div class="content">
                  <p> <strong>[{{ $post->post_status }}] {{ $post->post_title }}</strong> <small> {{ date('D, d M Y h:i', strtotime($post->post_date)) }} </small> </p>
                  <p> {{ $post->post_desc }} </p>
                  <p> <a href="/admin/post/{{ $post->id }}"> {{ trans('others.read_more') }} </a> </p>
                </div>
              </div>
            </div>
          </div>
          @endforeach

          <nav class="pagination is-centered" role="navigation" aria-label="pagination">
            <a
              class="pagination-previous" 
              @if ($posts->currentPage() == 1)
              disabled
              @else
              href="/admin/post/?page=1"
              @endif
            >First</a>
            <ul class="pagination-list">
              @for ($page_i = $posts_page_left; $page_i <= $posts_page_right; $page_i++)
              <li>
                <a
                  class="pagination-link
                  @if ($page_i == $posts->currentPage())
                  is-current
                  @endif
                  "
                  aria-label="Goto page {{ $page_i }}"
                  @if ($page_i == $posts->currentPage())
                  aria-current="page"
                  @else
                  href="/admin/post/?page={{ $page_i }}"
                  @endif
                >
                {{ $page_i }}
                </a>
              </li>
              @endfor
            </ul>
            <a
              class="pagination-next"
              @if ($posts->currentPage() == $posts->lastPage())
              disabled
              @else
              href="/admin/post/?page={{ $posts->lastPage() }}"
              @endif
            >Last</a>
          </nav>
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