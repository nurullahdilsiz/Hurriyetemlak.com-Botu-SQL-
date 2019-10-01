<?php 

include 'fonksiyon.php';
include 'baglan.php';



for ($i=1; $i <=46 ; $i++) { 
	///$bag =Baglan('https://www.hurriyetemlak.com/karaman/konut?pageSize=50&page=2');
	$yenilink ="https://www.hurriyetemlak.com/zonguldak/konut?pageSize=50&page="."$i";
		$bag =Baglan($yenilink);
		
		//echo "$yenilink"."<br>";

		preg_match_all('#<title>(.*?)</title>#', $bag, $title);

print_r($title[1][0]); echo "</br></br></br>"; //sayfa numaralarıe

preg_match_all('#<a title="(.*?)" class="overlay-link" href="(.*?)" (.*?)>(.*?)</a>#', $bag, $linkartiveri);


				for ($j=0; $j < 49; $j++) { 
					
				$linkartiveriyeni=	$linkartiveri[2][$j];
			
			 //  print_r($linkartiveriyeni);echo "<br>";

              $tarih         = date("j, n, Y");
	 		$neresi ="";

 $ekle        =    mysql_query("insert into linkler (link,tarih,yedek) values ('$linkartiveriyeni','$tarih','$neresi')");
            
            
            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }


	}}




	

  



 ?>

