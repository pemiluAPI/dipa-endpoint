<?php

class AnggaranIdentity extends \Eloquent{
    protected $fillable = array('id','anggaran_id','kementrian_code','kementrian_name','unit_code', 'unit_name', 'nilai');
    protected $hidden = array('id','anggaran_id', 'created_at', 'updated_at');
    protected $table = 'anggaran_identities';

    public function anggaran()
    {
        return $this->belongsTo('Anggaran', 'anggaran_id', 'id');
    }

    public function getUnitCodeAttribute($value)
    {
        return strval($value);
    }
}
