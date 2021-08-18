<header id="apus-header" class="apus-header header-default visible-lg" role="banner">
    <div class="<?php echo (superio_get_config('keep_header') ? 'main-sticky-header-wrapper' : ''); ?>">
        <div class="<?php echo (superio_get_config('keep_header') ? 'main-sticky-header' : ''); ?>">
            <div class="container p-relative">
                <div class="row flex-middle">
                    <div class="col-md-2">
                        <div class="logo-in-theme">
                            <?php get_template_part( 'template-parts/logo/logo' ); ?>
                        </div>
                    </div>
                    <div class="col-md-10 p-static flex-middle">
                        <?php if ( has_nav_menu( 'primary' ) ) : ?>
                            <div class="pull-left">
                                <div class="main-menu">
                                    <nav data-duration="400" class="apus-megamenu slide animate navbar p-static" role="navigation">
                                    <?php
                                        $args = array(
                                            'theme_location' => 'primary',
                                            'container_class' => 'collapse navbar-collapse no-padding',
                                            'menu_class' => 'nav navbar-nav megamenu effect1',
                                            'fallback_cb' => '',
                                            'menu_id' => 'primary-menu',
                                            'walker' => new Superio_Nav_Menu()
                                        );
                                        wp_nav_menu($args);
                                    ?>
                                    </nav>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="header-right pull-right clearfix">
                            <?php if ( defined('SUPERIO_WOOCOMMERCE_ACTIVED') && superio_get_config('show_cartbtn') ): ?>
                                <div class="pull-right">
                                    <?php get_template_part( 'woocommerce/cart/mini-cart-button' ); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>