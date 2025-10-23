<v-header-switcher>
    <x-custom-theme::layouts.header />
</v-header-switcher>

@pushOnce('scripts')
    <script type="module">
        app.component('v-header-switcher', {
            data() {
                return {
                    isDesktop: window.innerWidth >= 1024
                }
            },

            mounted() {
                this.media = window.matchMedia('(min-width: 1024px)');
                this.media.addEventListener('change', this.handleMedia);
            },

            beforeUnmount() {
                this.media.removeEventListener('change', this.handleMedia);
            },

            methods: {
                handleMedia(e) {
                    this.isDesktop = e.matches;
                }
            }
        });
    </script>

    <script type="text/x-template" id="v-desktop-header-template">
        <x-custom-theme::layouts.header.desktop />
    </script>

    <script type="text/x-template" id="v-mobile-header-template">
        <x-custom-theme::layouts.header.mobile />
    </script>
@endPushOnce
