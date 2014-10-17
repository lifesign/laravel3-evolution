<?php namespace Laravel\CLI\Tasks;

abstract class Task {
    protected function info($message = '') {
        echo $message , PHP_EOL;
    }
}