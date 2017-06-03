<?php


namespace App\Repositories;


use App\Model\UserModel;

class UserRepository
{
    use BaseRepository;
    protected  $model;



    public function __construct(UserModel $userModel)
    {

        $this->model = $userModel;
    }

}