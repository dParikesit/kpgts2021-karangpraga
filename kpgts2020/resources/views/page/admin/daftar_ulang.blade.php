@extends('layout')

@section('title') Daftar Ulang @endsection

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
<link rel="stylesheet" type="text/css" href="/css/pacman.css">
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-6 is-centered">
          <h1> Daftar Ulang </h1>
          <form>

          <div id="daful" style="display: none">
            <div class="field">
              <label class="label">Nomor Peserta</label>
              <div class="control">
                <input class="input" type="text" name="name" placeholder="Nomor Peserta">
              </div>
            </div>

            <button class="button is-success" type="submit" onclick="daful()"> <i class="fa fa-check"> </i>&nbsp; Daftar </button>
          </div>
          <!-- pacman loader -->
          <div class="ploader lds-css ng-scope">
            <p> Loading ... </p>
            <div style="width:100%;height:100%" class="lds-pacman">
              <div>
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div>
                <div></div>
                <div></div>
              </div>
            </div>
          </div>
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
<script type="text/javascript">
    setTimeout(function() {
    $(".ploader").fadeOut(function() {
      $("#daful").fadeIn(function() {
        console.log("ss");
      });
    });
      //
    }, 1000);
</script>
@endsection