<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHP ORM Benchmarks</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
        <link rel="icon" href="./favicon.ico" type="image/x-icon">
    </head>
    <body>
        <main>
            <h1>Latest Benchmark Results for Fetching Data from tables without Related Data</h1>  
        </main>
        <div style="padding-left: 1em; padding-right: 1em;">
            <h2><strong>Benchmarks were run on PHP Version:</strong> <?= PHP_VERSION; ?></h2>
            <h2><strong>Operating System:</strong> <?= "{$operating_system} {$distro['name']} - {$distro['version']}"; ?></h2>
            <h2><strong>Database:</strong> <?= "{$db_version}"; ?></h2>
            <h2><strong>Date Generated:</strong> <?= $date_generated; ?></h2>

            <table id="test-results" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>orm_vendor</th>
                        <th>short_desc</th>
                        <th>strategy</th>
                        <th>chunk_size</th>
                        <th>execution_duration</th>
                        <th>memory_used</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($test_results as $test_result): ?>

                    <tr>
                        <td><?= $test_result['orm_vendor']; ?></td>
                        <td><?= $test_result['short_desc']; ?></td>
                        <td><?= $test_result['strategy']; ?></td>
                        <td><?= $test_result['chunk_size']; ?></td>
                        <td data-order="<?= $test_result['execution_duration_in_seconds']; ?>">
                            <?= 
                                ($test_result['execution_duration_in_seconds'] >= 60)
                                ? \Carbon\CarbonInterval::seconds($test_result['execution_duration_in_seconds'])->cascade()->forHumans() // carbon format for >= 60 seconds
                                : $test_result['execution_duration']; // ubench format for microseconds
                            ?>
                        </td>
                        <td data-order="<?= $test_result['memory_used_in_bytes']; ?>">
                            <?= $test_result['memory_used']; ?>
                        </td>
                    </tr>

                <?php endforeach; // foreach ($test_results as $test_result) ?>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#test-results').DataTable({
                    "lengthMenu": [ [50, 100, 500, -1], [50, 100, 500, "All"] ]
                });
            });
        </script>
    </body>
</html>

