<?php namespace App\Controllers;

use App\Models\M_user;

class Login extends BaseController
{
   public function index()
   {
      return view('user_form');
   }
   
   public function login_action() 
   {
      $muser = new M_user();

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
         session()->setFlashdata('gagal', 'Username Atau Password Salah');
         return redirect()->to(base_url('login'));
      }
   }

   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('login'));
   }

   //--------------------------------------------------------------------

}