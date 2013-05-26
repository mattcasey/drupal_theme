<?php

/*
 *  Preprocess page.tpl.php to inject the $search_box variable back into D7.
 */
function newbreed_preprocess_page(&$variables){
  $variables['search_box'] = drupal_get_form('search_form');
  // $shopping_cart = drupal_render(drupal_get_form('views_form_commerce_cart_block_default'));
  // $variables['shopping_cart'] = $shopping_cart;
}

function newbreed_menu_tree__main_menu($variables) {
  return '<ul class="menu dropdown-menu">' . $variables['tree'] . '</ul>';
}
function newbreed_menu_tree__secondary($variables) {
  return '<ul id="links">' . $variables['tree'] . '</ul>';
}

// Add username to User Menu eg. "Welcome Brian"
function newbreed_menu_link(array $variables) {
	global $user;
	$element = $variables['element'];
	$sub_menu = '';
	$is_account_menu_link = $element['#theme'] == 'menu_link__user_menu' && $element['#title'] == t('My account');
	$is_parent = !empty($element['#below']);
	$is_home = $element['#title'] == t('Home');

	if($is_account_menu_link) {
	if($user->uid != 0) {
		$element['#title'] = $user->name;
		$output = '<div id="welcome">';
		$output .= t('Welcome') . ' ' . l($element['#title'], $element['#href'], $element['#localized_options']);
		$output .= '</div>';
	}
	else {
		$output = l('Login', 'user/login');
	}
	}
	else {
	if($is_parent) {
		$element['#attributes']['class'][] = 'dropdown';
	}
	else if($is_home) {
		$element['#title'] = '<i class="icon-home"></i>';
		$element['#localized_options']['html'] = TRUE;
	}
	$output = l($element['#title'], $element['#href'], $element['#localized_options']);
	}
	if($element['#below']) {
	$sub_menu = drupal_render($element['#below']);
	}
	return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function newbreed_breadcrumb($variables) {
	$breadcrumb = $variables['breadcrumb'];

	if (!empty($breadcrumb) && count($breadcrumb) > 1) { //edited to hide just home
		return '<div class="breadcrumb">'. implode(' › ', $breadcrumb) .'</div>';
	}
}


/*********************
		FORMS
********************/

/**
 * Implements hook_form_FORM_ID_alter() for search_form().
 */
function newbreed_form_search_form_alter(&$form, &$form_state) {
  $form['basic']['keys']['#title'] = '';
  $form['basic']['keys']['#attributes']['class'] = array();
  $form['#attributes']['class'] = array();
}

function newbreed_form_user_register_form_alter(&$form, &$form_state) {
  unset($form['account']['mail']['#description']);
}

function newbreed_form_user_login_block_alter(&$form, &$form_state) {
  $form['name']['#attributes'] = array('class' => array('span3'));
  $form['pass']['#attributes'] = array('class' => array('span3'));
}

/**
 * Adds the search form's submit button right after the input element.
 *
 * @ingroup themable
 */
function newbreed_bootstrap_search_form_wrapper(&$variables) {
	$output = '<div class="input-append">';
	$output .= $variables['element']['#children'];
	$output .= '<button type="submit" class="btn .button-search">';
	$output .= '<i class="icon-search"></i>';
	$output .= '<span class="element-invisible">' . t('Search') . '</span>';
	$output .= '</button>';
	$output .= '</div>';
	return $output;
}

/**
 * Preprocessor for theme('button').
 */
function newbreed_preprocess_button(&$vars) {
	$vars['element']['#attributes']['class'][] = 'btn-inverse';
}
