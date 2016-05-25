<?php

if(extension_loaded('xhprof') && $_SERVER['HTTP_HOST'] != 'xhprof.hpphp.app') {
  $profiler_namespace = 'just-pikd'; // namespace for your application
  $xhprof_data = xhprof_disable();
  $xhprof_runs = new XHProfRuns_Default();
  $run_id = $xhprof_runs->save_run($xhprof_data, $profiler_namespace);

  // url to the XHProf UI libraries (change the host name and path>
  $url = 'http://xhgui.hpphp.app/xhprof/xhprof_html/index.php?run=%s&amp;source=%s';
  $profiler_url = sprintf($url, $run_id, $profiler_namespace);
  echo '<a href="' . $profiler_url . '" target="_blank">Profiler Output</a>';
}
