'use strict';

import gulp from 'gulp';
import server from './_gulp/server.js';
import styles from './_gulp/styles.js';
import bundle from './_gulp/bundle.js';
import script from './_gulp/script.js';
import html from './_gulp/html.js';
import images from './_gulp/images.js';
import clean from './_gulp/clean.js';

const { series, parallel } = gulp;

// Shared task sequence
const buildTasks = series(clean, html, styles, bundle, script, images);

//--------- Run Default
export default series(buildTasks, server);

//--------- Run Build
export const build = buildTasks;
