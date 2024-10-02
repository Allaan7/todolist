<?php  

namespace App\Controllers;

use App\Models\Task;
use App\Utils\AbstractController;

class TaskController extends AbstractController
{
    public function task()
    {
        if(isset($_POST['taskTitle'], $_POST['taskContent'] )){
            $this->check('taskTitle', $_POST['taskTitle']);
            $this->check('taskContent', $_POST['taskContent']);

            if(empty($this->arrayError)) {
                $title = htmlspecialchars($_POST['taskTitle']);
                $content = htmlspecialchars($_POST['taskContent']);
                $startDate = htmlspecialchars($_POST['startDate']);
                $stopDate = htmlspecialchars($_POST['stopDate']);
                $dateTime = date('Y-m-d');

                $task = new Task(null, $title, $content, $dateTime, $startDate, $stopDate, null,null, null);
                $task->saveTask();
                $this->redirectToRoute('/');
            }
        } 
        require_once(__DIR__ . "/../Views/task.view.php");
    } 

}



// 