@extends('layout')

@section('title', 'Kontak')
@section('description', 'Kontak yang dapat dihubungi bila ingin bertanya lebih lanjut')
@section('url', '/kontak')

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
              <h5> Social Media </h5>
              <a targer="_blank" href="https://line.me/ti/g2/08hUAaxWQ2kfi_-tQnBOTg?utm_source=invitation&utm_medium=link_copy&utm_campaign=default" style="color: unset!important">
                <article class="media">
                  <figure class="media-left">
                    <p class="image is-64x64"> <img src="/img/icons/line.png"> </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p> <strong>Line OpenChat</strong> <br>Aku Masuk ITB 2021 #SMG</p>
                    </div>
                  </div>
                </article>
              </a>

              <a targer="_blank" href="https://lin.ee/ewVA4on" style="color: unset!important">
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

              <a targer="_blank" href="//instagram.com/kpgts2021/" style="color: unset!important">
                <article class="media">
                  <figure class="media-left">
                    <p class="image is-64x64"> <img src="/img/icons/instagram.png"> </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p> <strong>Instagram Account</strong> <br> @kpgts2021 </p>
                    </div>
                  </div>
                </article>
              </a>

              <a targer="_blank" href="mailto:kpgts2021@gmail.com" style="color: unset!important">
                <article class="media">
                  <figure class="media-left">
                    <p class="image is-64x64"> <img src="/img/icons/mail.png"> </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p> <strong>Email</strong> <br> kpgts2021@gmail.com </p>
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