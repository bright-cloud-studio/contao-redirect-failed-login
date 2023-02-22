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

/* Register the classes */
ClassLoader::addClasses(array
(
    'Bcs\Module\ModuleLoginRedirect'               => 'system/modules/contao_redirect_failed_login/library/Bcs/Module/ModuleLoginRedirect.php'
));
