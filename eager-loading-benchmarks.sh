#!/bin/bash
###############################################################################################
# This script is invoked inside run-eager-benchmarks.sh, you should not be running it directly
###############################################################################################
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/atlas-fetch-all-comments-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecordSet.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/atlas-fetch-all-comments-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecords.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/atlas-fetch-all-posts-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecordSet.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/atlas-fetch-all-posts-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecords.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/atlas-fetch-all-posts_tags-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecordSet.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/atlas-fetch-all-posts_tags-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecords.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/atlas-fetch-all-summaries-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecordSet.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/atlas-fetch-all-summaries-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecords.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/eloquent-fetch-all-comments-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-chunk.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/eloquent-fetch-all-comments-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-get.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/eloquent-fetch-all-comments-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-lazy.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/eloquent-fetch-all-posts-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-chunk.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/eloquent-fetch-all-posts-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-get.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/eloquent-fetch-all-posts-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-lazy.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/eloquent-fetch-all-posts_tags-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-chunk.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/eloquent-fetch-all-posts_tags-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-get.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/eloquent-fetch-all-posts_tags-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-lazy.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/eloquent-fetch-all-summaries-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-chunk.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/eloquent-fetch-all-summaries-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-get.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/eloquent-fetch-all-summaries-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-lazy.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/leanorm-fetch-all-comments-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecordsIntoArray.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/leanorm-fetch-all-comments-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecordsIntoCollection.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/leanorm-fetch-all-comments-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRowsIntoArray.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/leanorm-fetch-all-posts-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecordsIntoArray.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/leanorm-fetch-all-posts-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecordsIntoCollection.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/leanorm-fetch-all-posts-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRowsIntoArray.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/leanorm-fetch-all-posts_tags-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecordsIntoArray.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/leanorm-fetch-all-posts_tags-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecordsIntoCollection.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/leanorm-fetch-all-posts_tags-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRowsIntoArray.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/leanorm-fetch-all-summaries-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecordsIntoArray.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/leanorm-fetch-all-summaries-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRecordsIntoCollection.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-belongs-to-and-has-one-data/leanorm-fetch-all-summaries-in-chunks-of-10-with-belongs-to-and-has-one-related-data-using-fetchRowsIntoArray.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/atlas-fetch-all-authors-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRecordSet.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/atlas-fetch-all-authors-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRecords.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/atlas-fetch-all-posts-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRecordSet.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/atlas-fetch-all-posts-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRecords.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/atlas-fetch-all-tags-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRecordSet.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/atlas-fetch-all-tags-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRecords.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/eloquent-fetch-all-authors-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-chunk.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/eloquent-fetch-all-authors-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-get.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/eloquent-fetch-all-authors-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-lazy.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/eloquent-fetch-all-posts-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-chunk.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/eloquent-fetch-all-posts-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-get.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/eloquent-fetch-all-posts-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-lazy.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/eloquent-fetch-all-tags-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-chunk.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/eloquent-fetch-all-tags-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-get.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/eloquent-fetch-all-tags-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-lazy.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/leanorm-fetch-all-authors-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRecordsIntoArray.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/leanorm-fetch-all-authors-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRecordsIntoCollection.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/leanorm-fetch-all-authors-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRowsIntoArray.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/leanorm-fetch-all-posts-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRecordsIntoArray.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/leanorm-fetch-all-posts-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRecordsIntoCollection.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/leanorm-fetch-all-posts-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRowsIntoArray.php "$1"

php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/leanorm-fetch-all-tags-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRecordsIntoArray.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/leanorm-fetch-all-tags-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRecordsIntoCollection.php "$1"
php ./benchmark-scenarios/fetch-all-rows-with-eager-loaded-related-data/with-has-many-and-has-many-through-data/leanorm-fetch-all-tags-in-chunks-of-10-with-has-many-and-has-many-through-related-data-using-fetchRowsIntoArray.php "$1"
