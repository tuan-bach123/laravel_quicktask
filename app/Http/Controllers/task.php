<?php

use App\Models\Task;
use App\Http\Controllers\Controller;

class TaskControll extends Controller
{
    protected $task;

    public function __construct()
    {
        $this->task = $this->model("Task");
    }

    public function index()
    {
        $taskData = $this->task::all();
        echo $taskData;
    }

    public function create($data = [], $user_id)
    {
        $task = Task::create($data);

        if ($user_id) {
            $task->user_id = $user_id;
            $task->save();
        }
    }
}