// vite.config.js
import { defineConfig } from "file:///C:/Users/Enstein/Documents/laravel-dev/projects/kino/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/Users/Enstein/Documents/laravel-dev/projects/kino/node_modules/laravel-vite-plugin/dist/index.js";
import vue from "file:///C:/Users/Enstein/Documents/laravel-dev/projects/kino/node_modules/@vitejs/plugin-vue/dist/index.mjs";
var vite_config_default = defineConfig({
  server: {
    hmr: {
      host: "localhost"
    }
  },
  plugins: [
    laravel({
      input: [
        /*'resources/sass/app.scss',*/
        /*'resources/assets/admin/css/adminlte.css',*/
        "resources/assets/admin/css/alt/adminlte.components.css",
        "resources/assets/admin/css/alt/adminlte.core.css",
        "resources/assets/admin/css/alt/adminlte.extra-components.css",
        "resources/assets/admin/css/alt/adminlte.pages.css",
        "resources/assets/admin/css/alt/adminlte.plugins.css",
        "resources/assets/admin/plugins/fontawesome-free/css/all.min.css",
        "resources/assets/admin/plugins/select2/css/select2.css",
        "resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.css",
        "resources/assets/admin/plugins/jquery/jquery.min.js",
        "resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js",
        "resources/assets/admin/plugins/select2/js/select2.full.js",
        "resources/assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.js",
        "resources/assets/admin/js/adminlte.js",
        "resources/assets/admin/js/demo.js",
        "resources/js/app.js"
      ],
      refresh: true
    }),
    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false
        }
      }
    })
  ],
  resolve: {
    alias: {
      vue: "vue/dist/vue.esm-bundler.js"
    }
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxFbnN0ZWluXFxcXERvY3VtZW50c1xcXFxsYXJhdmVsLWRldlxcXFxwcm9qZWN0c1xcXFxraW5vXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ZpbGVuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxFbnN0ZWluXFxcXERvY3VtZW50c1xcXFxsYXJhdmVsLWRldlxcXFxwcm9qZWN0c1xcXFxraW5vXFxcXHZpdGUuY29uZmlnLmpzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ltcG9ydF9tZXRhX3VybCA9IFwiZmlsZTovLy9DOi9Vc2Vycy9FbnN0ZWluL0RvY3VtZW50cy9sYXJhdmVsLWRldi9wcm9qZWN0cy9raW5vL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcbmltcG9ydCB2dWUgZnJvbSAnQHZpdGVqcy9wbHVnaW4tdnVlJztcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBzZXJ2ZXI6IHtcbiAgICAgICAgaG1yOiB7XG4gICAgICAgICAgICBob3N0OiAnbG9jYWxob3N0J1xuICAgICAgICB9XG4gICAgfSxcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFtcbiAgICAgICAgICAgICAgICAvKidyZXNvdXJjZXMvc2Fzcy9hcHAuc2NzcycsKi9cbiAgICAgICAgICAgICAgICAgICAgLyoncmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9jc3MvYWRtaW5sdGUuY3NzJywqL1xuICAgICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9jc3MvYWx0L2FkbWlubHRlLmNvbXBvbmVudHMuY3NzJyxcbiAgICAgICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvYWRtaW4vY3NzL2FsdC9hZG1pbmx0ZS5jb3JlLmNzcycsXG4gICAgICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2FkbWluL2Nzcy9hbHQvYWRtaW5sdGUuZXh0cmEtY29tcG9uZW50cy5jc3MnLFxuICAgICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9jc3MvYWx0L2FkbWlubHRlLnBhZ2VzLmNzcycsXG4gICAgICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2FkbWluL2Nzcy9hbHQvYWRtaW5sdGUucGx1Z2lucy5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2FkbWluL3BsdWdpbnMvZm9udGF3ZXNvbWUtZnJlZS9jc3MvYWxsLm1pbi5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2FkbWluL3BsdWdpbnMvc2VsZWN0Mi9jc3Mvc2VsZWN0Mi5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2FkbWluL3BsdWdpbnMvc2VsZWN0Mi1ib290c3RyYXA0LXRoZW1lL3NlbGVjdDItYm9vdHN0cmFwNC5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2FkbWluL3BsdWdpbnMvanF1ZXJ5L2pxdWVyeS5taW4uanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2FkbWluL3BsdWdpbnMvYm9vdHN0cmFwL2pzL2Jvb3RzdHJhcC5idW5kbGUubWluLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9wbHVnaW5zL3NlbGVjdDIvanMvc2VsZWN0Mi5mdWxsLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9wbHVnaW5zL2JzLWN1c3RvbS1maWxlLWlucHV0L2JzLWN1c3RvbS1maWxlLWlucHV0LmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9qcy9hZG1pbmx0ZS5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvYWRtaW4vanMvZGVtby5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9hcHAuanMnXG4gICAgICAgICAgICBdLFxuICAgICAgICAgICAgcmVmcmVzaDogdHJ1ZSxcbiAgICAgICAgfSksXG4gICAgICAgIHZ1ZSh7XG4gICAgICAgICAgICB0ZW1wbGF0ZToge1xuICAgICAgICAgICAgICAgIHRyYW5zZm9ybUFzc2V0VXJsczoge1xuICAgICAgICAgICAgICAgICAgICBiYXNlOiBudWxsLFxuICAgICAgICAgICAgICAgICAgICBpbmNsdWRlQWJzb2x1dGU6IGZhbHNlLFxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB9LFxuICAgICAgICB9KSxcbiAgICBdLFxuICAgIHJlc29sdmU6IHtcbiAgICAgICAgYWxpYXM6IHtcbiAgICAgICAgICAgIHZ1ZTogJ3Z1ZS9kaXN0L3Z1ZS5lc20tYnVuZGxlci5qcycsXG4gICAgICAgIH0sXG4gICAgfSxcbn0pO1xuIl0sCiAgIm1hcHBpbmdzIjogIjtBQUE0VixTQUFTLG9CQUFvQjtBQUN6WCxPQUFPLGFBQWE7QUFDcEIsT0FBTyxTQUFTO0FBRWhCLElBQU8sc0JBQVEsYUFBYTtBQUFBLEVBQ3hCLFFBQVE7QUFBQSxJQUNKLEtBQUs7QUFBQSxNQUNELE1BQU07QUFBQSxJQUNWO0FBQUEsRUFDSjtBQUFBLEVBQ0EsU0FBUztBQUFBLElBQ0wsUUFBUTtBQUFBLE1BQ0osT0FBTztBQUFBO0FBQUE7QUFBQSxRQUdDO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0o7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxNQUNKO0FBQUEsTUFDQSxTQUFTO0FBQUEsSUFDYixDQUFDO0FBQUEsSUFDRCxJQUFJO0FBQUEsTUFDQSxVQUFVO0FBQUEsUUFDTixvQkFBb0I7QUFBQSxVQUNoQixNQUFNO0FBQUEsVUFDTixpQkFBaUI7QUFBQSxRQUNyQjtBQUFBLE1BQ0o7QUFBQSxJQUNKLENBQUM7QUFBQSxFQUNMO0FBQUEsRUFDQSxTQUFTO0FBQUEsSUFDTCxPQUFPO0FBQUEsTUFDSCxLQUFLO0FBQUEsSUFDVDtBQUFBLEVBQ0o7QUFDSixDQUFDOyIsCiAgIm5hbWVzIjogW10KfQo=
