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

    //
    public function totalMonthly($id, $target, $accomplished)
    {
        $percentage = (($accomplished / $target) * 100);

        if ( $accomplished < $target ) {
            $class_accomplish = 'cell-danger';
        } elseif ( $accomplished > $target ) {
            $class_accomplish = 'cell-info';
        } else {
            $class_accomplish = 'cell-success';
        }

        if ( $percentage < 100 ) {
            $class_percent = 'cell-danger';
        } elseif ( $percentage > 100 ) {
            $class_percent = 'cell-info';
        } else {
            $class_percent = 'cell-success';
        }

        $data = [
            'class-accomplish' => $class_accomplish,
            'class-percent'    => $class_percent,
            'target'           => $target,
            'accomplished'     => $accomplished,// ? $accomplished : '',
            'total-percent'    => $percentage// ? $percentage : '',
        ];

        return $data;
    }

    // TOTAL MONTHLY PERCENTAGE FUNCTION
    public function totalPercent($accomplished, $total) {
        $all_total = (($accomplished / $total) * 100);
        $mo_total  = $all_total ? $all_total : '';

        $data = array();
        if ( $all_total < 100 ) {
            $data = [
                'class'         => 'cell-danger',
                'all_total'     => $mo_total
            ];
        } elseif ( $all_total > 100 ) {
            $data = [
                'class'         => 'cell-info',
                'all_total'     => $mo_total
            ];
        } else {
            $data = [
                'class'         => 'cell-success',
                'all_total'     => $mo_total
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
