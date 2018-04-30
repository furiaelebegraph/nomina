<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Nomina.
 *
 * @author  The scaffold-interface created at 2018-04-18 09:39:29pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Nomina extends Model
{
	
	use SoftDeletes;
    protected $guard = 'admin';

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'nominas';

	
}
