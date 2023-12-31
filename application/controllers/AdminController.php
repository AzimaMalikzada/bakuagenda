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

           $data = $this->security->xss_clean($data);
        // print_r("<pre>");
        // print_r($data);
        //  die();
                
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
        // $data['admin'] = $this->db->select('a_id, a_name, a_username, a_email, a_status, a_img')->where('a_id', $_SESSION['admin_id'])->get('admin')->row_array();

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

        $title_az = $_POST['title_az'];
        $descr_az = $_POST['description_az'];

        $title_en = $_POST['title_en'];
        $descr_en = $_POST['description_en'];


        $title_ru = $_POST['title_ru'];
        $descr_ru = $_POST['description_ru'];


        $date = $_POST['date'];
        $category= $_POST['category'];
        // $page       = $_POST['page'];
        $status = $_POST['status'];

        if(!empty($title_az) && !empty($descr_az) && !empty($date) && !empty($category) && !empty($status )){ 
                $config['upload_path']          = './uploads/news/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|mp4';
                $config['remove_spaces']        = true;
                
        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        if($this->upload->do_upload('image')){
        $upload_name = $this->upload->data('file_name');
        $upload_ext = $this->upload->data('file_ext');

        $data = [
                'n_title_az'       => $title_az,
                'n_title_en'       => $title_en,
                'n_title_ru'       => $title_ru,


                'n_description_az' => $descr_az,
                'n_description_en' => $descr_en,
                'n_description_ru' => $descr_ru,


                'n_date'        => $date,
                'n_category'    => $category,
                // 'n_page'        => $page,
                'n_status'      => $status,
                'n_file'        => $upload_name,
                'n_file_ext'    => $upload_ext,
                // 'n_status'      => "Deactive",
                'n_creator_id'  => $_SESSION['admin_id'],
                'n_create_date' => date("Y-m-d H:i:s"),
            ];

           $data = $this->security->xss_clean($data);

            $this->db->insert('news', $data);
            redirect(base_url('a_news_list'));
        

        }else{
            $data = [
                'n_title_az'       => $title_az,
                'n_title_en'       => $title_en,
                'n_title_ru'       => $title_ru,


                'n_description_az' => $descr_az,
                'n_description_en' => $descr_en,
                'n_description_ru' => $descr_ru,
                'n_date'        => $date,
                'n_category'    => $category,
                // 'n_page'        => $page,
                'n_status'      => $status,
                'n_creator_id'  => $_SESSION['admin_id'],
                'n_create_date' => date("Y-m-d H:i:s"),

           ];
           $data = $this->security->xss_clean($data);

            $this->db->insert('news', $data);
            redirect(base_url('a_news_list'));
        
        }

       }else{
        redirect($_SERVER['HTTP_REFERER']);

         }

    } 

    public function delete_news($id){
        $id = $this->security->xss_clean($id);


        $this->db->where('n_id', $id)->delete('news');
        redirect(base_url('a_news_list'));

    }      


    public function update_news($id){
        $id = $this->security->xss_clean($id);

        $data['category'] = $this->db->get('category')->result_array();

        $data['single_news'] = $this->db->where('n_id',$id)->get('news')->row();
        // print_r('<pre>');
        // print_r ($data['category']);
        // die();
        if($data['single_news']){
            $this->load->view('admin/news/edit',$data);

        }else{
            redirect(base_url('a_news_list'));
        }
         
}
    
    public function update_newsAct($id){
        
        $id = $this->security->xss_clean($id);

        $title_az = $_POST['title_az'];
        $descr_az = $_POST['description_az'];
       
        $title_en = $_POST['title_en'];
        $descr_en = $_POST['description_en'];


        $title_ru = $_POST['title_ru'];
        $descr_ru = $_POST['description_ru'];

        $date     = $_POST['date'];
        $category = $_POST['category'];
        $status   = $_POST['status'];

        if(!empty($title_az) && !empty($descr_az) && !empty($date) && !empty($category) && !empty($status)){ 
            
            $config['upload_path']          = './uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|mp4';
            $config['remove_spaces']        = true;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);



            if($this->upload->do_upload('image')){
                $upload_name = $this->upload->data('file_name');
                $upload_ext = $this->upload->data('file_ext');


                $data = [
                    
                    'n_title_az'       => $title_az,
                    'n_title_en'       => $title_en,
                    'n_title_ru'       => $title_ru,


                    'n_description_az' => $descr_az,
                    'n_description_en' => $descr_en,
                    'n_description_ru' => $descr_ru,


                    'n_date'        => $date,
                    'n_category'    => $category,
                    'n_status'      => $status,
                    'n_file'        => $upload_name,
                    'n_file_ext'    => $upload_ext,
                    'n_updater_id'  => $_SESSION['admin_id'],
                    'n_update_date' => date("Y-m-d H:i:s"),

                ];
                
                $data = $this->security->xss_clean($data);
               
                $this->db->where('n_id', $id)->update('news', $data);
                redirect(base_url('a_news_list'));
        

            }else{
           
                $data = [
                    
                    'n_title_az'       => $title_az,
                    'n_title_en'       => $title_en,
                    'n_title_ru'       => $title_ru,


                    'n_description_az' => $descr_az,
                    'n_description_en' => $descr_en,
                    'n_description_ru' => $descr_ru,


                    'n_date'        => $date,
                    'n_category'    => $category,
                    'n_status'      => $status,
                    
                    'n_updater_id'  => $_SESSION['admin_id'],
                    'n_update_date' => date("Y-m-d H:i:s"),

                ];
                
                $data = $this->security->xss_clean($data);
               
                $this->db->where('n_id', $id)->update('news', $data);
                redirect(base_url('a_news_list'));
        
            }

        }else{
            // $this->session->set_flashdata('err', 'Bosluq buraxmayin!');
            redirect($_SERVER['HTTP_REFERER']);
        }


    }

    public function view_news($id){

        $id = $this->security->xss_clean($id);

        $data['single_news'] = $this->db
        ->where('n_id',$id)
        ->join('category','category.c_id = news.n_category' , 'left')
        ->get('news')->row_array();
        $this->load->view('admin/news/detail',$data);

            
    }


}