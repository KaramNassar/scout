<?php

namespace App\Providers\Filament;

use App\Filament\Resources\ActivityLogResource;
use App\Livewire\CustomProfile;
use BezhanSalleh\FilamentExceptions\FilamentExceptionsPlugin;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Jeffgreco13\FilamentBreezy\BreezyCore;
use Joaopaulolndev\FilamentGeneralSettings\FilamentGeneralSettingsPlugin;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;
use Rmsramos\Activitylog\ActivitylogPlugin;
use Tapp\FilamentMailLog\FilamentMailLogPlugin;
use TomatoPHP\FilamentTranslations\FilamentTranslationsPlugin;
use TomatoPHP\FilamentTranslations\FilamentTranslationsSwitcherPlugin;

class AdminPanelProvider extends PanelProvider
{
	public function panel(Panel $panel): Panel
	{
		return $panel
			->default()
			->id('admin')
			->path('admin')
			->login()
			->sidebarCollapsibleOnDesktop()
			->colors([
				'primary' => Color::Amber,
				'gray' => 'rgb(107, 114, 128)',
			])
            ->favicon(GeneralSetting::value('site_favicon'))
			->authGuard('admin')
			->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
			->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
			->pages([
				Pages\Dashboard::class,
			])
			->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
			->widgets([
				Widgets\AccountWidget::class,
				Widgets\FilamentInfoWidget::class,
			])
			->middleware([
				EncryptCookies::class,
				AddQueuedCookiesToResponse::class,
				StartSession::class,
				AuthenticateSession::class,
				ShareErrorsFromSession::class,
				VerifyCsrfToken::class,
				SubstituteBindings::class,
				DisableBladeIconComponents::class,
				DispatchServingFilamentEvent::class,
			])
			->authMiddleware([
				Authenticate::class,
			])
			->plugins([
				FilamentShieldPlugin::make(),
				BreezyCore::make()
					->myProfile()
					->myProfileComponents([
						'personal_info' => CustomProfile::class
					]),
				FilamentGeneralSettingsPlugin::make()
					->canAccess(fn() => auth('admin')->user()->can('page_GeneralSettingsPage'))
					->setSort(3)
					->setIcon('heroicon-o-cog')
					->setNavigationGroup('Settings')
					->setTitle('General Settings')
					->setNavigationLabel('General Settings'),
				FilamentExceptionsPlugin::make(),
                ActivitylogPlugin::make(),
                FilamentMailLogPlugin::make(),
                FilamentTranslationsPlugin::make(),
                FilamentTranslationsSwitcherPlugin::make()
			]);
	}
}
