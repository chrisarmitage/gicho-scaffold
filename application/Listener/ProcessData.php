<?php

namespace Application\Listener;

class ProcessData
{
    public function execute($data)
    {
        echo 'Listener: [' . $data->timestamp . '] got number ' . $data->value . ' (' . json_encode($data) . ') ... ';

        sleep(mt_rand(3, 6));

        echo 'Processed' . PHP_EOL;
    }
}
