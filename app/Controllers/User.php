<?php

namespace App\Controllers;

class User extends BaseController
{
   public function index()
   {
      if (session()->get('user_nama') == '') {
         session()->setFlashdata('gagal', 'Anda belum login silahkan login terlebih dahulu');
         return redirect()->to(base_url('Login'));
      }
      return view('User_view');
   }

   //--------------------------------------------------------------------

}