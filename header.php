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
          <div class="col-xl-3 col-lg-3 col-md-3 col-3 logo-column">
           

            <div class="logo">
              <!-- <?php
              $logo = get_theme_mod( 'm2sys_logo_setting_id');
                  if($logo){
                    ?>
                    <a href="<?php $url = home_url();
echo $url; ?>"><img src="<?php echo $logo['url'] ?>"></a>
                    <?php
                  }else{
                    ?>
                      <a href="<?php $url = home_url();
echo $url; ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.svg"></a>
                    <?php
                  }
                ?>
 -->
              
            </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-9 menu-column">
            <div class="button">
              <a class="main-btn one red" href="#contact">FREE CONSULTATION    </a>
            </div>
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