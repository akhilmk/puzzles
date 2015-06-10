<?php
    $arr            =   array(1=>'a',2=>'b',3=>'c',4=>'d',5=>'e');
    $arrNew         =   array('a','b','c','d','e','f');
    $secInterval    =   2;
    
    $retArr         =   recursive2($arrNew,0,true,count($arrNew));
    echo "final";
    print_r($retArr);



    function recursive2($arr2,$counterPointer,$st,$intialCnt){
        
        $secInterval    =   2;
        
        $status         =   $st;
        
        
        $key            =   ($secInterval+$counterPointer);  
        
        if($key >= $intialCnt){
            $arr2   =   array_values($arr2);
            $status =   true;
            $key    =   $key%$intialCnt;
        }else{
            $status =   false;
        }
        
        $intialCnt      =   ($status)? count($arr2): $intialCnt;
        
        
        if(count($arr2)>1){
            unset($arr2[$key]);
            $counterPointer =  $key; 
            recursive2($arr2,$counterPointer,$status,$intialCnt);
        }else {
            print_r($arr2);
            return $arr2;
        }

    }

    


?>