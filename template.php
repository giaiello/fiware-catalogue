<?php
/**
 * @file
 * Sass Kalatheme's primary theme functions and alterations.
 */

function fiwareSASS_form_alter(&$form, &$form_state, $form_id) {
$form['filter']['#attributes']['placeholder'] = t('Filter...');
$form['filter_bundles']['#attributes']['placeholder'] = t('Filter...');
$form['filter_tools']['#attributes']['placeholder'] = t('Filter...');

if($form_id == 'user_register_form'){
drupal_set_message(t('Dear user, please note that the registration is required only for editing the contents of the Catalogue (e.g. GE implementation). If your intention is to know how to use FI-WARE you don\'t need to create an account because all the information you need is publicly available.'), 'error');
}
}