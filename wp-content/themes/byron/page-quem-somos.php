<?php get_header(); ?>

<div class="parallax-container">
    <div class="parallax"><img src ="<?php echo get_the_post_thumbnail_url(); ?>"></div>
</div>

<div class="conteudo-home">
    <div class="titulo">
        <h1>Quem Somos</h1>
    </div>
</div>


<div class="row">
    <div class="col l12 m12 s12 quem-somos-text">
        <p><?php the_field('texto_quem_somos', 105); ?></p>
    </div>
    <div class="quemSomos-img row">
        <div class="col l4 m4 quem-somos-img">
            <img class="materialboxed" src="<?php the_field('quem_somos_imagem_1', 105) ?>" alt="">
        </div>

        <div class="col l4 m4 quem-somos-img">
            <img class="materialboxed" src="<?php the_field('quem_somos_imagem_2', 105) ?>" alt="">
        </div>

        <div class="col l4 m4 quem-somos-img">
            <img class="materialboxed" src="<?php the_field('quem_somos_imagem_3', 105) ?>" alt="">
        </div>
    </div>
</div>
<?php get_footer(); ?>