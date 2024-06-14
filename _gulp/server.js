'use strict';

import gulp from 'gulp';
import { dist, app } from './_config.js';
import browserSync from 'browser-sync';
import connectSSI from 'connect-ssi';
import phpConnect from 'gulp-connect-php';
import html from './html.js';
import styles from './styles.js';
import images from './images.js';
import script from './script.js';

const { watch, series, parallel } = gulp;

// Create a BrowserSync instance
const browser = browserSync.create();

//--------- Browser sync - local Server
const localServer = done => {
  phpConnect.server({ base: dist.dest }, () => {
    browser.init({
      server: {
        baseDir: dist.dest,
      },
      middleware: connectSSI({
        baseDir: dist.dest,
        ext: '.html'
      }),
      ghostMode: false,
      notify: false,
      online: true,
      open: 'external'
    });
  });
  done();
};

//--------- Reload browser Sync
const reload = done => {
  browser.reload();
  done();
};

//--------- Watch Files
const watchAssets = () => {
  // CSS changes
  watch(`${app.styles}/**/*.scss`, series(styles, reload));

  // JavaScript changes
  watch(`${app.scripts}/**/*.js`, series(script, reload));

  // HTML changes
  watch(app.html, series(html, reload));

  // Image changes
  watch(app.image, series(images, reload));
};

// Combine server setup and file watching
const server = series(localServer, watchAssets);

// Export the server task
export default server;
