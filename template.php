<?php

/**
 * Intercept template variables
 *
 * @param $hook
 *   The name of the theme function being executed (name of the .tpl.php file)
 * @param $vars
 *   A copy of the array containing the variables for the hook.
 * @return
 *   The array containing additional variables to merge with $vars.
 */
function _phptemplate_variables($hook, $vars = array()) {
  // Get the currently logged in user
  global $user;

  // Set a new $is_admin variable. This is determined by looking at the
  // currently logged in user and seeing if they are in the role 'admin'. The
  // 'admin' role will need to have been created manually for this to work this
  // variable is available to all templates.
  $vars['is_admin'] = in_array('admin', $user->roles);

  switch ($hook) {
    case 'page':
      global $theme, $theme_key;

      // If we're in the main theme
      if ($theme == $theme_key) {
        // Avoid IE5 bug that always loads @import print stylesheets
       $vars['head'] = igniter_add_print_css($vars['directory'] .'/print.css');
      }
    break;
   }
   return $vars;
 }

/**
 * Adds a print stylesheet to the page's $head variable.
 *
 * This is a work-around for a serious bug in IE5 in which it loads print
 * stylesheets for screen display when using an @import method, Drupal's default
 * method when using drupal_add_css().
 *
 * @param string $url
 *   The URL of the print stylesheet
 * @return
 *   All the rendered links for the $head variable
 */
function igniter_add_print_css($url) {
  global $base_path;
  return drupal_set_html_head(
    '<link'.
    drupal_attributes(
      array(
        'rel' => 'stylesheet',
        'href' => $base_path . $url,
        'type' => 'text/css',
        'media' => 'print',
      )
    ) ." />\n"
  );
}
