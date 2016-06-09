#!/bin/bash
echo "content-type: text/html"
echo
x=$(<testCounter.txt)
echo "Counter is at $x"

