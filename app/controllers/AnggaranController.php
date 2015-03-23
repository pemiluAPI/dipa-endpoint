<?php

class AnggaranController extends BaseController {

    protected $anggaran;

    public function __construct(Anggaran $anggaran)
    {
        $this->anggaran = $anggaran;
    }


    public function getAll()
    {
        $limit = Input::get('limit', 100);
        $offset = Input::get('offset', 0);
        $params = array();

        return XApi::parser($this->anggaran->allAnggaransPaged($limit, $offset, $params), false);
    }

    public function getOne($id)
    {
        return XApi::parser($this->anggaran->oneAnggaran($id), false);
    }
}
