<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    href: {
        type: String,
        required: true,
    },
});
</script>
<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    href: {
        type: String,
        required: true,
    },
    activeClass: {
        type: String,
        default: 'active',
    },
});

const isActive = computed(() => {
    return window.location.pathname === href;
});
</script>

<template>
    <Link
        :href="href"
        :class="[
            'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 transition duration-150 ease-in-out',
            { [activeClass]: isActive },
        ]"
    >
        <slot />
    </Link>
</template>
<template>
    <Link
        :href="href"
        class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:bg-gray-100 focus:outline-none"
    >
        <slot />
    </Link>
</template>
