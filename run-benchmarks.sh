#!/bin/bash
date_now=$(date)

php ./benchmark-scenarios/welcome.php "$date_now"

source ./no-eager-loading-benchmarks.sh  "$date_now"

php ./benchmark-scenarios/goodbye.php "$date_now"
