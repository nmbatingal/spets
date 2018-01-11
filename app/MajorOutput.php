<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MajorOutput extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'major_outputs';
    
    public function majorPerform()
    {
        return $this->belongsTo('App\PerformanceTable', 'perform_id', 'id');
    }

    public function outputIndicators()
    {
        return $this->hasMany('App\OutputIndicators', 'mfo_id');
    }
}
