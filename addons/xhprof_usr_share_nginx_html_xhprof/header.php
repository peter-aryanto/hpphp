<?php

if(extension_loaded('xhprof') && $_SERVER['HTTP_HOST'] != 'xhprof.hpphp.app') {
  include_once '/usr/share/nginx/html/xhprof/xhprof_lib/utils/xhprof_lib.php';
  include_once '/usr/share/nginx/html/xhprof/xhprof_lib/utils/xhprof_runs.php';

  xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);
}
