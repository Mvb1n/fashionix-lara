{!! view_render_event('bagisto.shop.layout.footer.before') !!}

@inject('themeCustomizationRepository', 'Webkul\Theme\Repositories\ThemeCustomizationRepository')

@php
    $channel = core()->getCurrentChannel();

    $customization = $themeCustomizationRepository->findOneWhere([
        'type'       => 'footer_links',
        'status'     => 1,
        'theme_code' => $channel->theme,
        'channel_id' => $channel->id,
    ]);

    $brandName = $channel?->name ?? config('app.name');

    $brandLogo = $channel?->logo_url ?? bagisto_asset('images/logo.svg');

    $supportDetails = [
        'phone_label' => 'Dukungan Pelanggan:',
        'phone'       => '(629) 555-0129',
        'address'     => [
            '4517 Washington Ave.',
            'Manchester, Kentucky 39495',
        ],
        'email'       => 'info@fashionix.com',
    ];

    $linkColumns = [
        [
            'title' => 'Kategori Teratas',
            'links' => [
                ['label' => 'Pakaian Wanita', 'url' => '#'],
                ['label' => 'Pakaian Pria', 'url' => '#'],
                ['label' => 'Aksesoris & Perhiasan', 'url' => '#'],
                ['label' => 'Tas & Dompet', 'url' => '#'],
                ['label' => 'Sepatu & Sandal', 'url' => '#'],
                ['label' => 'Hijab & Muslim Wear', 'url' => '#'],
            ],
        ],
        [
            'title' => 'Tautan Cepat',
            'links' => [
                ['label' => 'Belanja Produk', 'url' => '#'],
                ['label' => 'Keranjang Belanja', 'url' => '#'],
                ['label' => 'Daftar Keinginan', 'url' => '#'],
                ['label' => 'Bandingkan', 'url' => '#'],
                ['label' => 'Lacak Pesanan', 'url' => '#'],
                ['label' => 'Bantuan Pelanggan', 'url' => '#'],
                ['label' => 'Tentang Kami', 'url' => '#'],
            ],
        ],
    ];

    $customLinkSections = $customization?->options ? array_values($customization->options) : [];

    foreach ($linkColumns as $index => $column) {
        if (! isset($customLinkSections[$index]) || ! is_array($customLinkSections[$index])) {
            continue;
        }

        $footerLinkSection = $customLinkSections[$index];

        usort($footerLinkSection, function ($a, $b) {
            return ($a['sort_order'] ?? 0) <=> ($b['sort_order'] ?? 0);
        });

        $links = array_values(array_filter(array_map(function ($link) {
            if (empty($link['title'])) {
                return null;
            }

            return [
                'label' => $link['title'],
                'url'   => $link['url'] ?? '#',
            ];
        }, $footerLinkSection)));

        if (! empty($links)) {
            $linkColumns[$index]['links'] = $links;
        }
    }

    $popularTags = [
        'Dress',
        'Kemeja',
        'Jeans',
        'Hijab',
        'Sneakers',
        'Tas',
        'Aksesoris',
        'Kalung',
        'Blazer',
        'Hoodie',
        'Rok',
        'Outerwear',
        'Fashion Pria',
    ];

    $phoneHref = preg_replace('/[^0-9+]/', '', $supportDetails['phone']);
@endphp

<footer class="mt-20 bg-black text-white">
    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-16">
        <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">
            <div class="space-y-5">
                <div class="flex items-center gap-3">
                    @if ($brandLogo)
                        <span class="flex h-11 w-11 items-center justify-center rounded-full bg-white/10">
                            <img
                                src="{{ $brandLogo }}"
                                alt="{{ $brandName }}"
                                class="h-8 w-8 object-contain"
                            />
                        </span>
                    @endif

                    <span class="text-xl font-semibold tracking-wide uppercase">
                        {{ $brandName }}
                    </span>
                </div>

                <div class="space-y-1 text-sm text-gray-300">
                    <p class="font-semibold text-white">
                        {{ $supportDetails['phone_label'] }}
                    </p>

                    <a
                        href="tel:{{ $phoneHref }}"
                        class="block text-lg font-bold text-white transition hover:text-yellow-300"
                    >
                        {{ $supportDetails['phone'] }}
                    </a>

                    @foreach ($supportDetails['address'] as $line)
                        <p>{{ $line }}</p>
                    @endforeach

                    <a
                        href="mailto:{{ $supportDetails['email'] }}"
                        class="block text-sm text-gray-300 transition hover:text-yellow-300"
                    >
                        {{ $supportDetails['email'] }}
                    </a>
                </div>
            </div>

            @foreach ($linkColumns as $column)
                <div class="space-y-4">
                    <h3 class="text-sm font-semibold uppercase tracking-wide text-gray-200">
                        {{ $column['title'] }}
                    </h3>

                    <ul class="space-y-2 text-sm">
                        @foreach ($column['links'] as $link)
                            <li>
                                <a
                                    href="{{ $link['url'] }}"
                                    class="transition hover:text-yellow-300"
                                >
                                    {{ $link['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

            <div class="space-y-4">
                <h3 class="text-sm font-semibold uppercase tracking-wide text-gray-200">
                    Popular Tag
                </h3>

                <div class="flex flex-wrap gap-2">
                    @foreach ($popularTags as $tag)
                        <a
                            href="#"
                            class="rounded-full border border-white/30 px-4 py-1 text-sm text-gray-200 transition hover:border-yellow-300 hover:bg-yellow-300 hover:text-black"
                        >
                            {{ $tag }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {!! view_render_event('bagisto.shop.layout.footer.newsletter_subscription.before') !!}

        @if (core()->getConfigData('customer.settings.newsletter.subscription'))
            <div class="mt-12 rounded-xl border border-white/10 bg-white/5 p-8 shadow-lg max-sm:p-6">
                <div class="grid gap-6 lg:grid-cols-[1.4fr_1fr]">
                    <div class="space-y-3">
                        <p
                            class="text-3xl font-semibold tracking-wide text-white max-sm:text-2xl"
                            role="heading"
                            aria-level="2"
                        >
                            @lang('shop::app.components.layouts.footer.newsletter-text')
                        </p>

                        <p class="text-sm text-gray-300 max-sm:text-xs">
                            @lang('shop::app.components.layouts.footer.subscribe-stay-touch')
                        </p>
                    </div>

                    <div>
                        <x-shop::form
                            :action="route('shop.subscription.store')"
                            class="mt-2 rounded-xl bg-black/40 p-2 max-sm:mt-4 max-sm:rounded-lg"
                        >
                            <div class="relative">
                                <x-shop::form.control-group.control
                                    type="email"
                                    class="block w-full rounded-lg border border-white/20 bg-black/40 px-5 py-3 text-sm text-white placeholder:text-gray-500 focus:border-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-300/50"
                                    name="email"
                                    rules="required|email"
                                    label="Email"
                                    :aria-label="trans('shop::app.components.layouts.footer.email')"
                                    placeholder="email@example.com"
                                />

                                <x-shop::form.control-group.error control-name="email" />

                                <button
                                    type="submit"
                                    class="absolute top-1/2 -translate-y-1/2 rounded-lg bg-yellow-300 px-6 py-2 text-sm font-semibold text-black transition hover:bg-yellow-200 max-sm:static max-sm:mt-3 max-sm:w-full"
                                >
                                    @lang('shop::app.components.layouts.footer.subscribe')
                                </button>
                            </div>
                        </x-shop::form>
                    </div>
                </div>
            </div>
        @endif

        {!! view_render_event('bagisto.shop.layout.footer.newsletter_subscription.after') !!}
    </div>

    <div class="border-t border-white/10 bg-black/90 py-4">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-6 text-center text-sm text-gray-400 sm:flex-row sm:text-left lg:px-16">
            {!! view_render_event('bagisto.shop.layout.footer.footer_text.before') !!}

            <p class="text-sm text-gray-400">
                @lang('shop::app.components.layouts.footer.footer-text', ['current_year'=> date('Y') ])
            </p>

            {!! view_render_event('bagisto.shop.layout.footer.footer_text.after') !!}
        </div>
    </div>
</footer>

{!! view_render_event('bagisto.shop.layout.footer.after') !!}
