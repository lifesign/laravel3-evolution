<?php namespace Laravel\CLI\Tasks;

use Laravel\Cache as C;

class Cache extends Task {

    /**
     * Flush Application Cache
     *
     * @param  array  $arguments
     * @return void
     */
    public function clear()
    {
        C::flush();
        $this->info('Application cache cleared!');
    }

}