<?php

namespace App\Controllers;

<<<<<<< HEAD
use App\Models\M_user;

=======
>>>>>>> 1114ed5f2a6011e6929966af47ab8e63cc34e99b
class User extends BaseController
{
   public function index()
   {
      if (session()->get('user_nama') == '') {
<<<<<<< HEAD
         session()->setFlashdata('gagal', 'Login Terlebih Dahulu');
         return redirect()->to(base_url('login'));
      }

      $model = new M_user();
      $data['user'] = $model->get_user();

      return view('user_view', $data);
   }

   public function tambahdata()
   {
      echo view('view_tambah_data');
   }

   public function save()
   {
      $model = new M_user();
      $data = [
         'user_nama' => $this->request->getPost('user_nama'),
         'user_email' => $this->request->getPost('user_email'),
         'user_pass' => $this->request->getPost('user_pass')
      ];
      $model->saveUser($data);
      return redirect()->to('/user');
   }

   public function delete($id)
   {
      $model = new M_user();
      $model->deleteUser($id);
      return redirect()->to('/user');
   }

   public function edit($id)
   {
      $model = new M_user();
      $data['user'] = $model->get_user($id)->getRow();
      return view('user_view_edit', $data);
   }

   public function updateData()
   {
      $model = new M_user();
      $id = $this->request->getPost('user_id');
      $data = [
         'user_nama' => $this->request->getPost('user_nama'),
         'user_email' => $this->request->getPost('user_email'),
         'user_pass' => $this->request->getPost('user_pass')
      ];
      $model->updateUser($data, $id);
      return redirect()->to('/user');
=======
         session()->setFlashdata('gagal', 'Anda belum login silahkan login terlebih dahulu');
         return redirect()->to(base_url('Login'));
      }
      return view('User_view');
>>>>>>> 1114ed5f2a6011e6929966af47ab8e63cc34e99b
   }

   //--------------------------------------------------------------------

<<<<<<< HEAD
}
=======
}
>>>>>>> 1114ed5f2a6011e6929966af47ab8e63cc34e99b
