<?php

namespace App\Http\Controllers\Site;

use App\Agenda;
use App\Banner;
use App\Http\Controllers\Controller;
use App\Noticia;
use App\Upload;
use Illuminate\Http\Request;


class NoticiaController extends Controller
{
    public function index()
    {
        dd('noticias');
    }

    public function detalhe(Noticia $noticia)
    {
        return view('site.noticia.detalhe',compact('noticia'));
    }


}
