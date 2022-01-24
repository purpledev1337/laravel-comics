<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderLinks extends Controller
{
   public function header() {

    $links = [
        [
          'text' => "Characters",
          'url' => "#",
        ],
        [
          'text' => "Comics",
          'url' => "#",
        ],
        [
          'text' => "Movies",
          'url' => "#",
        ],
        [
          'text' => "TV",
          'url' => "#",
        ],
        [
          'text' => "Games",
          'url' => "#",
        ],
        [
          'text' => "Collectibles",
          'url' => "#",
        ],
        [
          'text' => "Videos",
          'url' => "#",
        ],
        [
          'text' => "Fans",
          'url' => "#",
        ],
        [
          'text' => "News",
          'url' => "#",
        ],
        [
          'text' => "Shop",
          'url' => "#",
        ]
      ];

    return view('header', compact('links'));
   }
}
