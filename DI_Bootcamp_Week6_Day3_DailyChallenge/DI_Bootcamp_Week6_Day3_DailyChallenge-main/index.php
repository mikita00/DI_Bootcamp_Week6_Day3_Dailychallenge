<?php


    function calculate_bill($units) {
        $unit_cost_first = 3.50;
        $unit_cost_second = 4.00;
        $unit_cost_third = 5.20;
        $unit_cost_fourth = 6.50;
        
        if($units <= 50) {
            $bill = $units * $unit_cost_first;
        }else if($units > 50 &&$units <= 100) {
            $temp = 50 * $unit_cost_first;
            $remaining_units = $units -50;
            $bill = $temp + ($remaining_units * $unit_cost_second);
        }else if($units > 100 && $units <= 200) {
            $temp = (50 * 3.5) + (100 * $unit_cost_second);
            $remaining_units = $units -150;
            $bill = $temp + ($remaining_units * $unit_cost_third);
        }else {
            $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
            $remaining_units= $units -250;$bill = $temp + ($remaining_units * $unit_cost_fourth);
        }
        
        return $bill;
    }

?>