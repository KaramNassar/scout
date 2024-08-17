<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;

class MailConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $settings = GeneralSetting::first(['email_settings', 'email_from_address', 'email_from_name']);

        $mailSettings = $settings->email_settings;

        Config::set('mail.mailers.smtp', [
            'transport'  => $mailSettings['default_email_provider'],
            'host'       => $mailSettings['smtp_host'],
            'port'       => $mailSettings['smtp_port'],
            'encryption' => $mailSettings['smtp_encryption'],
            'timeout'    => $mailSettings['smtp_timeout'],
            'username'   => $mailSettings['smtp_username'],
            'password'   => $mailSettings['smtp_password'],
        ]);

        Config::set('mail.from.address', $settings->email_from_address);
        Config::set('mail.from.name', $settings->email_from_name);
    }
}
