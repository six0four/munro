#!/bin/bash
echo "content-type: text/html"
echo
date >> visitors.txt
x=$(<myCounter.txt)
x=$((x+1))
echo $x > myCounter.txt
echo "I've seen this page $x times"

