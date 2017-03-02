<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RunEvent extends Model
{
    //
    protected $table = 'run_event';
    protected $fillable=['name','hold_time','admin_email'];
    
    public function run_event_item()//relation for run event item's run_event_id
    {
    	return $this->hasMany('App\RunEventItem','run_event_id');
    }
}
