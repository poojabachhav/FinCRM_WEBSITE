<?php
	
	$arr= $_POST['arrForNewPoint'];

	$user=$arr[0];
	$sms=$arr[1];
	$space=$arr[2];

	$perUserprice="";
	

	$perUserBasePrice= "";

	// USER...
	if($user== 5){

	}
	if($user<10 && $user>=5){
		$perUserBasePrice= 500;
		$perUserprice= 232;
		
		$total= $perUserBasePrice + $perUserprice;

	}else if($user <20 && $user >=10){
		$perUserBasePrice= 450;
		$perUserprice= 227.5;

		$total= $perUserBasePrice + $perUserprice;

	}else if($user <50 && $user>=20){
		$perUserBasePrice= 350;
		$perUserprice= 225;

		$total= $perUserBasePrice + $perUserprice;
	}else if($user>=50){
		$perUserBasePrice= 250;
		$perUserprice= 225;

		$total= $perUserBasePrice + $perUserprice;
	}

	$totalUser= $total * $user;

	// SMS

	$totalSMS= $sms * 0.2;

	//GB

	$totalGB= $space * 5;


	$totalAllFields= $totalUser + $totalSMS + $totalGB;
	$totalPerUser= $totalAllFields /$user;
	echo round($totalAllFields);
	

?>