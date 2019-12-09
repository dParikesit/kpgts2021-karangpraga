@extends('layout')

@section('title') Kontak @endsection

@section('before-styles')
@endsection

@section('after-styles')
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
          <div class="columns is-multiline">
            <div class="column is-12">
              <h1> {{ trans('menu.contact') }} </h1>
            </div>
            <div class="column is-12">
              <h5> Contact Person: </h5>
              <p> Teresa Amalia (082226250334, LINE: tereamap) </p>
              <p> Adhi Satriyatama (085785490091, LINE: adhist08) </p>
              <p> Nanda Yulanda (087700091929, LINE: nanda_yulanda) </p>
            </div>
            <div class="column is-12">
              <h5> Social Media </h5>
              <a targer="_blank" href="https://line.me/R/ti/p/%40iyn9473m" style="color: unset!important">
                <article class="media">
                  <figure class="media-left">
                    <p class="image is-64x64"> <img src="/img/icons/line.png"> </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p> <strong>Line Official Account</strong> <br> @673spfha </p>
                    </div>
                  </div>
                </article>
              </a>

              <a targer="_blank" href="//instagram.com/kpgts2020/" style="color: unset!important">
                <article class="media">
                  <figure class="media-left">
                    <p class="image is-64x64"> <img src="/img/icons/instagram.png"> </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p> <strong>Instagram Account</strong> <br> @kpgts2020 </p>
                    </div>
                  </div>
                </article>
              </a>

              <a targer="_blank" href="mailto:kpgts2020@gmail.com" style="color: unset!important">
                <article class="media">
                  <figure class="media-left">
                    <p class="image is-64x64"> <img src="/img/icons/mail.png"> </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p> <strong>Email</strong> <br> kpgts2020@gmail.com </p>
                    </div>
                  </div>
                </article>
              </a>
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
@endsection