<?php

	$sehir = array("izmir","kutahya","istanbul","eskisehir","adana","bursa","ankara");
	
	foreach($sehir as $lst){
		echo $lst . "<br />";
	}

?>

<?php
	$sehirr =array("Afyon","Usak","GaziAntep","balikesir","Malatya","BARTIN");
	
	$i = 0;
	
	while ($i < count($sehirr)) {

   $a = $sehirr[$i];
   
   echo $a ."\n";
   
   $i++;
	}



?>
<?php
$sehirrr =array("Ordu","Bilecik","Trabzon","kayseri","Tekirdag");
$sayac=0;
for($i=0;$i<5;$i++)
{
echo $sehirrr [$i]."<br>";

}
do{
echo $sehirrr[$sayac]."<br>";
	$sayac++;
	}while($sayac<count($sehirrr));
?>
	




