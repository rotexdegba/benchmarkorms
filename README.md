# PHP ORM Benchmarks

This repository is designed to benchmark the performance of various PHP ORM packages.

- https://github.com/atlasphp/Atlas.Orm
- https://www.doctrine-project.org/
- https://github.com/illuminate/database
- https://github.com/gabordemooij/redbean/blob/master/README.markdown
- https://github.com/rotexsoft/leanorm

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
