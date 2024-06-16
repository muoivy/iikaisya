'use strict';

import gulp from 'gulp';
import { dist, app } from './_config.js';
import imagemin from 'gulp-imagemin';
import gifsicle from 'imagemin-gifsicle';
import mozjpeg from 'imagemin-mozjpeg';
import optipng from 'imagemin-optipng';
import svgo from 'imagemin-svgo';

const { src, dest } = gulp;

// Image optimization task
const optimizeImages = () => {
  return src(app.image)
    // .pipe(imagemin([
    //   gifsicle({ interlaced: true }),
    //   mozjpeg({ quality: 75, progressive: true }),
    //   optipng({ optimizationLevel: 5 })
    //   svgo({
    //     plugins: [
    //       { removeViewBox: true },
    //       { cleanupIDs: false }
    //     ]
    //   })
    // ]))
    .pipe(dest(dist.dest));
};

// Export the task
export default optimizeImages;
