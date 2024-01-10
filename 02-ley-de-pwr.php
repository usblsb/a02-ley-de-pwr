<?php
/*
 * Plugin Name: 02 Calculadora de la potencia eléctrica
 * Plugin URI: https://webyblog.es/
 * Description: Calcula la potencia eléctrica conociendo dos valores. [jlm0_calculadora_potencia].
 * Version: 10-01-2024
 * Author: Juan Luis Martel
 * Author URI: https://www.webyblog.es
 * License: GPLv3 or later
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


function load_assets_pwr() {
    wp_enqueue_script('ley-de-pwr-js', plugin_dir_url(__FILE__) . 'ley-de-pwr.js', array('jquery'), '1.0', true);
    wp_enqueue_style('ley-de-pwr-css', plugin_dir_url(__FILE__) . 'ley-de-pwr.css');
}
add_action('wp_enqueue_scripts', 'load_assets_pwr');

function render_pwrs_law_calculator() {
    ob_start();
    ?>
    <div class="pwrs-law-calculator">
        <label for="vatios">Vatios (W):</label>
        <input type="number" id="vatios" step="any">
        <br>
        <label for="corriente">Corriente (I):</label>
        <input type="number" id="corriente" step="any">
        <br>
        <label for="voltaje">Voltaje (V):</label>
        <input type="number" id="voltaje" step="any">
        <br>
        <button id="calcular">Calcular</button>
		<button id="borrar">Borrar</button>

        <div class="resultado"></div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('jlm0_calculadora_potencia', 'render_pwrs_law_calculator');