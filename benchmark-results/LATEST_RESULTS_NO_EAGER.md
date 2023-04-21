# Latest Benchmark Results for Fetching Data from tables without Related Data

**Benchmarks were run on PHP Version:** 8.1.17

**Operating System:** Linux - CentOS - 7.9.2009 (Core) 

**Database:** mysql - 8.0.28

2023-04-03 03:32:27



orm_vendor          | short_desc                                                              | strategy                   | chunk_size      | execution_duration | memory_used
------------------- | ----------------------------------------------------------------------- | -------------------------- | --------------- | ------------------ | -----------
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | 10              | 2.974s             | 10.00Mb    
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | 10              | 2.466s             | 10.00Mb    
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | 10              | 2.911s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | 10              | 2.986s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | 10              | 2.938s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | 10              | 2.130s             | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | 10              | 2.492s             | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | 10              | 1.509s             | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | 50              | 859ms              | 10.00Mb    
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | 50              | 785ms              | 10.00Mb    
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | 50              | 1.141s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | 50              | 816ms              | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | 50              | 959ms              | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | 50              | 686ms              | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | 50              | 534ms              | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | 50              | 398ms              | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | 100             | 501ms              | 10.00Mb    
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | 100             | 529ms              | 10.00Mb    
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | 100             | 759ms              | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | 100             | 947ms              | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | 100             | 1.236s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | 100             | 742ms              | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | 100             | 418ms              | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | 100             | 252ms              | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | 250             | 385ms              | 12.00Mb    
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | 250             | 457ms              | 12.00Mb    
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | 250             | 716ms              | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | 250             | 976ms              | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | 250             | 726ms              | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | 250             | 502ms              | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | 250             | 746ms              | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | 250             | 460ms              | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | 500             | 719ms              | 12.00Mb    
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | 500             | 667ms              | 12.00Mb    
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | 500             | 656ms              | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | 500             | 625ms              | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | 500             | 784ms              | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | 500             | 517ms              | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | 500             | 904ms              | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | 500             | 274ms              | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | 1000            | 975ms              | 12.00Mb    
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | 1000            | 716ms              | 12.00Mb    
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | 1000            | 1.097s             | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | 1000            | 906ms              | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | 1000            | 1.332s             | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | 1000            | 723ms              | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | 1000            | 465ms              | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | 1000            | 186ms              | 4.00Mb     
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecords               | No limit clause | 542ms              | 14.00Mb    
Atlas - 3.1.1.0     | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordSet             | No limit clause | 409ms              | 14.00Mb    
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | chunk                      | No limit clause | 677ms              | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | get                        | No limit clause | 611ms              | 20.00Mb    
Eloquent - 10.5.1.0 | Fetching all (authors, 10,000 records fetched) with no related data     | lazy                       | No limit clause | 681ms              | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoArray      | No limit clause | 335ms              | 18.00Mb    
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRecordsIntoCollection | No limit clause | 233ms              | 18.00Mb    
LeanOrm - 2.2.4.0   | Fetching all (authors, 10,000 records fetched) with no related data     | fetchRowsIntoArray         | No limit clause | 161ms              | 8.00Mb     
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | 10              | 159.785s           | 99.00Mb    
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | 10              | 113.151s           | 99.00Mb    
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | 10              | 133.404s           | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | 10              | 129.637s           | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | 10              | 124.555s           | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | 10              | 121.903s           | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | 10              | 113.820s           | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | 10              | 111.574s           | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | 50              | 27.485s            | 99.00Mb    
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | 50              | 23.937s            | 99.00Mb    
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | 50              | 24.871s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | 50              | 23.072s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | 50              | 23.129s            | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | 50              | 20.941s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | 50              | 22.524s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | 50              | 20.403s            | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | 100             | 12.540s            | 99.00Mb    
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | 100             | 12.467s            | 99.00Mb    
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | 100             | 13.376s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | 100             | 13.384s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | 100             | 13.509s            | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | 100             | 12.321s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | 100             | 11.651s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | 100             | 12.665s            | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | 250             | 6.761s             | 99.00Mb    
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | 250             | 6.700s             | 99.00Mb    
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | 250             | 7.525s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | 250             | 7.399s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | 250             | 7.462s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | 250             | 6.463s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | 250             | 6.090s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | 250             | 4.909s             | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | 500             | 4.768s             | 99.00Mb    
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | 500             | 4.725s             | 99.00Mb    
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | 500             | 5.396s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | 500             | 5.337s             | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | 500             | 5.507s             | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | 500             | 4.069s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | 500             | 4.080s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | 500             | 2.951s             | 4.00Mb     
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | 1000            | 3.547s             | 99.00Mb    
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | 1000            | 3.554s             | 99.00Mb    
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | 1000            | 4.095s             | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | 1000            | 4.050s             | 8.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | 1000            | 4.157s             | 8.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | 1000            | 2.889s             | 8.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | 1000            | 3.029s             | 8.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | 1000            | 1.818s             | 6.00Mb     
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecords               | No limit clause | 2.269s             | 109.00Mb   
Atlas - 3.1.1.0     | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordSet             | No limit clause | 2.338s             | 109.00Mb   
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | chunk                      | No limit clause | 4.122s             | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | get                        | No limit clause | 2.982s             | 154.00Mb   
Eloquent - 10.5.1.0 | Fetching all (comments, 59,700 records fetched) with no related data    | lazy                       | No limit clause | 4.130s             | 8.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoArray      | No limit clause | 1.621s             | 166.00Mb   
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRecordsIntoCollection | No limit clause | 1.678s             | 166.00Mb   
LeanOrm - 2.2.4.0   | Fetching all (comments, 59,700 records fetched) with no related data    | fetchRowsIntoArray         | No limit clause | 517ms              | 80.00Mb    
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | 10              | 62.145s            | 65.00Mb    
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | 10              | 66.866s            | 65.00Mb    
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | 10              | 67.723s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | 10              | 68.947s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | 10              | 68.180s            | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | 10              | 64.289s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | 10              | 66.193s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | 10              | 63.256s            | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | 50              | 13.976s            | 65.00Mb    
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | 50              | 14.452s            | 65.00Mb    
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | 50              | 14.863s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | 50              | 14.999s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | 50              | 15.042s            | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | 50              | 15.796s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | 50              | 14.550s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | 50              | 12.743s            | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | 100             | 8.303s             | 65.00Mb    
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | 100             | 8.116s             | 65.00Mb    
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | 100             | 8.687s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | 100             | 8.918s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | 100             | 8.820s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | 100             | 7.695s             | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | 100             | 7.732s             | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | 100             | 6.733s             | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | 250             | 4.265s             | 65.00Mb    
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | 250             | 4.334s             | 65.00Mb    
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | 250             | 5.368s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | 250             | 4.992s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | 250             | 4.961s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | 250             | 3.790s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | 250             | 3.991s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | 250             | 3.019s             | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | 500             | 3.043s             | 65.00Mb    
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | 500             | 3.007s             | 65.00Mb    
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | 500             | 3.649s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | 500             | 3.718s             | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | 500             | 3.724s             | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | 500             | 2.537s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | 500             | 2.539s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | 500             | 1.703s             | 4.00Mb     
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | 1000            | 2.335s             | 65.00Mb    
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | 1000            | 2.407s             | 65.00Mb    
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | 1000            | 3.072s             | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | 1000            | 2.944s             | 8.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | 1000            | 2.992s             | 8.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | 1000            | 1.854s             | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | 1000            | 1.785s             | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | 1000            | 1.007s             | 4.00Mb     
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecords               | No limit clause | 1.683s             | 85.00Mb    
Atlas - 3.1.1.0     | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordSet             | No limit clause | 1.883s             | 85.00Mb    
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | chunk                      | No limit clause | 2.898s             | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | get                        | No limit clause | 2.166s             | 112.00Mb   
Eloquent - 10.5.1.0 | Fetching all (posts, 49,950 records fetched) with no related data       | lazy                       | No limit clause | 2.958s             | 8.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoArray      | No limit clause | 1.113s             | 92.00Mb    
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRecordsIntoCollection | No limit clause | 1.145s             | 92.00Mb    
LeanOrm - 2.2.4.0   | Fetching all (posts, 49,950 records fetched) with no related data       | fetchRowsIntoArray         | No limit clause | 357ms              | 68.00Mb    
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | 10              | 610.554s           | 200.00Mb   
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | 10              | 642.289s           | 200.00Mb   
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | 10              | 643.203s           | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | 10              | 640.787s           | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | 10              | 639.209s           | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | 10              | 613.137s           | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | 10              | 622.033s           | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | 10              | 611.656s           | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | 50              | 127.838s           | 200.00Mb   
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | 50              | 136.333s           | 200.00Mb   
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | 50              | 137.944s           | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | 50              | 135.768s           | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | 50              | 136.561s           | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | 50              | 129.483s           | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | 50              | 127.678s           | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | 50              | 126.626s           | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | 100             | 69.501s            | 200.00Mb   
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | 100             | 70.081s            | 200.00Mb   
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | 100             | 74.593s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | 100             | 74.775s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | 100             | 73.144s            | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | 100             | 69.331s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | 100             | 69.604s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | 100             | 65.441s            | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | 250             | 30.737s            | 200.00Mb   
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | 250             | 33.996s            | 200.00Mb   
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | 250             | 38.796s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | 250             | 39.821s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | 250             | 35.046s            | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | 250             | 31.139s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | 250             | 28.192s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | 250             | 27.537s            | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | 500             | 19.731s            | 200.00Mb   
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | 500             | 19.474s            | 200.00Mb   
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | 500             | 23.726s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | 500             | 22.309s            | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | 500             | 27.205s            | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | 500             | 17.877s            | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | 500             | 16.800s            | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | 500             | 13.568s            | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | 1000            | 13.504s            | 200.00Mb   
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | 1000            | 14.338s            | 200.00Mb   
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | 1000            | 17.290s            | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | 1000            | 16.565s            | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | 1000            | 16.889s            | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | 1000            | 10.828s            | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | 1000            | 10.854s            | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | 1000            | 7.619s             | 4.00Mb     
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecords               | No limit clause | 7.672s             | 246.00Mb   
Atlas - 3.1.1.0     | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordSet             | No limit clause | 8.267s             | 246.00Mb   
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | chunk                      | No limit clause | 16.485s            | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | get                        | No limit clause | 11.286s            | 382.00Mb   
Eloquent - 10.5.1.0 | Fetching all (posts_tags, 249,500 records fetched) with no related data | lazy                       | No limit clause | 17.023s            | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoArray      | No limit clause | 4.645s             | 336.00Mb   
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRecordsIntoCollection | No limit clause | 5.133s             | 336.00Mb   
LeanOrm - 2.2.4.0   | Fetching all (posts_tags, 249,500 records fetched) with no related data | fetchRowsIntoArray         | No limit clause | 1.232s             | 116.00Mb   
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | 10              | 29.392s            | 43.00Mb    
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | 10              | 30.395s            | 43.00Mb    
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | 10              | 30.582s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | 10              | 31.630s            | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | 10              | 32.812s            | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | 10              | 28.591s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | 10              | 31.875s            | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | 10              | 26.715s            | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | 50              | 8.104s             | 43.00Mb    
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | 50              | 7.672s             | 43.00Mb    
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | 50              | 8.468s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | 50              | 8.456s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | 50              | 8.588s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | 50              | 7.077s             | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | 50              | 6.867s             | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | 50              | 6.205s             | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | 100             | 4.921s             | 43.00Mb    
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | 100             | 4.968s             | 43.00Mb    
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | 100             | 5.752s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | 100             | 5.855s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | 100             | 5.854s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | 100             | 4.384s             | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | 100             | 4.330s             | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | 100             | 3.556s             | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | 250             | 3.278s             | 43.00Mb    
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | 250             | 3.312s             | 43.00Mb    
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | 250             | 4.080s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | 250             | 4.121s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | 250             | 4.158s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | 250             | 2.706s             | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | 250             | 2.695s             | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | 250             | 1.737s             | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | 500             | 2.735s             | 43.00Mb    
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | 500             | 2.698s             | 43.00Mb    
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | 500             | 3.435s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | 500             | 4.006s             | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | 500             | 4.049s             | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | 500             | 2.397s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | 500             | 2.000s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | 500             | 1.019s             | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | 1000            | 2.172s             | 43.00Mb    
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | 1000            | 2.184s             | 43.00Mb    
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | 1000            | 2.792s             | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | 1000            | 2.877s             | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | 1000            | 3.035s             | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | 1000            | 1.566s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | 1000            | 1.653s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | 1000            | 645ms              | 4.00Mb     
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecords               | No limit clause | 1.598s             | 53.00Mb    
Atlas - 3.1.1.0     | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordSet             | No limit clause | 1.656s             | 53.00Mb    
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | chunk                      | No limit clause | 2.865s             | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | get                        | No limit clause | 2.285s             | 80.00Mb    
Eloquent - 10.5.1.0 | Fetching all (summaries, 49,950 records fetched) with no related data   | lazy                       | No limit clause | 2.907s             | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoArray      | No limit clause | 1.044s             | 70.00Mb    
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRecordsIntoCollection | No limit clause | 1.058s             | 70.00Mb    
LeanOrm - 2.2.4.0   | Fetching all (summaries, 49,950 records fetched) with no related data   | fetchRowsIntoArray         | No limit clause | 281ms              | 30.00Mb    
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | 10              | 2.299s             | 10.00Mb    
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | 10              | 2.410s             | 10.00Mb    
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | 10              | 3.059s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | 10              | 3.125s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | 10              | 3.117s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | 10              | 2.710s             | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | 10              | 2.233s             | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | 10              | 2.107s             | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | 50              | 842ms              | 10.00Mb    
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | 50              | 816ms              | 10.00Mb    
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | 50              | 1.175s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | 50              | 1.181s             | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | 50              | 1.487s             | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | 50              | 696ms              | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | 50              | 970ms              | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | 50              | 521ms              | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | 100             | 649ms              | 10.00Mb    
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | 100             | 622ms              | 10.00Mb    
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | 100             | 953ms              | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | 100             | 936ms              | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | 100             | 932ms              | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | 100             | 525ms              | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | 100             | 540ms              | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | 100             | 301ms              | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | 250             | 509ms              | 10.00Mb    
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | 250             | 481ms              | 10.00Mb    
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | 250             | 735ms              | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | 250             | 765ms              | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | 250             | 746ms              | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | 250             | 358ms              | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | 250             | 351ms              | 2.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | 250             | 176ms              | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | 500             | 445ms              | 12.00Mb    
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | 500             | 451ms              | 12.00Mb    
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | 500             | 683ms              | 4.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | 500             | 697ms              | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | 500             | 762ms              | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | 500             | 302ms              | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | 500             | 319ms              | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | 500             | 131ms              | 2.00Mb     
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | 1000            | 427ms              | 12.00Mb    
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | 1000            | 416ms              | 12.00Mb    
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | 1000            | 610ms              | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | 1000            | 575ms              | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | 1000            | 630ms              | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | 1000            | 297ms              | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | 1000            | 301ms              | 4.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | 1000            | 119ms              | 4.00Mb     
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecords               | No limit clause | 317ms              | 14.00Mb    
Atlas - 3.1.1.0     | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordSet             | No limit clause | 314ms              | 14.00Mb    
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | chunk                      | No limit clause | 586ms              | 6.00Mb     
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | get                        | No limit clause | 562ms              | 20.00Mb    
Eloquent - 10.5.1.0 | Fetching all (tags, 10,000 records fetched) with no related data        | lazy                       | No limit clause | 618ms              | 6.00Mb     
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoArray      | No limit clause | 238ms              | 16.00Mb    
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRecordsIntoCollection | No limit clause | 221ms              | 16.00Mb    
LeanOrm - 2.2.4.0   | Fetching all (tags, 10,000 records fetched) with no related data        | fetchRowsIntoArray         | No limit clause | 103ms              | 8.00Mb     
