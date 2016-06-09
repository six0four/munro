#!/bin/bash
echo "content-type: text/html"
echo
x=$(<testCounter.txt)
x=$((x+1))
echo $x > testCounter.txt
echo "Incremented by 1 to $x"

