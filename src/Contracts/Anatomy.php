<?php

namespace Hanafalah\ModuleAnatomy\Contracts;

use Hanafalah\LaravelSupport\Contracts\DataManagement;

interface Anatomy extends DataManagement
{
    public function viewAnatomyList(): array;
}
