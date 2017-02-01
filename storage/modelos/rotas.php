###################################### ##NOME## #########################################
    Route::get('##nome##', [
        'as' => 'controle.##nome##.index',
        'uses' => 'Controle\##Nome##Controller@index'
    ]);

    Route::get('##nome##/editar/{##nome##?}', [
        'as' => 'controle.##nome##.edit',
        'uses' => 'Controle\##Nome##Controller@editar'
    ]);

    Route::post('##nome##/salvar/{##nome##?}', [
        'as' => 'controle.##nome##.salvar',
        'uses' => 'Controle\##Nome##Controller@salvar'
    ]);

    Route::get('##nome##/excluir/{##nome##?}', [
        'as' => 'controle.##nome##.excluir',
        'uses' => 'Controle\##Nome##Controller@excluir'
    ]);
    ########################################################################################
    ##NOVASROTAS##