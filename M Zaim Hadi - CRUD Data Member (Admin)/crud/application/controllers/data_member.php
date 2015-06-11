<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
//nama class harus diawali dengan kapital, walaupun nama file semua kecil
class Data_member extends CI_Controller {
 
 public function index()
 {
 $this->load->helper('url'); 
          $this->load->database();//memanggil pengaturan database dan mengaktifkannya 
          $this->load->model('m_data_member');//memanggil model m_data_produk
          $data['data_member'] = $this->m_data_member->list_data();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['data_produk']
          $this->load->view('v_data_member',$data);//memanggil view yang nanti kita akan buat dan memasukan $data dari model tadi 
 }
 public function Input()
{
      $this->load->helper('form');//memanggil helper form nanti penggunaannya di v_input_produk.php
      $data['type']="INPUT";// definisi type, karena nanti juga ada edit
      $this->load->view('v_input_member',$data);// memanggil view v_input_produk.php
}
 
public function Edit()
{
      $this->load->helper('form');//memanggil helper form nanti penggunaannya di v_input_produk.php
  
      $this->load->database();//memanggil pengaturan database dan mengaktifkannya
      $this->load->model('m_data_member');//memanggil model m_data_produk.php
  
      $id = $this->input->get('member');//mengambil param produk dari get
      $data['member'] = $this->m_data_member->getEdit($id);
      $data['type']="EDIT";// definisi type, karena nanti juga ada edit
      $this->load->view('v_input_member',$data);// memanggil view v_input_produk.php
}
public function Post(){
     $this->load->database();//memanggil pengaturan database dan mengaktifkannya
     $this->load->model('m_data_member');//memanggil model m_data_produk.php
 
     //mengambil data dari post memasukan ke array agar lebih mudah 
     $param = array(
       'Nama' => $this->input->post('Nama'),
       'Alamat' => $this->input->post('Alamat'),
       'Keterangan'=> $this->input->post('Keterangan')
       );
     //jika simpan == input 
     if($this->input->post('simpan')=="INPUT"){
          $this->m_data_member->input($param); 
     }else
     if($this->input->post('simpan')=="EDIT"){
          $id= $this->input->post('Id');
          $this->m_data_member->edit($param,$id); 
     }
 
      //memanggil helper url untuk fungsi redirect
      $this->load->helper('url');
      //mengalihkan ke list data produk setelah input atau edit selesai
      redirect('data_member','refresh');
     }
public function Delete(){
   $this->load->database();//memanggil pengaturan database dan mengaktifkannya
   $this->load->model('m_data_member');//memanggil model m_data_produk.php
   $id = $this->input->get('member');
   $this->m_data_member->delete($id);
 
   $this->load->helper('url');
   redirect('data_member','refresh');
}
}