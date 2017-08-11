<div class="i_sdc_settings_div">

<?php
    echo '<link type="text/css" href="'.SDC_PLUGIN_URL.'resources/style/admin_style.css" rel="stylesheet"/>';
    echo '<script type="text/javascript" src="'.SDC_PLUGIN_URL.'resources/js/admin_js.js" > </script>';

    $sdc_settings=get_option('sdc_settings',true);
    $sdc_defaults=get_option('sdc_defaults',true);
    $home_url = home_url(); //i_print($sdc_uploads);
?>

<h1> <?php _e( 'Simple Schema', 'sdc_plugin' ); ?> </h1>
    <div class="sdc_italic_h i_row">
        <div class="col-md-1" >
            <img src="<?php echo SDC_PLUGIN_URL;?>/images/simple-schema-icon-64x64.jpg" class="">
        </div>
        <div class="col-md-11 sdc_settings_description" >
            Simple Schema is the most complete Semantic HTML Plugin available for WordPress.
            Search Engines use semantic markup to rank and display your content appropriately.
            Our plugin includes: Person, Product, Event, Organization, Movie, Book, and Review.
            Assign schemas per page or post; select where they display (Before Content, After Content, Hidden); even Preview them before saving.
            Simple Schema makes Semantic SEO as easy as selecting a few simple options and filling-in-the-blanks.
        </div>
    </div>
<form method="post" action="">
    <div class="wrap i_sdc_wrap">
        <div class="postbox i_sdc_div">

            <h3 class="mt_0"> <?php esc_attr_e( 'Simple Schema - Default values:', 'sdc_plugin' ); ?> </h3>

            <div class="sdc_inp_div">
                <label for="sdc_copyright_holder_name"> <?php _e( 'Copyright holder name:', 'sdc_plugin' ); ?> </label>
                <input type="text" name="sdc_defaults[copyright_holder_name]" value="<?php echo ( $sdc_defaults['copyright_holder_name'] ) ? $sdc_defaults['copyright_holder_name'] : ''; ?>" id="sdc_copyright_holder_name" class="regular-text i_sdc_inp" />
            </div>

            <div class="sdc_inp_div">
                <label for="sdc_copyright_holder_url"> <?php _e( 'Copyright holder url:', 'sdc_plugin' ); ?> </label>
                <input type="text" name="sdc_defaults[copyright_holder_url]" value="<?php echo ( $sdc_defaults['copyright_holder_url'] ) ? $sdc_defaults['copyright_holder_url'] : ''; ?>" id="sdc_copyright_holder_url" class="regular-text i_sdc_inp" />
            </div>
            <!--<label for="schema_some_setting"> <?php /*_e( 'Copyright holder name:', 'sdc_plugin' ); */?> </label>
            <input type="text" name="sdc_settings[copyright_holder_name]" value="<?php /*echo ( $sdc_uploads['copyright_holder_name'] ) ? $sdc_uploads['copyright_holder_name'] : ''; */?>" id="schema_some_setting" class="regular-text i_sdc_inp" />-->

            <div class="sdc_inp_div">
                <label for="sdc_author"> <?php _e( 'Author:', 'sdc_plugin' ); ?> </label>
                <input type="text" name="sdc_defaults[author]" value="<?php echo ( $sdc_defaults['author'] ) ? $sdc_defaults['author'] : ''; ?>" id="sdc_author" class="regular-text i_sdc_inp" />
            </div>
            <div class="sdc_inp_div">
                <label for="sdc_copyright_holder_url"> <?php _e( 'Publisher:', 'sdc_plugin' ); ?> </label>
                <input type="text" name="sdc_defaults[publisher]" value="<?php echo ( $sdc_defaults['publisher'] ) ? $sdc_defaults['publisher'] : ''; ?>" id="sdc_publisher" class="regular-text i_sdc_inp" />
            </div>



            <h3 class="i_hidden"> <?php esc_attr_e( 'Simple Schema - Settings:', 'sdc_plugin' ); ?> </h3>


            <input type="hidden" name="sdc_action" value="update_simple_schema_settings" />
            <?php submit_button('Save', 'primary', 'sdc_submit', false); ?>
            <div class="i_ajax_msg">
            </div>
            <?php
            wp_nonce_field( SDC_PROTECTION_H, 'sdc_class_nonce' );
            ?>

            <div class="sdc_copyright_div">
                COPYRIGHT © 2017 · <a href="https://simpleschema.com/" target="_blank">SIMPLE SCHEMA</a>
            </div>
        </div>
    </div>
</form>

</div>