files=`ls`
for ((i=${#files[@]}-1; i>=0; i--)); do
  echo $files
    # j=$(( ${#LIST[@]} - i - 1 ))
    # echo $j
    # FILE=${LIST[j]}
    # CONTENTS=`cat $file`;
    # FULLTITLE=`grep -o '<title>.*</title>' $file`
    # TITLE="${FULLTITLE/<title>/}"
    # TITLE="${TITLE/ &\#8211; Terry Plays<\/title>/}"
    # echo "new PlayPost("$TITLE', '/plays/posts/$file")",

done