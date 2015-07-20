<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <style>
  @font-face {
	font-family: 'OttFont';
	src: url('fonts/HN.eot'); /* IE9 Compat Modes */
	src: url('fonts/HN.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
	     url('fonts/HN.woff') format('woff'), /* Modern Browsers */
	     url('fonts/HN.ttf')  format('truetype'), /* Safari, Android, iOS */
	     url('fonts/HN.svg#svgOttFont') format('svg'); /* Legacy iOS */
	}
@font-face {
	font-family: 'OttFont Thin';
	src: url('fonts/HNThin.eot'); /* IE9 Compat Modes */
	src: url('fonts/HNThin.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
	     url('fonts/HNThin.woff') format('woff'), /* Modern Browsers */
	     url('fonts/HNThin.ttf')  format('truetype'), /* Safari, Android, iOS */
	     url('fonts/HNThin.svg#svgOttFontThin') format('svg'); /* Legacy iOS */
	}
	@font-face {
	font-family: 'OttFont Bold';
	src: url('fonts/HNB.eot'); /* IE9 Compat Modes */
	src: url('fonts/HNB.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
	     url('fonts/HNB.woff') format('woff'), /* Modern Browsers */
	     url('fonts/HNB.ttf')  format('truetype'), /* Safari, Android, iOS */
	     url('fonts/HNB.svg#svgOttFontBold') format('svg'); /* Legacy iOS */
	}
	@font-face {
	font-family: 'OttFont Light';
	src: url('fonts/HNL.eot'); /* IE9 Compat Modes */
	src: url('fonts/HNL.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
	     url('fonts/HNL.woff') format('woff'), /* Modern Browsers */
	     url('fonts/HNL.ttf')  format('truetype'), /* Safari, Android, iOS */
	     url('fonts/HNL.svg#svgOttFontLight') format('svg'); /* Legacy iOS */
	}
	@font-face {
	font-family: 'OttFont UltraLight';
	src: url('fonts/HNUL.eot'); /* IE9 Compat Modes */
	src: url('fonts/HNUL.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
	     url('fonts/HNUL.woff') format('woff'), /* Modern Browsers */
	     url('fonts/HNUL.ttf')  format('truetype'), /* Safari, Android, iOS */
	     url('fonts/HNUL.svg#svgOttFontUltraLight') format('svg'); /* Legacy iOS */
	}
	#body {
		font-family:'OttFont Light';	
	}
	h1, h2, h3, h4{
		font-family:'OttFont Bold';	
	}
  #header {
	background:#31323c;  
	height:40px;
  }
  #logo {
	padding:0px;  
  }
  </style>
  <?php print $scripts; ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script>
  jQuery(document).ready(function($) {
	  
  });
  </script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
