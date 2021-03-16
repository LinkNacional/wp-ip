<?php
defined('ABSPATH') or exit('Please Keep Silence');
/*
* Plugin Name:get IP
* Author URI: https://www.linknacional.com.br/
* Author: Link Nacional
* Description: Insert the IP access by shortcode
* Version: 1.0.0
* License: GNU LICENSE 3.0
* License URI: https://www.apache.org/licenses/LICENSE-2.0
*/
if (!class_exists('login_whmcs_shortcode')) {
    /**
     * @author João Victor
     */
    class Wp_IP_Shortcode {
        public function __construct() {
            add_shortcode('ip_address', [$this, 'ip_address']);
        }

        /// CRIAR O SHORTCODE
        public function ip_address($atts = [], $content = null, $tag = '') {
            $IP = $_SERVER['REMOTE_ADDR'];
            return $IP;
        }
    }
}
$ip_init = new Wp_IP_Shortcode();