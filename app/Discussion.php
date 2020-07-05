<?php

namespace LaravelForum;

use Illuminate\Database\Eloquent\Model;
use LaravelForum\Http\Middleware;




class Discussion extends Model
{
    protected $fillable = ['title', 'content','user_id','slug','channel_id','reply_id'];



public function author()
{

	return $this->belongsTo(User::class,'user_id');

}

public function replies()
{

	return $this->hasMany(Reply::class);
}

public function getRouteKeyName()
	
	{

	return 'slug';
  	}


  public function getBestReply()
  {

  	return Reply::find($this->reply_id);

  } 

  public function bestReply()

  {

  	return $this->belongsTo(Reply::class,'reply_id');

  }


  	public  function markAsBestReply(Reply $reply)

  	{

  		$data = $this->update([

  			'reply_id' => $reply->id
  		]);
  	}


}
