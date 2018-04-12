<?php
$dl=file_get_contents('https://www.saveitoffline.com/process/?url='.urlencode('http://www.youtube.com/watch?v='.$_GET['get-v']).'&type=json');
$js=json_decode($dl,TRUE);
$d=$js['urls'];
for($i=0;$i<5;$i++){
echo '
									<li><a href="'.$d[$i]['id'].'" class="top">Download Video '.$d[$i]['label'].'</a></li>
';
}
?>
