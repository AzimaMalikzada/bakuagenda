<?php
class AdminController extends CI_Controller{

    public function index(){
        $this->load->view('admin/auth-login-basic');

    }
    public function dashboard(){
        $this->load->view('admin/index');

    }

    public function news_list(){
        $data["get_all"] = $this->db->order_by('n_id','DESC')->get("news")->result();
        $this->load->view('admin/news/list',$data);

    }

    public function news_create(){
        $this->load->view('admin/news/create');

    }
     
    public function news_create_act(){
        $title = $_POST['title'];
        $descr = $_POST['description'];
        $date = $_POST['date'];
        $category= $_POST['category'];
        $status = $_POST['status'];

        if(!empty($title) && !empty($descr) && !empty($date) && !empty($category) && !empty($status )){ 
                $config['upload_path']          = './uploads/news/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|mp4';
                $config['remove_spaces']        = true;
                
        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        if($this->upload->do_upload('image')){
        $upload_name = $this->upload->data('file_name');
        $upload_ext = $this->upload->data('file_ext');

        $data = [
                'n_title'       => $title,
                'n_description' => $descr,
                'n_date'        => $date,
                'n_category'    => $category,
                'n_status'      => $status,
                'n_file'        => $upload_name,
                'n_file_ext'    => $upload_ext,
                'n_create_date' => date("Y-m-d H:i:s"),
           ];
            $this->db->insert('news', $data);
            redirect(base_url('a_news_list'));
        

        }else{
            $data = [
                'n_title'       => $title,
                'n_description' => $descr,
                'n_date'        => $date,
                'n_category'    => $category,
                'n_status'      => $status,
              
                'n_create_date' => date("Y-m-d H:i:s"),
           ];
            $this->db->insert('news', $data);
            redirect(base_url('a_news_list'));
        
        }

       }else{
        redirect($_SERVER['HTTP_REFERER']);

         }

    } 

    public function delete_news($id){

        $this->db->where('n_id', $id)->delete('news');
        redirect(base_url('a_news_list'));

    }      


    public function update_news($id){
        $data['single_news'] = $this->db->where('n_id',$id)->get('news')->row();
        
        if($data['single_news']){
            $this->load->view('admin/news/edit',$data);

        }else{
            redirect(base_url('a_news_list'));
        }
         
}
    
    public function update_newsAct($id){
         
        $title = $_POST['title'];
        $descr = $_POST['description'];
        $date = $_POST['date'];
        $category= $_POST['category'];
        $status = $_POST['status'];

        if(!empty($title) && !empty($descr) && !empty($date) && !empty($category) && !empty($status )){ 
                     
            $config['upload_path']          = './uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|mp4';
            $config['remove_spaces']        = true;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);


            if($this->upload->do_upload('image')){
            $upload_name = $this->upload->data('file_name');
            $upload_ext = $this->upload->data('file_ext');


            $data = [
                'n_title'       => $title,
                'n_description' => $descr,
                'n_date'        => $date,
                'n_category'    => $category,
                'n_status'      => $status,
                'n_file'        => $upload_name,
                'n_file_ext'    => $upload_ext,
                'n_update_date' => date("Y-m-d H:i:s"),
           ];

                 $this->db->where('n_id', $id)->update('news', $data);

                 redirect(base_url('a_news_list'));
        

        }else{
            $data = [
                'n_title'       => $title,
                'n_description' => $descr,
                'n_date'        => $date,
                'n_category'    => $category,
                'n_status'      => $status,
                'n_create_date' => date("Y-m-d H:i:s"),
           ];


           $this->db->where('n_id', $id)->update('news', $data);
            
            redirect(base_url('a_news_list'));
        
        }

            }else{
               redirect($_SERVER['HTTP_REFERER']);

            }


     }

    public function view_news($id){
        $data['single_news'] = $this->db->where('n_id',$id)->get('news')->row_array();
        $this->load->view('admin/news/detail',$data);

            
    }


}