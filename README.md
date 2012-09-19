## PCS - Laravel Coding Standards Fixer


### PHP Coding Standards Fixer

Adaptation of http://cs.sensiolabs.org/

## Installation

Installation with Laravel Artisan

	php artisan bundle:install pcs

##Bundle Registration

	'pcs',

##Usage

	php artisan pcs::build fix [controllers|libraries|models|/] --level=all
	
##Example
		php artisan pcs::build fix controllers --level=all
		
To apply the pcs in your controllers
