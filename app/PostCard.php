<?php

namespace App;

class PostCard
{

	protected static function handelFasad($type)
	{
		return app()[$type];
	}


	public static function __callStatic($method,$parameter)
	{

		return Self::handelFasad('PostCard')->$method(...$parameter);

	}
}