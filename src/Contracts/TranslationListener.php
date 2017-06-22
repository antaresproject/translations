<?php

/**
 * Part of the Antares package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Translations
 * @version    0.9.0
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares
 * @link       http://antaresproject.io
 */



namespace Antares\Translations\Contracts;

interface TranslationListener
{

    /**
     * change group of translations
     */
    public function group($typeId, $group = null, $code = null);

    /**
     * response when group has not been changed
     */
    public function groupFailed($error = null);
}
