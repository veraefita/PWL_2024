<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function index() {
        return 'Selamat Datang';

}
public function about() {
    return 'Nama: Vera Efita Hudi Putri | NIM: 2341760047';

}
public function articles($id) {
    return 'Halaman Artikel dengan ID ' .$id;

}}
