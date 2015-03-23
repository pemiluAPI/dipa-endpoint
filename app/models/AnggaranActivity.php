<?php

class AnggaranActivity extends \Eloquent{
    protected $fillable = array('id','anggaran_id','code','description','anggaran_keterkaitan_code', 'volume', 'satuan', 'nilai');
    protected $hidden = array('id','anggaran_id','created_at', 'updated_at');
    protected $table = 'anggaran_activities';

    public function anggaran()
    {
        return $this->belongsTo('Anggaran');
    }

    public function getCodeAttribute($value)
    {
        return strval($value);
    }

    public function getVolumeAttribute($value)
    {
        return strval($value);
    }

    public function getNilaiAttribute($value)
    {
        return strval($value);
    }
}
