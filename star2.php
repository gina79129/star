<?php
/*  *
   ***
  *****
 *******
********* */
  
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5-$i;$j++){
        echo "&nbsp;";
    }
    for($k=1;$k<=$i*2-1;$k++){
        echo "*";
    }
    echo "<br>";
}
/*   *
    **
   ***
  ****
 ***** */ 

for($i=1;$i<=5;$i++){
    for($j=1;$j<=5-$i;$j++){
        echo "&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
        echo "*";
    }
    echo "<br>";
}

    echo "<br>";
/*  *********
     *******
      *****
       ***
        *   */
for($i=5;$i>=1;$i--){
    for($j=1;$j<=5-$i;$j++){
        echo "&nbsp;";
    }
    for($k=1;$k<=$i*2-1;$k++){
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

/*  *****
     ****
      ***
       **
        * */
for($i=5;$i>=1;$i--){
    for($j=1;$j<=5-$i;$j++){
        echo "&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
        echo "*";
    }
    echo "<br>";
}
/*
*
**
***
****
*****  */
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
/*
*****
****
***
**
*
*/
for($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
/*
*****
*   *
*   *
*   *
*****     mac &nbsp格子會不對，改以..表示 */

for($i=1;$i<=5;$i++){
    for ($j=1;$j<=5;$j++){
        if(($i==1)||($i==5)){
            echo "*";
        }
        elseif(($j==1)||($j==5)){
            echo "*";
            
        }else{
            echo "..";}


    }
    echo "<br>";
}

?>
