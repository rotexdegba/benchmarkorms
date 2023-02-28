#!/bin/bash

php ./benchmark-scenarios/welcome.php
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-100-with-tags-has-many-through-data-eager-loaded-using-get.php
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-100-with-tags-has-many-through-data-eager-loaded-using-fetchRowsIntoArray.php
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-100-with-tags-has-many-through-data-eager-loaded-using-fetchRecordsIntoCollection.php
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-100-with-tags-has-many-through-data-eager-loaded-using-fetchRecords.php
