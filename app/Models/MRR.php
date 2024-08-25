<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MRR extends Model
{
    use HasFactory;

    protected $table = 'TBL_MRRequest';
    protected $fillable = [
        'noMrr',
        'RequestDept',
        'Process',
        'Name',
        'Description',
        'Shift',
        'Date',
        'BreakDownTime',
        'ReportTime',
        'SignSpvProd',
        'Judgement',
        'Result',
        'RepairBy',
        'RespownTime',
        'RepairStarTime',
        'RepairEndTime',
        'QcStartTime',
        'QcEndTime',
        'SignByQc',
        'QcName',
        'QcDateSign',
        'SignByProd',
        'ProdName',
        'ProdDateSign'
    ];

}
