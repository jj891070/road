<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RunEventItem extends Model
{
    //
    protected $table = 'run_event_item';
    protected $fillable=['run_event_id','client_id'];
    
    
    public function run_event()//relation for run_event
    {
        	
       return $this->hasOne('App\RunEvent','id','run_event_id');
    }
    public function user()
    {
    	return $this->hasOne('App\User','id','client_id');
    }

}
