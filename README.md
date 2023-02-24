# ORMS to Benchmark
- https://github.com/atlasphp/Atlas.Orm
- https://www.doctrine-project.org/
- https://github.com/illuminate/database
- https://github.com/gabordemooij/redbean/blob/master/README.markdown
- https://github.com/rotexsoft/leanorm

Benchmarking is done using the schema below:

![Blog Schema](blog-db.png)

The tables are populated with the following amount of records when the migrations are successfully executed:

- authors will have 10,000 records
- comments will have 59,700 records
- posts will have 49,950 records
- posts_tags will have 249,500‬ records
- summaries will have 49,950 records
- tags will have 10,000 records

The migrations take about 1 to 2 minutes to run.

# Installation

- Clone this repository

- CD into the directory you cloned it to

- Install composer dependencies
>composer install

- Run migrations to setup the db (it will default to sqlite if you haven't modified **phinx.php**)
>./vendor/bin/phinx --verbose migrate
