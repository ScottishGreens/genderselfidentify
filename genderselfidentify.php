<?php

require_once 'genderselfidentify.civix.php';

use CRM_Genderselfidentify_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function genderselfidentify_civicrm_config(&$config): void {
  _genderselfidentify_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function genderselfidentify_civicrm_install(): void {
  _genderselfidentify_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function genderselfidentify_civicrm_enable(): void {
  _genderselfidentify_civix_civicrm_enable();
}