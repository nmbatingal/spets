<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MajorSubOutput extends Model
{

    protected $connection = 'mysql';
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'major_sub_outputs';

    public function majorOutput()
    {
        return $this->belongsTo('App\MajorOutput', 'mfo_id', 'id');
    }

    public function outputIndicators()
    {
        return $this->hasMany('App\OutputIndicators', 'mfo_sub_id');
    }
}
