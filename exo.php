
<?php

 //ceci est un exercice de code pour calculer le perimetre d'un rectangle et d'une carre//

function peri($a,$b){
$peri=$a+$b+$a+$b;
return $peri;

}

echo peri(70,80);

//ceci est un exercice de code pour demonstrer la nature du triangle//

function tri($x,$y,$z){

if ($x==0 or $y==0 or $z==0)
	
	{
		
		echo "<p> c'est pas un triangle </p>";
		
		}



elseif ($x==$y and $x==$z and $y==$z)
	{
		
		echo "<p>le triangle est un triangle equilateral</p>";
		}

elseif ($x**2==$y**2+$z**2 or $y**2==$x**2+$z**2 or $z**2==$y**2+$x**2) {
	{
		echo "<p>le triangle est un triangle rectangle</p>";

		}	
		          }	

elseif ($x==$y or $x==$z or $y==$z) {
	
	echo "<p>le triangle est un triange isocel</p>";
                                }

else {

	echo "<p>le triangle est un triange quelconque</p>";
                                
                                }
 }

 echo tri(5,1,5); 

//ceci est un exercice pour calcul de fonction f(x)//

function facto($r,$t,$s){
if ($r==0)
	
	{
		
		echo "<p>la fonction n'est pas une fonction de second degre </p>";
		
		}

elseif($r!=0) {

	echo "<p>la fonction est factorisable</p>";

	$q=$t**2-(4*$r*$s);
     echo "DELTA= $q";  

     if($q<0)
     			{
		
		echo "<p>la fonction n'admet pas de solution dans R </p>";
		
		}

		elseif($q>0)
    
     			{
		
		echo "<p>la fonction admet des solutions dans R </p>";

				$x2=-$q**0.5+$t/(2*$r);
				$x3=-$q**0.5-$t/(2*$r);
				
				 echo "<p>x1= $x2</p>";
				 echo "<p>x2= $x3</p>";
		
		}            
	
	 elseif($q==0)
    
     			{
		
		echo "<p>la fonction admet une double solution dans R </p>";

				$x1=-$t/(2*$r);
				 echo "x1= $x1";
		
		}	
         
                                }
 }

 echo facto(1,2,1);
 
 /*ceci est un exercice pour determiner le plus petit nombre*/
function plusPetit($a,$b,$c){ 
		$pp=$a;
if($b<$pp){ 

			$pp=$b;

			

					 }

if($c<$pp){ 

			$pp=$c;

					 }					 

	             
			echo "<p>$pp est le plus petit</p>";              
 }

 	echo plusPetit(1,-85,0)

?>









