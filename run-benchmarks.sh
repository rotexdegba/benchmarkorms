#!/bin/bash
date_now=$(date)

php ./benchmark-scenarios/welcome.php "$date_now"
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-fetchRecords.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-fetchRecordSet.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-chunk.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-get.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-lazy.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-fetchRecordsIntoCollection.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-10-without-any-related-data-using-fetchRowsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-fetchRecords.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-fetchRecordSet.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-chunk.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-get.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-lazy.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-fetchRecordsIntoCollection.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-50-without-any-related-data-using-fetchRowsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-fetchRecords.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-fetchRecordSet.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-chunk.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-get.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-lazy.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-fetchRecordsIntoCollection.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-100-without-any-related-data-using-fetchRowsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-fetchRecords.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-fetchRecordSet.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-chunk.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-get.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-lazy.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-fetchRecordsIntoCollection.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-250-without-any-related-data-using-fetchRowsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-fetchRecords.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-fetchRecordSet.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-chunk.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-get.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-lazy.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-fetchRecordsIntoCollection.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-500-without-any-related-data-using-fetchRowsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-fetchRecords.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-fetchRecordSet.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-chunk.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-get.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-lazy.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-fetchRecordsIntoCollection.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-in-chunks-of-1000-without-any-related-data-using-fetchRowsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-without-chunking-and-without-any-related-data-using-fetchRecords.php "$date_now"
sleep 2
php ./benchmark-scenarios/atlas-fetch-all-authors-without-chunking-and-without-any-related-data-using-fetchRecordSet.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-without-chunking-and-without-any-related-data-using-chunk.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-without-chunking-and-without-any-related-data-using-get.php "$date_now"
sleep 2
php ./benchmark-scenarios/eloquent-fetch-all-authors-without-chunking-and-without-any-related-data-using-lazy.php "$date_now"
php ./benchmark-scenarios/leanorm-fetch-all-authors-without-chunking-and-without-any-related-data-using-fetchRecordsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-without-chunking-and-without-any-related-data-using-fetchRecordsIntoCollection.php "$date_now"
sleep 2
php ./benchmark-scenarios/leanorm-fetch-all-authors-without-chunking-and-without-any-related-data-using-fetchRowsIntoArray.php "$date_now"
sleep 2
php ./benchmark-scenarios/goodbye.php "$date_now"
