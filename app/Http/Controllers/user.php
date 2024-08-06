<?php

use App\Models\Task;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserControll extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = $this->model("User");
    }

    public function index()
    {
        $userData = $this->user::all();
        echo $userData;
    }

    public function create($data = [])
    {
        $user = User::create($data);
    }
}