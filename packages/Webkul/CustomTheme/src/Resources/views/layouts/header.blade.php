<v-header-switcher>
    <v-desktop-header v-if="isDesktop"></v-desktop-header>
    <v-mobile-header v-else></v-mobile-header>
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

        app.component('v-desktop-header', {
            template: '#v-desktop-header-template'
        });

        app.component('v-mobile-header', {
            template: '#v-mobile-header-template'
        });
    </script>
@endPushOnce
