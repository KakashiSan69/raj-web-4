import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  plugins: [
    {
      name: 'meta-pixel-post-injector',
      transformIndexHtml: {
        order: 'post',
        handler(html) {
          return html.replace(
            '<!-- End Meta Pixel Code -->',
            '<noscript><img height="1" width="1" style="display:none"\nsrc="https://www.facebook.com/tr?id=499707126418434&ev=PageView&noscript=1"\n/></noscript>\n  <!-- End Meta Pixel Code -->'
          );
        }
      }
    },
    {
      name: 'thank-you-dev-rewrite',
      configureServer(server) {
        server.middlewares.use((req, res, next) => {
          if (req.url === '/thank-you-2' || req.url === '/thank-you-2/') {
            req.url = '/thank-you-2.html';
          }
          next();
        });
      }
    }
  ],
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        thankYou2: resolve(__dirname, 'thank-you-2.html')
      }
    }
  }
});
