<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHP ORM Benchmarks</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
        <!--<link rel="icon" href="./favicon.ico" type="image/x-icon">-->
    </head>
    
    <body>
        <main>
            <h1><?= $header; ?></h1>
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
                        <td data-order="<?= is_numeric($test_result['chunk_size']) ? $test_result['chunk_size'] : PHP_INT_MAX; ?>">
                            <?= is_numeric($test_result['chunk_size']) ? number_format($test_result['chunk_size']) : $test_result['chunk_size']; ?>
                        </td>
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
            
            <div id="charts" style="width: 90%;"></div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
        <script>
            $(document).ready(function () {
                $('#test-results').DataTable({
                    "lengthMenu": [ [50, 100, 500, -1], [50, 100, 500, "All"] ]
                });
            });
            
            ////////////////////////////////////////////////////////////////////
            // CHART STUFF STARTS HERE
            ////////////////////////////////////////////////////////////////////
            var chartsDiv = document.getElementById('charts');
            
            <?php $i = 1; ?>
            <?php foreach($graphing_data as $label => $graph_data): ?>
                
                <?php
                    $x_axis_data = [];
                    $y_axis_data_exec_time = [];
                    $y_axis_data_exec_mem = [];
                    
                    foreach($graph_data as $graph_record) {
                        
                        $x_axis_data[] = $graph_record["orm_vendor"] . ' - ' . $graph_record["strategy"];
                        $y_axis_data_exec_mem[] = $graph_record["memory_used_in_bytes"];
                        $y_axis_data_exec_time[] = $graph_record["execution_duration_in_seconds"];
                    }
                ?>
                
                var chartCanvas = document.createElement('canvas');
                chartCanvas.setAttribute("id", "executionTimeChart-<?= $i; ?>");

                chartsDiv.appendChild(chartCanvas);
                chartsDiv.appendChild(document.createElement('br'));
                chartsDiv.appendChild(document.createElement('br'));

                new Chart(
                    document.getElementById('executionTimeChart-<?= $i; ?>'), 
                    {
                      type: 'bar',
                      data: {
                        labels: <?= json_encode($x_axis_data); ?>,
                        datasets: [{
                          label: '<?= $label . ' - execution time in seconds (Lower is better)'; ?>',
                          data:  <?= json_encode($y_axis_data_exec_time); ?>,
                          borderWidth: 1
                        }]
                      },
                      options: {
                        scales: {
                          y: {
                            beginAtZero: true
                          }
                        }
                      }
                    }
                );
                
                
                
                var chartCanvas = document.createElement('canvas');
                chartCanvas.setAttribute("id", "executionMemChart-<?= $i; ?>");

                chartsDiv.appendChild(chartCanvas);
                chartsDiv.appendChild(document.createElement('br'));
                chartsDiv.appendChild(document.createElement('br'));

                new Chart(
                    document.getElementById('executionMemChart-<?= $i; ?>'), 
                    {
                      type: 'bar',
                      data: {
                        labels: <?= json_encode($x_axis_data); ?>,
                        datasets: [{
                          label: '<?= $label . ' - memory used in bytes (Lower is better)'; ?>',
                          data:  <?= json_encode($y_axis_data_exec_mem); ?>,
                          borderWidth: 1
                        }]
                      },
                      options: {
                        scales: {
                          y: {
                            beginAtZero: true
                          }
                        }
                      }
                    }
                );
                        
                <?php $i++; ?>
            <?php endforeach; // foreach($graphing_data as $label => $graph_data) ?>
        </script>
    </body>
</html>
