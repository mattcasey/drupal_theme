<?php

/**
 * @file
 * Default theme implementation to display a region.
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - region: The current template type, i.e., "theming hook".
 *   - region-[name]: The name of the region with underscores replaced with
 *     dashes. For example, the page_top region would have a region-page-top class.
 * - $region: The name of the region variable as defined in the theme's .info file.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<?php if ($content): ?>
  <div class="<?php print $classes; ?>">
    <?php print $content; ?>
  </div>
<?php endif; ?>

<div class="column span2">
	<h3 class="header">Information</h3>
	<ul class="content">
	  <li><a href="#">About Us</a></li>
		<li><a href="#">Delivery Information</a></li>
		<li><a href="#">Privacy Policy</a></li>
		<li><a href="#">Terms &amp; Conditions</a></li>
	</ul>
</div>

<div class="column span2">
	<h3 class="header">Customer Service</h3>
	<ul class="content">
		<li><a href="#">Contact Us</a></li>
		<li><a href="#">Returns</a></li>
		<li><a href="#">Site Map</a></li>
	</ul>
</div>

<div class="column span2">
	<h3 class="header">Extras</h3>
	<ul class="content">
		<li><a href="#">Brands</a></li>
		<li><a href="#">Gift Vouchers</a></li>
		<li><a href="#">Affiliates</a></li>
		<li><a href="#">Specials</a></li>
	</ul>
</div>

<div class="column span2">
	<h3 class="header">My Account</h3>
	<ul class="content">
		<li><a href="#">My Account</a></li>
		<li><a href="#">Order History</a></li>
		<li><a href="#">Wish List</a></li>
		<li><a href="#">Newsletter</a></li>
	</ul>
</div>
