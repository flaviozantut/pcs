<?php
class Pcs_Build_Task extends Task {

    public function run($args)
    {
    	if (isset($args[1])){
     		$args[1] = path('app') . $args[1];	
     	}
     	$strArgs = implode(" ", $args);
    	$pcs =  Bundle::path('pcs');
     	echo shell_exec("php {$pcs}/php-cs-fixer.phar {$strArgs}");
    }

}