<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class OutputIndicators extends Model
{
    protected $connection = 'mysql';
    
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

    public function totalMonthly($id, $target, $accomplished)
    {
        $percentage       = (($accomplished / $target) * 100);
        $total_percentage = number_format($percentage, 2);

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
            'target'           => $target + 0,
            'accomplished'     => $accomplished + 0,
            'total-percent'    => $total_percentage + 0,
        ];

        return $data;
    }

    public function totalAccumulated()
    {
        
    }

    public function overallTotalAccomplished($id) 
    {
        $accomplished = DB::table('output_indicators')
                ->select(DB::raw('(jan_accomplished + feb_accomplished + mar_accomplished + apr_accomplished + may_accomplished + jun_accomplished) as total_sum, targets'))
                ->where('id', '=', $id)
                ->get();
        $percentage   = ( $accomplished[0]->total_sum / $accomplished[0]->targets) * 100;

        $x = $accomplished[0]->total_sum;
        $y = $accomplished[0]->targets;

        if ( $x < $y ) {
            $class_accomplish = 'cell-danger';
        } elseif ( $x > $y ) {
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
            'class-accomplish'  => $class_accomplish,
            'class-percent'     => $class_percent,
            'targets'           => $accomplished[0]->targets + 0,
            'accomplished'      => $accomplished[0]->total_sum + 0,
            'percentage'        => number_format($percentage, 2, '.', '')
        ];

        return $data;
    }
}
