<?php

namespace Appslanka\FilamentJobWatcher;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class FilamentJobWatcher implements Plugin
{
    public function getId(): string
    {
        return 'filament-job-watcher';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('filament-job-watcher', __DIR__ . '/../resources/dist/filament-job-watcher.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('filament-job-watcher');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
