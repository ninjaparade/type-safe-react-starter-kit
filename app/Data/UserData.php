<?php

namespace App\Data;

use Carbon\CarbonInterface;
use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class UserData extends Data
{
    public function __construct(
        public readonly string $id,
        public readonly string $name,
        public readonly string $first_name,
        public readonly string $email,
        public readonly string $last_name,
        public readonly ?string $avatar,
        public readonly ?CarbonInterface $email_verified_at,
    ) {}
}
