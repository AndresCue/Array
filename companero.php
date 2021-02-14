<pre>
<?php
$companero=[
	'Andres',
	'Sergio',
	'Andres',
	'Ivan',
	'Pablo',
	'Alberto',
	'Hector',
	'Eduardo',
	'Pablo',
	'Jaury',
	'Pablo',
	'Sergio',
	'Fran',
	'Valentin',
	];
print_r($companero);
echo"<br>";
sort($companero);
print_r($companero);
echo'<br>' ;
?>
<div id="r"></div>
<script>
 
 companero=[
	'Andres',
	'Sergio',
	'Andres',
	'Ivan',
	'Pablo',
	'Alberto',
	'Hector',
	'Eduardo',
	'Pablo',
	'Jaury',
	'Pablo',
	'Sergio',
	'Fran',
	'Valentin',
	];
	
if(true){
	for(i=0;i<14;i++)
		document.getElementById('r').innerHTML+= companero[i];
}
</script>
<div id="c"></div>
<script>
companero=[
	'Andres',
	'Sergio',
	'Andres',
	'Ivan',
	'Pablo',
	'Alberto',
	'Hector',
	'Eduardo',
	'Pablo',
	'Jaury',
	'Pablo',
	'Sergio',
	'Valentin',
	'Fran',
	];
	companero.sort()
if(true){
	for(i=0;i<14;i++)
		document.getElementById('c').innerHTML+= companero[i];
}
</script>