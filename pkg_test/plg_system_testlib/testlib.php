<?php
/**
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later.
 */

defined('_JEXEC') or die;

/**
 * Mylib plugin class.
 *
 * @package     Joomla.plugin
 * @subpackage  System.Testlib
 */
class plgSystemTestlib extends JPlugin
{
    /**
     * Method to register custom library.
     * @see http://docs.joomla.org/Using_own_library_in_your_extensions
     * Now you will be able to call classes from your library
     * (located in /libraries/testlib) from any component, module or plugin.
     * Example: MyLib\User\UserHelper class must be located in
     * LIBROOT/src/MyLib/User/UserHelper.php
     *
     * return  void
     */
    public function onAfterInitialise()
    {
        /*
        PrefixUserModel class should be located in PATH_TO_PREFIX/user/model.php
        PrefixUser class should be located in PATH_TO_PREFIX/user/user.php
        Our scenario examples:

        MylibUserHelper class should be located in /libraries/mylib/user/helper.php
        MylibUser class should be located in /libraries/mylib/user/user.php
        */
        JLoader::registerPrefix('Testlib', JPATH_LIBRARIES . '/testlib');
    }
}