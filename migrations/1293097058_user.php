<?php defined('SYSPATH') or die('No direct script access.');

class User
{
	function up()
	{
		DB::query(null, '
			CREATE TABLE users
			(
			    id int(11) NOT NULL AUTO_INCREMENT,
			    username VARCHAR(100) NOT NULL,
			    firstname VARCHAR(100) NOT NULL,
			    lastname VARCHAR(100) NOT NULL,
			    PRIMARY KEY (id)
			);
		')->execute();
	}
	
	function down()
	{
		DB::query(null, '
			DROP TABLE users
		')->execute();
	}
}