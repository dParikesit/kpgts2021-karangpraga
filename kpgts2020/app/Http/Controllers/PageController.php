<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;

class PageController extends Controller
{

    private function makeList($n) {
      $ret = [];
      for ($i = 1; $i <= $n; $i++) {
        $ret[] = "" . floor($i/10) . ($i%10);
      }
      return $ret;
    }

    public function home() {
      return View::make('home', compact([]));
    }
    
    public function berita(Request $request) {
      if ($request->input('cat')) {
        $posts = Post::where([
                        ['post_status', '=', 'publish'],
                        ['post_date','<=',Carbon::now()],
                        ['post_cat', '=', $request->input('cat')],
                      ])
                     ->orderBy('post_date', 'desc')
                     ->paginate(20);
      } else {
        $posts = Post::where([
                        ['post_status', '=', 'publish'],
                        ['post_date','<=',Carbon::now()],
                      ])
                     ->orderBy('post_date', 'desc')
                     ->paginate(20);
      }
      $posts_page_left  = max(                 1, $posts->currentPage() - 2                           );
      $posts_page_right = min($posts->lastPage(), max($posts->currentPage() + 2, $posts_page_left + 4));
      return View::make('page.berita_index', compact([
          'posts',
          'posts_page_left',
          'posts_page_right'
      ]));
    }

    public function beritaOne($slug) {
      $post = Post::where([
                      ['post_slug', '=', $slug],
                      ['post_status', '=', 'publish'],
                      ['post_date','<=',Carbon::now()],
                    ])
                  ->first();
      if ($post) {
        return View::make('page.berita_show', compact(['post']));
      } else {
        abort(404);
      }
    }

    public function panitia() {
      return View::make('page.panitia', compact([]));
    }

    public function kontak() {
      return View::make('page.kontak', compact([]));
    }

    public function karangPraga() {
      return View::make('page.karang-praga', compact([]));
    }

    public function jadwalSekolah() {
      return View::make('page.jadwal-sekolah', compact([]));
    }

    public function infoFakultas() {
      return View::make('page.info-fakultas', compact([]));
    }

    public function dokumentasiFull() {
      $smas = [
        ["SMAN 3 Semarang", "smaga"],
        ["Kolese Loyola", "loyola"],
        ["SMAN 2 Semarang", "smanda"],
        ["SMAN 5 Semarang", "smala"],
        ["SMAN 12 Semarang", "smaduabelas"],
        ["SMAN 4 Semarang", "smapa"],
        ["SMAN 1 Semarang", "smansa"],
        ["SMAN 1 Ungaran", "smansaungaran"],
        ["SMA Sedes Sapientiae", "sedes"],
        ["Gamakta 2017", "2017"],
      ];
      return View::make('page.dokumentasi_full', compact(['smas']));
    }

    public function dokumentasi($sma) {
      $all = [
        "smaga"         => $this->makeList(14),
        "loyola"        => $this->makeList(14),
        "smanda"        => $this->makeList(11),
        "smala"         => $this->makeList(8),
        "smaduabelas"   => $this->makeList(13),
        "smapa"         => $this->makeList(17),
        "smansa"        => $this->makeList(18),
        "sedes"         => $this->makeList(17),
        "smansaungaran" => $this->makeList(16),
        "2017"          => $this->makeList(10),
      ];
      $long = [
        "smaga"         => "SMAN 3 Semarang",
        "loyola"        => "Kolese Loyola",
        "smanda"        => "SMAN 2 Semarang",
        "smala"         => "SMAN 5 Semarang",
        "smaduabelas"   => "SMAN 12 Semarang",
        "smapa"         => "SMAN 4 Semarang",
        "smansa"        => "SMAN 1 Semarang",
        "smansaungaran" => "SMAN 1 Ungaran",
        "sedes"         => "SMA Sedes Sapientiae",
        "2017"          => "KPGTS 2017",
      ];

      if (!isset($all[$sma])) { abort(404); }
      $pictures = $all[$sma];
      $sma_long = $long[$sma];
      return View::make('page.dokumentasi', compact(['pictures','sma', 'sma_long']));
    }

    public function jadwalTo() {
      return View::make('page.jadwal-to', compact([]));
    }

    public function galeri() {
      $pictures = array(
        '1','2','3','4','5','6','7','8','9','10',
        '11','12','13','14','15','16','17','18','19','20',
        '21','22','23','24','25','26','27'
      );
      return View::make('page.galeri', compact(['pictures']));
    }

    public function pembayaran() {
      return View::make('page.pembayaran', compact([]));
    }

    public function unavail() {
      return View::make('page.unavail', compact([]));
    }

    public function rank() {
      $url = 'LINK_PERANGKINGAN_DIGANTI_YAA';
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_HEADER, false);
      $resp = curl_exec($ch);
      curl_close($ch);

      $data = json_decode($resp);

      $prog = 0;
      foreach ($data as $i => $datum) {
        $prog += (float) $datum[6];
      }
      $prog = floor($prog * 100 / sizeof($data));
      
      return View::make('page.rank', compact(['data', 'prog']));
    }

}
