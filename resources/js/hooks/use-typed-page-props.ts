import type { PageProps } from '@/types';
import { usePage } from '@inertiajs/react';

export function useTypedPageProps<T extends Record<never, never> | unknown[] = Record<never, never> | unknown[]>() {
    return usePage<PageProps<T>>();
}
