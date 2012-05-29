<?php 
class Multiple
    extends Core_Daemon
{
    protected $loop_interval = 2;

    public function __construct()
    {
        $this->verbose(false);
	parent::__construct();
    }

    protected function setup()
    {
    }
    
    protected function execute()
    {
	$VALUE = rand(0,10);
	$VALUE2= rand(0,10);
        echo "PUTVAL \"WDM/exec-signal/gauge-signal_0\" interval={$this->loop_interval} N:$VALUE";
	echo PHP_EOL;
        echo "PUTVAL \"WDM/exec-signal/gauge-signal_1\" interval={$this->loop_interval} N:$VALUE2";
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
