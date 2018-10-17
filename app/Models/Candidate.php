<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Candidate Model
 * @author  Yifan Wu
 * @package Model
 */
class Candidate extends Model
{
    protected $table = 'candidate';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'des',
		'vurl',
		'vote_id'
    ];

    public function addCandidate($name,$description,$vid_url,$vote_id){
        $this->create([
            'name' => $name,
            'des' => $description,
			'vurl' => $vid_url,
            'vote_id' => $vote_id
        ]);
    }

    public function updateCandidate($name,$description,$vid_url){
        $this->update([
            'name' => $name,
            'des' => $description,
			'vurl' => $vid_url
        ]);
    }

    public function delCandidate($id){
        $this->where('id',$id)->delete();
    }
}