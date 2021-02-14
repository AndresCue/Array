<?php
$meses=[
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
	];
foreach($meses as $d)
     if(strstr($d,'r'))
     echo $d .'<br>';
?>
<div id="a"> </div>

<script>
meses=[
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
];

	for(i=0;i<12;i++)
	if (meses[i].indexOf('r')>0)
	document.getElementById('a').innerHTML += meses[i];

</script>
	
	
	
	