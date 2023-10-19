<?php



namespace Diyar\Visitors\Models;




use Illuminate\Database\Eloquent\Model;




class MyVisitors extends Model
{


public $timestamps = false;


protected $fillable = ['ip', 'country', 'city', 'visiting_url', 'visited_at'];


}


