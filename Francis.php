<?php
class Francis {	
	
	public function yo($input)
	{
		if($input == 'Did you finish your homework?'){
			return 'Sure';
		}
		elseif($input == 'GOOOAAALLL'){
			return 'Chill';
		}
		elseif($input == ''){
			return 'See if I care!';
		}
		else{
			return 'Whatevs.';
		}		
	}
}
?>
