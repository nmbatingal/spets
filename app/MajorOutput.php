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

    public function majorSubOutput()
    {
        return $this->hasMany('App\MajorSubOutput', 'mfo_id');
    }
}
