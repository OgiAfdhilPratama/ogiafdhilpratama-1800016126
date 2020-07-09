<?php namespace App\Controllers;

use App\Models\User_model;

class Login extends BaseController
{
   public function index()
   {
      return view('Login_view');
   }
   
   public function Login_action() 
   {
      $muser = new User_model();

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
         session()->setFlashdata('gagal', 'Username / Password salah silahkan di check ulang ');
         return redirect()->to(base_url('Login'));
      }
   }

   public function Logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('Login'));
   }

   //--------------------------------------------------------------------

}