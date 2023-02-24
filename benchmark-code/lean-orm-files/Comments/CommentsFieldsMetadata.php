<?php
return array (
  'comment_id' => 
  array (
    'name' => 'comment_id',
    'type' => 'integer',
    'size' => NULL,
    'scale' => NULL,
    'notnull' => true,
    'default' => NULL,
    'autoinc' => true,
    'primary' => true,
  ),
  'post_id' => 
  array (
    'name' => 'post_id',
    'type' => 'integer',
    'size' => NULL,
    'scale' => NULL,
    'notnull' => true,
    'default' => NULL,
    'autoinc' => false,
    'primary' => false,
  ),
  'datetime' => 
  array (
    'name' => 'datetime',
    'type' => 'timestamp_text',
    'size' => NULL,
    'scale' => NULL,
    'notnull' => false,
    'default' => 'CURRENT_TIMESTAMP',
    'autoinc' => false,
    'primary' => false,
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
  'email' => 
  array (
    'name' => 'email',
    'type' => 'varchar',
    'size' => 255,
    'scale' => NULL,
    'notnull' => true,
    'default' => NULL,
    'autoinc' => false,
    'primary' => false,
  ),
  'website' => 
  array (
    'name' => 'website',
    'type' => 'varchar',
    'size' => 255,
    'scale' => NULL,
    'notnull' => true,
    'default' => NULL,
    'autoinc' => false,
    'primary' => false,
  ),
  'body' => 
  array (
    'name' => 'body',
    'type' => 'text',
    'size' => NULL,
    'scale' => NULL,
    'notnull' => false,
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
