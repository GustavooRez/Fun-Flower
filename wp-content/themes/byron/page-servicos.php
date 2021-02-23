<?php

$servico = get_posts([
    'post_type' => 'Serviços',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
]);

?>


<?php get_header(); ?>


<div class="parallax-container">
    <div class="parallax"><img src ="<?php echo get_the_post_thumbnail_url(); ?>"></div>
</div>

<div class="conteudo-home">
    <div class="titulo">
        <h1>Serviços</h1>
    </div>
</div>

<div class="area-servicos">
    <div class="cards-servicos">

        <?php foreach ($servico as $serv) : ?>

            <div>
                <div class="card">
                    <div class="img-servicos container" id="primeiro">
                        <img id="segundo" src="<?php echo get_the_post_thumbnail_url($serv->ID); ?>" alt="">

                        <div class="overlay-port">
                            <a class="modal-trigger modal-servicos-init" <?php echo "href='#name$serv->ID'"; ?>>
                                <p>
                                    Ver fotos
                                </p>
                            </a>
                        </div>

                        <div <?php echo "id='name$serv->ID'"; ?> class="modal  modal-servicos">
                        <div class="modal-content">
                                <div class="modal-item">
                                    <a class="waves-effect waves-light">
                                        <i class="prev material-icons small">navigate_before</i>
                                    </a>
                                    <div class="carousel carousel-slider">
                                    <a class="carousel-item">
                                    <?php

                                    $image = get_field('modal', $serv->ID);
                                    $size = 'full'; // (thumbnail, medium, large, full, ou um tamanho customizado criado em seu tema)

                                    if ($image) :
                                        foreach ($image as $img_id) :
                                            echo "<a class='carousel-item'>";?>
                                            <?php echo wp_get_attachment_image($img_id, $size);?>
                                            <?php echo "</a>";
                                        endforeach;
                                    endif;
                                    ?>
                                    </a>
                                    </div>
                                    <a class="waves-effect waves-light">
                                        <i class="next material-icons">navigate_next</i>
                                    </a>
                                </div>
                                <div class="modal-footer">
                                    <a class="modal-close-servicos modal-close waves-effect btn-flat"><i class="material-icons">clear</i></a>
                                </div>
                           
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4><?php echo $serv->post_title; ?></h4>
                    </div>
                    <div>
                    
                    <p>
                    <?php
                    $content = $serv->post_content;
                    $resumo = substr($content, 0, 200).'[...]';
                    echo $resumo;
                    
                    ?>
                    <br>
                    <a class="modal-trigger servicos-leiaMais" <?php echo "href='#conteudoServicos$serv->ID'"; ?>>Leia mais...</a>
                    </p>
                
                    <div <?php echo "id='conteudoServicos$serv->ID'"; ?> class='modal modal-fixed-footer'>
                        <div class="modal-content">
                            <h4><?php echo $serv->post_title; ?></h4>
                            <p><?php echo $serv->post_content;?></p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons">clear</i></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <?php endforeach; ?>

    </div>

</div>





<?php get_footer(); ?>