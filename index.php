<?php
	require __DIR__."/system/index.php";

	$clux = new Cluxx("http://localhost/work/welcome/");
	echo $clux->get("a");
	//echo $clux->getData();

	//phpinfo();
	//print_r(curl_exec("jsjs"));
	
?>
