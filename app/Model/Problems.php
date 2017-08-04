<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Problems extends Eloquent{

	protected $table = 'problems';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
    ];
    public $timestamps = true;

    public function symptoms() {
        return $this->belongsToMany('App\Model\Symptoms', 'problem_symptom', 'problem_id', 'symptom_id');
    }

    public function solutions() {
        return $this->belongsToMany('App\Model\Solutions', 'problem_solution', 'problem_id', 'solution_id');
    }
}
