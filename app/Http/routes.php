<?php


#RENDERIZA IMAGENS DO STORAGE


Route::get('image/{path}/{tamanho}/{imagem}', [
    'as' => 'image.render',
    'uses' => 'Controle\HomeController@imageRender'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

######################################## SITE ###########################################

Route::get('/', [
    'as' => 'site.home.paginaconstrucao',
    'uses' => 'Site\IndexController@paginaConstrucao'
]);

Route::get('index', [
    'as' => 'site.home.index',
    'uses' => 'Site\IndexController@index'
]);

Route::get('noticia', [
    'as' => 'site.noticia.index',
    'uses' => 'Site\NoticiaController@index'
]);

Route::get('noticia/detalhe/{noticia?}', [
    'as' => 'site.noticia.detalhe',
    'uses' => 'Site\NoticiaController@detalhe'
]);

Route::post('index/salvar/{emailnews?}', [
    'as' => 'site.home.cadastronews',
    'uses' => 'Site\IndexController@cadastroNews'
]);


#########################################################################################

Route::get('auth/login', [
    'as' => 'controle.login.index',
    'uses' => 'Auth\AuthController@index'
]);

Route::post('auth/login', [
    'as' => 'controle.login.autenticar',
    'uses' => 'Auth\AuthController@autenticar'
]);

Route::get('loga', function() {
    Auth::loginUsingId(1);
});

Route::get('cadastro', 'Controle\UsuarioController@editar');
Route::post('cadastro/salvar', 'Controle\UsuarioController@salvar');

Route::group(['prefix' => 'controle', 'middleware' => 'auth'], function() {

    Route::get('auth/logout', [
        'as' => 'controle.logout.index',
        'uses' => 'Auth\AuthController@logout'
    ]);

    Route::get('/', [
        'as' => 'controle.home.index',
        'uses' => 'Controle\HomeController@index'
    ]);

    Route::get('rota/{nome?}', [
        'as' => 'controle.rota.index',
        'uses' => 'Controle\HomeController@rota'
    ]);

    ################################## GRUPO DE USUÁRIO ##################################
    Route::get('grupo-usuario', [
        'as' => 'controle.grupo-usuario.index',
        'uses' => 'Controle\GrupoUsuarioController@index'
    ]);

    Route::get('grupo-usuario/editar/{grupo?}', [
        'as' => 'controle.grupo-usuario.edit',
        'uses' => 'Controle\GrupoUsuarioController@editar'
    ]);

    Route::post('grupo-usuario/salvar/{grupo?}', [
        'as' => 'controle.grupo-usuario.salvar',
        'uses' => 'Controle\GrupoUsuarioController@salvar'
    ]);

    Route::get('grupo-usuario/excluir/{grupo?}', [
        'as' => 'controle.grupo-usuario.excluir',
        'uses' => 'Controle\GrupoUsuarioController@excluir'
    ]);
    ########################################################################################
    ###################################### USUÁRIO #########################################
    Route::get('usuario', [
        'as' => 'controle.usuario.index',
        'uses' => 'Controle\UsuarioController@index'
    ]);
/*
    Route::get('usuario/editar/{usuario?}', [
        'as' => 'controle.usuario.edit',
        'uses' => 'Controle\UsuarioController@editar'
    ]);

    Route::post('usuario/salvar/{usuario?}', [
        'as' => 'controle.usuario.salvar',
        'uses' => 'Controle\UsuarioController@salvar'
    ]);
*/
    Route::get('usuario/excluir/{usuario?}', [
        'as' => 'controle.usuario.excluir',
        'uses' => 'Controle\UsuarioController@excluir'
    ]);
    ########################################################################################
    ##################################### PERMISSÃO #########################################
    Route::get('permissao/{grupo?}', [
        'as' => 'controle.permissao.index',
        'uses' => 'Controle\PermissaoController@index'
    ]);

    Route::post('permissao/salvar/{grupo?}', [
        'as' => 'controle.permissao.salvar',
        'uses' => 'Controle\PermissaoController@salvar'
    ]);
    ########################################################################################
    ##################################### LOG #########################################
    Route::get('log', [
        'as' => 'controle.log.index',
        'uses' => 'Controle\LogController@index'
    ]);
    ########################################################################################
    ###################################### BANNER #########################################
    Route::get('banner', [
        'as' => 'controle.banner.index',
        'uses' => 'Controle\BannerController@index'
    ]);

    Route::get('banner/editar/{banner?}', [
        'as' => 'controle.banner.edit',
        'uses' => 'Controle\BannerController@edit'
    ]);

    Route::post('banner/salvar/{banner?}', [
        'as' => 'controle.banner.salvar',
        'uses' => 'Controle\BannerController@salvar'
    ]);

    Route::get('banner/excluir/{banner?}', [
        'as' => 'controle.banner.excluir',
        'uses' => 'Controle\BannerController@excluir'
    ]);
    ########################################################################################
    ###################################### GALERIA #########################################
    Route::get('galeria', [
        'as' => 'controle.galeria.index',
        'uses' => 'Controle\GaleriaController@index'
    ]);

    Route::get('galeria/editar/{galeria?}', [
        'as' => 'controle.galeria.edit',
        'uses' => 'Controle\GaleriaController@edit'
    ]);

    Route::post('galeria/salvar/{galeria?}', [
        'as' => 'controle.galeria.salvar',
        'uses' => 'Controle\GaleriaController@salvar'
    ]);

    Route::get('galeria/excluir/{galeria?}', [
        'as' => 'controle.galeria.excluir',
        'uses' => 'Controle\GaleriaController@excluir'
    ]);

    ########### IMAGENS ############

    Route::get('galeria/gerenciar-fotos/{galeria}', [
        'as' => 'controle.galeria.imagens',
        'uses' => 'Controle\GaleriaController@imagens'
    ]);

    Route::post('galeria/upload-fotos/{galeria}', [
        'as' => 'controle.galeria.upload',
        'uses' => 'Controle\GaleriaController@upload'
    ]);

    Route::post('galeria/fotos/destaque', [
        'as' => 'controle.galeria.destaque-imagem',
        'uses' => 'Controle\GaleriaController@destaque'
    ]);

    Route::post('galeria/fotos/legenda', [
        'as' => 'controle.galeria.legenda-imagem',
        'uses' => 'Controle\GaleriaController@legenda'
    ]);
    ########################################################################################
    ###################################### NOTICIA #########################################
    Route::get('noticia', [
        'as' => 'controle.noticia.index',
        'uses' => 'Controle\NoticiaController@index'
    ]);

    Route::get('noticia/editar/{noticia?}', [
        'as' => 'controle.noticia.edit',
        'uses' => 'Controle\NoticiaController@editar'
    ]);

    Route::post('noticia/salvar/{noticia?}', [
        'as' => 'controle.noticia.salvar',
        'uses' => 'Controle\NoticiaController@salvar'
    ]);

    Route::get('noticia/excluir/{noticia}', [
        'as' => 'controle.noticia.excluir',
        'uses' => 'Controle\NoticiaController@excluir'
    ]);
    ########################################################################################
    ###################################### AGENDA #########################################
    Route::get('agenda', [
        'as' => 'controle.agenda.index',
        'uses' => 'Controle\AgendaController@index'
    ]);

    Route::get('agenda/editar/{agenda?}', [
        'as' => 'controle.agenda.edit',
        'uses' => 'Controle\AgendaController@editar'
    ]);

    Route::post('agenda/salvar/{agenda?}', [
        'as' => 'controle.agenda.salvar',
        'uses' => 'Controle\AgendaController@salvar'
    ]);

    Route::get('agenda/excluir/{agenda?}', [
        'as' => 'controle.agenda.excluir',
        'uses' => 'Controle\AgendaController@excluir'
    ]);
    ########################################################################################
    ###################################### REDE #########################################
    Route::get('rede', [
        'as' => 'controle.rede.index',
        'uses' => 'Controle\RedeController@index'
    ]);

    Route::get('rede/editar/{rede?}', [
        'as' => 'controle.rede.edit',
        'uses' => 'Controle\RedeController@editar'
    ]);

    Route::post('rede/salvar/{rede?}', [
        'as' => 'controle.rede.salvar',
        'uses' => 'Controle\RedeController@salvar'
    ]);

    Route::get('rede/excluir/{rede?}', [
        'as' => 'controle.rede.excluir',
        'uses' => 'Controle\RedeController@excluir'
    ]);
    ########################################################################################
    ###################################### CELULA #########################################
    Route::get('celula', [
        'as' => 'controle.celula.index',
        'uses' => 'Controle\CelulaController@index'
    ]);

    Route::get('celula/editar/{celula?}', [
        'as' => 'controle.celula.edit',
        'uses' => 'Controle\CelulaController@editar'
    ]);

    Route::post('celula/salvar/{celula?}', [
        'as' => 'controle.celula.salvar',
        'uses' => 'Controle\CelulaController@salvar'
    ]);

    Route::get('celula/excluir/{celula?}', [
        'as' => 'controle.celula.excluir',
        'uses' => 'Controle\CelulaController@excluir'
    ]);
    ########################################################################################
    ###################################### REDE #########################################
    Route::get('rede', [
        'as' => 'controle.rede.index',
        'uses' => 'Controle\RedeController@index'
    ]);

    Route::get('rede/editar/{rede?}', [
        'as' => 'controle.rede.edit',
        'uses' => 'Controle\RedeController@editar'
    ]);

    Route::post('rede/salvar/{rede?}', [
        'as' => 'controle.rede.salvar',
        'uses' => 'Controle\RedeController@salvar'
    ]);

    Route::get('rede/excluir/{rede?}', [
        'as' => 'controle.rede.excluir',
        'uses' => 'Controle\RedeController@excluir'
    ]);
    ########################################################################################
    ###################################### CELULA #########################################
    Route::get('celula', [
        'as' => 'controle.celula.index',
        'uses' => 'Controle\CelulaController@index'
    ]);

    Route::get('celula/editar/{celula?}', [
        'as' => 'controle.celula.edit',
        'uses' => 'Controle\CelulaController@editar'
    ]);

    Route::post('celula/salvar/{celula?}', [
        'as' => 'controle.celula.salvar',
        'uses' => 'Controle\CelulaController@salvar'
    ]);

    Route::get('celula/excluir/{celula?}', [
        'as' => 'controle.celula.excluir',
        'uses' => 'Controle\CelulaController@excluir'
    ]);
    ########################################################################################
    ###################################### NOTICIA #########################################
    Route::get('noticia', [
        'as' => 'controle.noticia.index',
        'uses' => 'Controle\NoticiaController@index'
    ]);

    Route::get('noticia/editar/{noticia?}', [
        'as' => 'controle.noticia.edit',
        'uses' => 'Controle\NoticiaController@editar'
    ]);

    Route::post('noticia/salvar/{noticia?}', [
        'as' => 'controle.noticia.salvar',
        'uses' => 'Controle\NoticiaController@salvar'
    ]);

    Route::get('noticia/excluir/{noticia?}', [
        'as' => 'controle.noticia.excluir',
        'uses' => 'Controle\NoticiaController@excluir'
    ]);
    ########################################################################################
    ###################################### AGENDA #########################################
    Route::get('agenda', [
        'as' => 'controle.agenda.index',
        'uses' => 'Controle\AgendaController@index'
    ]);

    Route::get('agenda/editar/{agenda?}', [
        'as' => 'controle.agenda.edit',
        'uses' => 'Controle\AgendaController@editar'
    ]);

    Route::post('agenda/salvar/{agenda?}', [
        'as' => 'controle.agenda.salvar',
        'uses' => 'Controle\AgendaController@salvar'
    ]);

    Route::get('agenda/excluir/{agenda?}', [
        'as' => 'controle.agenda.excluir',
        'uses' => 'Controle\AgendaController@excluir'
    ]);
    ########################################################################################
    ###################################### ARTIGO #########################################
    Route::get('artigo', [
        'as' => 'controle.artigo.index',
        'uses' => 'Controle\ArtigoController@index'
    ]);

    Route::get('artigo/editar/{artigo?}', [
        'as' => 'controle.artigo.edit',
        'uses' => 'Controle\ArtigoController@editar'
    ]);

    Route::post('artigo/salvar/{artigo?}', [
        'as' => 'controle.artigo.salvar',
        'uses' => 'Controle\ArtigoController@salvar'
    ]);

    Route::get('artigo/excluir/{artigo?}', [
        'as' => 'controle.artigo.excluir',
        'uses' => 'Controle\ArtigoController@excluir'
    ]);
    ########################################################################################
    ##NOVASROTAS##

});
