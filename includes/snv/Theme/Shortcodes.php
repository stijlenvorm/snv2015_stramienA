<?php
namespace snv\Theme;

/**
* class for all shortcodes used in the theme
*/
class Shortcodes
{
    public function __construct()
    {
        add_shortcode('googlemaps', array($this, 'googleMapsShortcode'));
        add_shortcode('contactinfo', array($this, 'contactInfo'));
    }

    // register shortcode for google maps in header
    public function googleMapsShortcode($atts)
    {
        $atts = shortcode_atts(array(
            'lat'      => null,
            'lon'      => null,
            'adres'    => null,
            'postcode' => null,
            'canvas'   => 'mapsHeader_canvas',
            'label'    => 'onze locatie',
        ), $atts);

        $script = '<script type="text/javascript">';

        // enque the script
        wp_enqueue_script('maps-key', '//maps.googleapis.com/maps/api/js?key='.MAPS_API_KEY.'&amp;sensor=false', array(), '1.0.0', true);

        if ($atts['lat'] != null && $atts['lon'] != null) {
            // use the given lat and long to render the map
            $script .="jQuery(document).ready(function($) {
                var gMaps = new GoogleMaps();
                gMaps.renderMap('".$atts['canvas']."', '".$atts['lat']."', '".$atts['lon']."', '".$atts['label']."');
            });" ;
        } else if ($atts['adres'] != null && $atts['postcode'] != null) {
            $script .="jQuery(document).ready(function($) {
                var gMaps = new GoogleMaps();
                gMaps.geocode('".str_replace(' ', '+', get_option('adres'))."', '".str_replace(' ', '', get_option('adres'))."', '".$atts['canvas']."' , '".$atts['label']."' , true);
            });" ;
        } else {
            // check if lat/lon ar filled in
            if (!get_option('latitude') || !get_option('longitude')) {
                $url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.str_replace(' ', '+', get_option('adres')).'+'.str_replace(' ', '+', get_option('postcode')).'&key='.MAPS_API_KEY;
                $geocode = file_get_contents($url);

                $output= json_decode($geocode);

                $lat = $output->results[0]->geometry->location->lat;
                $lng = $output->results[0]->geometry->location->lng;
                update_option('latitude', $lat);
                update_option('longitude', $lng);

                //use the lat/lon form the information page
                $script .="jQuery(document).ready(function($) {
                    var gMaps = new GoogleMaps();
                    gMaps.geocode('".str_replace(' ', '+', get_option('adres'))."', '".str_replace(' ', '', get_option('postcode'))."', '".$atts['canvas']."' , '".$atts['label']."' , true);
                });" ;
            } else {
                 // use the given lat and long to render the map
                $script .="jQuery(document).ready(function($) {
                    var gMaps = new GoogleMaps();
                    gMaps.renderMap('".$atts['canvas']."', '".get_option('latitude')."', '". get_option('longitude')."', '".$atts['label']."');
                });" ;
            }
        }

        $script .= "</script>";
        return '<div id="mapsHeader_canvas">Vul de correcte adres gegevens in...</div>' . $script ;
    }

    public function contactInfo($atts)
    {
        $adres      = get_option('adres');
        $postcode   = get_option('postcode');
        $woonplaats = get_option('woonplaats');
        $tel        = get_option('telefoon');
        $mail       = get_option('email');

        $rs = '<ul class="contactInfo">';
        $rs.= '<li class="adres">'.$adres.'</li>';
        $rs.= '<li class="adres2">'.$postcode.' '.$woonplaats.'</li>';
        $rs.= '<li class="tel">'.$tel.'</li>';
        $rs.= '<li class="mail">'.$mail.'</li>';
        
        $option = get_option('facebook');
        if( $option == true && $option !== '' ) {
            $rs.= '<li class="social facebook"><a href="//facebook.com/'.$option.'" title="Facebook pagina van '.$option.'" target="_blank">Facebook</a></li>';
        }

        $option = get_option('twitter');
        if( $option == true && $option !== '' ) {
            $rs.= '<li class="social twitter"><a href="//twitter.com/'.$option.'" title="Twitter van '.$option.'" target="_blank">Twitter</a></li>';
        }

        $option = get_option('linkedIn');
        if( $option == true && $option !== '' ) {
            $rs.= '<li class="social linkedIn"><a href="//linkedin.com/'.$option.'" title="LinkedIn pagina van '.$option.'" target="_blank">LinkedIn</a></li>';
        }

        $option = get_option('pinterest');
        if( $option == true && $option !== '' ) {
            $rs.= '<li class="social pinterest"><a href="//pinterest.com/'.$option.'" title="pinterest pagina van '.$option.'" target="_blank">Pinterest</a></li>';
        }

        $rs.= '</ul>';

        return $rs;
    }
}
