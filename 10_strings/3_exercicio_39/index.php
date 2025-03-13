<?php

    function featureObj($feature){
        $arrayRetun = array();

        foreach ($feature as $key) {
            if($key['price'] > 10){
               
                $arrayRetun[] = $key;
            }
        }
        return $arrayRetun;
    }

    $feature = [["name" => "feature1", "price" => 10], ["name" => "feature2", "price" => 20], ["name" => "feature3", "price" => 30], ["name" => "feature4", "price" => 40], ["name" => "feature5", "price" => 5]];

    
    print_r(featureObj($feature));
    