<?php

namespace Test\Controllers;

use Test\Controller;

class CalculateController extends Controller
{
    public function bilanganGanjil()
    {
        if (empty($_POST['number']) || !isset($_POST['number'])) {
            echo 'Input is required';
        } else {
            $number = $_POST['number'];
            $res = [];
            for ($i = 0; $i <= $number; $i++) {
                if ($i % 2 == 1) {
                    $res[] = $i;
                }
            }
            $this->response($res);
        }
    }

    public function bilanganPrima()
    {
        if (empty($_POST['number']) || !isset($_POST['number'])) {
            echo 'Input is required';
        } else {
            $number = $_POST['number'];
            $res = [];
            for ($i = 1; $i <= $number; $i++) {
                $counter = 0;
                for ($j = 1; $j <= $i; $j++) {
                    if ($i % $j == 0) {
                        $counter++;
                    }
                }
    
                if ($counter == 2) {
                    $res[] = $i;
                }
            }
            $this->response($res);
        }
    }

    public function segitiga()
    {
        if (empty($_POST['number']) || !isset($_POST['number'])) {
            echo 'Input is required';
        } else {
            $number = (string)$_POST['number'];
            $res = '';
            for ($i = 0; $i < strlen($number); $i++) {
                $line = '';
                for ($j = 0; $j <= $i; $j++) {
                    $line .= '0';
                }
                $line .= $number[$i];
                $res .= strrev($line). '<br>';
            }
            echo $res;
        }
    }
}