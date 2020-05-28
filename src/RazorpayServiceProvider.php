<?php

namespace Webdexpert\Razorpay;
use Razorpay\Api\Api;
use Illuminate\Support\ServiceProvider;

/*
 * Part of the Razorpay Laravel package.
 * Released under the MIT License.
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



class RazorpayServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * {@inheritdoc}
     */
    /**
     * Register services for Razorpay API.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Api::class, function ($app) {
            $config = $app->make('config');
            $key = $config->get('razorpay.RAZORPAY_KEY');
            $secret = $config->get('razorpay.RAZORPAY_SECRET');
            return new Api($key, $secret);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(array(
            __DIR__ . './config/razorpay.php' => config_path('razorpay.php'),
        ), 'razorpay');
    }
}
