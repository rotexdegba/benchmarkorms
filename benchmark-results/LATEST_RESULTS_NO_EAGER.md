# Latest Benchmark Results for Fetching Data from tables without Related Data

**Benchmarks were run on PHP Version:** 7.4.33

**Operating System:** Linux - CentOS - 7.9.2009 (Core) 

**Database:** mysql - 8.0.29

2023-03-30 11:53:01



orm_vendor           | short_desc                                                              | strategy                   | chunk_size      | execution_duration | memory_used
-------------------- | ----------------------------------------------------------------------- | -------------------------- | --------------- | ------------------ | -----------
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | 10              | 2.772s             | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | 10              | 2.831s             | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | 10              | 3.910s             | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | 10              | 3.769s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | 10              | 7.997s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | 10              | 11.747s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | 10              | 11.088s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | 10              | 12.342s            | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | 50              | 786ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | 50              | 805ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | 50              | 1.192s             | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | 50              | 1.421s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | 50              | 2.041s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | 50              | 2.301s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | 50              | 2.344s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | 50              | 2.026s             | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | 100             | 545ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | 100             | 545ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | 100             | 716ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | 100             | 775ms              | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | 100             | 1.338s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | 100             | 1.203s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | 100             | 1.199s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | 100             | 1.025s             | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | 250             | 398ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | 250             | 384ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | 250             | 514ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | 250             | 527ms              | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | 250             | 881ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | 250             | 616ms              | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | 250             | 622ms              | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | 250             | 483ms              | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | 500             | 382ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | 500             | 365ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | 500             | 526ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | 500             | 534ms              | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | 500             | 813ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | 500             | 422ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | 500             | 412ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | 500             | 269ms              | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | 1000            | 315ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | 1000            | 322ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | 1000            | 454ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | 1000            | 634ms              | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | 1000            | 773ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | 1000            | 351ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | 1000            | 301ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | 1000            | 194ms              | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | No limit clause | 272ms              | 16.00Mb    
Atlas - 3.1.1.0      | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | No limit clause | 282ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | No limit clause | 462ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | No limit clause | 436ms              | 20.00Mb    
Eloquent - 8.83.27.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | No limit clause | 839ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | No limit clause | 247ms              | 18.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | No limit clause | 210ms              | 18.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | No limit clause | 51ms               | 10.00Mb    
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | 10              | 155.582s           | 103.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | 10              | 164.075s           | 103.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | 10              | 249.125s           | 118.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | 10              | 199.217s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | 10              | 418.306s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | 10              | 227.942s           | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | 10              | 219.096s           | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | 10              | 231.798s           | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | 50              | 34.334s            | 103.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | 50              | 36.026s            | 103.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | 50              | 35.941s            | 118.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | 50              | 38.899s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | 50              | 91.374s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | 50              | 58.499s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | 50              | 47.950s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | 50              | 63.265s            | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | 100             | 19.599s            | 105.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | 100             | 21.466s            | 105.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | 100             | 27.826s            | 116.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | 100             | 25.101s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | 100             | 39.450s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | 100             | 25.803s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | 100             | 22.805s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | 100             | 22.347s            | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | 250             | 8.872s             | 103.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | 250             | 9.038s             | 103.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | 250             | 9.781s             | 116.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | 250             | 10.094s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | 250             | 17.963s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | 250             | 9.827s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | 250             | 11.194s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | 250             | 11.235s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | 500             | 5.574s             | 103.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | 500             | 5.498s             | 103.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | 500             | 6.034s             | 116.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | 500             | 6.367s             | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | 500             | 11.798s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | 500             | 6.171s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | 500             | 5.867s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | 500             | 4.878s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | 1000            | 3.928s             | 105.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | 1000            | 3.671s             | 105.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | 1000            | 4.084s             | 116.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | 1000            | 4.180s             | 8.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | 1000            | 7.588s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | 1000            | 3.799s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | 1000            | 3.703s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | 1000            | 2.633s             | 6.00Mb     
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | No limit clause | 2.326s             | 165.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | No limit clause | 2.410s             | 165.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | No limit clause | 4.045s             | 116.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | No limit clause | 2.529s             | 152.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | No limit clause | 7.580s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | No limit clause | 1.669s             | 206.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | No limit clause | 1.774s             | 206.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | No limit clause | 757ms              | 146.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | 10              | 107.546s           | 69.00Mb    
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | 10              | 110.392s           | 69.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | 10              | 115.049s           | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | 10              | 127.920s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | 10              | 453.057s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | 10              | 460.204s           | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | 10              | 448.729s           | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | 10              | 426.479s           | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | 50              | 23.324s            | 69.00Mb    
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | 50              | 22.542s            | 69.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | 50              | 23.844s            | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | 50              | 24.191s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | 50              | 45.649s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | 50              | 70.427s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | 50              | 71.240s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | 50              | 69.038s            | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | 100             | 11.822s            | 69.00Mb    
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | 100             | 12.025s            | 69.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | 100             | 12.531s            | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | 100             | 12.397s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | 100             | 25.277s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | 100             | 36.971s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | 100             | 39.524s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | 100             | 45.517s            | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | 250             | 8.912s             | 69.00Mb    
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | 250             | 7.409s             | 69.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | 250             | 8.327s             | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | 250             | 7.815s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | 250             | 17.160s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | 250             | 15.128s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | 250             | 17.774s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | 250             | 17.158s            | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | 500             | 4.852s             | 69.00Mb    
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | 500             | 5.691s             | 69.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | 500             | 6.301s             | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | 500             | 5.591s             | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | 500             | 9.321s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | 500             | 9.614s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | 500             | 9.497s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | 500             | 7.788s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | 1000            | 2.682s             | 71.00Mb    
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | 1000            | 2.793s             | 71.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | 1000            | 3.029s             | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | 1000            | 2.947s             | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | 1000            | 5.449s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | 1000            | 5.475s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | 1000            | 4.478s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | 1000            | 4.455s             | 6.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | No limit clause | 2.179s             | 117.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | No limit clause | 2.034s             | 117.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | No limit clause | 3.213s             | 80.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | No limit clause | 1.994s             | 100.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | No limit clause | 6.359s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | No limit clause | 1.935s             | 120.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | No limit clause | 1.329s             | 120.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | No limit clause | 471ms              | 102.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | 10              | 1088.122s          | 230.40Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | 10              | 1137.615s          | 230.40Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | 10              | 1096.981s          | 276.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | 10              | 1121.295s          | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | 10              | 2067.890s          | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | 10              | 1399.822s          | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | 10              | 1376.693s          | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | 10              | 1399.429s          | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | 50              | 200.738s           | 230.36Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | 50              | 202.643s           | 230.35Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | 50              | 214.477s           | 274.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | 50              | 209.527s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | 50              | 411.268s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | 50              | 284.891s           | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | 50              | 276.097s           | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | 50              | 270.736s           | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | 100             | 101.368s           | 230.31Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | 100             | 107.249s           | 230.31Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | 100             | 115.165s           | 276.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | 100             | 107.806s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | 100             | 217.787s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | 100             | 145.515s           | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | 100             | 145.146s           | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | 100             | 143.643s           | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | 250             | 45.053s            | 230.15Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | 250             | 44.451s            | 230.15Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | 250             | 53.940s            | 276.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | 250             | 48.250s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | 250             | 94.894s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | 250             | 57.829s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | 250             | 59.868s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | 250             | 56.700s            | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | 500             | 25.486s            | 229.89Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | 500             | 27.154s            | 229.89Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | 500             | 28.562s            | 278.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | 500             | 27.639s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | 500             | 53.349s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | 500             | 31.141s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | 500             | 31.333s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | 500             | 26.661s            | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | 1000            | 16.128s            | 231.32Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | 1000            | 16.661s            | 231.32Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | 1000            | 18.797s            | 278.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | 1000            | 19.132s            | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | 1000            | 33.425s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | 1000            | 17.785s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | 1000            | 17.817s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | 1000            | 14.646s            | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | No limit clause | 7.098s             | 317.62Mb   
Atlas - 3.1.1.0      | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | No limit clause | 7.584s             | 317.62Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | No limit clause | 18.594s            | 278.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | No limit clause | 8.857s             | 362.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | No limit clause | 35.295s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | No limit clause | 4.718s             | 404.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | No limit clause | 4.937s             | 406.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | No limit clause | 681ms              | 200.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | 10              | 48.044s            | 51.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | 10              | 47.574s            | 51.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | 10              | 55.015s            | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | 10              | 54.157s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | 10              | 106.331s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | 10              | 90.824s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | 10              | 92.501s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | 10              | 88.178s            | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | 50              | 10.988s            | 51.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | 50              | 10.798s            | 51.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | 50              | 12.752s            | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | 50              | 12.425s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | 50              | 23.463s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | 50              | 18.787s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | 50              | 19.339s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | 50              | 17.301s            | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | 100             | 6.252s             | 51.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | 100             | 6.151s             | 51.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | 100             | 7.147s             | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | 100             | 7.066s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | 100             | 13.261s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | 100             | 9.848s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | 100             | 10.105s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | 100             | 9.170s             | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | 250             | 3.449s             | 51.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | 250             | 3.333s             | 51.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | 250             | 3.899s             | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | 250             | 3.876s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | 250             | 7.307s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | 250             | 4.599s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | 250             | 4.626s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | 250             | 3.553s             | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | 500             | 2.945s             | 51.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | 500             | 2.962s             | 51.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | 500             | 3.525s             | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | 500             | 2.818s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | 500             | 5.105s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | 500             | 2.647s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | 500             | 2.712s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | 500             | 1.981s             | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | 1000            | 1.941s             | 51.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | 1000            | 1.903s             | 51.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | 1000            | 2.437s             | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | 1000            | 2.189s             | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | 1000            | 3.932s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | 1000            | 1.763s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | 1000            | 1.818s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | 1000            | 1.107s             | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | No limit clause | 1.446s             | 71.00Mb    
Atlas - 3.1.1.0      | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | No limit clause | 1.502s             | 71.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | No limit clause | 2.331s             | 58.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | No limit clause | 1.765s             | 78.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | No limit clause | 3.957s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | No limit clause | 927ms              | 86.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | No limit clause | 925ms              | 86.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | No limit clause | 188ms              | 46.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | 10              | 2.899s             | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | 10              | 3.258s             | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | 10              | 3.871s             | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | 10              | 4.168s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | 10              | 7.624s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | 10              | 23.329s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | 10              | 23.576s            | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | 10              | 26.135s            | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | 50              | 823ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | 50              | 796ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | 50              | 1.144s             | 14.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | 50              | 1.100s             | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | 50              | 2.245s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | 50              | 5.229s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | 50              | 5.608s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | 50              | 4.707s             | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | 100             | 561ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | 100             | 566ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | 100             | 738ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | 100             | 765ms              | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | 100             | 1.371s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | 100             | 2.709s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | 100             | 2.694s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | 100             | 2.375s             | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | 250             | 377ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | 250             | 398ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | 250             | 549ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | 250             | 584ms              | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | 250             | 928ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | 250             | 1.177s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | 250             | 1.205s             | 2.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | 250             | 1.138s             | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | 500             | 330ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | 500             | 338ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | 500             | 461ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | 500             | 464ms              | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | 500             | 828ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | 500             | 728ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | 500             | 701ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | 500             | 532ms              | 2.00Mb     
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | 1000            | 314ms              | 12.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | 1000            | 316ms              | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | 1000            | 442ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | 1000            | 438ms              | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | 1000            | 769ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | 1000            | 552ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | 1000            | 593ms              | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | 1000            | 419ms              | 4.00Mb     
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | No limit clause | 280ms              | 16.00Mb    
Atlas - 3.1.1.0      | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | No limit clause | 272ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | No limit clause | 471ms              | 16.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | No limit clause | 402ms              | 20.00Mb    
Eloquent - 8.83.27.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | No limit clause | 716ms              | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | No limit clause | 214ms              | 18.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | No limit clause | 220ms              | 18.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | No limit clause | 70ms               | 10.00Mb    
