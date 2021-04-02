<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MailConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if (\Schema::hasTable('mail_configurations')) {
            $mail = \DB::table('mail_configurations')->first();
            if ($mail) //checking if table is not empty
            {
                $config = array(
                    'driver' => 'smtp',
                    'host' => 'smtp.googlemail.com',
                    'port' => '465',
                    'encryption' => 'ssl',
                    'username'   => $mail->user_name,
                    'password'   => $mail->password,
                );
                \Config::set('mail', $config);
            }
        }
    }
}
