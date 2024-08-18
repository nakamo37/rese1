<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    public function likes()
    {
        return $this->belongsToMany('App\Models\Shop','likes','user_id','shop_id')->withTimestamps();
    }

    public function isLike($shopId)
    {
        return $this->likes()->where('shop_id',$shopId)->exists();
    }

    public function like($shopId)
    {
      if($this->isLike($shopId)){
      } else {
        $this->likes()->attach($shopId);
      }
    }

    public function unlike($shopId)
    {
      if($this->isLike($shopId)){
        $this->likes()->detach($shopId);
      } else {
      }
    }
}
