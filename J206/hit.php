<?php
 // start at the top of the page since we start a session
 session_name('hit_counter');
 session_start();
 //
 $fn = 'hits_counter.txt';
 $hits = 0;
 // read current hits
 if (($hits = file_get_contents($fn)) === false)
 {
 $hits = 0;
 }
 // write one more hit
 if (!isset($_SESSION['page_visited_already']))
 {
 if (($fp = @fopen($fn, 'w')) !== false)
 {
 if (flock($fp, LOCK_EX))
 {
 $hits++;
 fwrite($fp, $hits, strlen($hits));
 flock($fp, LOCK_UN);
 $_SESSION['page_visited_already'] = 1;
 }
 fclose($fp);
 }
 }
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR...ransitional.dtd">
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>PHP Hit Counter Code</title>
 </head>
 <body>
 <p>Hits of page</p>
 <div class="counter">
 <p>This page has <span><?=$hits;?></span> hits</p>
 </div>
 </body>
 </html>
