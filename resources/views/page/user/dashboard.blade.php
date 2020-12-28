@extends('layout')

@section('title') Dashboard @endsection

@section('before-styles')
@endsection

@section('after-styles')
<style type="text/css">
  .underline {
    text-decoration: underline;
  }
</style>
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-3">
          @include('inc.menu.user')
        </div>
        <span class="menu-border"> </span>
        <div class="column is-9 content">
          @if (!($user->registration->isFilled()))
            <p> Status anda <strong>BELUM terverifikasi</strong> </p>
            {{$user->registration->isFilled()}}
            <p> Pastikan data peserta sudah terisi lengkap di <strong><a href="/user/registration/{{$user->registration->id}}">sini</a></strong> </p>
            <p> Informasi mengenai pembayaran, kartu peserta, dan lainnya akan diberikan bila data peserta sudah diisi. </p>
          @elseif ($user->registration->nomor_peserta != '')
            <p> Status anda <strong>SUDAH terverifikasi</strong> dengan nomor peserta <strong>{{ $user->registration->nomor_peserta }}</strong>.</p>
            <p> Kartu Peserta sudah dikirim ke email <strong>{{ $user->email }}</strong>
            @if (file_exists(public_path()."/kartu-peserta/".md5($user->registration->nomor_peserta).".pdf"))
            , atau download di <strong><a href="/kartu-peserta/{{md5($user->registration->nomor_peserta)}}.pdf">sini</a></strong>
            @endif
            .</p>
            <p>Jangan lupa, TONAMPTN KPGTS 2021 akan dilaksanakan pada:

            <p><strong>Hari</strong>: Minggu, 16 Januari 2021 <br/>
               <strong>Tempat</strong>: Zoom Meeting <br/>
            </p>

            <p> Peserta diharapkan mengenakan pakaian bebas, sopan, dan <strong>berkerah</strong>. </p>
            <p> Peserta yang tidak melakukan daftar ulang pada rentang waktu tersebut dianggap <strong class="underline">mengundurkan diri</strong>. </p>

            <p> Apabila ada pertanyaan-pertanyaan lebih lanjut mengenai Tryout, silakan tanyakan melalui: </p>
                <strong><a href="/kontak" target="_blank">Contact Person Panitia KPGTS 2021</a></strong><br/>
                
          @else 
            <p> Status anda <strong>BELUM terverifikasi</strong>. </p>
            <p> Silahkan lakukan pembayaran agar akun kamu terverifikasi. Setelah melakukan pembayaran, peserta Tryout akan mendapat Nomor dan Kartu Peserta melalui email sebagai bukti verifikasi. </p>
            <p> Kamu memilih pembayaran melalui : <strong>{{ $user->registration->metode_pembayaran }}</strong> </p>
            @if ($user->registration->metode_pembayaran == 'Transfer')
              <p> Biaya pendaftaran: <strong>Rp. {{ floor($biaya/1000) }}.{{ sprintf("%03d",$biaya%1000) }},00</strong> </p>
              <p> No. Rek BNI: <strong>0841807007</strong> a/n. <strong>Muhammad Faiq Dhiya Ul Haq</strong> </p>
              <p> No. Rek BCA: <strong>0091909897</strong> a/n. <strong>Adelia Sheralyn Najwa</strong> </p>
              <p> No. Rek Mandiri: <strong>1350016533976</strong> a/n. <strong>Ashfia Pramita N</strong> </p>
              <p> Jenius: <strong>$dparikesit</strong> a/n. <strong>Dimas Shidqi Parikesit</strong> </p>
              <p> Gopay: <strong>085640574844</strong> a/n. <strong>Syifa Mutia</strong> </p>
              <p> Ovo: <strong>082242340494</strong> a/n. <strong>Hughie Raymonelika Manggala</strong> </p>
              <p> Dana: <strong>081273820434</strong> a/n. <strong>Cisna Argipuspa</strong> </p>
            @else
              <p> Biaya pendaftaran: <strong>Rp. 10.000 ,00</strong></p>
              <p> PJ sekolah untuk {{ $user->registration->sma }}: {!! $pj[$user->registration->sma] !!} </p>
            @endif
            <p> Harap diperhatikan bahwa setelah pembayaran kami terima, status akan berubah menjadi <strong>SUDAH Terverifikasi</strong> maksimal <strong>3 hari kerja</strong>.
          @endif
            <p> Apabila ada pertanyaan lebih lanjut, silakan langsung tanyakan melalui <strong><a href="https://line.me/ti/g2/08hUAaxWQ2kfi_-tQnBOTg?utm_source=invitation&utm_medium=link_copy&utm_campaign=default">Line OpenChat Aku Masuk ITB 2021 #SMG</a></strong> atau hubungi <strong><a href="/kontak">Official Account KPGTS 2021</a></strong> </p>
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
  function reset() {
    for (var i=1; i<=10; i++) $("#pj-"+i).css('display', 'none');
  }

  $('#pilih-pj').on('change', function() {
    reset();
    $("#pj-"+this.value).css('display', 'block');
  });
</script>
@endsection