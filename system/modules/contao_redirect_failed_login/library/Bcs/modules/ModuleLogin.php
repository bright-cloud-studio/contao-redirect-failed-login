<?php

/**
 * Bright Cloud Studio's Contao Redirect Failed Login
 *
 * Copyright (C) 2023 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/contao-redirect-failed-login
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/

namespace Bcs;

use Contao\Config;

class ModuleLogin extends \Contao\ModuleLogin
{
    public function generate()
    {
        return parent::generate();
    }

    protected function compile()
    {
        parent::compile();

        // DO STUFFS HERE
      
    }
}
