'use strict';

import gulp from 'gulp';
import { app, devBuild } from './_config.js';
import wait from 'gulp-wait';
import plumber from 'gulp-plumber';
import notify from 'gulp-notify';
import sassGlob from 'gulp-sass-glob';
import sourcemaps from 'gulp-sourcemaps';
import * as sassCompiler from 'sass'
import gulpSass from 'gulp-sass';
import pleeease from 'gulp-pleeease';
import noop from 'gulp-noop';
import browserSync from 'browser-sync';

const { src, dest } = gulp;
const sass = gulpSass(sassCompiler);

const styles = done => {
  src(`${app.styles}/layout.scss`)
    // .pipe(wait(1500))
    .pipe(plumber({ errorHandler: notify.onError('Error on <gulp sass>: <%= error.message %>') }))
    .pipe(sassGlob())
    .pipe(devBuild ? sourcemaps.init() : noop())
    .pipe(sass({
      includePaths: [
        app.styles,
      ],
      outputStyle: 'expanded',
    }))
    .pipe(pleeease({
      autoprefixer: {
        browsers: ["last 2 versions", "ie >= 11", "Android >= 4"],
      },
      rem: false,
      opacity: true,
      pseudoElements: false,
      minifier: true,
      minifier: {
        removeAllComments: true,
      }
    }))
    .pipe(devBuild ? sourcemaps.write() : noop())
    // .pipe(notify('Complete Sass'))
    .pipe(dest(app.stylesBuild))
    .pipe(devBuild ? browserSync.reload({ stream: true }) : noop());
  done();
};

export default styles;
