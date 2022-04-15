<?php
    $headerContent = get_field('header', 'option');
    if(!empty($headerContent)){
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Test</title>
	        <?php wp_head();?>
        </head>
        <body>
        <header>
            <div class="site-size">
                <div class="site-size__header">
                    <?php
                        if(!empty($headerContent['logo'])){
                            if(is_front_page() or ($_SERVER['REQUEST_URI'] === "/")){
                                ?>
                                <span>
                                    <img src="<?php echo $headerContent['logo']; ?>" alt="logo">
                                </span>
                                <?php
                            } else {
                                ?>
                                <a href="<?php echo home_url('/');?>" class="header__logo">
                                    <img src="<?php echo $headerContent['logo']; ?>" alt="logo">
                                </a>
                                <?php
                            }
                        }else{
                            //Конкретно в данному випадку - це спеціально зроблена заглушка, так як
                            //site-size__header - є flex та space-between. В реалі це можливо обіграти якось
                            //по іншому, в залежності від задачі та функціоналу
                            ?>
                                <span></span>
                            <?php
                        }
                        wp_nav_menu( [
                            'theme_location'  => 'header_menu',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s header__menu">%3$s</ul>',
                            'depth'           => 1,
                            'walker'          => '',
                        ] );
                    ?>
                </div>
            </div>
        </header>
        <?php
    }
?>