<?php

header("content-type:text/html;charset=utf-8");

$str = '{"pageFooterLinks":"e38080","textShadow":"none","pageFooter":"e38080","pageHeaderLinks":"#F7D8D8","pageHeader":"#F7D8D8","fontLinkcolor":"#FFFFFF","fontcolor":"#F7D8D8","bordercolor":"#9B0000","fontBottomBgurl":"","fontborderRight":"true","fontborderBottom":"true","fontborderLeft":"true","fontborderTop":"true","fontborderColor":"#9B0000","fontborder":"true","font2Bgurl":"null","fontBgurl":"","fontBgcolor":"#C70000","fontHeadBgurl":"","bgurl":"","bgcolor":"#A80000","type":"sys","id":"","name":"undefined"}';

echo '输出增加几行内容';

echo '新增一行打印';



$b = mysql_real_escape_string($str);

echo $b;