<?php


$dataStr = file_get_contents('php://input');
$test = true;


$data = json_decode($dataStr, true);
$m = $data['m'];  


for ($i4=0;$i4<=80;$i4++) { 
	for ($i2=0;$i2<=8;$i2++) { 
		for ($i3=0; $i3 <= 8 ; $i3++) { 
			if ($m[$i2][$i3]==null) {
				switch ($i2) {
					case (0):
						switch ($i3) {
							case (0):
							    
								for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=0; $a2 < 3; $a2++) { 
										for ($a3=0; $a3 < 3; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								break;
							case ($i3<3):
							    for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=0; $a2 < 3; $a2++) { 
										for ($a3=0; $a3 < 3; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								break;
							case ($i3<6):
							    for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=0; $a2 < 3; $a2++) { 
										for ($a3=3; $a3 < 6; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								break;
							case ($i3<9):
							    for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=0; $a2 < 3; $a2++) { 
										for ($a3=6; $a3 < 9; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								break;		
							
							default:
								
						}
						break;
					case ($i2 < 3):
						switch ($i3) {
							case (0):
							switch ($i2) {
							case ($i3<3):

							for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=0; $a2 < 3; $a2++) { 
										for ($a3=0; $a3 < 3; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								break;	
							default:
								
						}

								break;
							case ($i3<3):
								
							for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=0; $a2 < 3; $a2++) { 
										for ($a3=0; $a3 < 3; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								break;
							case ($i3<6):

							    for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=0; $a2 < 3; $a2++) { 
										for ($a3=3; $a3 < 6; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								break;
							case ($i3<9):
							    for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=0; $a2 < 3; $a2++) { 
										for ($a3=6; $a3 < 9; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}

								break;		
							
							default:

								
						}
						break;
					case ($i2 < 6):
						switch ($i3) {
							case (0):
							switch ($i2) {
							case ($i3<3):

							for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=3; $a2 < 6; $a2++) { 
										for ($a3=0; $a3 < 3; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								break;	
							default:

						}
							case ($i3<3):

							    for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=3; $a2 < 6; $a2++) { 
										for ($a3=0; $a3 < 3; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								break;
							case ($i3<6):

							for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=3; $a2 < 6; $a2++) { 
										for ($a3=3; $a3 < 6; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								break;
							case ($i3<9):
							    for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=3; $a2 < 6; $a2++) { 
										for ($a3=6; $a3 < 9; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}

								break;		
							
							default:

								
						}
						break;
					case ($i2 < 9):
						switch ($i3) {
							case (0):
							switch ($i2) {
							case ($i3<3):

							for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=6; $a2 < 9; $a2++) { 
										for ($a3=0; $a3 < 3; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								break;	
							default:

								
						}
							case ($i3<3):
							    for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=6; $a2 < 9; $a2++) { 
										for ($a3=0; $a3 < 3; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								# code...
								break;
							case ($i3<6):
							    for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=6; $a2 < 9; $a2++) { 
										for ($a3=3; $a3 < 6; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								# code...
								break;
							case ($i3<9):
							    for ($a1=1; $a1 <=9; $a1++) { 
									$valido = true;
									for ($a2=6; $a2 < 9; $a2++) { 
										for ($a3=6; $a3 < 9; $a3++) { 
											if ($m[$a2][$a3]==$a1){
												$valido = false;
											}
										}
									}
									for ($a4=0; $a4 < 8; $a4++) { 
										if ($m[$i2][$a4]==$a1){
												$valido = false;
										}
									}
									for ($a5=0; $a5 < 8; $a5++) { 
										if ($m[$a5][$i3]==$a1){
												$valido = false;
										}
									}

									if ($valido == true) {
										$m[$i2][$i3]=$a1;
									}

								}
								# code...
								break;		
							
							default:
								
						}
						break;		
					
					default:
						# code...
						
				}
			}
		}
	}
}



$resultado = array(
    0 => array(0 => 1, 1 => 1, 2 => 3),
    1 => array(0 => 2, 1 => 3, 2 => 2)
);


$r = array(
    'datosPeticion' => $data,
    'resuelto' => $test,
    'resultado' => $m,
    'n_0_0' => $data['m'][0][0],
    'algunOtroDato' => $data['algunOtroDato']
);


header('Content-Type: application/json');


echo json_encode($r);



