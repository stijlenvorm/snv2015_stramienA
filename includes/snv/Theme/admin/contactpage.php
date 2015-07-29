<div class="wrap">
    <h2>Website Informatie</h2>

    <form method="post" action="options.php">
        <?php settings_fields('contact-settings-group'); ?>

        <?php // algemene info ?>
        <div class="admin-table">
            <h3 class="customH3">Contact Informatie - Algemeen</h3>

            <div class="inputHolder">

                <div class="lefty">
                    Logo
                </div>
                <div class="righty">
                    <input class="hidden" type="text" id="image_location" name="home-logo" id="logo_field" value="<?php echo esc_attr( get_option('home-logo') ); ?>">
                    <input data-name="algemeen" class="onetarek-upload-button button" type="button" value="Kies Nieuw Logo" /><br>

                    <img id="algemeen_logo_show" src="<?php echo esc_attr( get_option('home-logo') ); ?>" alt="">
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="inputHolder">
                <div class="lefty">
                    E-mail
                </div>
                <div class="righty">
                    <input type="text" name="email" value="<?php echo esc_attr( get_option('email') ); ?>" placeholder="info@stijlenvorm.nl">
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="inputHolder">
                <div class="lefty">
                    telefoon
                </div>
                <div class="righty">
                    <input type="text" name="telefoon" value="<?php echo esc_attr( get_option('telefoon') ); ?>" placeholder="06-12345678">
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="inputHolder">
                <div class="lefty">
                    adres
                </div>
                <div class="righty">
                    <input type="text" name="adres" value="<?php echo esc_attr( get_option('adres') ); ?>" placeholder="Velperweg 35">
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="inputHolder">
                <div class="lefty">
                    postcode
                </div>
                <div class="righty">
                    <input type="text"   name="postcode"  value="<?php echo esc_attr( get_option('postcode') ); ?>" placeholder="6531DN">
                    <input type="hidden" name="latitude"  value="">
                    <input type="hidden" name="longitude" value="">
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="inputHolder">
                <div class="lefty">
                    woonplaats
                </div>
                <div class="righty">
                    <input type="text" name="woonplaats" value="<?php echo esc_attr( get_option('woonplaats') ); ?>" placeholder="Arnhem">
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="inputHolder">
                <div class="lefty">
                    Facebook page
                </div>
                <div class="righty">
                    <span class="social-media-info">www.facebook.com/</span>
                    <input type="text" name="facebook" value="<?php echo esc_attr( get_option('facebook') ); ?>" placeholder="einde van URL">
                </div>
            </div>

            <div style="clear:both;"></div>
            <div class="inputHolder">
                <div class="lefty">
                    Twitter page
                </div>
                <div class="righty">
                    <span class="social-media-info">www.twitter.com/</span>
                    <input type="text" name="twitter" value="<?php echo esc_attr( get_option('twitter') ); ?>" placeholder="einde van URL">
                </div>
            </div>

            <div style="clear:both;"></div>
            <div class="inputHolder">
                <div class="lefty">
                    LinkedIn page
                </div>
                <div class="righty">
                    <span class="social-media-info">www.linkedIn.com/</span>
                    <input type="text" name="linkedIn" value="<?php echo esc_attr( get_option('linkedIn') ); ?>" placeholder="einde van URL">
                </div>
            </div>

            <div style="clear:both;"></div>
            <div class="inputHolder">
                <div class="lefty">
                    pinterest page
                </div>
                <div class="righty">
                    <span class="social-media-info">www.pinterest.com/</span>
                    <input type="text" name="pinterest" value="<?php echo esc_attr( get_option('pinterest') ); ?>" placeholder="einde van URL">
                </div>
            </div>

        </div>

        <?php submit_button(); ?>

    </form>
</div>