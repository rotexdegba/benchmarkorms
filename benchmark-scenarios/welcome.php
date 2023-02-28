<?php
include __DIR__ .DIRECTORY_SEPARATOR. '../vendor/autoload.php';

$pdo_opts = include __DIR__ . DIRECTORY_SEPARATOR . '../pdo.php';
$pdo_obj = new \PDO(...$pdo_opts);

$dbFetchValue = function(\PDO $pdo, string $query) {
        
    $statement = $pdo->prepare($query);
    $statement->execute();

    return $statement->fetchColumn(0);
};

$tables = [
    ['Table Name' => 'authors', 'Number of Records' => number_format($dbFetchValue($pdo_obj, 'select count(*) from authors ')) ],
    ['Table Name' => 'comments', 'Number of Records' => number_format($dbFetchValue($pdo_obj, 'select count(*) from comments ')) ],
    ['Table Name' => 'posts', 'Number of Records' => number_format($dbFetchValue($pdo_obj, 'select count(*) from posts ')) ],
    ['Table Name' => 'posts_tags', 'Number of Records' => number_format($dbFetchValue($pdo_obj, 'select count(*) from posts_tags ')) ],
    ['Table Name' => 'summaries', 'Number of Records' => number_format($dbFetchValue($pdo_obj, 'select count(*) from summaries ')) ],
    ['Table Name' => 'tags', 'Number of Records' => number_format($dbFetchValue($pdo_obj, 'select count(*) from tags ')) ],
];

$climate = new League\CLImate\CLImate;
$climate->bold()->backgroundDarkGray()->border('==');
$climate->backgroundDarkGray()->out('|| Welcome to the PHP ORM Benchmarking Tool');
$climate->bold()->backgroundDarkGray()->border('==');

echo PHP_EOL . PHP_EOL;

$climate->bold('Below are the tables in the database:');
echo PHP_EOL;

$climate->yellowTable($tables);

echo PHP_EOL . PHP_EOL;

$climate->bold('Below are the relationship definitions between the database tables above:');
echo PHP_EOL;
$climate->out('An author has many posts.');
$climate->out('A post belongs to an author.');
$climate->out('A post has many comments.');
$climate->out('A post has many posts_tags.');
$climate->out('A post has many tags through posts_tags.');
$climate->out('A post has one summary.');
$climate->out('A comment belongs to a post.');
$climate->out('A post_tag belongs to a post.');
$climate->out('A post_tag belongs to a tag.');
$climate->out('A summary belongs to a post.');
$climate->out('A tag has many posts_tags.');
$climate->out('A tag has many posts through posts_tags.');

echo PHP_EOL . PHP_EOL;

$climate->backgroundGreen('Proceeding to run benchmark scripts. Some of the scripts take a while to execute.');
$climate->backgroundGreen('You can leave this script running and go take a coffee or something.');

echo PHP_EOL . PHP_EOL;
