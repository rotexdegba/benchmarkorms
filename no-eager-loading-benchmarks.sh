#!/bin/bash
########################################################################################
# This script is invoked inside run-benchmarks.sh, you should not be running it directly
########################################################################################
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-without-chunking-and-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-without-chunking-and-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-without-chunking-and-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-without-chunking-and-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-without-chunking-and-without-any-related-data-using-lazy.php "$1"
php ./benchmark-scenarios/leanorm-fetch-all-authors-without-chunking-and-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-without-chunking-and-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-without-chunking-and-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-in-chunks-of-10-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-in-chunks-of-10-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-10-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-10-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-10-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-10-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-in-chunks-of-50-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-in-chunks-of-50-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-50-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-50-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-50-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-50-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-in-chunks-of-100-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-in-chunks-of-100-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-100-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-100-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-100-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-100-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-in-chunks-of-250-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-in-chunks-of-250-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-250-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-250-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-250-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-250-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-in-chunks-of-500-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-in-chunks-of-500-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-500-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-500-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-500-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-500-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-in-chunks-of-1000-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-in-chunks-of-1000-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-1000-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-1000-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-in-chunks-of-1000-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-in-chunks-of-1000-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-without-chunking-and-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-comments-without-chunking-and-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-without-chunking-and-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-without-chunking-and-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-comments-without-chunking-and-without-any-related-data-using-lazy.php "$1"
php ./benchmark-scenarios/leanorm-fetch-all-comments-without-chunking-and-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-without-chunking-and-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-comments-without-chunking-and-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-10-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-10-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-10-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-10-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-10-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-10-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-50-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-50-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-50-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-50-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-50-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-50-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-100-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-100-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-100-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-100-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-100-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-100-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-250-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-250-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-250-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-250-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-250-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-250-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-500-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-500-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-500-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-500-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-500-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-500-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-1000-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-in-chunks-of-1000-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-1000-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-1000-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-in-chunks-of-1000-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-in-chunks-of-1000-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-without-chunking-and-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts-without-chunking-and-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-without-chunking-and-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-without-chunking-and-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts-without-chunking-and-without-any-related-data-using-lazy.php "$1"
php ./benchmark-scenarios/leanorm-fetch-all-posts-without-chunking-and-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-without-chunking-and-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts-without-chunking-and-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-in-chunks-of-10-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-in-chunks-of-10-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-10-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-10-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-10-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-10-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-in-chunks-of-50-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-in-chunks-of-50-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-50-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-50-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-50-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-50-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-in-chunks-of-100-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-in-chunks-of-100-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-100-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-100-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-100-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-100-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-in-chunks-of-250-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-in-chunks-of-250-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-250-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-250-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-250-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-250-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-in-chunks-of-500-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-in-chunks-of-500-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-500-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-500-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-500-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-500-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-in-chunks-of-1000-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-in-chunks-of-1000-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-1000-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-1000-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-in-chunks-of-1000-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-in-chunks-of-1000-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-without-chunking-and-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-posts_tags-without-chunking-and-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-without-chunking-and-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-without-chunking-and-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-posts_tags-without-chunking-and-without-any-related-data-using-lazy.php "$1"
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-without-chunking-and-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-without-chunking-and-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-posts_tags-without-chunking-and-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-in-chunks-of-10-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-in-chunks-of-10-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-10-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-10-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-10-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-10-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-in-chunks-of-50-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-in-chunks-of-50-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-50-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-50-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-50-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-50-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-in-chunks-of-100-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-in-chunks-of-100-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-100-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-100-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-100-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-100-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-in-chunks-of-250-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-in-chunks-of-250-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-250-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-250-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-250-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-250-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-in-chunks-of-500-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-in-chunks-of-500-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-500-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-500-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-500-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-500-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-in-chunks-of-1000-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-in-chunks-of-1000-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-1000-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-1000-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-in-chunks-of-1000-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-in-chunks-of-1000-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-without-chunking-and-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-summaries-without-chunking-and-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-without-chunking-and-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-without-chunking-and-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-summaries-without-chunking-and-without-any-related-data-using-lazy.php "$1"
php ./benchmark-scenarios/leanorm-fetch-all-summaries-without-chunking-and-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-without-chunking-and-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-summaries-without-chunking-and-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-in-chunks-of-10-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-in-chunks-of-10-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-10-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-10-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-10-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-10-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-in-chunks-of-50-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-in-chunks-of-50-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-50-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-50-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-50-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-50-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-in-chunks-of-100-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-in-chunks-of-100-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-100-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-100-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-100-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-100-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-in-chunks-of-250-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-in-chunks-of-250-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-250-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-250-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-250-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-250-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-in-chunks-of-500-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-in-chunks-of-500-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-500-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-500-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-500-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-500-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-in-chunks-of-1000-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-in-chunks-of-1000-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-1000-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-1000-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-in-chunks-of-1000-without-any-related-data-using-lazy.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-in-chunks-of-1000-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-without-chunking-and-without-any-related-data-using-fetchRecords.php "$1"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-tags-without-chunking-and-without-any-related-data-using-fetchRecordSet.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-without-chunking-and-without-any-related-data-using-chunk.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-without-chunking-and-without-any-related-data-using-get.php "$1"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-tags-without-chunking-and-without-any-related-data-using-lazy.php "$1"
php ./benchmark-scenarios/leanorm-fetch-all-tags-without-chunking-and-without-any-related-data-using-fetchRecordsIntoArray.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-without-chunking-and-without-any-related-data-using-fetchRecordsIntoCollection.php "$1"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-tags-without-chunking-and-without-any-related-data-using-fetchRowsIntoArray.php "$1"
sleep 2
