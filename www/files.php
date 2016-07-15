<?php
	$begin= $login;
	if ((strpos($fold,$begin)!=0)| (strpos($fold,"..")!=False)||($fold=="")){
		$dirct=$begin;
	}
	else{
		$dirct=$fold;
	}	