<?php

$googleMapLocalGuideScore=5200;

if($googleMapLocalGuideScore==0){
    echo "Level 1";
}
else if($googleMapLocalGuideScore>0&&$googleMapLocalGuideScore<=15){
    echo "Level 2";
}

else if($googleMapLocalGuideScore>0&&$googleMapLocalGuideScore<=75){
    echo "Level 3";
}

else if($googleMapLocalGuideScore>0&&$googleMapLocalGuideScore<=250){
    echo "Level 4";
}

else if($googleMapLocalGuideScore>0&&$googleMapLocalGuideScore<=750){
    echo "Level 5";
}

else if($googleMapLocalGuideScore>0&&$googleMapLocalGuideScore<=1500){
    echo "Level 6";
}

else if($googleMapLocalGuideScore>0&&$googleMapLocalGuideScore<=5000){
    echo "Level 7";
}

else if($googleMapLocalGuideScore>0&&$googleMapLocalGuideScore<=15000){
    echo "Level 8";
}

else if($googleMapLocalGuideScore>0&&$googleMapLocalGuideScore<=50000){
    echo "Level 9";
}

else if($googleMapLocalGuideScore>0&&$googleMapLocalGuideScore<=125000){
    echo "Level 10";
}


?>