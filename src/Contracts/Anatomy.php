<?php

namespace Zahzah\ModuleAnatomy\Contracts;

use Zahzah\LaravelSupport\Contracts\DataManagement;

interface Anatomy extends DataManagement{
    public function viewAnatomyList(): array;
}