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

    public function majorSubOutput()
    {
        return $this->belongsTo('App\MajorSubOutput', 'mfo_sub_id', 'id');
    }
}
