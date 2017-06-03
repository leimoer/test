<?php


namespace App\Repositories;


trait BaseRepository
{

    //用户添加方法
    public function createDate(array $data)
    {

        return $this->model->create($data);


    }

    //用户列表
    public function getList(array $where,$number=4)
    {

        return $this->model->where($where)->paginate($number);
    }


    //用户修改
    public  function showFile( $id)
    {
//         return $this->model->where(['id'=>$id])->select();
         return $this->model->where(['id'=>$id])->first();
//         return $this->model->find($id);
    }

    public  function updateDo(array $data,$where)
    {

        return $this->model->where($where)->update($data);
    }

    //用户删除
    public  function deleteDo($id)
    {
        return $this->model->where(['id'=>$id])->delete();
    }
}