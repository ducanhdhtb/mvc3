<?php
/**
 * @package		FT_Framework
 * @author		Freetuts Dev Team
 * @email       freetuts.net@gmail.com
 * @copyright	Copyright (c) 2015
 * @since		Version 1.0
 * @filesource  system/core/loader/FT_Model_Loader.php
 */

class FT_Model_Loader
{   
    /**
	 * Load model
     * 
	 * @param 	string
     * @desc    hàm load model, tham số truyền vào là tên của model và các biến truyền vào hàm khởi tạo
	 */
    public function load($model, $args)
    {
        // Nếu model chưa load thì tiến hành load
        if (empty($this->{$model})){
            $class = ucfirst($model) . '_Model';
            require_once(PATH_APPLICATION . '/model/' . $class . '.php');
            $this->{$model} = new $class($args);
        }
    }
}