<?php

class Catagory extends Eloquent{

    /**
     * @var string
     */
    protected $table = 'catagory';

    /**
     * @var string
     *
     * not allow laravel change the created_at time
     * and updated_at time
     */
    public $timestamps = false;

    protected $fillable = array('id','catagory');

    /**
     * Article field declaration
     *
     * @return object;
     */
    public function articles()
    {
        return $this->belongsToMany('Article','article_catagory',
            'catagory_id','article_id');
    }
}
