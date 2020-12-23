@extends('layout')

@section('title', 'Berita')
@section('description', 'Daftar berita KPGTS 2021')
@section('url', '/berita')

@section('before-styles')
@endsection

@section('after-styles')
<style type="text/css">
.box {
  border-radius: 0;
  min-height: 200px;
}
</style>
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns is-multiline is-mobile">
        <div class="column is-12">
          <h1> {{ trans('menu.news') }} </h1>
        </div>

        @foreach ($posts as $post)
        <div class="column is-one-quarter-tablet is-full-mobile">
          <a href="/berita/{{ $post->post_slug }}">
          <figure class="image">
            <img src="{{ $post->post_media }}" alt="thumb">
          </figure>
          <div class="box {{ $post->post_status }}" id="post-{{ $post->id }}">
            <div class="columns is-multiline">
              <div class="column is-12">
                <div class="content">
                  <p> <strong>{{ $post->post_title }}</strong> </p>
                  <p> {{ $post->post_desc }} </p>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>
        @endforeach
        <div class="column is-one-quarter-tablet is-full-mobile">
        </div>

        <div class="column is-12">
          <nav class="pagination is-centered" role="navigation" aria-label="pagination">
            <a
              class="pagination-previous" 
              @if ($posts->currentPage() == 1)
              disabled
              @else
              href="/berita/?page=1"
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
                  href="/berita/?page={{ $page_i }}"
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
              href="/berita/?page={{ $posts->lastPage() }}"
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