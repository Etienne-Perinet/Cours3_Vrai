<?php
    require_once("controller.php");

    require_once("view.php");

    class UserController extends Controller
    {
      
       protected $user_model;
       private const SHOW_USERS_TITLE = "Les usagers";

       public function __construct($user_model)
       {
        $this->user_model = $user_model;

       }

       public function show_users()
       {
          
           $users = $this->user_model->get_all_users();
           $data = array("users"=>$users);
           $view = new View("usersView.php");
           $content = $view->render($data);
           $this->render_template_with_content(self::SHOW_USERS_TITLE, $content);
       }
       
       public function show_user_one_user($id)
       {
          
           $users = $this->user_model->get_user_by_id($id);
           $data = array("users"=>$users);
           $view = new View("usersView.php");
           echo $view->render($data);
       }
    }
?>