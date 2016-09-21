<?php 
    function moyenne($srilanka) {
        $i = 0 ;
        $moyenne = 0 ;
        foreach ($srilanka as $value) {
                $moyenne+=$value["pop"] ;
                $i++ ;
            }
        
        $moyenne = $moyenne/$i ;
        return $moyenne ;
    }
?>
    