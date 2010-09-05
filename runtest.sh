#!/bin/bash

export PROJ_PATH=`pwd`

phpunit --include-path="${PROJ_PATH}:${PROJ_PATH}/runtime/Php/" test/$1