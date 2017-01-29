<?php

require_once 'basic.php';

/**
* Enhances Wordpress security.
*/
class ForumSecurity {

    public function __construct() {
        register_activation_hook( __FILE__, array( $this, 'fsp_activate' ) );
        register_deactivation_hook( __FILE__, array( $this, 'fsp_deactivate' ) );

        add_action('init', array($this,'fsp_run'));
    }

    public function fsp_run() {
        $tweaks = new BasicSecurityTweaks();
        
        $tweaks->blockMaliciousUrlRequests();
        $tweaks->handleWPVersion();
    }

    public function fsp_activate() {
        echo 'Forum Security Plugin has been activated';
    }

     public function fps_deactivate() {
        echo 'Forum Security Plugin has been deactivated';
    }
}