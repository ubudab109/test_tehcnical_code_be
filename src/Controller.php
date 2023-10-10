<?php

namespace Test;

class Controller
{
    public function response($result)
    {
        echo json_encode([
            'result' => $result,
        ]);
    }
}