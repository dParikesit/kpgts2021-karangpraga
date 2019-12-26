@extends('layout')

@section('title') Data Peserta @endsection

@section('before-styles')

@endsection

@section('after-styles')
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
          <h1> Data Peserta </h1>
          <div class="field is-grouped">
            <p class="control is-expanded">
              <a class="button" href="/admin/user">
                <i class="fa fa-arrow-left"> </i> &nbsp;
                Kembali
              </a>
            </p>
            @if ($user->registration->nomor_peserta == '')
            <p class="control">
              <a class="button is-success" href="/admin/user/{{ $user->id }}/edit">
                <i class="fa fa-edit"> </i> &nbsp;
                Edit
              </a>
            </p>
            @endif
          </div>
          <div class="box">
            <div class="columns">
              <div class="column is-4"> <strong> Nomor Registrasi </strong> </div>
              <div class="column is-8"> {{ $user->registration->id }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> Nama Lengkap* </strong> </div>
              <div class="column is-8"> {{ $user->name }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> Email* </strong> </div>
              <div class="column is-8"> {{ $user->email }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> Asal SMA* </strong> </div>
              <div class="column is-8"> {{ $user->registration->sma }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> Kelompok Ujian* </strong> </div>
              <div class="column is-8"> {{ $user->registration->kelompok_ujian }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> Metode Pembayaran* </strong> </div>
              <div class="column is-8"> {{ $user->registration->metode_pembayaran }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> No HP </strong> </div>
              <div class="column is-8"> {{ $user->registration->no_hp }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> No WA </strong> </div>
              <div class="column is-8"> {{ $user->registration->no_wa }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> ID Line </strong> </div>
              <div class="column is-8"> {{ $user->registration->id_line }} </div>
            </div>
            @if ($user->registration->nomor_peserta != '')
            <div class="columns">
              <div class="column is-4"> <strong> Nomor Peserta </strong> </div>
              <div class="column is-8"> {{ $user->registration->nomor_peserta }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> Dikonfirmasi oleh </strong> </div>
              <div class="column is-8"> {{ $user->registration->registered->name }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> Dikonfirmasi pada </strong> </div>
              <div class="column is-8"> {{ $user->registration->updated_at }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> Sesi </strong> </div>
              <div class="column is-8"> {{ $user->registration->sesi }} </div>
            </div>
            <div class="columns">
              <div class="column is-4"> <strong> MD5 </strong> (abaikan) </div>
              <div class="column is-8"> {{ md5($user->registration->nomor_peserta) }} </div>
            </div>
            <form action="/admin/user/{{ $user->id }}/upload" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $user->id }}">
            <input type="hidden" name="nomor-peserta" value="{{ $user->registration->nomor_peserta }}">
            <div class="columns">
              <div class="column is-4"> <strong> Kartu Peserta </strong> (PDF) </div>
              <div class="column is-8">
                <div class="field is-horizontal">
                <div class="field-body">
                  <div class="field">
                    <div class="file has-name">
                      <label class="file-label">
                        <input class="file-input" type="file" name="kartu-peserta" id="kartu-peserta">
                        <span class="file-cta">
                          <span class="file-label">
                            Pilih File
                          </span>
                        </span>
                        <span class="file-name" id="kartu-peserta-update">
                          ...
                        </span>
                      </label>
                    </div>
                  </div>
                </div> <br/>
                <button class="button is-success" type="submit"> <i class="fa fa-upload"> </i>&nbsp; Upload </button>
              </div>
              </div>
            </div>
            </form>
            @if (file_exists(public_path()."/kartu-peserta/".md5($user->registration->nomor_peserta).".pdf"))
            <p> Kartu Peserta sudah bisa didownload peserta di <strong><a href="/kartu-peserta/{{md5($user->registration->nomor_peserta)}}.pdf">sini</a></strong></p>
            @endif
            @endif
            <div class="columns">
              <div class="column is-12">
                <p class="help"> *wajib supaya data dapat diverifikasi </p>
                <p class="help"> **masih bisa berubah pada hari H TO </p>
              </div>
            </div>
          </div>
          <div class="field is-grouped">
            @if (Auth::user()->canRegistUser())
            <p class="control">
              <form action="/admin/user/{{$user->id}}/regist/1" method="POST">
              {{csrf_field()}}
              <button class="button is-success" onclick="return confirm('Setelah ini, nomor peserta akan dibuat dan peserta mendapat email resmi dari panitia kpgts2020. Yakin lanjut?')">
                <i class="fa fa-envelope"> </i> &nbsp;
                Regist Sesi 1
              </button>
              </form>
              <form action="/admin/user/{{$user->id}}/regist/2" method="POST">
              {{csrf_field()}}
              <button class="button is-success" onclick="return confirm('Setelah ini, nomor peserta akan dibuat dan peserta mendapat email resmi dari panitia kpgts2020. Yakin lanjut?')">
                <i class="fa fa-envelope"> </i> &nbsp;
                Regist Sesi 2
              </button>
              </form>
            </p>
            @endif
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
  $('#kartu-peserta').on('change', function() {
    var url = $('#kartu-peserta').val();
    url = url.substring(url.lastIndexOf('\\')+1, url.length);
    $('#kartu-peserta-update').html(url);
  })
</script>
@endsection