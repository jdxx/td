<?php

class DefBridgeController extends Zend_Controller_Action
{

    public function init()
    {
    	/*
    	 * Einheit			Minuten/Feld
    	 * =============================
    	 * SpeertrŠger: 	11,7 
    	 * SchwertkŠmpfer:	12,7 
    	 * BogenschŸtzen:	 8,3 
    	 * Armbrust:		10
    	 * Panzerreiter:	 5
    	 * Lanzenreiter:	 6,7
    	 * Handkarren:      13,3
    	 * Ochsenkarren:	16,7
    	 */
        $this->speed_st = 0.008125;
        $this->speed_sk = 0.008819444444;
        $this->speed_bs = 0.005763888888;
        $this->speed_as = 0.006944444444;
        $this->speed_pr = 0.003472222222;
        $this->speed_lr = 0.004652777777;
        $this->speed_hk = 0.009236111111;
        $this->speed_ok = 0.011597222222;
        
    }

    public function indexAction()
    {
        $this->view->distance = self::calcDistance(array("X" => 16680, "Y" => 16608), array("X" => 16669, "Y" => 16586));
        
        echo $this->speed_as * $this->view->distance;
        echo "<br>";
        echo $this->speed_st * $this->view->distance * 24 * 60;
        echo "<br>";
        echo 11.7 * $this->view->distance;

    }

    public function calcDistance($start, $end)
    {
    	$Ax = $start["X"] - floor($start["Y"] / 2);
    	$Ay = $start["X"] + ceil($start["Y"] / 2);
    	$Bx = $end["X"] - floor($end["Y"] / 2);
    	$By = $end["X"] + ceil($end["Y"] / 2);
    	
    	$Dx = $Bx - $Ax;
    	$Dy = $By - $Ay;
    	
    	if(self::sign($Dx) == self::sign($Dy))
    		return max(abs($Dx),abs($Dy));
    	else 
    		return abs($Dx) + abs($Dy);
    }
    
    public function sign($n) {
    	return ($n > 0) - ($n < 0);
    }
}

