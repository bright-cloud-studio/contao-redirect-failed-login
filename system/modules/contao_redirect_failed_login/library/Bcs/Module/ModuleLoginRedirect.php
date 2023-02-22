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

namespace Bcs\Module;
use Contao;
use Contao\Config;

class ModuleLoginRedirect extends \Contao\ModuleLogin
{
    public function generate()
    {
        // perform our normal generation
        return parent::generate();
    }

    protected function compile()
    {
        // perform our normal compilation functions
        parent::compile();
        
        // get authorization values
        $container = \System::getContainer();
        $authorizationChecker = $container->get('security.authorization_checker');
        
        // get our selected failure page
        $objTarget = $this->objModel->getRelated('jumpToFailed');
        
        // if we have a failure page selected
        if($objTarget != null) {
            
            // if value isnt empty, meaning we failed the previous login
            if($this->Template->value != "") {
                
                // if we havent been authorized, meaning granted a role, then we didn't just log in successfully
                if (!$authorizationChecker->isGranted('ROLE_MEMBER')) {
                
                	// the the url of the failure page
        			$strRedirect = $objTarget->getAbsoluteUrl();
        			
                    // forward ourselves to that page
                    header("Location: " . $strRedirect);
                    
                }
            }
        }
        
    }
}
