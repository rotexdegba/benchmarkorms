#!/bin/bash
if(($# < 1))
then
    echo "You must specify the path where results will be saved"
    exit
fi

# $1 should be the path to a folder / directory where the results will be saved

date_now=$(date)
header=$(php -r "include __DIR__ . '/vendor/autoload.php'; echo \Rotexsoft\PhpOrmBenchmarks\Ubench\MessageResources::BENCHMARK_RESULT_NO_EAGER_DATA_HEADER;")

php ./benchmark-scenarios/welcome.php "$date_now"

source ./no-eager-loading-first-n-benchmarks.sh  "$date_now"

php ./benchmark-scenarios/goodbye.php "$date_now" "$1" "LATEST_RESULTS_FIRST_N_NO_EAGER.md" "LATEST_RESULTS_FIRST_N_NO_EAGER.html" "$header"
