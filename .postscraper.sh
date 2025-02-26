for file in `ls`;
do
    CONTENTS=`cat $file`;
    # TITLE=`sed -n "/<$TAG>/,/<\/$TAG>/p" file`;
    # echo $TITLE
    # sed -n "/<title>/,/<\/title>/p" $file
    # echo "cat //html/head/title" |  xmllint --html --shell $file | sed '/^\/ >/d' | sed 's/<[^>]*.//g' | xargs
    FULLTITLE=`grep -o '<title>.*</title>' $file`
    TITLE="${FULLTITLE/<title>/}"
    TITLE="${TITLE/ &\#8211; Terry Plays<\/title>/}"
    echo "new PlayPost('$TITLE', '/plays/posts/$file')",

done