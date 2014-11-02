		<?php
			if ((strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') !== false))
				echo '<link rel="stylesheet" media="screen" type="text/css" href="css/animation_ff.css" >';
			else if ((strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') !== false))
				echo '<link rel="stylesheet" media="screen" type="text/css" href="css/animation_ie.css" >';	
			else
				echo '<link rel="stylesheet" media="screen" type="text/css" href="css/animation_gc.css" >';	
		?> 