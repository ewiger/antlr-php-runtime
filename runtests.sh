#!/bin/bash

file=test
if [[ $1 ]]; then
	file=test/$1
fi

export PROJ_PATH=`pwd`

phpunit "$2" --bootstrap test/bootstrap.php --include-path="${PROJ_PATH}:${PROJ_PATH}/runtime/Php/" ${file}