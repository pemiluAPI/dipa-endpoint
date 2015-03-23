<?php

class Anggaran extends \Eloquent{
    protected $fillable = array('id','nomor','tahun','anggaran_identity_id','anggaran_keterkaitan_id');
    protected $hidden = array('anggaran_identity_id', 'anggaran_keterkaitan_id', 'created_at', 'updated_at');
    protected $table = 'anggarans';

    public function anggaranIdentity()
    {
        return $this->hasOne('AnggaranIdentity', 'anggaran_id', 'anggaran_identity_id');
    }

    public function anggaranKeterkaitans()
    {
        return $this->hasMany('AnggaranKeterkaitan', 'anggaran_id');
    }

    public function anggaranActivities()
    {
        return $this->hasMany('AnggaranActivity', 'anggaran_id');
    }

    public function allAnggaransPaged($limit, $offset, $params=array())
    {
        return Anggaran::limit($limit)->offset($offset)->get()->toArray();
    }

    public function oneAnggaran($anggaran_id)
    {
        return Anggaran::find($anggaran_id)->with(array('anggaranIdentity', 'anggaranKeterkaitans', 'anggaranActivities'))->get()->toArray();
    }
}
