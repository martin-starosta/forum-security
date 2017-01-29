<?php

require_once 'basic.php';

class ForumSecurity {

    public function __construct() {
        register_activation_hook( __FILE__, array( $this, 'fsp_activate' ) );
        register_deactivation_hook( __FILE__, array( $this, 'fsp_deactivate' ) );

        add_action('init', array($this,'fsp_run'));
    }

    public function fsp_run() {
        $tweaks = new BasicSecurityTweaks();
        
        $tweaks->blockMaliciousUrlRequests();
        $tweaks->removeVersion();
    }

    public function fsp_activate() {
        echo 'Forum Security Plugin has been activated';
    }

     public function fps_deactivate() {
        echo 'Forum Security Plugin has been deactivated';
    }

    public static function head() {
        echo '<style>/* This is from FSP. */</style>';
    }
}