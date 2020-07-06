<!DOCTYPE html>
<html lang="en"  class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php	wp_body_open(); ?>

    <header class="px-3 py-3 md:px-16  xl:max-w-5xl xl:mx-auto">
        <div class="flex justify-between">
            <div class="">
                <a href="<?php echo esc_url(get_site_url()); ?>"><?php bloginfo( ); ?></a>
            </div>
            <div class="">
                <ul class="m-0 flex items-center">
                    <li class="ml-5">
						<a href="<?php echo esc_url(get_site_url() . '/shop'); ?>" class="<?php if(get) ?>">
							Shop
						</a>
                    </li>
                    <li class="ml-5">
                        <a href="<?php echo esc_url(get_site_url() . '/cart'); ?>" title="">
                            Cart
                            <span class="items-count ml-2 bg-green-500 text-white p-1 rounded">
                                <?php echo  WC()->cart->get_cart_contents_count(); ?> 
                            </span>
                        </a>
                    </li>
                    <?php 
                        if(class_exists('woocommerce')){

                        //if(is_user_logged_in()){
                    ?>
						<li class="ml-5">
							<a href="<?php echo esc_url(get_site_url() . '/my-account'); ?>" title="">
								Account
							</a>
						</li>
					<?php// } else { ?>
						<!-- <li class="ml-5">
							<a href="<?php echo esc_url(wp_login_url()); ?>" title="">
								Login
							</a>
						</li>
						<li class="ml-5">
							<a href="<?php echo esc_url(wp_registration_url()); ?>" title="">
								Register
							</a>
						</li> -->

                    <?php //} 
                        }  ?>

                    
                </ul>
            </div>
        </div>
    </header>
    <main class="px-3 py-3 md:px-16  xl:max-w-5xl xl:mx-auto">
