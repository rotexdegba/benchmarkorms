<?php
return array (
  'tag_id' => 
  array (
    'name' => 'tag_id',
    'type' => 'integer',
    'size' => NULL,
    'scale' => NULL,
    'notnull' => true,
    'default' => NULL,
    'autoinc' => true,
    'primary' => true,
  ),
  'name' => 
  array (
    'name' => 'name',
    'type' => 'varchar',
    'size' => 255,
    'scale' => NULL,
    'notnull' => true,
    'default' => NULL,
    'autoinc' => false,
    'primary' => false,
  ),
  'm_timestamp' => 
  array (
    'name' => 'm_timestamp',
    'type' => 'timestamp_text',
    'size' => NULL,
    'scale' => NULL,
    'notnull' => true,
    'default' => 'CURRENT_TIMESTAMP',
    'autoinc' => false,
    'primary' => false,
  ),
  'date_created' => 
  array (
    'name' => 'date_created',
    'type' => 'timestamp_text',
    'size' => NULL,
    'scale' => NULL,
    'notnull' => true,
    'default' => 'CURRENT_TIMESTAMP',
    'autoinc' => false,
    'primary' => false,
  ),
);
