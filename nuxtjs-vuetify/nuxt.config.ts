import { defineNuxtConfig } from "nuxt/config";
import type { Plugin } from "vite";
import vuetify, { transformAssetUrls } from "vite-plugin-vuetify";

export default defineNuxtConfig({
  app: {
    head: {
      link: [
        {
          rel: "stylesheet",
          href: "https://fonts.googleapis.com/icon?family=Material+Icons",
        },
        {
          rel: "stylesheet",
          href: "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0",
        },
      ],
    },
  },

  css: [
    "@mdi/font/css/materialdesignicons.css",
    "quill/dist/quill.snow.css",
    "remixicon/fonts/remixicon.css",
    "/assets/scss/styles.css",
  ],

  plugins: [
    "~/plugins/vuetify",
    "~/plugins/apexcharts.client.ts",
    "~/plugins/vue-quill.js",
  ],

  build: {
    transpile: ["vuetify"],
  },

  modules: [
    (
      _options: any,
      nuxt: {
        hooks: {
          hook: (
            arg0: string,
            arg1: (config: { plugins: Plugin<any>[][] }) => void
          ) => void;
        };
      }
    ) => {
      nuxt.hooks.hook(
        "vite:extendConfig",
        (config: { plugins: Plugin<any>[][] }) => {
          config.plugins.push(vuetify({ autoImport: true }));
        }
      );
    },
    "vue3-carousel-nuxt",
  ],

  carousel: {
    prefix: "C",
  },

  vite: {
    vue: {
      template: {
        transformAssetUrls,
      },
    },
  },

  components: true,

  vue: {
    compilerOptions: {
      isCustomElement: (tag) => tag.toLowerCase() === "script",
    },
  },

  compatibilityDate: "2024-07-11",
});
