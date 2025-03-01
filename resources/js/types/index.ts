import { type LucideIcon } from 'lucide-react';

export interface BreadcrumbItem {
    title: string;
    href: string;
}
// used later
// interface Metadata {
//     title: string;
//     breadcrumbs: BreadcrumbItem[];
// }

export interface NavGroup {
    title: string;
    items: NavItem[];
}

export interface NavItem {
    title: string;
    url: string;
    icon?: LucideIcon;
    isActive?: boolean;
}

export type PageProps<T extends Record<string, unknown> | unknown[] = Record<string, unknown> | unknown[]> = App.Data.InertiaSharedData & T;
