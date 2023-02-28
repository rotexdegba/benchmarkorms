# PHP ORM Benchmarks

This repository is designed to benchmark the performance of various PHP ORM packages.

Below are the ORMs intended to be benchmarked:

- https://github.com/atlasphp/Atlas.Orm a.ka. Atlas [ALREADY SETUP]
- https://github.com/cakephp/orm a.ka. CakePHP ORM [NOT YET SETUP]
- https://github.com/cycle/orm a.ka. Cycle ORM [NOT YET SETUP]
- https://github.com/doctrine/orm/ a.ka. Doctrine ORM [NOT YET SETUP]
- https://github.com/illuminate/database a.ka. Eloquent [ALREADY SETUP]
- https://github.com/rotexsoft/leanorm a.ka. LeanORM [ALREADY SETUP]
- https://github.com/gabordemooij/redbean/blob/master/README.markdown a.ka. Redbean [NOT YET SETUP]

> Only ORM packages that are actively being maintained / have been 
updated in at least the last two years will be benchmarked. Orms that are not
actively being maintained will not be considered for benchmarking.

> This repo is initially designed to work with versions of the ORM packages
above that are compatible with PHP 7.4. Moving forward, there will be branches 
in this repo corresponding to default PHP versions in Ubuntu LTS releases, e.g. 
a branch named **php-74** (which shipped with Ubuntu 20.04 LTS), another branch
named **php-81** (which shipped with Ubuntu 22.04 LTS) etc. 

> Once the php branches are setup, the master branch will always contain code 
designed to run with the PHP version that ships with the latest ubntu LTS version 
at any particular moment. This will allow for being able to run benchmarks for the 
latest version of each ORM compatible with the PHP version the checked out branch 
corresponds with.


# Installation

- Clone this repository

- CD into the directory you cloned it to

- Install composer dependencies
>composer install

- Run migrations to setup the db (it will default to sqlite if you haven't modified **phinx.php**)
>./vendor/bin/phinx --verbose migrate

> The migrations take about 1 to 2 minutes to run.

Run the benchmarks

> ./run-benchmarks.sh


## Test Methodology

Benchmarking is done using the schema below:

![Blog Schema](blog-db.png)

- An author has many posts
- A post belongs to an author

- A post has many comments
- A comment belongs to a post

- A post has many posts_tags
- A post_tag belongs to a post

- A post has one summary
- A summary belongs to a post

- A post has many tags through posts_tags
- A tag has many posts through posts_tags

- A tag has many posts_tags
- A post_tag belongs to a tag

The tables are populated with the following amount of records when the migrations are successfully executed:

- authors will have 10,000 records
- comments will have 59,700 records
- posts will have 49,950 records
- posts_tags will have 249,500 records
- summaries will have 49,950 records
- tags will have 10,000 records

Each ORM being tested has been setup with the appropriate Model class files it 
needs to run and all the table relationships described above have been configured 
for each ORM.

The following scenarios will be run for each ORM:

- Fetch all the records from each of the tables in the schema above 
(without eager-loading any related data). No related data will be 
accessed in this scenario.
    - Fetch all records at once
    - Fetch records in chunks with offset & limit 
    - NOTE: Some ORMs like Eloquent & LeanORM may have multiple methods for loading this data. Each method will be used to load the data and labeled in the benchmark results.

- Fetch all the records from each of the tables in the schema above 
and also eager-load all related data.
    - Fetch all records at once
    - Fetch records in chunks with offset & limit 
    - NOTE: Some ORMs like Eloquent & LeanORM may have multiple methods for loading this data. Each method will be used to load the data and labeled in the benchmark results.












Display 
- OS Info
- PHP version
- version of each ORM installed
- PDO connection info
- Name of the test with all relevant parameter info for each test
- Time each test took to run 
- Memory usage for each test

Use shell script to run the php commands to execute the various tests

Each test should be in its own php file so that a fresh php process is created to 
execute each test so a close to accurate memory usage value is reported. 
If you lump all the tests together in a single php script, the memory usage 
from earlier operations might clobber or inflated memory usage values for later 
operations.


SQLite defines a maximum of 999 parameters to be passed as arguments to a 
statement, controlled by SQLITE_MAX_VARIABLE_NUMBER. Because of this, when
eager loading related data for a fetch (which would lead to queries like
where foreign_key IN (?,?, .... , ?, ?) being passed to PDO under the hood),
the query must not have more than 999 ? placeholders, implying that we have 
to limit the chunk of recordsets to retrieve in each iteration to <= 999. 
Which also means we can't fetch all the records from a table with more than
999 records at once, we have to specify a limit value to fetch the records
in chunks.
Mysql does not have this limitation & I am guessing postgres & sqlsvr do not
have this limitation.
