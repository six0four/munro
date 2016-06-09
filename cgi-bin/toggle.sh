#!/bin/bash
echo "content-type: text/html"
echo
x=$(<state.txt)
x=$((!$x))
echo $x > state.txt
echo "redirect = $x"

