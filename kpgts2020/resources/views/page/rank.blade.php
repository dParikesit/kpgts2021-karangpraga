@extends('layout')

@section('title') Progress Hasil TONAMPTN @endsection

@section('before-styles')
@endsection

@section('after-styles')
@endsection

@section('main')
  <section class="section">
    <div class="container">
      <div class="columns">
        <span class="menu-border"> </span>
        <div class="column is-12">
          <div class="columns is-multiline">
            <div class="column is-12">
              <h1> Progress Hasil TONAMPTN </h1>
            </div>
            <div class="column is-12" >
              <progress class="progress is-link" value="{{ $prog }}" max="100">{{ $prog }}%</progress>
              <div class="content">
                <table class="table is-striped is-hoverable">
                  <thead>
                    <tr>
                      <th> ID </th>
                      <th> Unit/Paguyuban </th>
                      <th> Progress </th>
                      <th> Saintek </th>
                      <th> Soshum </th>
                      <th> </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $datum)
                    <tr>
                      <td>{{ $datum[0] }}</td>
                      <td>{{ $datum[1] }}</td>
                      <td>{{ $datum[7] }}</td>
                      <td>{{ $datum[8] }}</td>
                      <td>{{ $datum[9] }}</td>
                      <td>
                        @if ($datum[6] == 1)
                        <a target="_blank" href="/rank/{!!sprintf('%02d', $datum[0])!!}%20-%20{{$datum[1]}}.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
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