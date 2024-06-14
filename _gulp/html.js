'use strict';

import gulp from 'gulp';
import { app, dist } from './_config.js';
import ssi from 'gulp-ssi';

const { src, dest } = gulp;

// HTML processing task
const html = () => {
  return src([app.html, `!${dist.src}/assets/_includes/*.html`])
    .pipe(ssi({ root: dist.src }))
    .pipe(dest(dist.dest));
};

// Export the task
export default html;
