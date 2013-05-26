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
      
	<!--
	<div id="minicart">

		<div class="heading">
			<h4>Shopping Cart</h4>
			<a id="cart-total">1 item(s) - $34.00</a>
		</div>

		<div class="content">
				
			<table class="items">
				<tbody>
					<tr class="item">
						<td class="image">
							<a href="product.html"><img src="img/products/jeansMA4-62x62.jpg" alt="Skinny Jeans Dry " title="Skinny Jeans Dry "></a>
						</td>
						<td class="name">
							<a href="product.html">Skinny Jeans Dry </a>
						</td>
						<td class="quantity"><span class="qty">1</span></td>
						<td class="total">$34.00</td>
						<td>
							<a class="close" data-dismiss="item" href="#">&times;</a>
						</td>
					</tr>
				</tbody>
			</table>

			<table class="total">
				<tbody>
					<tr>
						<td class="right"><b>Sub-Total:</b></td>
						<td class="right">$34.00</td>
					</tr>
					<tr>
						<td class="right"><b>Total:</b></td>
						<td class="right">$34.00</td>
					</tr>
				</tbody>
			</table>

			<div class="checkout">
				<a href="cart.html" class="btn btn-mini">View Cart</a> 
				<a href="checkout.html" class="btn btn-mini btn-cart">Checkout</a>
			</div>

			<a id="closecart" class="close" data-dismiss="item" title="Close" onclick="$('#minicart').removeClass('active');">×</a>
		
		</div>

	</div> -->
	<div id="search">
		<?php print $search_box; ?>
		<!--<div class="searchbox input-append">
			<input type="text" name="search-box" value="" placeholder="Search" />
			<button class="btn button-search" type="button"><i class="icon-search"></i></button>
		</div>-->
	</div>
<!--
	<div id="wrapselector">
						
		<div id="language_selector" class="dropd">
							
			<span class="selected"><img src="img/flags/gb.png" alt="English">English</span>
		
			<ul class="options">
				<li><a href="#"><img src="img/flags/es.png" alt="Español">Español</a></li>
				<li><a href="#"><img src="img/flags/bg.png" alt="Bulgarian">Bulgarian</a></li>
				<li><a href="#"><img src="img/flags/ge.png" alt="Deustch">Deustch</a></li>
			</ul>

		</div>

		<div id="currency_selector" class="dropd">

			<span class="selected">US Dollar</span>

			<ul class="options">
				<li><a href="#">Euro</a></li>
				<li><a href="#">US Dollar</a></li>
			</ul>

		</div>

	</div> -->

</div> <!-- .rightbox -->