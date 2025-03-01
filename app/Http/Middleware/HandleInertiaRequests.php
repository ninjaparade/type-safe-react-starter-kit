<?php

namespace App\Http\Middleware;

use App\Data\InertiaAppData;
use App\Data\InertiaSharedData;
use App\Data\UserData;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     */
    public function share(Request $request): InertiaSharedData
    {

        return InertiaSharedData::from(
            array_merge(
                parent::share($request),
                $this->authData($request),
                $this->appData(),
            )
        );
    }

    private function authData(Request $request): array
    {
        if ($user = $request->user()) {

            return [
                'auth' => [
                    'user' => UserData::from($user),

                ],
            ];
        }

        return ['auth' => null];
    }

    private function appData(): array
    {
        return [
            'appData' => InertiaAppData::from([
                'name' => config('app.name'),
                'version' => config(key: 'app.version'),
            ]),
        ];
    }
}
