<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
    
    protected $primaryKey = 'id_employees';
    protected $fillable = [
        'id_employees','id_jobs','nama', 'email', 'phone', 'address',
    ];
    
    public $timestamps = false;

    public function jobs()
    {
        return $this->belongsTo('App\Jobs','id_jobs');
    }
}
