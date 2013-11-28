<?php

/**
 * Implements hook_preprocess_page().
 */
function ccn_preprocess_page(&$variables) {
  if ($variables['is_front']) {
    $variables['title'] = '';
    unset($variables['page']['content']['system_main']['default_message']);
    unset($variables['page']['content']['system_main']['nodes']);
  }
}

// Add some cool text to the search block form
function ccn_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    // HTML5 placeholder attribute
    $form['search_block_form']['#attributes']['placeholder'] = '搜素你感兴趣的课程';
  }
}
