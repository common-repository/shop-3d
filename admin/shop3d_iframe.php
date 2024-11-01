<?php
	$url = site_url();
	$c_user = wp_get_current_user();
	$email = $c_user->user_email;
 ?>

<iframe src="https://app.shop3d.io/auth/wordpress?url=<?php echo $url; ?>&email=<?php echo $email; ?>" frameborder="0" style="height: calc(100vh - 33px);" width="100%"></iframe>
