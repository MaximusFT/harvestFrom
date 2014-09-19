<?
$link = mysql_connect('localhost','mb_user','IO07fbP1');
mysql_select_db('pass_sys');
mysql_query("SET NAMES 'utf8'");
mysql_set_charset('utf8');

    echo '<hr>';

    //$str = json_encode($_POST);  
    $q = mysql_query('SELECT * FROM data', $link) or die ("ERROR: ".mysql_error());
	 echo '<pre>';

for ($c=0; $c<mysql_num_rows($q); $c++)

{
$f = mysql_fetch_row($q);

var_dump($f[1]);
$qwe=$f[1];
var_dump($qwe);
$qw=json_decode($f[1]);
//var_dump($qw); 
}
echo '</pre>';	
	

?>