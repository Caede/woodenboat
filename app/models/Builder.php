<?php

namespace WBDB\Model;

Class BuilderModel extends BaseModel {

    protected $table = 'builder';
    protected static $rules = array();
    public function craft() {
        return $this->belongsToMany('Craft');
    }

    public function user() {
        return $this->belongsTo('User');
    }

}
