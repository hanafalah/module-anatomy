<?php

namespace Hanafalah\ModuleAnatomy\Models;

use Hanafalah\ModuleExamination\Resources\Anatomy\ViewAnatomy;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;

class Anatomy extends BaseModel
{
    use SoftDeletes, HasProps;

    protected $list = [
        'id',
        'name',
        'morph',
        'props'
    ];

    public function toViewApi()
    {
        return new ViewAnatomy($this);
    }

    public function toShowApi()
    {
        return new ViewAnatomy($this);
    }

    public function form()
    {
        return $this->hasOneThroughModel(
            'Form',
            'FormHasAnatomy',
            $this->getForeignKey(),
            $this->FormModel()->getKeyName(),
            $this->getKeyName(),
            $this->FormModel()->getForeignKey()
        );
    }
}
