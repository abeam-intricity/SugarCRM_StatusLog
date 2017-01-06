<?php
$manifest = array (
  'name' => 'Status Log',
  'description' => 'Append Lead status and timestamp to status_log_c when status changes.',
  'author' => 'abeam@intricity.com',
  'version' => '1.0.0',
  'is_uninstallable' => true,
  'published_date' => '2017-01-06 00:00:00',
  'type' => 'module',
  'acceptable_sugar_versions' => array(
       'exact_matches' => array(),
       'regex_matches' => array(
      '[6-7]\\.[0-9]\\.[0-9][0-9]?$',
      '[6-7]\\.[0-9]\\.[0-9]\\.[0-9][0-9]?$',
    ),
  ),
  'acceptable_sugar_flavors' => array('CE', 'PRO', 'CORP', 'ENT', 'ULT'),
  'readme' => '',
  'icon' => '',
  'remove_tables' => '',
);

$installdefs = array(
  'id' => 'abeam_statuslog',
  'copy' => array(
    0 => array(
      'from' => '<basepath>/custom/modules/Leads/StatusLogHook.php',
      'to' => 'custom/modules/Leads/StatusLogHook.php',
    ),
  ),
  'logic_hooks' => array(
    array(
      'module' => 'Leads',
      'hook' => 'before_save',
      'order' => 99,
      'description' => 'Append Lead status and timestamp to status_log_c when status changes.',
      'file' => 'custom/modules/Leads/StatusLogHook.php',
      'class' => 'StatusLogHook',
      'function' => 'status_log_hook',
    ),
  ),
);