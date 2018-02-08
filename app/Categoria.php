<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\TenantScope;

class Categoria extends Model
{
    protected $fillable = ['nome'];

    // public function scopeByConta(Builder $query, $conta_id)
    // {
    //   return $query->where('conta_id', $conta_id);
    // }

    protected static function boot()
    {
      parent::boot();

      static::addGlobalScope(new TenantScope());
      

      static::creating(function(Model $model){
        $conta_id = \Auth::user()->conta_id;
        $model->conta_id = $conta_id;
      });
    }
}
