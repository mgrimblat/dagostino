<?php

class convertidor{

	public function convertir($x){
		$i = $x;
		$p = array();

	while($i>0){

	    if($i-1==0){
	        $p[]='I';
	        
	        break;	
	    }

	    if($i-2<0){
	        $i-=1;
	        $p[]='I';
	        
	        continue;
	    }

	    if($i-3<0){
	        $i-=2;
	        $p[]='I';
	        $p[]='I';
	        
	        continue;
	    }

	    if($i-4<0){
	        $i-=3;
	        $p[]='I';
	        $p[]='I';
	        $p[]='I';
	        
	        continue;
	    }

	    if($i-5<0){
	        $i-=4;
	        $p[]='I';
	        $p[]='V';
	        
	        continue;
	    }

	    if($i-6<0){
	        $i-=5;
	        $p[]='V';
	        
	        continue;
	    }

	    if($i-7<0){
	        $i-=6;
	        $p[]='V';
	        $p[]='I';
	        
	        continue;
	    }

	    if($i-8<0){
	        $i-=7;
	        $p[]='V';
	        $p[]='I';
	        $p[]='I';
	        
	        continue;
	    }

	    if($i-9<0){
	        $i-=8;
	        $p[]='V';
	        $p[]='I';
	        $p[]='I';
	        $p[]='I';
	        
	        continue;
	    }

	    if($i-10<0){
	        $i-=9;
	        $p[]='I';
	        $p[]='X';
	        
	        continue;
	        }

	    if($i-20<10){
	        $i-=10;
	        $p[]='X';
	        
	        continue;}

	    if($i-30<10){
	        $i-=20;
	        $p[]='X';
	        $p[]='X';
	        
	        continue;}

	    if($i-40<10){
	        $i-=30;
	        $p[]='X';
	        $p[]='X';
	        $p[]='X';
	        
	        continue;}

	    if($i-50<10){
	        $i-=40;
	        $p[]='X';
	        $p[]='L';
	        
	        continue;}

	    if($i-60<10){
	        $i-=50;
	        $p[]='L';
	        
	        continue;}

	    if($i-70<10){
	        $i-=60;
	        $p[]='L';
	        $p[]='X';
	        
	        continue;}

	    if($i-80<10){
	        $i-=70;
	        $p[]='L';
	        $p[]='X';
	        $p[]='X';
	        
	        continue;}

	    if($i-90<10){
	        $i-=80;
	        $p[]='L';
	        $p[]='X';
	        $p[]='X';
	        $p[]='X';
	        
	        continue;}

	    if($i-100<10){
	        $i-=90;
	        $p[]='X';
	        $p[]='C';
	        
	        continue;}

	    if($i-200<100){
	        $i-=100;
	        $p[]='C';
	        
	        continue;}

	    if($i-300<100){
	        $i-=200;
	        $p[]='C';
	        $p[]='C';
	        
	        continue;}

	    if($i-400<100){
	        $i-=300;
	        $p[]='C';
	        $p[]='C';
	        $p[]='C';
	        
	        continue;}

	    if($i-500<100){
	        $i-=400;
	        $p[]='C';
	        $p[]='D';
	        
	        continue;}

	    if($i-600<100){
	        $i-=500;
	        $p[]='D';
	        
	        continue;
	        }

	    if($i-700<100){
	        $i-=600;
	        $p[]='D';
	        $p[]='C';
	        
	        continue;}

	    if($i-800<100){
	        $i-=700;
	        $p[]='D';
	        $p[]='C';
	        $p[]='C';
	        
	        continue;}

	    if($i-900<100){
	        $i-=800;
	        $p[]='D';
	        $p[]='C';
	        $p[]='C';
	        $p[]='C';
	        
	        continue;}

	    if($i-1000<100){
	        $i-=900;
	        $p[]='C';
	        $p[]='M';
	        
	        continue;}

	    if($i-2000<1000){
	        $i-=1000;
	        $p[]='M';
	        
	        continue;}

	    if($i-3000<1000){
	        $i-=2000;
	        $p[]='M';
	        $p[]='M';
	        
	        continue;}

	    if($i-4000<1000){
	        $i-=3000;
	        $p[]='M';
	        $p[]='M';
	        $p[]='M';
	        
	        continue;}

	    if($i-5000<1000){
	        $i-=4000;
	        $p[]='I';
	        $p[]='V';
	        $p[]='m';
	        
	        continue;}

	    if($i-6000<1000){
	        $i-=5000;
	        $p[]='V';
	        $p[]='m';
	        
	        continue;}

	    if($i-7000<1000){
	        $i-=6000;
	        $p[]='V';
	        $p[]='I';
	        $p[]='m';
	        
	        continue;}

	    if($i-8000<1000){
	        $i-=7000;
	        $p[]='V';
	        $p[]='I';
	        $p[]='I';
	        $p[]='m';
	        
	        continue;}

	    if($i-9000<1000){
	        $i-=8000;
	        $p[]='V';
	        $p[]='I';
	        $p[]='I';
	        $p[]='I';
	        $p[]='m';
	        
	        continue;}

	    if($i-10000<1000){
	        $i-=9000;
	        $p[]='I';
	        $p[]='X';
	        $p[]='m';
	        continue;}
	    else{
	        $p[]='X';
	        $p[]='m';
	        }
		}

	$s = implode($p);

	return $s;
	}

}

$a = new convertidor;

$a->convertir(144);
