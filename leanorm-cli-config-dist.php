<?php
$pdo_opts = include __DIR__ . DIRECTORY_SEPARATOR . 'pdo.php';

return [
    'pdo' => $pdo_opts,                                                              
    
    'namespace' => 'Rotexsoft\\PhpOrmBenchmarks\\LeanOrm\\Blog',        // Root Namespace classes will belong to. E.g. 'App\\DataSource'. Null means no namespace.
    'directory' => './benchmark-code/lean-orm-files',                   // Absolute or relative path to where classes are to be written
    'custom_templates_directory' => null,                               // Absolute or relative path to a direcory containing template files named 
                                                                        // TypesModel.php.tpl, TypesCollection.php.tpl & TypeRecord.php.tpl
    'tables_to_skip' => ['phinxlog'],                                             // List of tables to skip generating classes for
    'collection_class_to_extend' => '\\LeanOrm\\Model\\Collection',     // Class that all collection classes should extend
    'model_class_to_extend' => '\\LeanOrm\\Model',                      // Class that all model classes should extend
    'record_class_to_extend' => '\\LeanOrm\\Model\\Record',             // Class that all record classes should extend
    'created_timestamp_column_name' => 'date_created',                  // Name of a column in each table whose value will be updated with the time each row gets inserted
    'updated_timestamp_column_name' => 'm_timestamp',                   // Name of a column in each table whose value will be updated with the time each row gets updated
    
    'store_table_col_metadata_array_in_file' => true,                   // if true, a file containing table metadata info will be generated and included in each model class
    
    'table_name_to_record_class_prefix_transformer' =>                  // A callback that accepts a db table name, modifies it & returns the modified value that will be used to substitute {{{RECORD_CLASS_NAME_PREFIX}}} in template files
        function(string $tableName): string {
    
            $inflector = \ICanBoogie\Inflector::get('en');
            $txtSeparatedWithSpaces = $inflector->titleize($tableName);

            if(str_contains($txtSeparatedWithSpaces, ' ')) {

                $words = explode(' ', $txtSeparatedWithSpaces);
                $singularizedWordsCamelCased = '';

                foreach ($words as $word) {

                    $singularizedWordsCamelCased .= 
                        strlen($word) > 1
                            ? $inflector->singularize($word)
                            : $word;
                }

            } else {

                $singularizedWordsCamelCased = $inflector->singularize($txtSeparatedWithSpaces);
            }

            return $singularizedWordsCamelCased;
        },
    
    'table_name_to_collection_and_model_class_prefix_transformer' =>    // A callback that accepts a db table name, modifies it & returns the modified value that will be used to substitute {{{MODEL_OR_COLLECTION_CLASS_NAME_PREFIX}}} in template files
        function(string $tableName): string {

            $inflector = \ICanBoogie\Inflector::get('en');
            $txtSeparatedWithSpaces = $inflector->titleize($tableName);

            if(str_contains($txtSeparatedWithSpaces, ' ')) {

                $words = explode(' ', $txtSeparatedWithSpaces);
                $pluralizedWordsCamelCased = '';

                foreach ($words as $word) {

                    $pluralizedWordsCamelCased .= 
                        strlen($word) > 1
                            ? $inflector->pluralize($word)
                            : $word;
                }

            } else {

                $pluralizedWordsCamelCased = $inflector->pluralize($txtSeparatedWithSpaces);
            }

            return $pluralizedWordsCamelCased;
        },
];


