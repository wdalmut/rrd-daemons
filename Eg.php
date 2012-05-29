<?php 
class Eg 
    extends Core_Daemon
{
    protected function setup()
    {
        
    }
    
    protected function execute()
    {
        echo "OK" . PHP_EOL;
    } 
    
    protected function log_file()
    {
        $dir = __DIR__ . '/daemon';
        if (@file_exists($dir) == false)
            @mkdir($dir, 0777, true);
        
        return $dir . '/log_' . date('Ymd');
    }
}