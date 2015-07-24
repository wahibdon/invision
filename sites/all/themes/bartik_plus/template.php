<?php

function bartik_plus_links($variables) {
  if (array_key_exists('id', $variables['attributes']) && $variables['attributes']['id'] == 'main-menu-links') {
  	$pid = variable_get('menu_main_links_source', 'main-menu');
	$tree = menu_tree($pid);
	return '<div id="inter-links"><a id="ind" href="ind.inv.ott-toolbox.com">INDUSTRIAL</a> <a id="com" href="com.inv.ott-toolbox.com">COMMERCIAL</a> <a id="res" href="res.inv.ott-toolbox.com">RESIDENTIAL</a></div>\n<div id="main-menu-links">' . drupal_render($tree) . "</div>";
  }
  return theme_links($variables);
}
