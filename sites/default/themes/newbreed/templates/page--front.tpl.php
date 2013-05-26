<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

	<div id="page-wrapper"><div id="page">

	<header id="header" class="container">
		<div class="row-fluid">
			<div class="span4 leftbox">
				<?php print render($secondary_nav); ?>
			</div> <!-- .leftbox -->
			
			<div id="logo" class="span4">
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
					<img src="<?php print "$base_path$directory/img/nbw/nbw_logo.png"; ?>" alt="<?php print t('Home'); ?>" />
				</a>
			</div>

			<div class="span4 rightbox">
				<div id="search">
					<?php if(user_is_logged_in()) print render($search_box); ?>
					<?php //print $shopping_cart; ?>
					<!--<div class="searchbox input-append">
						<input type="text" name="search-box" value="" placeholder="Search" />
						<button class="btn button-search" type="button"><i class="icon-search"></i></button>
					</div>-->
				</div>
			</div> <!-- .rightbox -->

		</div> <!-- .row -->
	</header><!-- #header -->
	
<section id="content-wrapper" class="container">

	<div id="thickbar"></div>

	<div class="wrapper-inner">

		<?php print $messages; ?>

		<div id="main-wrapper" class="row"><div id="main" class="clearfix">

			<?php print render($title_prefix); ?>
			<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
			<?php print render($title_suffix); ?>
			<div id="content" class="span5 offset1"><div class="section">
				<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
				<a id="main-content"></a>
				<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
				<?php print render($page['help']); ?>
				<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
				<?php print render($page['content']); ?>
				<?php print $feed_icons; ?>
			</div></div> <!-- /.section, /#content -->

				<div id="sidebar-second" class="column sidebar span5 form-horizontal"><div class="section">

					<div class="contentset center"><div class="inner"><span>Returning Customer</span></div></div>
						

  					<?php
  						if(user_is_logged_in()) {
  							print '<em style="display: block; text-align: center">You are already logged in.</em>';
  						}
  						else {
							print '<p>I am a returning customer</p>';
  							print render(drupal_get_form('user_login_block'));
  						}
  					?>

					<?php if ($page['sidebar_second']): ?>
						<?php print render($page['sidebar_second']); ?>
					<?php endif; ?>
				</div></div> <!-- /.section, /#sidebar-second -->

		</div></div> <!-- /#main, /#main-wrapper -->

</section><!-- #content -->

	<footer id="footer" class="container">
		<div class="row-fluid">
		
			<?php print render($page['footer']); ?>

			<div class="column span2">
				<h3 class="header">Information</h3>
				<ul class="content">
					<li><?php print l(t('About Us'), 'about-us'); ?></li>
					<li><a href="#">Delivery Information</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms &amp; Conditions</a></li>
				</ul>
			</div>

			<div class="column span2">
				<h3 class="header">Customer Service</h3>
				<ul class="content">
					<li><?php print l(t('Contact Us'), 'contact'); ?></li>
					<li><a href="#">Returns</a></li>
					<li><?php print l(t('Site Map'), 'sitemap.xml'); ?></li>
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
					<?php if(user_is_logged_in()): ?>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Order History</a></li>
					<li><a href="#">Wish List</a></li>
					<li><a href="#">Newsletter</a></li>
					<?php else: ?>
					<?php print l('Register', 'user/register'); ?>
					<?php endif; ?>
				</ul>
			</div>

			<div class="span4 contact">
				<div class="social">
					<p>
						<span>Follow Us:</span>
						<a href="http://facebook.com/pages/Everthemes/184498528306229" target="_blank">
							<img src="<?php print "$base_path$directory/img/facebook.png"; ?>" alt="Facebook" title="Facebook">
						</a>
						<a href="https://twitter.com/#!/everthemes" target="_blank">
							<img src="<?php print "$base_path$directory/img/twitter.png"; ?>" alt="Twitter" title="Twitter">
						</a>
						<a href="https://plus.google.com/u/0/105791630767456024442" target="_blank">
							<img src="<?php print "$base_path$directory/img/gplus.png"; ?>" alt="Google+" title="Google+">
						</a>
					</p>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->

	<footer id="footer-end" class="container">
		<div class="row-fluid">
			<div class="span12">
				NBW &copy; 2012
			</div>
		</div><!-- end .container -->
	</footer><!-- #footer-end -->


	</div></div> <!-- /#page, /#page-wrapper -->
