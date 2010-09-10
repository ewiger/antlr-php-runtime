#!/bin/bash

export ANTLR_LIB=`pwd`/lib
export CLASSPATH=$CLASSPATH:$ANTLR_LIB/antlr-php.jar:$ANTLR_LIB/antlr-2.7.7.jar:$ANTLR_LIB/antlr-3.2.jar:$ANTLR_LIB/gunit.jar:$ANTLR_LIB/stringtemplate-3.2.jar

rm runtime/Php/test/Antlr/Tests/generated/*

for file in runtime/Php/test/Antlr/Tests/grammers/*.g
do
	java org.antlr.Tool -make -fo runtime/Php/test/Antlr/Tests/generated ${file}
done