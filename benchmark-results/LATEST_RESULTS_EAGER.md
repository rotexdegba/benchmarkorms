# Latest Benchmark Results for Fetching Data from tables without Related Data

**Benchmarks were run on PHP Version:** 7.4.33

**Operating System:** Linux - CentOS - 7.9.2009 (Core) 

**Database:** mysql - 8.0.32

2023-03-31 12:59:13



orm_vendor           | short_desc                                                                                          | strategy                   | chunk_size      | execution_duration | memory_used
-------------------- | --------------------------------------------------------------------------------------------------- | -------------------------- | --------------- | ------------------ | -----------
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordSet             | 10              | 164.407s           | 152.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecords               | 10              | 161.488s           | 152.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordSet             | 100             | 36.347s            | 154.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecords               | 100             | 36.531s            | 154.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordSet             | 1000            | 173.496s           | 156.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecords               | 1000            | 256.276s           | 156.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordSet             | 250             | 57.446s            | 154.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecords               | 250             | 85.531s            | 154.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordSet             | 50              | 54.487s            | 152.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecords               | 50              | 44.725s            | 152.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordSet             | 500             | 101.528s           | 154.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecords               | 500             | 113.901s           | 154.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordSet             | No limit clause | 6949.489s          | 224.00Mb   
Atlas - 3.1.1.0      | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecords               | No limit clause | 5430.397s          | 224.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordSet             | 10              | 118.268s           | 128.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecords               | 10              | 102.289s           | 128.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordSet             | 100             | 27.338s            | 130.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecords               | 100             | 28.378s            | 130.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordSet             | 1000            | 131.690s           | 130.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecords               | 1000            | 128.583s           | 130.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordSet             | 250             | 43.338s            | 128.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecords               | 250             | 41.489s            | 128.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordSet             | 50              | 30.975s            | 128.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecords               | 50              | 31.019s            | 128.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordSet             | 500             | 71.066s            | 130.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecords               | 500             | 69.768s            | 130.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordSet             | No limit clause | 1271.010s          | 210.00Mb   
Atlas - 3.1.1.0      | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecords               | No limit clause | 1253.702s          | 210.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordSet             | 10              | 43.905s            | 120.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecords               | 10              | 48.459s            | 120.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordSet             | 100             | 20.337s            | 120.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecords               | 100             | 20.269s            | 118.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordSet             | 1000            | 139.431s           | 122.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecords               | 1000            | 129.810s           | 122.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordSet             | 250             | 38.518s            | 120.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecords               | 250             | 37.126s            | 120.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordSet             | 50              | 18.761s            | 118.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecords               | 50              | 17.192s            | 118.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordSet             | 500             | 68.077s            | 120.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecords               | 500             | 69.226s            | 120.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordSet             | No limit clause | 6530.963s          | 206.00Mb   
Atlas - 3.1.1.0      | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecords               | No limit clause | 6573.546s          | 206.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | chunk                      | 10              | 150.809s           | 234.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | get                        | 10              | 145.877s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | lazy                       | 10              | 297.401s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | chunk                      | 100             | 22.097s            | 230.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | get                        | 100             | 25.387s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | lazy                       | 100             | 41.468s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | chunk                      | 1000            | 10.999s            | 228.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | get                        | 1000            | 10.733s            | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | lazy                       | 1000            | 17.116s            | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | chunk                      | 250             | 14.350s            | 230.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | get                        | 250             | 16.544s            | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | lazy                       | 250             | 27.173s            | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | chunk                      | 50              | 35.682s            | 232.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | get                        | 50              | 41.043s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | lazy                       | 50              | 72.322s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | chunk                      | 500             | 11.636s            | 230.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | get                        | 500             | 11.532s            | 8.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | lazy                       | 500             | 20.896s            | 8.00Mb     
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | chunk                      | No limit clause | 10.615s            | 228.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | get                        | No limit clause | 7.211s             | 218.00Mb   
Eloquent - 8.83.27.0 | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | lazy                       | No limit clause | 17.838s            | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | chunk                      | 10              | 109.071s           | 212.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | get                        | 10              | 119.970s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | lazy                       | 10              | 216.561s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | chunk                      | 100             | 24.454s            | 210.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | get                        | 100             | 23.577s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | lazy                       | 100             | 43.855s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | chunk                      | 1000            | 15.994s            | 206.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | get                        | 1000            | 15.516s            | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | lazy                       | 1000            | 33.209s            | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | chunk                      | 250             | 17.301s            | 210.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | get                        | 250             | 20.026s            | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | lazy                       | 250             | 31.083s            | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | chunk                      | 50              | 32.864s            | 208.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | get                        | 50              | 31.705s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | lazy                       | 50              | 65.212s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | chunk                      | 500             | 18.393s            | 208.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | get                        | 500             | 24.896s            | 8.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | lazy                       | 500             | 44.924s            | 8.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | chunk                      | No limit clause | 18.526s            | 206.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | get                        | No limit clause | 16.682s            | 186.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | lazy                       | No limit clause | 36.670s            | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | chunk                      | 10              | 1073.643s          | 1.01Gb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | get                        | 10              | 930.880s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | lazy                       | 10              | 1880.018s          | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | chunk                      | 100             | 156.746s           | 1.01Gb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | get                        | 100             | 158.734s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | lazy                       | 100             | 295.446s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | chunk                      | 1000            | 74.151s            | 1010.00Mb  
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | get                        | 1000            | 71.058s            | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | lazy                       | 1000            | 131.230s           | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | chunk                      | 250             | 107.659s           | 1.01Gb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | get                        | 250             | 111.007s           | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | lazy                       | 250             | 193.295s           | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | chunk                      | 50              | 247.180s           | 1.01Gb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | get                        | 50              | 238.901s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | lazy                       | 50              | 553.975s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | chunk                      | 500             | 99.011s            | 1014.00Mb  
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | get                        | 500             | 90.532s            | 8.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | lazy                       | 500             | 191.548s           | 8.00Mb     
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | chunk                      | No limit clause | 88.573s            | 1012.00Mb  
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | get                        | No limit clause | 38.323s            | 476.00Mb   
Eloquent - 8.83.27.0 | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | lazy                       | No limit clause | 149.756s           | 12.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | chunk                      | 10              | 60.322s            | 154.00Mb   
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | get                        | 10              | 53.374s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | lazy                       | 10              | 100.619s           | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | chunk                      | 100             | 12.114s            | 154.00Mb   
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | get                        | 100             | 11.695s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | lazy                       | 100             | 23.501s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | chunk                      | 1000            | 7.981s             | 152.00Mb   
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | get                        | 1000            | 7.427s             | 10.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | lazy                       | 1000            | 13.553s            | 10.00Mb    
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | chunk                      | 250             | 9.738s             | 154.00Mb   
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | get                        | 250             | 15.201s            | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | lazy                       | 250             | 19.364s            | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | chunk                      | 50              | 17.837s            | 156.00Mb   
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | get                        | 50              | 20.627s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | lazy                       | 50              | 35.633s            | 4.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | chunk                      | 500             | 9.608s             | 152.00Mb   
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | get                        | 500             | 9.778s             | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | lazy                       | 500             | 16.755s            | 6.00Mb     
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | chunk                      | No limit clause | 8.824s             | 154.00Mb   
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | get                        | No limit clause | 8.607s             | 166.00Mb   
Eloquent - 8.83.27.0 | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | lazy                       | No limit clause | 22.425s            | 10.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoArray      | 10              | 417.555s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoCollection | 10              | 384.245s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRowsIntoArray         | 10              | 276.724s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoArray      | 100             | 31.282s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoCollection | 100             | 31.289s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRowsIntoArray         | 100             | 28.139s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoArray      | 1000            | 6.967s             | 14.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoCollection | 1000            | 7.587s             | 14.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRowsIntoArray         | 1000            | 4.169s             | 10.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoArray      | 250             | 16.382s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoCollection | 250             | 15.791s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRowsIntoArray         | 250             | 12.568s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoArray      | 50              | 58.306s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoCollection | 50              | 59.208s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRowsIntoArray         | 50              | 56.969s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoArray      | 500             | 10.559s            | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoCollection | 500             | 9.634s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRowsIntoArray         | 500             | 7.009s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoArray      | No limit clause | 5.932s             | 318.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRecordsIntoCollection | No limit clause | 6.091s             | 318.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (comments, 59700 records fetched) with (post) Belongs to and / or Has one data         | fetchRowsIntoArray         | No limit clause | 2.458s             | 200.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoArray      | 10              | 223.121s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoCollection | 10              | 218.693s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRowsIntoArray         | 10              | 216.849s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoArray      | 100             | 28.705s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoCollection | 100             | 28.454s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRowsIntoArray         | 100             | 22.346s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoArray      | 1000            | 7.998s             | 12.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoCollection | 1000            | 7.885s             | 12.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRowsIntoArray         | 1000            | 3.745s             | 10.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoArray      | 250             | 13.184s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoCollection | 250             | 14.872s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRowsIntoArray         | 250             | 10.082s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoArray      | 50              | 46.066s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoCollection | 50              | 48.661s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRowsIntoArray         | 50              | 45.729s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoArray      | 500             | 10.513s            | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoCollection | 500             | 9.537s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRowsIntoArray         | 500             | 6.401s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoArray      | No limit clause | 7.882s             | 268.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRecordsIntoCollection | No limit clause | 8.007s             | 268.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts, 49950 records fetched) with (author, summary) Belongs to and / or Has one data | fetchRowsIntoArray         | No limit clause | 4.123s             | 174.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoArray      | 10              | 1778.596s          | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoCollection | 10              | 1992.844s          | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRowsIntoArray         | 10              | 882.205s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoArray      | 100             | 112.002s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoCollection | 100             | 111.422s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRowsIntoArray         | 100             | 96.867s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoArray      | 1000            | 33.873s            | 12.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoCollection | 1000            | 34.155s            | 12.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRowsIntoArray         | 1000            | 18.379s            | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoArray      | 250             | 56.877s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoCollection | 250             | 58.853s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRowsIntoArray         | 250             | 40.076s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoArray      | 50              | 203.861s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoCollection | 50              | 195.379s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRowsIntoArray         | 50              | 180.131s           | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoArray      | 500             | 41.885s            | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoCollection | 500             | 40.861s            | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRowsIntoArray         | 500             | 23.808s            | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoArray      | No limit clause | 27.074s            | 896.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRecordsIntoCollection | No limit clause | 27.690s            | 896.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (posts_tags, 249500 records fetched) with (post, tag) Belongs to and / or Has one data | fetchRowsIntoArray         | No limit clause | 6.417s             | 352.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoArray      | 10              | 46.498s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoCollection | 10              | 41.364s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRowsIntoArray         | 10              | 40.025s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoArray      | 100             | 6.870s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoCollection | 100             | 7.127s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRowsIntoArray         | 100             | 5.865s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoArray      | 1000            | 3.656s             | 10.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoCollection | 1000            | 3.523s             | 10.00Mb    
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRowsIntoArray         | 1000            | 1.272s             | 8.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoArray      | 250             | 4.497s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoCollection | 250             | 4.958s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRowsIntoArray         | 250             | 2.294s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoArray      | 50              | 10.446s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoCollection | 50              | 14.963s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRowsIntoArray         | 50              | 10.112s            | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoArray      | 500             | 3.794s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoCollection | 500             | 3.939s             | 6.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRowsIntoArray         | 500             | 1.528s             | 4.00Mb     
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoArray      | No limit clause | 5.611s             | 220.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRecordsIntoCollection | No limit clause | 6.126s             | 220.00Mb   
LeanOrm - 2.2.4.0    | Fetching all (summaries, 49950 records fetched) with (post) Belongs to and / or Has one data        | fetchRowsIntoArray         | No limit clause | 3.709s             | 152.00Mb   
