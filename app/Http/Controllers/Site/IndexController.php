<?php

namespace App\Http\Controllers\Site;

use App\Agenda;
use App\Banner;
use App\Http\Controllers\Controller;
use App\Noticia;
use App\Upload;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index()
    {
        $data = ['banners', 'noticias'];
        $banners = Banner::where('ativo', 1)->orderBy('id','desc')->get();
        $noticias = Noticia::where('ativo', 1)->orderBy('data', 'desc')->get()->take(8);
        return view('site.home.index', compact($data));
    }

    public function paginaConstrucao()
    {
        return view('site.home.paginaconstrucao');
    }

    public function cadastroNews(Request $request)
    {
        return $request['emailnews'];
    }



}
