<?php
        $pid = exec("pgrep -u root python");
        $len = strlen($pid);
        if ($len < "1") {
		exec('sudo python /var/www/html/cgi-bin/xmas.py /var/www/html/cgi-bin/HollyJolly.txt /var/www/html/cgi-bin/HollyJollyXmas.mp3');
	}
?>
