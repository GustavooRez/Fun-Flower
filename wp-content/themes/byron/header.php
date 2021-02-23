<!--
    Arquivo para o código do header da página,
    header = cabeçalho do site
-->

<?php
// Inserir: caso tenha alterado o nome da variavel do redux, alterar o nome aqui tbm
if (class_exists('Redux')) {
    global $redux_fields;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Fun Flower</title>
    <meta name="description" content="<?php get_bloginfo('description');?>">
    <link rel="icon" type="image/png" href="">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Apple Web App Meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <?php wp_head();?>

</head>
<body>
    <header>
        <!-- Inserir: Insira o conteúdo do Header da página -->
        <div class="navbar-fixed">
            <nav class="nav_transparente">
                <div class="nav-wrapper container">
                    <a href="#" data-target="slide-out" class="sidenav-trigger left"><i class="material-icons">menu</i></a>
                    <?php
                        $args = array(
                            "theme_location"    => "primary",
                            "container"         => "div",
                            "menu_class"        => "center hide-on-med-and-down",
                            "sidenav-close"     => "li"
                        );
                        wp_nav_menu( $args );
                    ?>
                </div>
            </nav>
        </div>
        <?php
            $args = array(
                "theme_location"    => "primary",
                "container"         => "ul",
                "menu_id"           => "slide-out",
                "menu_class"        => "sidenav sidenav-close"
            );
            wp_nav_menu( $args );
        ?>
    </header>