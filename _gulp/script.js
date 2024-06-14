'use strict';

import gulp from 'gulp';
import { app } from './_config.js';
import notify from 'gulp-notify';

const { src, dest } = gulp;

// Script processing task
const script = () => {
  return src(`${app.scripts}/*.js`)
    .pipe(dest(app.scriptsBuild))
    .pipe(notify({ message: 'Complete Script', onLast: true }));
};

// Export the task
export default script;
