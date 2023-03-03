# Latest Benchmark Results for Fetching Data from tables without Related Data

**Benchmarks were run on PHP Version:** 7.4.33

**Operating System:** Linux - CentOS - 7.9.2009 (Core) 

**Database:** mysql - 8.0.29

**Date Generated:** 2023-03-03 11:45:42



orm_vendor           | short_desc                                                             | strategy                   | chunk_size      | execution_duration | memory_used
-------------------- | ---------------------------------------------------------------------- | -------------------------- | --------------- | ------------------ | -----------
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecords               | 10              | 2.788s             | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordSet             | 10              | 2.857s             | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | chunk                      | 10              | 3.580s             | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | get                        | 10              | 3.598s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | lazy                       | 10              | 697ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoArray      | 10              | 10.650s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoCollection | 10              | 10.361s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRowsIntoArray         | 10              | 11.379s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecords               | 50              | 868ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordSet             | 50              | 874ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | chunk                      | 50              | 1.157s             | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | get                        | 50              | 1.180s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | lazy                       | 50              | 1.497s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoArray      | 50              | 3.690s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoCollection | 50              | 2.343s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRowsIntoArray         | 50              | 3.048s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecords               | 100             | 618ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordSet             | 100             | 869ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | chunk                      | 100             | 1.427s             | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | get                        | 100             | 1.102s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | lazy                       | 100             | 809ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoArray      | 100             | 1.308s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoCollection | 100             | 1.335s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRowsIntoArray         | 100             | 1.108s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecords               | 250             | 402ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordSet             | 250             | 512ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | chunk                      | 250             | 597ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | get                        | 250             | 564ms              | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | lazy                       | 250             | 799ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoArray      | 250             | 649ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoCollection | 250             | 690ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRowsIntoArray         | 250             | 552ms              | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecords               | 500             | 350ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordSet             | 500             | 408ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | chunk                      | 500             | 517ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | get                        | 500             | 530ms              | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | lazy                       | 500             | 736ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoArray      | 500             | 497ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoCollection | 500             | 773ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRowsIntoArray         | 500             | 278ms              | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecords               | 1000            | 290ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordSet             | 1000            | 313ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | chunk                      | 1000            | 650ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | get                        | 1000            | 440ms              | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | lazy                       | 1000            | 786ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoArray      | 1000            | 319ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoCollection | 1000            | 385ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRowsIntoArray         | 1000            | 168ms              | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecords               | No limit clause | 285ms              | 16.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordSet             | No limit clause | 268ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | chunk                      | No limit clause | 464ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | get                        | No limit clause | 373ms              | 20.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10000 records fetched) with no related data     | lazy                       | No limit clause | 727ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoArray      | No limit clause | 172ms              | 18.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRecordsIntoCollection | No limit clause | 175ms              | 18.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (authors, 10000 records fetched) with no related data     | fetchRowsIntoArray         | No limit clause | 57ms               | 10.00Mb    
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecords               | 10              | 168.948s           | 103.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordSet             | 10              | 170.703s           | 103.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | chunk                      | 10              | 177.234s           | 118.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | get                        | 10              | 178.435s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | lazy                       | 10              | 7.676s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoArray      | 10              | 231.394s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoCollection | 10              | 224.539s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRowsIntoArray         | 10              | 246.895s           | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecords               | 50              | 34.179s            | 103.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordSet             | 50              | 35.222s            | 103.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | chunk                      | 50              | 35.896s            | 118.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | get                        | 50              | 38.541s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | lazy                       | 50              | 8.172s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoArray      | 50              | 50.937s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoCollection | 50              | 47.801s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRowsIntoArray         | 50              | 43.220s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecords               | 100             | 19.209s            | 105.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordSet             | 100             | 18.821s            | 105.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | chunk                      | 100             | 19.366s            | 116.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | get                        | 100             | 19.463s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | lazy                       | 100             | 7.809s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoArray      | 100             | 22.560s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoCollection | 100             | 24.514s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRowsIntoArray         | 100             | 21.459s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecords               | 250             | 8.844s             | 103.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordSet             | 250             | 9.107s             | 103.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | chunk                      | 250             | 9.330s             | 116.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | get                        | 250             | 10.026s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | lazy                       | 250             | 11.038s            | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoArray      | 250             | 16.686s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoCollection | 250             | 12.702s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRowsIntoArray         | 250             | 11.736s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecords               | 500             | 7.471s             | 103.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordSet             | 500             | 9.717s             | 103.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | chunk                      | 500             | 7.308s             | 116.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | get                        | 500             | 5.974s             | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | lazy                       | 500             | 7.842s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoArray      | 500             | 5.820s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoCollection | 500             | 5.842s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRowsIntoArray         | 500             | 5.739s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecords               | 1000            | 3.705s             | 105.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordSet             | 1000            | 3.786s             | 105.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | chunk                      | 1000            | 4.041s             | 116.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | get                        | 1000            | 3.925s             | 8.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | lazy                       | 1000            | 7.212s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoArray      | 1000            | 3.766s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoCollection | 1000            | 3.675s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRowsIntoArray         | 1000            | 2.695s             | 6.00Mb     
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecords               | No limit clause | 2.273s             | 165.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordSet             | No limit clause | 2.501s             | 165.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | chunk                      | No limit clause | 4.520s             | 116.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | get                        | No limit clause | 2.627s             | 152.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with no related data    | lazy                       | No limit clause | 7.772s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoArray      | No limit clause | 1.686s             | 206.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRecordsIntoCollection | No limit clause | 1.643s             | 206.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with no related data    | fetchRowsIntoArray         | No limit clause | 479ms              | 146.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecords               | 10              | 104.449s           | 69.00Mb    
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordSet             | 10              | 106.698s           | 69.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | chunk                      | 10              | 108.503s           | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | get                        | 10              | 112.275s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | lazy                       | 10              | 5.682s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoArray      | 10              | 349.584s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoCollection | 10              | 331.480s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRowsIntoArray         | 10              | 324.444s           | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecords               | 50              | 22.771s            | 69.00Mb    
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordSet             | 50              | 26.533s            | 69.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | chunk                      | 50              | 23.682s            | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | get                        | 50              | 24.123s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | lazy                       | 50              | 5.442s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoArray      | 50              | 67.447s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoCollection | 50              | 69.003s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRowsIntoArray         | 50              | 65.759s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecords               | 100             | 12.375s            | 69.00Mb    
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordSet             | 100             | 12.354s            | 69.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | chunk                      | 100             | 13.018s            | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | get                        | 100             | 12.923s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | lazy                       | 100             | 5.392s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoArray      | 100             | 34.182s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoCollection | 100             | 35.103s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRowsIntoArray         | 100             | 33.369s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecords               | 250             | 6.058s             | 69.00Mb    
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordSet             | 250             | 5.921s             | 69.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | chunk                      | 250             | 6.394s             | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | get                        | 250             | 6.410s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | lazy                       | 250             | 6.153s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoArray      | 250             | 15.347s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoCollection | 250             | 14.626s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRowsIntoArray         | 250             | 13.816s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecords               | 500             | 3.842s             | 69.00Mb    
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordSet             | 500             | 3.917s             | 69.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | chunk                      | 500             | 4.313s             | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | get                        | 500             | 4.197s             | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | lazy                       | 500             | 5.404s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoArray      | 500             | 8.083s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoCollection | 500             | 7.810s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRowsIntoArray         | 500             | 7.863s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecords               | 1000            | 2.621s             | 71.00Mb    
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordSet             | 1000            | 2.845s             | 71.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | chunk                      | 1000            | 3.092s             | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | get                        | 1000            | 3.102s             | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | lazy                       | 1000            | 5.486s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoArray      | 1000            | 4.701s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoCollection | 1000            | 4.683s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRowsIntoArray         | 1000            | 3.761s             | 6.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecords               | No limit clause | 1.743s             | 117.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordSet             | No limit clause | 1.717s             | 117.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | chunk                      | No limit clause | 3.081s             | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | get                        | No limit clause | 1.878s             | 100.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with no related data       | lazy                       | No limit clause | 5.493s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoArray      | No limit clause | 1.257s             | 120.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRecordsIntoCollection | No limit clause | 1.237s             | 120.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with no related data       | fetchRowsIntoArray         | No limit clause | 406ms              | 102.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecords               | 10              | 1016.473s          | 230.40Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordSet             | 10              | 1011.950s          | 230.40Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | chunk                      | 10              | 1102.195s          | 276.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | get                        | 10              | 1108.094s          | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | lazy                       | 10              | 34.829s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoArray      | 10              | 1432.276s          | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoCollection | 10              | 1410.770s          | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRowsIntoArray         | 10              | 1407.648s          | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecords               | 50              | 206.619s           | 230.36Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordSet             | 50              | 204.583s           | 230.35Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | chunk                      | 50              | 214.993s           | 274.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | get                        | 50              | 222.257s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | lazy                       | 50              | 34.508s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoArray      | 50              | 285.389s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoCollection | 50              | 282.927s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRowsIntoArray         | 50              | 284.163s           | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecords               | 100             | 108.120s           | 230.31Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordSet             | 100             | 107.371s           | 230.31Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | chunk                      | 100             | 111.284s           | 276.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | get                        | 100             | 113.507s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | lazy                       | 100             | 34.620s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoArray      | 100             | 143.776s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoCollection | 100             | 150.112s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRowsIntoArray         | 100             | 139.155s           | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecords               | 250             | 46.938s            | 230.15Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordSet             | 250             | 47.462s            | 230.15Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | chunk                      | 250             | 51.994s            | 276.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | get                        | 250             | 49.358s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | lazy                       | 250             | 34.208s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoArray      | 250             | 60.386s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoCollection | 250             | 61.483s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRowsIntoArray         | 250             | 56.377s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecords               | 500             | 26.124s            | 229.89Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordSet             | 500             | 26.784s            | 229.89Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | chunk                      | 500             | 29.591s            | 278.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | get                        | 500             | 29.454s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | lazy                       | 500             | 34.638s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoArray      | 500             | 31.359s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoCollection | 500             | 33.130s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRowsIntoArray         | 500             | 28.508s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecords               | 1000            | 18.151s            | 231.32Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordSet             | 1000            | 18.289s            | 231.32Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | chunk                      | 1000            | 18.944s            | 278.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | get                        | 1000            | 18.379s            | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | lazy                       | 1000            | 34.008s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoArray      | 1000            | 17.989s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoCollection | 1000            | 17.976s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRowsIntoArray         | 1000            | 14.535s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecords               | No limit clause | 6.892s             | 317.62Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordSet             | No limit clause | 7.874s             | 317.62Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | chunk                      | No limit clause | 18.719s            | 278.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | get                        | No limit clause | 8.581s             | 362.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with no related data | lazy                       | No limit clause | 35.202s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoArray      | No limit clause | 4.613s             | 406.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRecordsIntoCollection | No limit clause | 4.712s             | 406.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with no related data | fetchRowsIntoArray         | No limit clause | 693ms              | 200.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecords               | 10              | 50.115s            | 51.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordSet             | 10              | 50.645s            | 51.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | chunk                      | 10              | 54.208s            | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | get                        | 10              | 54.964s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | lazy                       | 10              | 4.031s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoArray      | 10              | 90.756s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoCollection | 10              | 87.397s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRowsIntoArray         | 10              | 90.601s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecords               | 50              | 11.239s            | 51.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordSet             | 50              | 11.017s            | 51.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | chunk                      | 50              | 12.714s            | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | get                        | 50              | 12.437s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | lazy                       | 50              | 3.945s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoArray      | 50              | 18.445s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoCollection | 50              | 22.365s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRowsIntoArray         | 50              | 19.701s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecords               | 100             | 6.259s             | 51.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordSet             | 100             | 6.329s             | 51.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | chunk                      | 100             | 7.634s             | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | get                        | 100             | 7.213s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | lazy                       | 100             | 3.871s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoArray      | 100             | 13.459s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoCollection | 100             | 10.744s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRowsIntoArray         | 100             | 9.735s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecords               | 250             | 3.456s             | 51.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordSet             | 250             | 3.454s             | 51.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | chunk                      | 250             | 4.000s             | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | get                        | 250             | 3.996s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | lazy                       | 250             | 4.093s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoArray      | 250             | 4.652s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoCollection | 250             | 4.464s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRowsIntoArray         | 250             | 3.625s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecords               | 500             | 2.375s             | 51.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordSet             | 500             | 2.382s             | 51.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | chunk                      | 500             | 2.878s             | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | get                        | 500             | 2.786s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | lazy                       | 500             | 3.906s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoArray      | 500             | 2.760s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoCollection | 500             | 2.797s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRowsIntoArray         | 500             | 1.942s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecords               | 1000            | 1.874s             | 51.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordSet             | 1000            | 1.962s             | 51.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | chunk                      | 1000            | 2.894s             | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | get                        | 1000            | 2.233s             | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | lazy                       | 1000            | 4.037s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoArray      | 1000            | 1.830s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoCollection | 1000            | 1.799s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRowsIntoArray         | 1000            | 1.054s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecords               | No limit clause | 1.395s             | 69.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordSet             | No limit clause | 1.495s             | 69.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | chunk                      | No limit clause | 2.325s             | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | get                        | No limit clause | 1.672s             | 78.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with no related data   | lazy                       | No limit clause | 4.058s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoArray      | No limit clause | 897ms              | 86.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRecordsIntoCollection | No limit clause | 918ms              | 86.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with no related data   | fetchRowsIntoArray         | No limit clause | 155ms              | 46.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecords               | 10              | 2.898s             | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordSet             | 10              | 2.870s             | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | chunk                      | 10              | 3.811s             | 14.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | get                        | 10              | 3.814s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | lazy                       | 10              | 711ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoArray      | 10              | 23.926s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoCollection | 10              | 23.303s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRowsIntoArray         | 10              | 22.896s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecords               | 50              | 798ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordSet             | 50              | 857ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | chunk                      | 50              | 1.093s             | 14.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | get                        | 50              | 1.170s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | lazy                       | 50              | 697ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoArray      | 50              | 6.488s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoCollection | 50              | 5.523s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRowsIntoArray         | 50              | 5.140s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecords               | 100             | 549ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordSet             | 100             | 548ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | chunk                      | 100             | 812ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | get                        | 100             | 749ms              | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | lazy                       | 100             | 776ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoArray      | 100             | 2.575s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoCollection | 100             | 2.512s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRowsIntoArray         | 100             | 2.459s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecords               | 250             | 408ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordSet             | 250             | 469ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | chunk                      | 250             | 560ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | get                        | 250             | 544ms              | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | lazy                       | 250             | 752ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoArray      | 250             | 1.160s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoCollection | 250             | 1.257s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRowsIntoArray         | 250             | 1.019s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecords               | 500             | 352ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordSet             | 500             | 352ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | chunk                      | 500             | 456ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | get                        | 500             | 497ms              | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | lazy                       | 500             | 763ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoArray      | 500             | 666ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoCollection | 500             | 711ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRowsIntoArray         | 500             | 552ms              | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecords               | 1000            | 318ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordSet             | 1000            | 323ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | chunk                      | 1000            | 421ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | get                        | 1000            | 407ms              | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | lazy                       | 1000            | 704ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoArray      | 1000            | 436ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoCollection | 1000            | 720ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRowsIntoArray         | 1000            | 356ms              | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecords               | No limit clause | 258ms              | 16.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordSet             | No limit clause | 266ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | chunk                      | No limit clause | 408ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | get                        | No limit clause | 377ms              | 20.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10000 records fetched) with no related data        | lazy                       | No limit clause | 710ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoArray      | No limit clause | 201ms              | 18.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRecordsIntoCollection | No limit clause | 236ms              | 18.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (tags, 10000 records fetched) with no related data        | fetchRowsIntoArray         | No limit clause | 64ms               | 10.00Mb    
