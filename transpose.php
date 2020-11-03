<!DOCTYPE HTML>
<html>  
<head>
	<title>Transposition Cipher</title>
</head>
<body>

 <form action="transpose.php" method="POST">
  Input Message: <input type="text" id="message" name="message" placeholder="Enter message" required>
  <input type="submit" value="Submit"> <br>
</form> 

<?php
    $message = "";
    $userinput = "";
	$nospaces = "";
	$i = "X";

	echo '<br/>'."\n";

    if(isset($_POST['message'])) 
    	$userinput=$_POST['message'];
    	echo "Plaintext message is: ";
    	echo $userinput;
		echo '<br/>'."\n";

		echo "Without spaces: ";
		$nospaces = str_replace(' ', '', $userinput);
		echo $nospaces;
		echo '<br/>'."\n"; 
		echo '<br/>'."\n";

		$b=0;
		$baru = str_split($nospaces);

		for ($a = 0; $a < strlen($nospaces); $a++)
		{	
			if (empty($baru[$a]))
			{ $baru[$a]=null; }
			elseif($baru[$a])
			{ echo $baru[$a]; $b++; }

			if (empty($baru[$a+1]))
			{ $baru[$a+1]=null; }
			elseif($baru[$a+1])
			{ echo $baru[$a+1]; }

			if (empty($baru[$a+2]))
			{ $baru[$a+2]=null; }
			elseif($baru[$a+2])
			{ echo $baru[$a+2]; }

			if (empty($baru[$a+3]))
			{ $baru[$a+3]=null; }
			elseif($baru[$a+3])
			{ echo $baru[$a+3]; 
				
			}
    		$a++;
    		$a++;
    		$a++;
    		echo '<br/>'."\n";
		}

		echo '<br/>'."\n";
		echo "$b rows";
		echo '<br/>'."\n";
		echo '<br/>'."\n";

		$countrows2=0;
		$location2 = 0;
		echo "Result: ";
    	for ($a = 0; $a < 4; $a++) 
    	{
    		$location2 = $a;
    		echo $baru[$a];
    		$location2 = $location2+4;
    		while($countrows2 < $b-1) 
    		{
    			echo $baru[$location2];
    			$location2 = $location2+4;
    			$countrows2++;
    		}
    		$countrows2=0;
		}
			
		

		
?>
</body>
</html>