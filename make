#!/bin/bash

echo -e '\n\nCompiling all LESS files in /css to hidden CSS files...\n\n'

COUNT=0
TOTAL=0

for file in assets/less/*.less
do
	TOTAL=$((TOTAL + 1))
	FROM=$file
	TO=${file//less/css}
	if $(lessc $FROM $TO); then
		echo "SUCCESS: $FROM   -->   $TO succeeded"
		COUNT=$((COUNT + 1))
	else
		echo "FAILURE: $FROM   -->   $TO failed"
	fi
done

if [ $COUNT -eq $TOTAL ]; then
	echo -e "\nAll $COUNT files compiled successfully.\n"
else
	echo -e "\n$COUNT/$TOTAL files compiled successfully."
	echo -e "$((TOTAL-COUNT))/$TOTAL files failed to compile.\n"
fi
