<?php

$minhaString = "minha string � essa";

if(preg_match('/ /', $minhaString)) :
	echo "string found";
else : 
	echo "string not found";
endif;
