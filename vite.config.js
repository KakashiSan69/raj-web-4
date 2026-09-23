import { defineConfig } from 'vite';

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
    }
  ]
});
