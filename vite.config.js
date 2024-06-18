import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/css/bootstrap.min.css",
        "resources/css/sb-admin-2.css",
        "resources/css/solicitud.css",
        "resources/js/app.js",
        "resources/js/bootstrap.bundle.min.js",
        "resources/js/bootstrap.js",
      ],
      refresh: true,
    }),
  ],
});
