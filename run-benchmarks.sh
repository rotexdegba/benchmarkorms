#!/bin/bash
if(($# < 1))
then
    echo "You must specify the path where results will be saved"
    exit
fi

date_now=$(date)

php ./benchmark-scenarios/welcome.php "$date_now"

source ./no-eager-loading-benchmarks.sh  "$date_now"

php ./benchmark-scenarios/goodbye.php "$date_now" "$1" "LATEST_RESULTS_NO_EAGER.md" "LATEST_RESULTS_NO_EAGER.html"

