<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class InertiaAppData extends Data
{
    public function __construct(
        public readonly string $name,
        public readonly string $version,
    ) {}
}
