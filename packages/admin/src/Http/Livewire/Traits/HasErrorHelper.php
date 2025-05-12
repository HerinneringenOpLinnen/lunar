<?php

namespace Lunar\Hub\Http\Livewire\Traits;

trait HasErrorHelper
{
    /**
     * Check if *any* of the given validation keys/patterns has an error.
     *
     * @param  string[]  $keys   e.g. ['foo', 'bar.*']
     * @return bool
     */
    protected function hasAnyError(array $keys): bool
    {
        $errorBag = $this->getErrorBag();
        foreach ($keys as $pattern) {
            if (count($errorBag->get($pattern))) {
                return true;
            }
        }
        return false;
    }

    /**
     * Does the component currently have *any* validation errors?
     */
    protected function hasErrors(): bool
    {
        return $this->getErrorBag()->count() > 0;
    }
}
