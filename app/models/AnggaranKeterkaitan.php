<?php

class AnggaranKeterkaitan extends \Eloquent{
    protected $fillable = array('id','anggaran_id', 'type', 'sub_type', 'code', 'description', 'nilai', 'priority');
    protected $hidden = array('id','anggaran_id', 'created_at', 'updated_at');
    protected $table = 'anggaran_keterkaitans';

    public function anggaran()
    {
        return $this->belongsTo('Anggaran', 'anggaran_id', 'id');
    }

    public function getCodeAttribute($value)
    {
        return strval($value);
    }

    public function getNilaiAttribute($value)
    {
        return strval($value);
    }
}
