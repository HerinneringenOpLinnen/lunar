<?php

namespace Lunar\Api\Schemas;

use Spatie\LaravelData\Data;

class ProductData extends Data
{
    public function __construct(
        public string $title,
        public string $content,
    ) {
    }
}
