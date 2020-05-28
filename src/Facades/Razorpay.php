<?php

/*
 * Part of the Razorpay Laravel package.
 * Released under the MIT License.
 *
 *
 *
 * @package    Razorpay Laravel
 * @version    1.0.0
 * @author     Sandeep Kapri
 * @license    MIT
 * @copyright  (c) 2020, Webdexpert
 * @link       https://www.webdexpert.com
 * 
 */

namespace Webdexpert\Razorpay\Facades;

use Illuminate\Support\Facades\Facade;

class Razorpay extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'razorpay';
    }
}
