<?php 

    /* 
    *  Inserir: se utilizado o Redux framework inserir as seçõs aqui
    *  As seções a seguir são só um exemplo
    *  Utilize a documentação para criar as seçõs
    *  https://docs.reduxframework.com/core/redux-api/  
    */
    
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Campos do Tema', 'redux-framework-demo' ),
        'id'               => 'basic',
        'desc'             => __( 'Insira aqui campos do tema!', 'redux-framework-demo' ),
        'icon'             => 'el el-home'
    ) );
    
    Redux::setSection($opt_name, $section = array(
        'title'      => 'Página 1',
        'id'         => 'section-pagina-1',
        'subsection' => true,
        'desc'       => 'Campos da página 1',
        'fields'     => array(
            array(
                'id'       => 'opt-text-pagina-1',
                'type'     => 'text',
                'title'    => 'Texto da página 1',
                'desc'     => 'Campo do texto da página 1',
                'default'  => 'Texto padrão da página 1',
            ),        
        )
    ));