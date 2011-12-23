<?php
/**
 * logAuthError
 * Log Authentification Error in apache error log
 * @author Adrien Bettini <abettini@astrel.fr>
 */
if(!defined('DOKU_INC')) die();
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'action.php');

class action_plugin_logautherror extends DokuWiki_Action_Plugin {
   
    /**
    * return some info
    * @see DokuWiki_Plugin::getInfo()
    */
    function getInfo() {
        return array(
                        'author' => 'Adrien Bettini',
                        'email'  => 'abettini@astrel.fr',
                        'date'   => '08/12/2011',
                        'name'   => 'logAuthError',
                        'desc'   => 'Log Authentification Error in apache error log',
                        'url'    => 'http://www.astrel.fr/',
        );
    }
    
    /**
     * Plugin should use this method to register its handlers with the dokuwiki's event controller
     * @see DokuWiki_Action_Plugin::register()
     */
    function register(&$controller) {
        $controller->register_hook('AUTH_LOGIN_CHECK', 'AFTER', $this, '_logAuthError');
    }
    
    /**
     * Log Authentification Error in apache error log
     * @param DOKU_EVENT $event
     * @param array $param
     */
    function _logAuthError(&$event, $param){
        if($event->result === false && !empty($event->data['user'])){
            error_log(str_replace(array('{userName}','{userPass}'), array($event->data['user'], $event->data['password']), $this->getConf('errorMsg')),0);
            sleep(mt_rand(1,15));
        }
    }
}
