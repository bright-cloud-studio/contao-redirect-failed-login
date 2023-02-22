<?php

/**
 * Bright Cloud Studio's Modal Gallery
 *
 * Copyright (C) 2021 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/modal-gallery
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/

  
namespace Bcs\Module;

use Contao\Config;

class ModuleLogin extends \Contao\ModuleLogin
{
    public function generate()
    {
        echo "we ded";
        die();
        
        return parent::generate();
    }

    protected function compile()
    {
        echo "we ded";
        die();
        
        parent::compile();
    }
}
