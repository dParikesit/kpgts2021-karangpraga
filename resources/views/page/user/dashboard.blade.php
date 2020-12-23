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

            <p><strong>Hari</strong>: Minggu, 11 Januari 2021 <br/>
               <strong>Tempat</strong>: SMA Negeri 3 Semarang <br/>
               <strong>Daftar ulang</strong>
               @if($user->registration->sesi == '1')
               : 06.30 WIB – 07.00 WIB
               @else
               : 10.00 WIB – 10.30 WIB
               @endif
            </p>

            <p> Peserta diharapkan mengenakan pakaian bebas, sopan, dan <strong>berkerah</strong>. </p>
            <p> Peserta yang tidak melakukan daftar ulang pada rentang waktu tersebut dianggap <strong class="underline">mengundurkan diri</strong>. </p>

            <p> Apabila ada pertanyaan-pertanyaan lebih lanjut mengenai Tryout, silakan tanyakan melalui: </p>
                1.&nbsp;<strong><a href="/kontak" target="_blank">Contact Person Panitia KPGTS 2021</a></strong><br/>
                2.&nbsp;<strong><a href="https://lin.ee/ewVA4on">Line&nbsp;Official Account KPGTS 2021</a></strong></p>
          @else 
            <p> Status anda <strong>BELUM terverifikasi</strong>. </p>
            <p> Nomor Registrasi Anda: <strong>{{ $user->registration->id }}</strong> </p>
            <p> Silahkan lakukan pembayaran agar akun kamu terverifikasi. Setelah melakukan pembayaran, peserta Tryout akan mendapat Nomor dan Kartu Peserta melalui email sebagai bukti verifikasi. </p>
            <p> Kamu memilih pembayaran melalui : <strong>{{ $user->registration->metode_pembayaran }}</strong> </p>
            @if ($user->registration->metode_pembayaran == 'Transfer')
              <p> Biaya pendaftaran: <strong>Rp. {{ floor($biaya/1000) }}.{{ sprintf("%03d",$biaya%1000) }},00</strong> </p>
              <p> No. Rek BNI: <strong>0393722121</strong> a/n. <strong>Adhi Satriyatama</strong> </p>
              <p> No. Rek BCA: <strong>0091756837</strong> a/n. <strong>Yudith Pratama Ibrahim</strong> </p>
              <p> Gopay: <strong>081225951826</strong> a/n. <strong>Ardhya Garini</strong> </p>
              <p> Pastikan Anda mengirim sampai <strong>3 digit terakhir</strong> </p>
            @else
              <p> Biaya pendaftaran: <strong>Rp. {{ floor($biaya/1000) }}.{{ sprintf("%03d",$biaya%1000) }},00</strong> </p>
              <p> PJ sekolah untuk {{ $user->registration->sma }}: {!! $pj[$user->registration->sma] !!} </p>
            @endif
            <p> Harap diperhatikan bahwa setelah pembayaran kami terima, email verifikasi dan Kartu Peserta akan dikirimkan ke <strong>{{ $user->email }}</strong> maksimal <strong>3 hari kerja</strong>. </p>
            <p> Apabila ada pertanyaan lebih lanjut, silakan langsung tanyakan melalui <strong><a href="https://line.me/ti/g2/swALBY9YsweEltKo80C4Xw">Line Square Ca-ITB Semarang 2021</a></strong> pada chatroom “Tryout”, atau hubungi <strong><a href="/kontak">Official Account KPGTS 2021</a></strong> </p>
          @endif
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