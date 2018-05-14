<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

/**
 * @package		FT_Framework
 * @author		Freetuts Dev Team
 * @email       freetuts.net@gmail.com
 * @copyright	Copyright (c) 2015
 * @since		Version 1.0
 * @filesource  system/core/FT_Controller.php
 */
class FT_Controller
{
    // Đối tượng view
    protected $view     = NULL;
    
    // Đối tượng model
    protected $model    = NULL;
    
    // Đối tượng library
    protected $library  = NULL;
    
    // Đối tượng helper
    protected $helper   = NULL;
    
    // Đối tượng config
    protected $config   = NULL;
    
    /**
	 * Hàm khởi tạo
     * 
     * @desc    Load các thư viện cần thiết
	 */
    public function __construct() 
    {
        // Loader cho config
        require_once PATH_SYSTEM . '/core/loader/FT_Config_Loader.php';
        $this->config   = new FT_Config_Loader();
        $this->config->load('config');

        // Loader Library
        require_once PATH_SYSTEM . '/core/loader/FT_Library_Loader.php';
        $this->library = new FT_Library_Loader();

        // Load Helper
        require_once PATH_SYSTEM . '/core/loader/FT_Helper_Loader.php';
        $this->helper = new FT_Helper_Loader();

        // Load View
        require_once PATH_SYSTEM . '/core/loader/FT_View_Loader.php';
        $this->view = new FT_View_Loader();
    }
}


//// Require 2 file model and view
//require_once PATH_SYSTEM . '/core/loader/FT_Model_Loader.php';
//require_once PATH_SYSTEM . '/core/loader/FT_View_Loader.php';
//require_once PATH_SYSTEM . '/core/loader/FT_Library_Loader.php';
//require_once PATH_SYSTEM . '/core/loader/FT_Helper_Loader.php';
//$this->model    = new FT_Model_Loader();
//$this->view     = new FT_View_Loader();
//$this->library  = new FT_Library_Loader();
//$this->helper   = new FT_Helper_Loader();
//
//// Config
//$this->config   = include PATH_APPLICATION . '/config/config.php';