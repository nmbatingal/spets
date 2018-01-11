<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerformanceTable extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'performance_tables';

    /*public function majorOutputs()
    {
        return $this->hasMany('App\MajorOutput', 'perform_id');
    }*/

    public function outputIndicators()
    {
        return $this->hasMany('App\OutputIndicators', 'mfo_id');
    }
}
