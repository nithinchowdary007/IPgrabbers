<?php
$f = fopen("ip.txt",'a'); //opens ip.txt file.
$n = time();
$t = gmstrftime("%a, %d %b %Y %H:%M:%S GMT",$n);
fwrite($f,"IP=".$_SERVER["REMOTE_ADDR"]."\n"); //gets the ipadress of victim and writes it on ip.txt
fwrite($f,"user agent=".$_SERVER['HTTP_USER_AGENT']."\n"); // gets info all about OS and browser and writes it to ip.txt
fwrite($f,"Referer Page=".$_SERVER["HTTP_REFERER"."\n"]); // it gets how the link is shared from one to another and writes it here
fwrite($f,"TIME=".$t."\n\n\n\n"); // at what time that user click that link
fclose($f); // closes the writong of ip.txt
fclose($f);

?>
