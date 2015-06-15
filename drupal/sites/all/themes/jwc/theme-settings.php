<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function jwc_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL)  {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  // Create the form using Forms API: http://api.drupal.org/api/7

	$form['background_color'] = array(
    '#type' => 'textfield',
    '#title' => t('Background Color'),
    '#default_value' => theme_get_setting('background_color'),
    '#description' => t('The background color of the header and footer (Using what you\'d like to set in css.)'),
		'#weight' => -2,
  );

  /* -- Delete this line if you want to use this setting
  $form['STARTERKIT_example'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('STARTERKIT sample setting'),
    '#default_value' => theme_get_setting('STARTERKIT_example'),
    '#description'   => t("This option doesn't do anything; it's just an example."),
  );
  // */

  // Remove some of the base theme's settings.
  unset($form['themedev']['zen_wireframes']); // We don't need to toggle wireframes on this site.

  // We are editing the $form in place, so we don't need to return anything.
}
