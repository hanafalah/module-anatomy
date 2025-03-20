<?php

declare(strict_types=1);

namespace Zahzah\ModuleAnatomy\Providers;

use Illuminate\Support\ServiceProvider;
use Zahzah\ModuleAnatomy\Commands as Commands;

class CommandServiceProvider extends ServiceProvider
{
    private $commands = [
        Commands\InstallMakeCommand::class
    ];


    public function register(){
        $this->commands($this->commands);
    }

    public function provides(){
        return $this->commands;
    }
}
