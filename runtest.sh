#!/bin/bash

export PROJ_PATH=`pwd`

phpunit --bootstrap test/bootstrap.php --include-path="${PROJ_PATH}:${PROJ_PATH}/runtime/Php/" test/$1