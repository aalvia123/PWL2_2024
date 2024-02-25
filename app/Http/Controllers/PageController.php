<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';

        }
    public function about() {
        return 'Nama : Alvia <br> Nim : 2341728011 ';

        }
    public function articles($id) {
        return ' Halaman Artikel dengan Id-'.$id;

        }
}
