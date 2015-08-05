<div class="row">
    <div class="col-xs-12">
        
        <div class="row">
            <div class="col-xs-2">
                Slogan footer
            </div>
            <div class="col-xs-10">
                <input type="text" name="footer_slogan" value="<?php echo  esc_attr(get_option('footer_slogan'));  ?>" placeholder="slogan footer">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-2">
                Footer Background
            </div>
            <div class="col-xs-10">
                <input class="hidden" type="text" name="footer_background" id="logo_field" value="<?php echo esc_attr( get_option('footer_background') ); ?>">
                <input data-name="footer_background" class="onetarek-upload-button button" type="button" value="Kies een achtergrond afbeelding"><br>
                <img id="footer_background_logo_show" src="<?php echo esc_attr( get_option('footer_background') ); ?>" alt="">
            </div>
        </div>

    </div> 
</div>