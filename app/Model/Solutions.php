<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Solutions extends Eloquent{

	protected $table = 'solutions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
    ];
    public $timestamps = true;

    public function problems() {
        return $this->belongsToMany('App\Model\Problems', 'problem_solution', 'solution_id', 'problem_id');
    }
}
