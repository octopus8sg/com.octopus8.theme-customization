<?php

require_once 'theme_customization.civix.php';
use CRM_ThemeCustomization_ExtensionUtil as E;

/**
 * Implements hook_civicrm_pageRun().
 */
/* function theme_customization_civicrm_pageRun(CRM_Core_Page $page) {
  CRM_Core_Resources::singleton()->addStyleFile(E::LONG_NAME, 'css/crm-menubar.css');
} */

/**
 * Implements hook_civicrm_coreResourceList().
 */
function theme_customization_civicrm_coreResourceList(&$scripts, $region) {
  if ($region === 'html-header' || $region === 'page-footer') {
    CRM_Core_Resources::singleton()->addStyleFile(E::LONG_NAME, 'css/custom-menubar.css');
  }
}

/**
 * Implements hook_civicrm_xmlMenu().
 */
function theme_customization_civicrm_xmlMenu(&$files) {
  _theme_customization_civix_civicrm_xmlMenu($files);
}
/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function theme_customization_civicrm_config(&$config) {
  _theme_customization_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function theme_customization_civicrm_install() {
  _theme_customization_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function theme_customization_civicrm_enable() {
  _theme_customization_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function theme_customization_civicrm_uninstall() {
  _theme_customization_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function theme_customization_civicrm_disable() {
  _theme_customization_civix_civicrm_disable();
}