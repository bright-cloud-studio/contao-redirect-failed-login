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
use Contao;
use Contao\Config;

use Scheb\TwoFactorBundle\Security\Authentication\Exception\InvalidTwoFactorCodeException;
use Scheb\TwoFactorBundle\Security\TwoFactor\Event\TwoFactorAuthenticationEvent;
use Scheb\TwoFactorBundle\Security\TwoFactor\Event\TwoFactorAuthenticationEvents;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\TooManyLoginAttemptsAuthenticationException;


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
