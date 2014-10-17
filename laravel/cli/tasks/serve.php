<?php namespace Laravel\CLI\Tasks;

class Serve extends Task {
    /**
     * Run a database migration command.
     *
     * @param  array  $arguments
     * @return void
     */
    public function run($arguments = array())
    {
        $this->checkPhpVersion();

        $host = get_cli_option('host', 'localhost');

        $port = get_cli_option('port', '8000');

        $public = rtrim(path('public'), DS);
        $this->info("Laravel development server listen on http://{$host}:{$port}");
        ob_end_flush();

        //little sugar for windows
        if (substr(PHP_OS, 0, 3) === 'WIN') {
            passthru("start http://{$host}:{$port}");
        }

        passthru('"'.PHP_BINARY.'"'." -S {$host}:{$port} -t \"{$public}\" server.php");
    }

    /**
     * Check the current PHP version is >= 5.4.
     *
     * @return void
     *
     * @throws \Exception
     */
    protected function checkPhpVersion()
    {
        if (version_compare(PHP_VERSION, '5.4.0', '<'))
        {
            throw new \Exception('This PHP binary is not version 5.4 or greater.');
        }
    }

}