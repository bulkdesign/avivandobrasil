<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="entry-title">
	<?php if( ! is_singular( 'tp_event' ) || ! in_the_loop() ): ?>
		<h3><a href="<?php the_permalink() ?>">
	<?php else: ?>
		<h1 class="white-text bold">
	<?php endif; ?>
			<?php the_title(); ?>
	<?php if( ! is_singular( 'tp_event' ) || ! in_the_loop() ): ?>
		</a></h3>
	<?php else: ?>
		</h1>
	<?php endif; ?>
</div>