<?php

namespace App\Providers\Filament;

use App\Filament\Widgets\AgendamentosLocacao;
use App\Filament\Widgets\ContasPagarHoje;
use App\Filament\Widgets\ContasReceberHoje;
use App\Filament\Widgets\LocacaoMes;
use App\Filament\Widgets\SomatorioLocacao;
use App\Filament\Widgets\StatsVeiculo;
use App\Filament\Widgets\TotalLucratividade;
use App\Filament\Widgets\VeiculoChegando;
use App\Filament\Widgets\VeiculoDisponivel;
use App\Models\Veiculo;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationItem;
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

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->databaseNotifications()
           // ->favicon(asset('img/logo-motomaster.png'))
           // ->brandLogo(asset('img/logo-motomaster.png'))
          //  ->brandLogoHeight('3rem')
            ->colors([
                'primary' => Color::Amber,
            ])
            ->resources([
                config('filament-logger.activity_resource')
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
             //   Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                // Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
                // StatsVeiculo::class,
                // SomatorioLocacao::class,
                // AgendamentosLocacao::class,
                // TotalLucratividade::class,
                // LocacaoMes::class,
                // ContasReceberHoje::class,
                // ContasPagarHoje::class,
                // VeiculoChegando::class,
                // VeiculoDisponivel::class,
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
            ->navigationItems([
                NavigationItem::make('Manuais')
                    ->url('https://drive.google.com/drive/folders/1Pt9pkPfRKporD7Q3oLafggKGpHu4Xw46?usp=sharing', shouldOpenInNewTab: true)
                    ->icon('heroicon-s-question-mark-circle')
                    ->group('Ajuda')
                    ->sort(3),
            ]);
    }
}
