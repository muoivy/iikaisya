'use strict';

import gulp from 'gulp';
import { app } from './_config.js';
import concat from 'gulp-concat';
import uglify from 'gulp-uglify';
import notify from 'gulp-notify';

const { src, dest } = gulp;

// Define the JavaScript libraries to bundle
const jsLibs = [
  // `${app.scripts}/_libs/gsap.min.js`,
  // `${app.scripts}/_libs/ScrollTrigger.min.js`,
  // `${app.scripts}/_libs/splide.min.js`,
  // `${app.scripts}/_libs/splide-extension-auto-scroll.min.js`,
  `${app.scripts}/_libs/swiper-bundle.min.js`,
];

// Bundle task
export const bundle = () => {
  return src(jsLibs)
    .pipe(concat('bundle.js'))
    .pipe(uglify())
    .pipe(dest(app.scriptsBuild))
    .pipe(notify({ message: 'Complete Library', onLast: true }));
};

// Export as default task
export default bundle;
