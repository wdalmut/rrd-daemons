<?php 
class Eg 
    extends Core_Daemon
{
    protected $loop_interval = 2;

    public function __construct()
    {
        $this->verbose(false);
    }

    protected function setup()
    {
    }
    
    protected function execute()
    {
	$VALUE = rand(0,10);
        echo "PUTVAL \"WDM/exec-magic/gauge-magic_level\" interval={$this->loop_interval} N:$VALUE";
	echo PHP_EOL;
    } 
    
    protected function log_file()
    {
        $dir = __DIR__ . '/daemon';
        if (@file_exists($dir) == false)
            @mkdir($dir, 0777, true);
        
        return $dir . '/log_' . date('Ymd');
    }
}
