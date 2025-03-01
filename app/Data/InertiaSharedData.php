<?php

namespace App\Data;

use Inertia\AlwaysProp;
use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class InertiaSharedData extends Data
{
    public function __construct(
        public readonly ?InertiaAuthData $auth,
        public readonly ?InertiaAppData $appData,
        /** null|array<string,string> */
        public array|string|AlwaysProp|null $errors = null,
    ) {}
}
