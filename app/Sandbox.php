<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Sandbox extends Eloquent 
{
	protected $collection = 'sandbox';
}
