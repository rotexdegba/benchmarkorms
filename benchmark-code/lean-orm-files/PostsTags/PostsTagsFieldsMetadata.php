<?php
return array (
  'posts_tags_id' => 
  array (
    'name' => 'posts_tags_id',
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
  'tag_id' => 
  array (
    'name' => 'tag_id',
    'type' => 'integer',
    'size' => NULL,
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
