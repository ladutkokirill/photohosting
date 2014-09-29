<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Photo extends ORM
{

    protected $_table_name = 'photo';
    protected $_primary_key = 'id';
    protected $_db_group = 'default';

    public function update_view()
    {
        $this->rating++;
//            
    }

    public function editImageWidth($id)
    {
        $query = DB::update('photo')
                ->set(array('width' => DB::expr($_POST["width"])))
                ->where('id', '=', $id)
                ->execute();
    }

    public function editImageHeigth($id)
    {
        $query = DB::update('photo')
                ->set(array('heigth' => DB::expr($_POST["heigth"])))
                ->where('id', '=', $id)
                ->execute();
    }

    public function where_top()
    {
        return $this->order_by(DB::expr('COUNT(`rating`)'))
                        ->limit(10);
    }

    public function topImage()
    {
        $query = DB::select('way', array(DB::expr('COUNT(`rating`)'), 'count'))
                ->from('photo')
                ->group_by('rating')
                ->order_by('rating', 'desc')
                ->limit(10);
        return $query->execute();
    }

    public function countFile()
    {
//       

        $query = DB::select(array(DB::expr('COUNT("*")'), 'count'))
                        ->from('photo')->execute()->current();

        return $query['count'];
    }

    public function countFileDay()
    {

        $query = DB::select(array(DB::expr('COUNT("*")'), 'count'))
                ->from('photo')
                ->where('upload_date', '>', DB::expr('NOW() - INTERVAL 1 DAY'))
                ->execute()
                ->current();
        //print_r($query);die;
        return $query['count'];
    }

    public function countByCreateToday()
    {

        $query = DB::select('way', array(DB::expr('COUNT(`rating`)'), 'count'))
                ->from('photo')
                ->group_by('rating')
                ->where('upload_date', '>', DB::expr('NOW() - INTERVAL 1 DAY'))
                ->order_by('rating', 'desc')
                ->limit(10);
        return $query->execute();
    }

    public function countByCreateWeek()
    {

        $query = DB::select('way', array(DB::expr('COUNT(`rating`)'), 'count'))
                ->from('photo')
                ->group_by('rating')
                ->where('upload_date', '>', DB::expr('NOW() - INTERVAL 7 DAY'))
                ->order_by('rating', 'desc')
                ->limit(10);
        return $query->execute();
    }

}
