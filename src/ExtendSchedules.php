<?php

namespace Alquemie\WP;

if ( ! class_exists( 'ExtendSchedules' ) ) :

    /**
     * ExtendSchedules class for Wordpress Plugins
     *
     * @author Chris Carrel <support@alquemie.net>
     * 
     */
    class ExtendSchedules {
        
        public function __construct() {
            add_filter( 'cron_schedules', array(__CLASS__, 'custom_cron_schedules'));
        }

        public static function custom_cron_schedules($schedules){
            if(!isset($schedules["fast"])){
                $schedules["fast"] = array(
                    'interval' => 300,
                    'display' => __('5 Minutes'));
            }
            if(!isset($schedules["qtrhour"])){
                $schedules["qtrhour"] = array(
                    'interval' => 900,
                    'display' => __('15 Minutes'));
            }
            if(!isset($schedules["halfhour"])){
                $schedules["halfhour"] = array(
                    'interval' => 1800,
                    'display' => __('Half Hourly'));
            }
            if(!isset($schedules["weekly"])){
                $schedules["weekly"] = array(
                    'interval' => 604800,
                    'display' => __('Weekly'));
            }
            if(!isset($schedules["monthly"])){
                $schedules["monthly"] = array(
                    'interval' => 2592000,
                    'display' => __('30 Days'));
            }
            return $schedules;
        }
        
    }

endif;

	