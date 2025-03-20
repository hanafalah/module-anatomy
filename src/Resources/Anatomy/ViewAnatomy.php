<?php

namespace Zahzah\ModuleAnatomy\Resources;

use Zahzah\LaravelSupport\Resources\ApiResource;

class ViewAnatomy extends ApiResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $resquest
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray(\Illuminate\Http\Request $request) : array{
      $arr = [
        'id'         => $this->id,
        'name'       => $this->name,
        'morph'      => $this->morph,
        'props'      => $this->getOriginal()['props']
      ];
      
      return $arr;
  }
}