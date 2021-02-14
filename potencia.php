<pre>
<?php
$tabla=[];
for($i=0;$i<=10;$i=$i+1)
$tabla[]=$i**2;
print_r($tabla);
?>
<div id='r'></div>
<script>
tabla=[];
for (i=0; i<11; i=i+1)
tabla[i]=i**2;
txt="";
for(i in tabla)
txt+=tabla[i]+'<br>';
document.getElementById('r')
.innerHTML=txt;
</script>