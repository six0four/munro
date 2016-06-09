#!/bin/bash
echo "content-type: text/html"
echo
echo "Hello from munro<br/>"
#read formvalues
#echo "$formvalues <br/>"
date >> visitors.txt
read namevalue
echo $namevalue >> visitors.txt
x=`wc -l < myCounter.txt`
x=$(<myCounter.txt)
y=$((x+1))
echo $y > myCounter.txt
echo "I've seen this page $y times"

