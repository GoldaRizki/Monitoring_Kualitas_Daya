<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $guarded = ['id'];



    public function getWaktuAttribute(){

        $wkt = Carbon::parse($this->created_at)->locale('id');
        return "{$wkt->shortMonthName}' {$wkt->day} {$wkt->hour}:{$wkt->minute}:{$wkt->second}";

    }
}
