<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo(); ?></title>
  <?php wp_head(); ?>
</head>


<body id="top" <?php body_class(); ?>>

  <header class="header" id="header">
    <div class="header-area py-4">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-3">
            <?php $logo = get_theme_mod( 'm2sys_logo_setting_id'); ?>

            <div class="logo"><img src="<?php echo esc_url( $logo['url'] ); ?>"></div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-9">
            <nav class="menu flex-menu" id="menu">
              <div class="menu-flex">
    
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'mainmenu',
                    'menu_id' => 'mainmenu',
                    'menu_class' => 'menu-item'
                ) );
            ?>

            </div>
            </nav>

            <div class="menu_bar f-right" id="menu_bar">
              <div>
                <span class="menu_bar-line"></span>
                <span class="menu_bar-line"></span>
                <span class="menu_bar-line"></span>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    </div>
  </header>