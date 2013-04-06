
<?
function reg_check($adatok){
	$hibak = array();
	if(strlen($adatok['registration_surname']) < 3)
	{
		$hibak['registration_surname'] = 'A családnév legalább 4 betűs legyen, kitöltése pedig kötelező';
	} 
	else if (!ereg('^[a-zA-ZáéíóöüóűÁÉÍÓÖÜŐŰ]', $adatok['registration_surname' ])) 
		{
			$hibak['registration_surname'] = 'A családnévben csak a magyar ábécé kis - és nagybetűi engedélyezettek';
		} 
		else 
		{
			//mehet az adatbazisba
		}

	if(strlen($adatok['registration_first_name']) < 3)
	{
		$hibak['registration_first_name'] = 'A keresztnév legalább 4 betűs legyen, kitöltése pedig kötelező';
	}
	else if (!ereg('^[a-zA-ZáéíóöüóűÁÉÍÓÖÜŐŰ]', $adatok['registration_surname' ]))
		{
			$hibak['registration_first_name'] = 'A keresztnévben csak a magyar ábécé kis - és nagybetűi engedélyezettek';
		}
		else
		{
			//mehet az adatbazisba
		}
	
	if($adatok['registration_city'] == '') {
		$hibak['email'] = 'Az e-mail cím kitöltése kötelező';
	} 
	else if ($adatok['email'] == (!eregi('^[_\.0-9a-z-]+@([0-9az][0-9a-z-]+\.)+[a-z]{2,6}$',$adatok['email']))) 
		{
			$hibak['email'] = 'Hibás e-mail cím';
		}
		else
		{
			//mehet az adatbazisba
		}
		
	if(strlen($adatok['registration_city']) < 3)
	{
		$hibak['registration_city'] = 'A város legalább 4 betűs legyen, kitöltése pedig kötelező';
	}
	else if (!ereg('^[a-zA-ZáéíóöüóűÁÉÍÓÖÜŐŰ]', $adatok['registration_city' ]))
		{
			$hibak['registration_city'] = 'A város nevében csak a magyar ábécé kis - és nagybetűi engedélyezettek';
		}
		else
		{
			//mehet az adatbazisba
		}
		
		
	if ($hibak)
		return $hibak;
	else
		return true;
	}
?>