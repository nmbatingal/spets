<?php

namespace App;

use Illuminate\Support\Facades\DB;
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


    public function totalPercent($accomplished, $total) {
        $all_total = (($accomplished / $total) * 100);

        $data = array();
        if ( $all_total < 100 ) {
            $data = [
                'class'         => 'cell-danger',
                'all_total'     => $all_total
            ];
        } elseif ( $all_total > 100 ) {
            $data = [
                'class'         => 'cell-info',
                'all_total'     => $all_total
            ];
        } else {
            $data = [
                'class'         => 'cell-success',
                'all_total'     => $all_total
            ];
        }

        return $data;
    }

    public function overallTotalAccomplished($id) {
        $sum = DB::table('output_indicators')
                ->select(DB::raw('(jan_accomplished + feb_accomplished + mar_accomplished + apr_accomplished + may_accomplished + jun_accomplished) as total_sum'))
                ->where('id', '=', $id)
                ->first()
                ->total_sum;

        return $sum;
    }

    public function overallTotalPercent($id, $target) {
        $total_accomp = $this->overallTotalAccomplished($id);

        $total = ($total_accomp / $target) * 100;

        return number_format($total, 2, '.', '');
    }
}
