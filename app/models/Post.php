<?php
class Post extends Eloquent
{
    public function blog()
    {
        return $this->belongsTo('Blog');
    }

    /**
     *
     */
    public function comments()
    {
        return $this->hasMany('Comment', 'id_post');
    }
}