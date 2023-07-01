<?php
class AdminController extends CI_Controller{

    public function index(){
        unset(
            $_SESSION['admin_id'],
            $_SESSION['admin_username']
        );
        $this->load->view('admin/auth-login-basic');

    }
    
    public function loginAct(){

           $username = $_POST['email-username'];
           $password = $_POST['password'];

           if(!empty($username) && !empty($password)){

           $data = [
            'a_username' => $username,
            'a_password' => md5($password), 
            'a_status'   => "Active",
           ];
                
           $check_admin = $this->db->where($data)->get('admin')->row_array();
           
           if($check_admin){
            $_SESSION['admin_id'] = $check_admin['a_id'];
            $_SESSION['admin_username'] = $check_admin['a_username'];

            redirect(base_url('a_dashboard'));

           }else{
            $this->session->set_flashdata('err', "İstifadəçi adı və ya şifrə yalnışdır!");
            redirect($_SERVER['HTTP_REFERER']);
           }


        }else{

           $this->session->set_flashdata('err', "Boşluq buraxmayın!");
           redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function logout(){
        unset(
            $_SESSION['admin_id'],
            $_SESSION['admin_username']
        );
        $this->session->set_flashdata('success',"Sizi bir daha gözləyəcəyik :)");
        redirect(base_url('a_login'));
    }


    public function dashboard(){
        $data['admin'] = $this->db->select('a_id, a_name, a_username, a_email, a_status, a_img')->where('a_id', $_SESSION['admin_id'])->get('admin')->row_array();
        // print_r('<pre>');
        // print_r($data['admin']);
        // die();

           

        $this->load->view('admin/index',$data);
        

    }

    public function news_list(){
        $data['admin'] = $this->db->select('a_id, a_name, a_username, a_email, a_status, a_img')->where('a_id', $_SESSION['admin_id'])->get('admin')->row_array();

        $data["get_all"] = $this->db
            ->join('category','category.c_id = news.n_category' , 'left')
            ->where('n_creator_id', $_SESSION['admin_id'])
            ->order_by('n_id','DESC')
            ->get("news")->result();

            //    print_r('<pre>');
            //    print_r($data["get_all"]);
            //    die();

        $this->load->view('admin/news/list',$data);
    }

    public function news_create(){

        $data['category'] = $this->db->get('category')->result_array();
       
 
        $this->load->view('admin/news/create',$data);

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
                'n_creator_id'  => $_SESSION['admin_id'],
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
              
                'n_creator_id'  => $_SESSION['admin_id'],
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



        $data['category'] = $this->db->get('category')->result_array();
        $data['single_news'] = $this->db->where('n_id',$id)->get('news')->row();
        
        if($data['single_news']){
            $this->load->view('admin/news/edit',$data);

        }else{
            redirect(base_url('a_news_list'));
        }
         
}
    
    public function update_newsAct($id){
        
         
        $title    = $_POST['title'];
        $descr    = $_POST['description'];
        $date     = $_POST['date'];
        $category = $_POST['category'];
        $status   = $_POST['status'];

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
                'n_updater_id'  => $_SESSION['admin_id'],
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
                'n_updater_id'  => $_SESSION['admin_id'], 
                'n_update_date' => date("Y-m-d H:i:s"),

           ];


           $this->db->where('n_id', $id)->update('news', $data);

            redirect(base_url('a_news_list'));
        
        }

            }else{
               redirect($_SERVER['HTTP_REFERER']);

            }


     }

    public function view_news($id){
        $data['single_news'] = $this->db
        ->where('n_id',$id)
        ->join('category','category.c_id = news.n_category' , 'left')
        ->get('news')->row_array();
        $this->load->view('admin/news/detail',$data);

            
    }


}