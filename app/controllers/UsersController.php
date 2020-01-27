<?php

class UsersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $users = Users::find();
        $this->view->title = "Phalcon - Users";
        $this->view->users = $users;
     // dd($users);
    }

    public function showAction($userId)
    {
        $conditions = ['idUser' => $userId];
        $users = Users::findFirst([
            'conditions' => 'id_user=:idUser:',
            'bind' => $conditions,
        ]);
        $this->view->title = "Phalcon - User";
        $this->view->users = $users;
     // dd($users);
    }

    public function createAction()
    {
        $this->view->title = "Phalcon - Create user";
    }

    public function saveAction()
    {
        $username = $this->request->get('username');
        $password = $this->request->get('password');
        $level = $this->request->get('level');

        $user = new Users();
        $user->username = $username;
        $user->password = md5($password);
        $user->level = $level;

        if ($this->request->isPost()) {
            if ($user->create()) {
                $this->flashSession->success( 'Your information was stored correctly!');
                return $this->response->redirect('users');
            }
        } else {
            $this->flash->error('Users form is not valid.');
        }
    }

    public function editAction($idUser)
    {
        $conditions = ['idUser' => $idUser];
        $users = Users::findFirst([
            'conditions' => 'id_user=:idUser:',
            'bind' => $conditions,
        ]);
        $this->view->title = "Phalcon - User";
        $this->view->users = $users;

        if ($this->request->isPost()) {
            $username = $this->request->get('username');
            $password = $this->request->get('password');
            $level = $this->request->get('level');

            $users->username = $username;
            $users->password = $password;
            $users->level = $level;

            if ($users->save()) {
                return $this->response->redirect('users');
            } else {
                $messages = $users->getMessages();
                foreach ($messages as $message) {
                    $this->flash->error($message);
                }
            }
        }
    }

    public function deleteAction($idUser)
    {
        $conditions = ['idUser' => $idUser];
        $user = Users::findFirst([
            'conditions' => 'id_user=:idUser:',
            'bind' => $conditions,
        ]);
        if ($user->delete() === false) {
            $messages = $user->getMessages();
            foreach ($messages as $message) {
                $this->flash->error($message);
            }
        } else {
            $this->flashSession->error('Your information was deleted!');
            return $this->response->redirect('users');
        }
    }
}

