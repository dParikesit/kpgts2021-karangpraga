@extends('layout')

@section('title') Peserta @endsection

@section('before-styles')
@endsection

@section('after-styles')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="/css/pacman.css">
<style type="text/css">
  .tag:not(body).is-success {
    background-color: #f29301;
  }
  table#tabel-peserta {
    font-size: .9rem;
    margin: 0;
  }
</style>
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-2">
          @include('inc.menu.admin')
        </div>
        <span class="menu-border"> </span>
        <div class="column is-10">
          <h1> Peserta </h1>
          <div class="field is-grouped">
            @if (Auth::user()->canRegistUser())
            <p class="control">
              <a class="button is-danger" href="/admin/user/new">
                <i class="fa fa-plus"> </i> &nbsp;
                Buat
              </a>
            </p>
            @endif
          </div>
          <div class="box">
            <h5 onclick="tooglefeature()" style="cursor: pointer"> Fitur Baru!! \(^o^)/ Klik disini! </h5>
            <div id="feature" style="display: none">
              <h6> Toogle Column </h6>
              <p>
                <a class="toggle-vis" data-column="0">No Registrasi</a> -
                <a class="toggle-vis" data-column="1">No Peserta</a> -
                <a class="toggle-vis" data-column="2">Nama</a> -
                <a class="toggle-vis" data-column="3">Asal SMA</a> -
                <a class="toggle-vis" data-column="4">Pembayaran</a> -
                <a class="toggle-vis" data-column="6">Mendaftar pada</a> -
                <a class="toggle-vis" data-column="7">Diverifikasi oleh</a> -
                <a class="toggle-vis" data-column="8">Diverifikasi pada</a>
              </p>
              <h6> Filter Column</h6>
              <p id="filter-1"> Diverifikasi :
                <select id="select-verified">
                  <option value=""></option>
                  <option value="\d\d\d-\d\d-\d\d\d">Diverifikasi</option>
                  <option value="^\d+$">Belum Diverifikasi</option>
                </select>
              </p>
              <p id="filter-3"> Asal SMA : </p>
              <p id="filter-4"> Pembayaran : </p>
              <p id="filter-7"> Diverifikasi oleh : </p>
            </div>
          </div>
          <!-- pacman loader -->
          <div class="ploader lds-css ng-scope">
            <p> Sedang memakan peserta TONAMPTN ... </p>
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

          <table id="tabel-peserta" style="display:none" class="display nowrap">
            <thead>
              <tr>
                <th> No Reg </th>
                <th> No Peserta </th>
                <th> Nama </th>
                <th> Asal SMA </th>
                <th> Pembayaran </th>
                <th> Mendaftar Pada </th>
                <th> Diverif </th>
                <th> Verif </th>
                <th> Aksi </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
              <tr>
                <td> {{ $user->registration->id }} </td>
                <td> {{ $user->registration->nomor_peserta?:$user->registration->id }} </td>
                <td> {{ $user->name }} </td>
                <td> {{ $user->registration->sma }} </td>
                <td> {{ $user->registration->metode_pembayaran }} </td>
                <td> {{ $user->registration->created_at }} </td>
                <td> {{ ($user->registration->nomor_peserta)?$user->registration->registered->name : '' }} </td>
                <td> {{ ($user->registration->nomor_peserta)?$user->registration->updated_at : '' }} </td>
                <td>
                  <a href="/admin/user/{{ $user->id }}"> <span class="tag"><i class="fa fa-search"></i></span> </a>
                  @if ($user->registration->nomor_peserta == '')
                  <a href="/admin/user/{{ $user->id }}/edit"> <span class="tag is-success"><i class="fa fa-edit"></i></span> </a>
                  @endif
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
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
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  function tooglefeature() {
    if ($("#feature").css('display') == "none") {
      $("#feature").css('display', 'block');
    } else {
      $("#feature").css('display', 'none');
    }
  }
  $(document).ready(function(){
      var table = $('#tabel-peserta').DataTable( {
        "order": [],
        "paging": false,
        "scrollY" : "400px",
        "sScrollX" : true,
        "scrollCollapse" : true,
        "columnDefs" : [
          {
            "targets" : [3, 5, 6, 7, 8],
            "visible" : false,
          },
        ],
      });
 
      $('a.toggle-vis').on( 'click', function (e) {
        e.preventDefault();
        var column = table.column( $(this).attr('data-column') );
        column.visible( ! column.visible() );
      });

      $("#select-verified").on('change', function() {
        table.column(1).search($(this).val(), true).draw();
      })
 
      table.columns().flatten().each( function ( colIdx ) {
        if ([0, 1, 2, 6, 8, 9].indexOf(colIdx) !== -1) return;
        // Create the select list and search operation
        var select = $('<select />')
          .appendTo(
            $("#filter-"+colIdx)
          )
          .on( 'change', function () {
            table
              .column( colIdx )
              .search( '"' + $(this).val() + '"' )
              .draw();
          } );

        if (colIdx == 5) { select.append($('<option value=""></option>')); }     
        // Get the search data for the first column and add to the select list
        table
          .column( colIdx )
          .cache( 'search' )
          .sort()
          .unique()
          .each( function ( d ) {
              select.append( $('<option value="'+d+'">'+d+'</option>') );
          } );

       });
      
      $('.ploader').fadeOut(function() {
        $('table').fadeIn(function() {
          table.columns.adjust();
        });
      });
  });
</script>
@endsection