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
