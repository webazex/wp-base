<?php
    $footerContent = get_field('footer-group','option');
    $socials = get_field('socials-group', 'option');
    if(!empty($footerContent)){
        ?>
            <footer>
                <div class="site-size">
                    <div class="site-size__footer">
                        <div class="footer__row-footer">
                            <?php
                                if(!empty($footerContent['logo-footer__group'])){
                                        if($footerContent['logo-footer__group']['source'] === "h"){
                                            $footerLogoGroup = get_field('header', 'option')['logo'];
                                            if(!empty($footerLogoGroup)){
                                                ?>
                                                    <img src="<?php echo $footerLogoGroup; ?>" alt="Logo footer" class="footer-logo">
                                                <?php
                                            }else{
                                                $footerLogoGroup = $footerContent['logo-footer__group']['logo-img'];
                                                if(!empty($footerContent['logo-footer__group']['logo-img'])){
                                                    ?>
                                                        <img src="<?php echo $footerLogoGroup; ?>" alt="Logo footer" class="footer-logo">
                                                    <?php
                                                }else{
                                                    echo '<span></span>'; //Аналогічно з хедером
                                                }
                                            }
                                        }elseif($footerContent['logo-footer__group']['source'] === "f"){
                                            $footerLogoGroup = $footerContent['logo-footer__group']['logo-img'];
                                            if(!empty($footerContent['logo-footer__group']['logo-img'])){
                                                ?>
                                                <img src="<?php echo $footerLogoGroup; ?>" alt="Logo footer" class="footer-logo">
                                                <?php
                                            }else{
                                                $footerLogoGroup = get_field('header', 'option')['logo'];
                                                if(!empty($footerLogoGroup)){
                                                    ?>
                                                    <img src="<?php echo $footerLogoGroup; ?>" alt="Logo footer">
                                                    <?php
                                                }else{
                                                    echo '<span></span>'; //Аналогічно з хедером
                                                }
                                            }
                                        }
                                }
                                wp_nav_menu( [
                                    'theme_location'  => 'footer_menu',
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
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s row-footer__menu-footer">%3$s</ul>',
                                    'depth'           => 1,
                                    'walker'          => '',
                                ] );
                                if(!empty($socials)){
                                    ?>
                                        <div class="row-footer__socials">
                                            <?php
                                                foreach ($socials as $social){
                                                    if(!empty($social['link'])){
                                                        if($social['icon-source'] === "d"){
                                                            ?>
                                                            <noindex>
                                                                <a href="<?php echo $social['link']; ?>" class="socials__link" rel="nofollow">
                                                                    <?php
                                                                        if(!empty($social['icon'])){
                                                                            $icon = $social['icon'];
                                                                            ?>
                                                                                <svg class="link__icon" width="24" height="24">
                                                                                    <use xlink:href="<?php echo TEMPLATE_DIR_URI.'/assets/sprite.svg#'.$icon; ?>"></use>
                                                                                </svg>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                </a>
                                                            </noindex>
                                                            <?php
                                                        }elseif($social['icon-source'] === "i"){
                                                            ?>
                                                                <noindex>
                                                                    <a href="<?php echo $social['link']; ?>" class="socials__link" rel="nofollow">
                                                                        <?php
                                                                            if(!empty($social['icon-img'])){
                                                                                ?>
                                                                                    <img src="<?php echo $social['icon-img']['url'];?>" alt="<?php echo $social['icon-img']['alt'];?>">
                                                                                <?php
                                                                            }
                                                                        ?>
                                                                    </a>
                                                                </noindex>
                                                            <?php
                                                        }
                                                    }
                                                }
                                            ?>
                                        </div>
                                    <?php
                                }
                        ?>
                        </div>
                        <?php
                            if(!empty($footerContent['other-links'])){
                                ?>
                                    <div class="footer__row-footer">
                                        <div class="row-footer__other-links">
                                            <?php
                                                foreach ( $footerContent['other-links'] as $link ) {
                                                    if(!empty($link)){
                                                        if(((!empty($link['link']['title'])) AND (!empty($link['link']['url'])))){
	                                                        $link_url = $link['link']['url'];
	                                                        $link_title = $link['link']['title'];
	                                                        $link_target = $link['link']['target'] ? $link['link']['target'] : '_self';
	                                                        ?>
                                                            <a class="other-link"
                                                               href="<?php echo esc_url($link_url); ?>"
                                                               target="<?php echo esc_attr($link_target); ?>">
                                                                <?php echo($link_title); ?>
                                                            </a>
                                                            <?php
                                                        }
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                <?php
                            }
                            if(!empty($footerContent['copiryght'])){
                                ?>
                                <div class="footer__row-footer">
                                    <div class="row-footer__copyright-box">
                                        <?php
                                            $year = date("Y");
                                            $clearStr = esc_html(str_replace("~CY~", "© $year", $footerContent['copiryght']));
                                            echo $clearStr;
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
                <?php wp_footer();?>
            </footer>
        <?php
    }
?>
</body>
</html>