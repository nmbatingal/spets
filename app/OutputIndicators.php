<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutputIndicators extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'output_indicators';

    /*public function majorOutput()
    {
        return $this->belongsTo('App\MajorOutput', 'mfo_id', 'id');
    }*/

    public function majorPerform()
    {
        return $this->belongsTo('App\PerformanceTable', 'mfo_id', 'id');
    }
}
