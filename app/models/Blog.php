<?php

class Blog extends Eloquent
{
    public function posts()
    {
        return $this->hasMany('Post', 'id_blog');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}