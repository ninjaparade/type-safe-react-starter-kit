import { useTypedPageProps } from '@/hooks/use-typed-page-props';
import type { PageProps } from '@/types';

export function useAuth(): App.Data.UserData | null {
    const { auth } = useTypedPageProps<PageProps>().props;

    return auth?.user as unknown as App.Data.UserData | null;
}
