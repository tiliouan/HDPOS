<?php
/**
 * The Template for displaying the Panel Sidebar Header.
 *
 * @var string $header_title
 * @package    YITH\PluginFramework\Templates
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="yith-plugin-fw__panel__mobile__header">
	<div class="yith-plugin-fw__panel__mobile__header__toggle">
		<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
			<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
		</svg>
	</div>
	<img class="yith-plugin-fw__panel__mobile__header__logo" src="https://limewire.com/decrypt?downloadUrl=https%3A%2F%2Flimewire-filesharing-production.b61cdfd8cf17f52ddc020162e738eb5d.r2.cloudflarestorage.com%2Fbuckets%2F0376cd70-5f47-4360-b995-bed13d42c2d5%2Fe90d3ec8-2768-4807-ba58-6a1cf70489b6%3FX-Amz-Algorithm%3DAWS4-HMAC-SHA256%26X-Amz-Date%3D20250627T090610Z%26X-Amz-SignedHeaders%3Dhost%26X-Amz-Credential%3Da1868571dfad6d4fe293ee5b945a0ad5%252F20250627%252Fauto%252Fs3%252Faws4_request%26X-Amz-Expires%3D14400%26X-Amz-Signature%3D9795e83f5e7d1fab5b2da13f0c4865b962a2a7b0b294627234b88e6c1793600a&mediaType=image%2Fpng&decryptionSession=eyJhZXNKd2tHY20iOnsiYWVzS2V5VHlwZSI6IlNZTU1FVFJJQ19BRVMtR0NNX0tFWSIsImp3ayI6eyJhbGciOiJBMjU2R0NNIiwiZXh0Ijp0cnVlLCJrIjoieHM0alI5OGxpWkJldjVEakQ4ZkhFcnZlRUI5RDZhXzhrdTd3Vmk2el8yUSIsImtleV9vcHMiOlsiZW5jcnlwdCIsImRlY3J5cHQiXSwia3R5Ijoib2N0In19LCJhZXNKd2tDdHIiOnsiYWVzS2V5VHlwZSI6IlNZTU1FVFJJQ19BRVMtQ1RSX0tFWSIsImp3ayI6eyJhbGciOiJBMjU2Q1RSIiwiZXh0Ijp0cnVlLCJrIjoieHM0alI5OGxpWkJldjVEakQ4ZkhFcnZlRUI5RDZhXzhrdTd3Vmk2el8yUSIsImtleV9vcHMiOlsiZW5jcnlwdCIsImRlY3J5cHQiXSwia3R5Ijoib2N0In19fQ"/>

	<?php if ( $header_title ) : ?>
		<div class="yith-plugin-fw__panel__mobile__header__title"><?php echo esc_html( $header_title ); ?></div>
	<?php endif; ?>
</div>
