#!/bin/bash
while read LINE
do
    url=http://www.fellowtrucker.com/postrate/getCities.php?state=$LINE
    curl -s $url > city/$LINE
done < state.txt
