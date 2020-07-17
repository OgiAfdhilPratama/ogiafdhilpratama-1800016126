<?php namespace App\Controllers;

<<<<<<< HEAD
use App\Models\M_user;
=======
use App\Models\User_model;
>>>>>>> 1114ed5f2a6011e6929966af47ab8e63cc34e99b

class Login extends BaseController
{
   public function index()
   {
<<<<<<< HEAD
      return view('user_form');
   }
   
   public function login_action() 
   {
      $muser = new M_user();
=======
      return view('Login_view');
   }
   
   public function Login_action() 
   {
      $muser = new User_model();
>>>>>>> 1114ed5f2a6011e6929966af47ab8e63cc34e99b

      $email = $this->request->getPost('email');
      $password = $this->request->getPost('password');

      $cek = $muser->get_data($email, $password);

      if (($cek['user_email'] == $email) && ($cek['user_pass'] == $password))
      {
         session()->set('user_email', $cek['user_email']);
         session()->set('user_nama', $cek['user_nama']);
         session()->set('user_id', $cek['user_id']);
         return redirect()->to(base_url('user'));
      } else {
<<<<<<< HEAD
         session()->setFlashdata('gagal', 'Username Atau Password Salah');
         return redirect()->to(base_url('login'));
      }
   }

   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('login'));
=======
         session()->setFlashdata('gagal', 'Username / Password salah silahkan di check ulang ');
         return redirect()->to(base_url('Login'));
      }
   }

   public function Logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('Login'));
>>>>>>> 1114ed5f2a6011e6929966af47ab8e63cc34e99b
   }

   //--------------------------------------------------------------------

}