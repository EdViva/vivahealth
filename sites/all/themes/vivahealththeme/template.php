<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * vivahealththeme theme.
 */
drupal_add_library('system', 'ui.accordion');
drupal_add_js('jQuery(document).ready(function() {jQuery("#accordion").accordion();});','inline');
