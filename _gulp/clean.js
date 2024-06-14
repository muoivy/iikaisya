'use strict';

import { dist } from './_config.js';
import { deleteAsync } from 'del';

const clean = async done => {
  await deleteAsync(`${dist.dest}*`);
  done();
};

export default clean;
