<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/API_Controller.php';

class User_api extends API_Controller
{
    public function __construct() {
        parent::__construct();
    }


    /**
     * Simple API
     * 
     * @link: api/v1/simple
     */

    public function simple_api(){

        header("Access-Control-Allow-Origin: *");
    
        // API Configuration
            $this->_apiConfig([
                'methods' => ['POST','GET']
            ]);
    }

    /**
     * API Limit
     * 
     * @link: api/v1/limit
     */

    public function api_limit(){

        /**
         * API Limit
         * ----------------------------------
         * @param: {int} API limit Number
         * @param: {string} API limit Type (IP)
         * @param: {string} API limit [everyday]
         */

        

        $this->_APIConfig([
            // number limit, type limit, everyday
            'methods' => ['POST','GET'],
            'limit' => [20, 'ip', 5] 
        ]);


    }

        /**
     * API Key without database
     * 
     * @link: api/v1/key
     */

    public function api_key(){

        /**
         * API Limit
         * ----------------------------------
         * @param: {string} Types
         * @param: {string} API Key
         * 
         */
        
        $this->_APIConfig([
            // 'key' => ['header', 12345],

            //With database
            'key' => ['header'],


        ]);


    }

}

