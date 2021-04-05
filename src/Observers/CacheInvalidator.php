<?php

namespace Sfneal\Observers;

use Illuminate\Database\Eloquent\Model;

trait CacheInvalidator
{
    /**
     * Clear a Model's related caches.
     *
     * @param Model $model
     */
    abstract protected function clearCaches(Model $model): void;
}
