<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class InertiaAuthData extends Data
{
    public function __construct(
        public readonly ?UserData $user
    ) {}
}
