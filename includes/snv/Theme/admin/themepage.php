<?php
function checkIfSelected($option, $value)
{
    if (get_option($option) == $value) {
        return 'selected="selected"';
    }
}
?>

<div class="wrap">
    <h2>Website Informatie</h2>

    <form method="post" action="options.php">
        <?php settings_fields('theme-settings-group'); ?>

        <?php // algemene info ?>
        <div class="admin-table">

            <h3 class="customH3">Scripts &amp; Styles</h3>

            <div class="inputHolder">
                <div class="lefty">
                    Jquery inschakelen
                </div>
                <div class="righty">
                    <select name="jquery">
                        <option value="1" <?php echo checkIfSelected('jquery', 1) ?> >ja</option>
                        <option value="2" <?php echo checkIfSelected('jquery', 2) ?> >nee</option>
                    </select>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div class="inputHolder">
                <div class="lefty">
                    Bootstrap javascript inschakelen
                </div>
                <div class="righty">
                    <select name="bootstrap_js">
                        <option value="1" <?php echo checkIfSelected('bootstrap_js', 1) ?> >ja</option>
                        <option value="2" <?php echo checkIfSelected('bootstrap_js', 2) ?> >nee</option>
                    </select>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div class="inputHolder">
                <div class="lefty">
                    Bootstrap CSS inschakelen
                </div>
                <div class="righty">
                    <select name="bootstrap_css">
                        <option value="1" <?php echo checkIfSelected('bootstrap_css', 1) ?> >ja</option>
                        <option value="2" <?php echo checkIfSelected('bootstrap_css', 2) ?> >nee</option>
                    </select>
                </div>
            </div>
            <div style="clear:both;"></div>

            
            <div class="inputHolder">
                <div class="lefty">
                    wow-js inschakelen 
                </div>
                <div class="righty">
                    <select name="wow_js">
                        <option value="1" <?php echo checkIfSelected('wow_js', 1) ?> >ja</option>
                        <option value="2" <?php echo checkIfSelected('wow_js', 2) ?> >nee</option>
                    </select>
                </div>
            </div>
            <div style="clear:both;"></div>


            <div class="inputHolder">
                <div class="lefty">
                    Animate CSS inschakelen 
                </div>
                <div class="righty">
                    <select name="animate_css">
                        <option value="1" <?php echo checkIfSelected('animate_css', 1) ?> >ja</option>
                        <option value="2" <?php echo checkIfSelected('animate_css', 2) ?> >nee</option>
                    </select>
                </div>
            </div>
            <div style="clear:both;"></div>


            <div class="inputHolder">
                <div class="lefty">
                    Font awesome 
                </div>
                <div class="righty">
                    <select name="font_awesome">
                        <option value="1" <?php echo checkIfSelected('font_awesome', 1) ?> >ja</option>
                        <option value="2" <?php echo checkIfSelected('font_awesome', 2) ?> >nee</option>
                    </select>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>

        <?php submit_button(); ?>

    </form>
</div>