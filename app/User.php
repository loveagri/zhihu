<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'password', 'remember_token',
//    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];

    public function posts()
    {
        return $this->hasMany(Post::class,'user_id','id');
    }


    public function fans()
    {
        return $this->hasMany(Fan::class,'star_id','id');
    }


    public function stars()
    {
        return $this->hasMany(Fan::class,'fan_id','id');
    }

    public function doFan($uid)
    {
        $fan = new Fan();
        $fan->star_id = $uid;
        $this->stars()->save($fan);
    }

    public function doUnfan($uid)
    {
        $fan = new Fan();
        $fan->star_id = $uid;
        $this->stars()->delete($fan);
    }

    public function hasFan($uid)
    {
        return $this->fans()->where('fan_id',$uid)->count();
    }

    public function hasStar($uid)
    {
        return $this->stars()->where('star_id',$uid)->count();
    }


    public function notices()
    {
        return $this->belongsToMany(
            Notice::class,
            'user_notice',
            'user_id',
            'notice_id'
        )->withPivot(['user_id','notice_id'])->orderBy('created_at', 'desc');
    }

    public function addNotice($notice)
    {
        return $this->notices()->save($notice);
    }





}























