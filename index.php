<?php get_header(); ?>

  <section>
    <div class="m2sys-hero-section">
      <div class="container">
        <div class="row row-cols-2 d-flex align-items-center">
          <div class="col text-column">
            <h3 class="sub-heading"><?php
             $slider_subheading_setting = get_theme_mod( 'slider_subheading_setting');
             if($slider_subheading_setting){
                echo $slider_subheading_setting;
             }else{
              echo 'WELCOME TO';
             }
             ?> <span><?php
             $slider_sub_color_text = get_theme_mod( 'slider_subheading_color_text_setting');
             if($slider_sub_color_text){
                echo $slider_sub_color_text;
             }else{
              echo 'M2SYS';
             }
             ?><span></h3>
            <h1 class="heading"><span class="top"><?php
             $slider_heading_setting = get_theme_mod( 'slider_heading_setting');
             if($slider_heading_setting){
                echo $slider_heading_setting;
             } 
             else{
              echo 'Law Enforcement Management System';
             }
             ?>
            </h1>
            <div class="content-text">
              <h3><?php
             $slider_textarea_setting = get_theme_mod( 'slider_textarea_setting');
             if($slider_textarea_setting){
                echo $slider_textarea_setting;
             }else{
              echo 'A highly configurable platform that allows law enforcement officers and agencies to manage all aspects of the law enforcement operational process from a single system. ';
             }
             ?></h3>
            </div>
            <div class="button">

              <a class="main-btn one red" href="<?php
             $slider_button1_link_setting = get_theme_mod( 'slider_button1_link_setting');
             if($slider_button1_link_setting){
                echo $slider_button1_link_setting;
             } 
             ?>"><?php
             $slider_button_one_text_setting = get_theme_mod( 'slider_button_one_text_setting');
             if($slider_button_one_text_setting){
                echo $slider_button_one_text_setting;
             }else{
              echo 'Learn More';
             }
             ?></a>


              <a class="main-btn two" href="<?php
             $slider_button2_link_setting = get_theme_mod( 'slider_button2_link_setting');
             if($slider_button2_link_setting){
                echo $slider_button2_link_setting;
             } 
             ?>"><?php
            $slider_button_two_text_setting = get_theme_mod( 'slider_button_two_text_setting');
             if($slider_button_two_text_setting){
                echo $slider_button_two_text_setting;
             }else{
              echo 'Download Brochure';
             }
             ?></a>

            </div>
          </div>
          <div class="col image-column">
            <div class="m2sys-image">
              <?php
              $slider_image_setting_array = get_theme_mod( 'slider_image_setting_array');
                  if($slider_image_setting_array){
                    ?>
                    <img src="<?php echo $slider_image_setting_array['url'] ?>">
                    <?php
                  }else{
                    ?>
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/m2sys-hero-image.png">
                    <?php
                  }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section>
    <div class="m2sys-agencie-section">
      <div class="container">
        <div class="row row-cols-2 d-flex align-items-center">
          <div class="col image-column">
            <div class="m2sys-image">
              <div class="radius"></div>

              <?php
              $law_enforcement_image1_setting = get_theme_mod( 'law_enforcement_image1_setting');
                  if($law_enforcement_image1_setting){
                    ?>
                    <img class="image-2" src="<?php echo $law_enforcement_image1_setting['url'] ?>">
                    <?php
                  }else{
                    ?>
                      <img class="image-2" src="<?php echo get_template_directory_uri();?>/assets/images/about-thumb-3.jpg">
                    <?php
                  }
                ?>

              <?php
              $law_enforcement_image2_setting = get_theme_mod( 'law_enforcement_image2_setting');
                  if($law_enforcement_image2_setting){
                    ?>
                    <img class="image-3" src="<?php echo $law_enforcement_image2_setting['url'] ?>">
                    <?php
                  }else{
                    ?>
                      <img class="image-3" src="<?php echo get_template_directory_uri();?>/assets/images/about-thumb-4.jpg">
                    <?php
                  }
                ?>

                 <?php
                  $law_enforcement_image3_setting = get_theme_mod( 'law_enforcement_image3_setting');
                  if($law_enforcement_image3_setting){
                    ?>
                    <img class="image-4" src="<?php echo $law_enforcement_image3_setting['url'] ?>">
                    <?php
                  }else{
                    ?>
                      <img class="image-4" src="<?php echo get_template_directory_uri();?>/assets/images/about-thumb-5.jpg">
                    <?php
                  }
                ?>
            </div>
          </div>
          <div class="col text-column">
            <h3 class="sub-heading"><?php
             $law_enforcement_subheading_setting = get_theme_mod( 'law_enforcement_subheading_setting');
             if($law_enforcement_subheading_setting){
                echo $law_enforcement_subheading_setting;
             }else{
              echo 'Law Enforcement';
             }
             ?></h3>
            <h2 class="heading"><?php
             $law_enforcement_heading_setting = get_theme_mod( 'law_enforcement_heading_setting');
             if($law_enforcement_heading_setting){
                echo $law_enforcement_heading_setting;
             }else{
              echo 'Law Enforcement Agencies Face Several Challenges';
             }
             ?></h2>
            <div class="list-items">
              <?php
                $law_rep_settings = get_theme_mod( 'law_enforcement_repeater_setting');
                if(is_array($law_rep_settings)){
              foreach($law_rep_settings as $law_rep_item) :
              ?>
              <div class="list">
                <div class="icon">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/judicial.png">
                </div>
                <div class="text"><?php
                  echo $law_rep_item['list_text'];
                ?></div>
              </div>

            <?php endforeach; } ?>
       
            </div>
            <div class="content-text">
              <p><?php
             $law_enforcement_content_text_setting = get_theme_mod( 'law_enforcement_content_text_setting');
             if($law_enforcement_content_text_setting){
                echo $law_enforcement_content_text_setting;
             }else{
              echo 'Law enforcement agencies today are frustrated by data silos, outdated systems, and inefficient application integration, forcing them to enter data many times, in multiple places, using platforms that don’t perform efficiently.';
             }
             ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section>
    <div class="m2sys-about-section">
      <div class="container">
        <div class="row row-cols-2 d-flex align-items-center">
          <div class="col text-column">
            <h3 class="sub-heading"><?php
             $m2sys_egov_lawautomate_subheading = get_theme_mod( 'm2sys_egov_lawautomate_subheading');
             if($m2sys_egov_lawautomate_subheading){
                echo $m2sys_egov_lawautomate_subheading;
             }else{
              echo 'M2SYS EGOV LAW';
             }
             ?></h3>
            <h3 class="heading"><?php
             $m2sys_egov_lawautomate_heading = get_theme_mod( 'm2sys_egov_lawautomate_heading');
             if($m2sys_egov_lawautomate_heading){
                echo $m2sys_egov_lawautomate_heading;
             }else{
              echo 'M2SYS eGov Law Enforcement Management System Helps Automate Processes and Streamline Workflow With Seamless Integration With Existing System
';
             } 
             ?></h3>
            <div class="content-text">
              <p><?php
             $m2sys_egov_lawautomate_content = get_theme_mod( 'm2sys_egov_lawautomate_content');
             if($m2sys_egov_lawautomate_content){
                echo $m2sys_egov_lawautomate_content;
             }else{
              echo 'Our Law Enforcement Management System is a comprehensive digital solution that significantly deals with the challenges of system integrators when it comes to development, implementation, and maintenance. A major roadblock for system integrators in building custom-made solutions is the time it takes to develop and implement the software. With our highly customizable platform, system integrators can quickly implement new development or update existing systems and configure biometric modalities- eliminating development complexities.';
             }
             ?></p>
            </div>
            <div class="button">
              <a class="main-btn one red" href="<?php
             $lawautomate_button1_link_setting = get_theme_mod( 'lawautomate_button1_link_setting');
             if($lawautomate_button1_link_setting){
                echo $lawautomate_button1_link_setting;
             } 
             ?>"><?php
             $lawautomate_button_one_text_setting = get_theme_mod( 'lawautomate_button_one_text_setting');
             if($lawautomate_button_one_text_setting){
                echo $lawautomate_button_one_text_setting;
             }else{
              echo 'Request Demo';
             }
             ?></a>
              <a class="main-btn two" href="<?php
             $lawautomate_button2_link_setting = get_theme_mod( 'lawautomate_button2_link_setting');
             if($lawautomate_button2_link_setting){
                echo $lawautomate_button2_link_setting;
             } 
             ?>"><?php
             $lawautomate_button_two_text_setting = get_theme_mod( 'lawautomate_button_two_text_setting');
             if($lawautomate_button_two_text_setting){
                echo $lawautomate_button_two_text_setting;
             }else{
              echo 'Download Brochure';
             } 
             ?></a>
            </div>
          </div>
          <div class="col image-column">
            <div class="m2sys-image">
               <?php
                   $egov_law_automate_image = get_theme_mod( 'egov_law_automate_image');
                  if($egov_law_automate_image){
                    ?>
                    <img class="image-4" src="<?php echo $egov_law_automate_image['url'] ?>">
                    <?php
                  }else{
                    ?>
                      <img class="image-4" src="<?php echo get_template_directory_uri();?>/assets/images/about-demo.svg">
                    <?php
                  }
                ?>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="m2sys-cards-section">
      <div class="container">
        <div class="row">
          <div class="cards">
            <?php
              $m2sys_services_repeater_setting = get_theme_mod( 'm2sys_services_repeater_setting');
              if(is_array($m2sys_services_repeater_setting)){
              foreach( $m2sys_services_repeater_setting as  $m2sys_services_item ) :
            ?>
            <div class="card-item">
              <div class="icon">
                <?php
                  if($m2sys_services_item['list_image']){
                    ?>
                    <img src="<?php echo $m2sys_services_item['list_image'] ?>">
                    <?php
                  }else{
                    ?>
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/judicial.png">
                    <?php
                  }
                ?>

              </div>
              <div class="card-content">
                <h3><?php echo $m2sys_services_item['list_heading'] ?></h3>
                <p><?php echo $m2sys_services_item['list_content'] ?></p>
              </div>
            </div>
          <?php endforeach; } ?>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section>
    <div class="m2sys-egov-section">
      <div class="container">
        <div class="section-heading">
          <?php
                       $egov_law_management_icon = get_theme_mod( 'egov_law_management_icon');
                  if($egov_law_management_icon){
                    ?>
                    <img src="<?php echo $egov_law_management_icon['url'] ?>">
                    <?php
                  }else{
                    ?>
                      <img class="common-icon" src="<?php echo get_template_directory_uri();?>/assets/images/software.png">
                    <?php
                  }
          ?>
          <h2 class="heading"><?php
             $egov_law_management_heading = get_theme_mod( 'egov_law_management_heading');
             if($egov_law_management_heading){
                echo $egov_law_management_heading;
             }else{
              echo 'How eGov Law Enforcement Management System Works';
             }
             ?></h2>
        </div>
        <div class="row row-cols-2 d-flex align-items-center">
          <div class="lists">
            <ul>
              <?php 
              $egov_law_management_repeater = get_theme_mod( 'egov_law_management_repeater');
              if(is_array($egov_law_management_repeater)){
                foreach ($egov_law_management_repeater as $egov_law_management_item) :
              ?>

              <li><span class="image"><?php
                  if($egov_law_management_item['list_image']){
                    ?>
                    <img src="<?php echo $egov_law_management_item['list_image'] ?>">
                    <?php
                  }else{
                    ?>
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/checkmark.png">
                    <?php
                  }
                ?></span><span class="text"><?php echo $egov_law_management_item['list_heading']; ?></span></li>

              <?php endforeach; } ?>

            </ul>
          </div>
          <div class="col image-column">
            <?php
            $egov_law_management_image = get_theme_mod( 'egov_law_management_image');
                  if($egov_law_management_image){
                    ?>
                    <img src="<?php echo $egov_law_management_image['url']; ?>">
                    <?php
                  }else{
                    ?>
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/PngItem_3362267.png">
                    <?php
                  }
                ?>

          </div>
        </div>
        <div class="button two-button-center">
          <a class="main-btn one red" href="<?php
             $management_button1_link_setting = get_theme_mod( 'management_button1_link_setting');
             if($management_button1_link_setting){
                echo $management_button1_link_setting;
             } 
             ?>"><?php
             $management_button_one_text_setting = get_theme_mod( 'management_button_one_text_setting');
             if($management_button_one_text_setting){
                echo $management_button_one_text_setting;
             }else{
              echo 'Request Demo';
             } 
             ?></a>
          <a class="main-btn two" href="<?php
             $management_button2_link_setting = get_theme_mod( 'management_button2_link_setting');
             if($management_button2_link_setting){
                echo $management_button2_link_setting;
             } 
             ?>"><?php
             $management_button_two_text_setting = get_theme_mod( 'management_button_two_text_setting');
             if($management_button_two_text_setting){
                echo $management_button_two_text_setting;
             }else{
              echo 'Download Brochure';
             } 
             ?></a>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="m2sys-services-section">
      <div class="container">
        <div class="row row-cols-2 d-flex align-items-center main-row">
          <div class="col items-column">
            <div class="row">


              <div class="col-md-6 first">
                <div class="service-item">
                  <div class="icon">
                <?php
                  $why_egov_management_image1 = get_theme_mod( 'why_egov_management_image1');
                  if($why_egov_management_image1){
                    ?>
                    <img src="<?php echo $why_egov_management_image1['url']; ?>">
                    <?php
                  }else{
                    ?>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/improvement.png">
                    <?php
                  }
                ?>
                </div>
                  <h4><?php
             $why_egov_grid_heading1 = get_theme_mod( 'why_egov_grid_heading1');
             if($why_egov_grid_heading1){
                echo $why_egov_grid_heading1;
             }else{
              echo 'System Integrators';
             } 
             ?></h4>
                  <div class="service-content">
                    <p>
                      <?php
             $why_egov_grid_content1 = get_theme_mod( 'why_egov_grid_content1');
             if($why_egov_grid_content1){
                echo $why_egov_grid_content1;
             }else{
              echo 'Finish government projects on time by connecting our solution with your existing systems, including biometrics.';
             } 
             ?>
                    </p>
                  </div>
                </div>
              </div>



              <div class="col-md-6">
                <div class="service-item">
                  <div class="icon"> 
                  <?php
                  $why_egov_management_image2 = get_theme_mod( 'why_egov_management_image2');
                  if($why_egov_management_image2){
                    ?>
                    <img src="<?php echo $why_egov_management_image2['url']; ?>">
                    <?php
                  }else{
                    ?>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/identification.png">
                    <?php
                  }
                ?>
              </div>
                  <h4><?php
             $why_egov_grid_heading2 = get_theme_mod( 'why_egov_grid_heading2');
             if($why_egov_grid_heading2){
                echo $why_egov_grid_heading2;
             }else{
              echo 'Biometric Sensor Providers';
             } 
             ?></h4>
                  <div class="service-content">
                    <p>
                      <?php
             $why_egov_grid_content2 = get_theme_mod( 'why_egov_grid_content2');
             if($why_egov_grid_content2){
                echo $why_egov_grid_content2;
             }else{
              echo 'Scanner integration is not easy for most - unless it is us. Our platform easily integrates your scanners into government projects!';
             }
             ?>
                    </p>
                  </div>
                </div>
                <div class="service-item">
                  <div class="icon">
                <?php
                  $why_egov_management_image3 = get_theme_mod( 'why_egov_management_image3');
                  if($why_egov_management_image3){
                    ?>
                    <img src="<?php echo $why_egov_management_image3['url']; ?>">
                    <?php
                  }else{
                    ?>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/sensor.png">
                    <?php
                  }
                ?>
                    </div>
                  <h4><?php
             $why_egov_grid_heading3 = get_theme_mod( 'why_egov_grid_heading3');
             if($why_egov_grid_heading3){
                echo $why_egov_grid_heading3;
             }else{
              echo 'Biometric ABIS Providers';
             }
             ?></h4>
                  <div class="service-content">
                    <p>
                      <?php
             $why_egov_grid_content3 = get_theme_mod( 'why_egov_grid_content3');
             if($why_egov_grid_content3){
                echo $why_egov_grid_content3;
             }else{
              echo 'Our platform connects any ABIS solution seamlessly and without any learning curve, reducing delays in government contracts.';
             }
             ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col text-column">
            <h2 class="heading"><?php
             $why_egov_heading = get_theme_mod( 'why_egov_heading');
             if($why_egov_heading){
                echo $why_egov_heading;
             }else{
              echo 'Why Use Our eGov Law Enforcement Management System?';
             } 
             ?></h2>
            <div class="context-text">
              <p><?php
             $why_egov_heading_below = get_theme_mod( 'why_egov_heading_below');
             if($why_egov_heading_below){
                echo $why_egov_heading_below;
             }else{
              echo 'Our Law Enforcement  Management Solution and eGov platform bring benefits for:';
             }
             ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="m2sys-deploy-section">
      <div class="container">
        <div class="row">
          <div class="text-column">
            <div class="content">
              <h3 class="heading"><?php
             $our_egov_solution_heading = get_theme_mod( 'our_egov_solution_heading');
             if($our_egov_solution_heading){
                echo $our_egov_solution_heading;
             }else{
              echo 'Our eGov solution seamlessly connects your existing systems to create a complete software package and deploy government projects on time.
';
             } 
             ?></h3>
              <div class="button two-button-center">
                <a class="main-btn one red" href="<?php
             $our_egov_button1_link_setting = get_theme_mod( 'our_egov_button1_link_setting');
             if($our_egov_button1_link_setting){
                echo $our_egov_button1_link_setting;
             } 
             ?>"><?php
             $our_egov_button_one_text_setting = get_theme_mod( 'our_egov_button_one_text_setting');
             if($our_egov_button_one_text_setting){
                echo $our_egov_button_one_text_setting;
             }else{
              echo 'Learn More';
             }
             ?></a>
                <a class="main-btn two" href="<?php
             $our_egov_button2_link_setting = get_theme_mod( 'our_egov_button2_link_setting');
             if($our_egov_button2_link_setting){
                echo $our_egov_button2_link_setting;
             } 
             ?>"><?php
             $our_egov_button_two_text_setting = get_theme_mod( 'our_egov_button_two_text_setting');
             if($our_egov_button_two_text_setting){
                echo $our_egov_button_two_text_setting;
             }else{
              echo 'Download Brochure';
             } 
             ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="m2sys-cases-section">
      <div class="container">
        <div class="row">
          <div class="text-column">
            <h3 class="heading"><?php
             $solution_cases_heading = get_theme_mod( 'solution_cases_heading');
             if($solution_cases_heading){
                echo $solution_cases_heading;
             }else{
              echo 'Law Enforcement Management Solution Use Cases';
             } 
             ?></h3>
            <ul>
              <?php
                $solution_cases_repeater = get_theme_mod( 'solution_cases_repeater');
                if(is_array($solution_cases_repeater)){
                foreach( $solution_cases_repeater as $solution_cases_item ) :
              ?>

              <li><span>
                  <?php
                  if($solution_cases_item['list_image']){
                    ?>
                    <img src="<?php echo $solution_cases_item['list_image']; ?>">
                    <?php
                  }else{
                    ?>
                     <img src="<?php echo get_template_directory_uri();?>/assets/images/checkmark.png">
                    <?php
                  }
                ?>
               </span>
                <p><?php echo $solution_cases_item['list_heading'] ?></p>
              </li>

            <?php endforeach; } ?>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="m2sys-client-section py-150">
      <div class="container">
        <div class="section-heading text-center mb-80">
          <?php
                $success_stories_icon = get_theme_mod( 'success_stories_icon');
                  if($success_stories_icon){
                    ?>
                    <img src="<?php echo $success_stories_icon['url']; ?>">
                    <?php
                  }else{
                    ?>
                    <img class="common-icon" src="<?php echo get_template_directory_uri();?>/assets/images/tick.png">
                    <?php
                  }
                ?>

          <h3 class="heading"><?php
             $success_stories_heading = get_theme_mod( 'success_stories_heading');
             if($success_stories_heading){
                echo $success_stories_heading;
             }else{
              echo 'Success Stories';
             } 
             ?></h3>
        </div>
        <div class="slider-active row">

        <?php
        $success_stories_repeater = get_theme_mod( 'success_stories_repeater');
         if(is_array($success_stories_repeater)){
        foreach($success_stories_repeater as $success_stories_item) :
        ?>
          <div class="col-xl-4">
            <div class="client-item text-center">
              <div class="icon d-flex justify-content-center">
                <?php
                  if($success_stories_item['image']){
                    ?>
                    <img src="<?php echo $success_stories_item['image']; ?>">
                    <?php
                  }else{
                    ?>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/author.png">
                    <?php
                  }
                ?>


              </div>
              <h4><?php echo $success_stories_item['client']; ?></h4>

              <div class="client-content">
                <h5><?php echo $success_stories_item['industry']; ?></h5>
                <span><?php echo $success_stories_item['country']; ?></span>
                <p>
                  <?php echo $success_stories_item['use']; ?>
                </p>
                <div class="review mt-2">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach; } ?>

        </div>
      </div>
    </div>
  </section>




  <section>
    <div class="m2sys-blog-section">
      <div class="container">
          <div class="heading text-centeroff set-xl-2 col-xl-9">
            <?php
              $perfect_law_icon = get_theme_mod( 'perfect_law_icon');
                  if($perfect_law_icon){
                    ?>
                    <img src="<?php echo $perfect_law_icon['url']; ?>">
                    <?php
                  }else{
                    ?>
                    <img class="common-icon" src="<?php echo get_template_directory_uri();?>/assets/images/work-in-progress.png">
                    <?php
                  }
                ?>
            
            <h2 class="heading"><?php
             $perfect_law_heading = get_theme_mod( 'perfect_law_heading');
             if($perfect_law_heading){
                echo $perfect_law_heading;
             }else{
              echo 'Find the Perfect Law Enforcement Management System with M2SYS';
             }
             ?></h2>
          </div>
        <div class="row item-row">

         <?php
          $perfect_law_repeater = get_theme_mod( 'perfect_law_repeater');
          if(is_array($perfect_law_repeater)){
          foreach($perfect_law_repeater as $perfect_law_item) :
         ?>

          <div class="item-box">
            <div class="blog-item mb-3">
              <div class="blog-content">
                <?php
                  if($perfect_law_item['list_image']){
                    ?>
                    <img src="<?php echo $perfect_law_item['list_image']; ?>">
                    <?php
                  }else{
                    ?>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/judicial.png">
                    <?php
                  }
                ?>
                <h4 class="mb-3"><?php echo $perfect_law_item['list_heading']; ?></h4>

                <p class="mb-3">
                  <?php echo $perfect_law_item['list_content']; ?> 
                </p>
              </div>
            </div>
          </div>

        <?php endforeach; } ?>

        </div>
      </div>
    </div>
  </section>



  <section>
    <div class="m2sys-looking-section">
      <div class="row looging-row">
        <div class="col image-column" style="background: url(<?php echo get_template_directory_uri();?>/assets/images/looking.jpg);"></div>
        <div class="col text-column">
          <div class="inner-text">
          <h3 class="heading">Looking for More Than a Law Enforcement Management System?</h3>
          <h4 class="heading-below">M2SYS eGov Also Provides End-to-End Solutions for Government ID Projects</h4>
          <div class="lists">
            <ul>
              
              <li>
                <span class="image">
                  <img src="http://localhost/demo/wp-content/themes/m2sys/assets/images/checkmark.png">
                </span>
                <span class="text">Biometric Capture Tool</span>
              </li>
              <li>
                <span class="image">
                  <img src="http://localhost/demo/wp-content/themes/m2sys/assets/images/checkmark.png">
                </span>
                <span class="text">eGov Platform</span>
              </li>
              <li>
                <span class="image">
                  <img src="http://localhost/demo/wp-content/themes/m2sys/assets/images/checkmark.png">
                </span>
                <span class="text">Biometric Matching Service</span>
              </li>

            </ul>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>


  <section id="contact">
    <div class="contact-section">
      <div class="container">
        <div class="row">
          <div class="form-column">
            <div class="contact-form-box">
            <h3 class="heading">Get a free quote now</h3>
            <form method="POST" action="#">
              <div class="two-field">
                <div class="form-group first">
                    <label>Name</label>
                    <input type="text" class="form-control" name="contact-name" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="contact-email" />
                </div>
              </div>
                <div class="form-group">
                    <label>Company</label>
                    <input type="text" class="form-control" name="contact-company" />
                </div>
                <div class="form-group mb--40">
                    <label>How can we help you?</label>
                    <textarea name="contact-message" id="contact-message" class="form-control textarea" cols="30" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="main-btn two submit" name="submit-btn">Get In Touch</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<section>
  <div class="m2sys-footer-section">
    <div class="container">
      <div class="copyright"><p>© 2022. All rights reserved by <a href="https://www.m2sys.com/">M2SYS</a></p></div>
    </div>
  </div>
</section>


   <?php get_footer(); ?> 
