<?php
get_header();
?>
<body>
   <section id="banner">
       <div class="container banner_container">
           <div class="rows banner_rows">
               <div class="col-12 banner_column">

                <div class="banner-col">
                    <div class="banner_col">
                    <h1 class="banner_heading"><?php printf( get_theme_mod('banner_heading', __( 'See the Community, Feel the Shine', 'banner_heading' ) )); ?></h1>
                    <div class="banner-col2">
                    <p class="banner_sub"><?php printf( get_theme_mod('banner_subheading', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse.', 'banner_subheading' ) )); ?></p>
                    </div>                
                    <div class="banner-col3">
                        <button class="banner_button"><a class= "banner_link" href="<?php echo get_theme_mod('banner_button_url', __( '#', 'banner_button_url' ) ); ?>"><?php printf( get_theme_mod('banner_button_text', __( 'Login', 'banner_button_text' ) )); ?></a></button>
                    </div> 
                    </div>
                </div>

                <div class="banner_col2">
                  <img class="image-banner" src="<?php echo get_theme_mod('Banner_Image',get_bloginfo('template_directory').'/assets/images/Temp3_banner.png' )?>" border="0" alt="map">
                </div>
              
                
            </div>
       </div>
   </section>

   <section id="description">
       <div class="container description_container">
           <div class="rows description_rows">
               <div class="col-12 description_column text-center">
                    <div class="description_column">
                        <h1 class="description_heading"> <?php printf( get_theme_mod('second_section_heading', __( 'With Great Community', 'second_section_heading' ) )); ?> </h1>
                        <p class="description_paragraph"><?php printf( get_theme_mod('second_section_paragraph', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl iaculis id enim nibh semper. Proin morbi donec diam suscipit tincidunt arcu id. Iaculis cursus eros, elit gravida mauris sit nunc. Velit erat phasellus habitant adipiscing nullam consectetur quisque est facilisi. Massa elementum id metus, mattis facilisis. Tincidunt est cursus proin mattis dui donec arcu. Nec dolor elementum ut eu sit turpis proin non, sed.', 'second_section_paragraph' ) )); ?></p>
                    </div>
                </div>
            </div>
       </div>
   </section>

   <section id="latest_events">
       <div class="container latest_events_container">
           <div class="rows latest_events_rows">
               <div class="col-12 latest_events_column ">
                    <div class="latest_events_column">
                    <p class="latest_events_events"><?php printf( get_theme_mod('paragraph', __( 'Backyard Sale 12-15-2021 <br> Easter Egg Hunt 04-23-2021 <br> Coffee Hours 02-08-2021 <br> Backyard Together 11-16-2021 <br> Pet Celebration 07-10-2021', 'paragraph' ) )); ?></p>
                    </div>
                    <div class="latest_events_column2">
                        <hr class="divider">
                        <h1 class="latest_events_heading"> <?php printf( get_theme_mod('heading', __( 'Latest Events', 'heading' ) )); ?> </h1>
                        <p class="latest_events_paragraph"><?php printf( get_theme_mod('paragraph2', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. ', 'paragraph2' ) )); ?></p>
                    </div>
                </div>
            </div>
       </div>
   </section>

   <section id="fourth_section">
       <div class="container fourth_section_container">
           <div class="rows fourth_section_rows">
               <div class="col-12 fourth_section_column ">
                    <div class="fourth_section_column">
                        <hr class="divider_last">
                        <h1 class="fourth_section_heading"> <?php printf( get_theme_mod('fourth_heading', __( 'We are One', 'fourth_heading' ) )); ?> </h1>
                        <p class="fourth_section_paragraph"><?php printf( get_theme_mod('fourth_paragraph', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Pellentesque justo metus, auctor non consequat vel, iaculis ut
ante. Nulla vitae condimentum libero, ac pretium lectus.
Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex.
Sed malesuada, leo posuere rutrum viverra.', 'fourth_paragraph' ) )); ?></p>
                     </div>
                    <div class="fourth_section_column2">
                    <img class="image-ladt" src="<?php echo get_theme_mod('fourth_image',get_bloginfo('template_directory').'/assets/images/Temp3_WeAreOne.png' )?>" border="0" alt="map">
                 </div>
                </div>
            </div>
       </div>
   </section>


</body>
<?php
get_footer();
?>
