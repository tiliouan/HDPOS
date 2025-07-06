<?php
/**
 * The Template for displaying the Panel Sidebar Header.
 *
 * @var string $header_title
 * @package    YITH\PluginFramework\Templates
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="yith-plugin-fw__panel__sidebar__header">
	<?php if ( $header_title ) : ?>
		<div class="yith-plugin-fw__panel__sidebar__header__name"><?php echo esc_html( $header_title ); ?></div>
	<?php endif; ?>
</div>
