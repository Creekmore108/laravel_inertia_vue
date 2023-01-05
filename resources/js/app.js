import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init({
  color: 'indigo',
  showSpinner: true,
})
 
createInertiaApp({
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .mixin({ methods: { route } })
      .use(plugin)
      .mount(el)
  },
});
