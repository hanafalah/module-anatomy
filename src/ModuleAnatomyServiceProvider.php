<?php

namespace Hanafalah\ModuleAnatomy;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class ModuleAnatomyServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerMainClass(ModuleAnatomy::class)
            ->registerCommandService(Providers\CommandServiceProvider::class)
            ->registers([
                '*',
                'Services'  => function () {
                    $this->binds([
                        Contracts\ModuleAnatomy::class => ModuleAnatomy::class,
                        Contracts\Anatomy::class       => Schemas\Anatomy::class
                    ]);
                }
            ]);
        $this->setupExaminationLists();
    }

    private function setupExaminationLists(): self
    {
        $examination_lists = config('database.examinations', []);
        $lists = config('module-anatomy.examinations', []);
        $examination_lists = array_merge($examination_lists, $lists);
        config(['database.examinations' => $examination_lists]);
        return $this;
    }

    protected function dir(): string
    {
        return __DIR__ . '/';
    }

    protected function migrationPath(string $path = ''): string
    {
        return database_path($path);
    }
}
