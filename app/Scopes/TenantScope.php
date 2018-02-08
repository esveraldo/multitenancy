<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{
  public function apply(Builder $builder, Model $model)
  {
    $conta_id = \Auth::user()->conta_id;
    $builder->where('conta_id', $conta_id);
  }
}
