<?php
class Sample
{
    use Controller;

    public function __construct()
    {
        if (empty($_SESSION['USER'])) {
            redirect('Auth/login');
        }
    }

    public function index()
    {
        $data['page'] = "Dashboard";
        $data['pagegroup'] = "";
        $data['User'] = $_SESSION['USER']->email;
        $user = new Demo_model;
        $user->set_table('customer');
        $row = $user->singleQuery("SELECT COUNT(`id`) as COUNT FROM `customer`;");
        $row2 = $user->singleQuery("SELECT COUNT(`i_id`) as COUNT FROM `item`;");
        $row3 = $user->singleQuery("SELECT COUNT(`cate_id`) as COUNT FROM `category`;");
        $data['Dashboard'] = array(
            "Customers" => "{$row->COUNT}",
            "Products" => "{$row2->COUNT}",
            "Category" => "{$row3->COUNT}"
        );
        $row = $user->selectAll();
        $data['Dashboard_table'] = $row;
        $this->view('Sample/index', $data);
    }

    public function customer_management()
        {
            $data['page'] = "User List";
            $data['pagegroup'] = "UserManagement";
            $data['User'] = $_SESSION['USER']->email;
            $user = new Demo_model;
            $user->set_table('customer');
            $row = $user->selectAll();
            $data['customer_management'] = $row;
            $this->view('Sample/customer_management', $data);
        }
    
        public function add_customer()
        {
            $data = [];
            $data['page'] = "add_customer";
            $data['pagegroup'] = "UserManagement";
            $data['User'] = $_SESSION['USER']->email;

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $user = new Demo_model;
                $user->set_table('customer');
                $insert_data = array(
                    "username"       => $_POST['inputUsername'], 
                    "password"       => $_POST['inputPassword'],
                    "name"           => $_POST['inputName'],
                    "email"          => $_POST['inputEmail'],
                    "address"        => $_POST['inputAddress'],
                    "dob"            => $_POST['inputDateOfBirth'],
                    "phone_number"   => $_POST['inputPhoneNumber'],
                );
                $user->insert($insert_data);
                redirect('Sample/customer_management');
            }
            $this->view('Sample/add_customer', $data);
        }

        public function update_customer()
        {
            $data = [];
            $data['page'] = "Update User";
            $data['pagegroup'] = "UserManagement";
            $data['User'] = $_SESSION['USER']->email;
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $user = new Demo_model;
                $user->set_table('customer');
                $update_data = array(
                    "username"       => $_POST['inputUsername'], 
                    "password"       => $_POST['inputPassword'],
                    "name"           => $_POST['inputName'],
                    "email"          => $_POST['inputEmail'],
                    "address"        => $_POST['inputAddress'],
                    "dob"            => $_POST['inputDateOfBirth'],
                    "phone_number"   => $_POST['inputPhoneNumber'],
                );
                $user->update($_POST['inputId'], $update_data, "id");
                redirect('Sample/update_customer');
            }
            if (!empty($_GET['id'])) {
                $user = new Demo_model;
                $user->set_table('customer');
                $arr['id'] = $_GET['id'];
                $data['update_customer'] = $user->selectFirst($arr);
                $this->view('Sample/update_customer', $data);
            } else {
                redirect('Sample/customer_management');
            }
        }


        public function delete_customer()
        {
            $data = [];
            $data['page'] = "Delete User";
            $data['pagegroup'] = "UserManagement";
            $data['User'] = $_SESSION['USER']->email;
            $user = new Demo_model;
            $user->set_table('customer');
            $row = $user->customQuery("SELECT `id`,`username`,`name`, `email`,`address`,`dob`,`phone_number` FROM `customer`;");
            $data['customer_table'] = $row;
            if (!empty($_GET['Delete'])) {
                $user->delete($_GET['Delete']);
                redirect('Sample/customer_management');
            }
            $this->view('Sample/delete_customer', $data);
        }
    
    
        public function manage_customer()
        {
            $data = [];
            $data['page'] = "manage_customer";
            $data['pagegroup'] = "";
            $data['User'] = $_SESSION['USER']->email;
            $user = new Demo_model;
            $user->set_table('customer');
            $user->set_limit('100');
            $row = $user->selectAll();
            $data['customer_table'] = $row;
    
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $input = filter_input_array(INPUT_POST);
                if ($input['action'] == 'edit') {
                    $update_field = '';
                    if (isset($input['username'])) {
                        $update_field .= "username='" . $input['username'] . "'";
                    } else if (isset($input['password'])) {
                        $update_field .= "password='" . $input['password'] . "'";
                    }
                    else if (isset($input['name'])) {
                        $update_field .= "name='" . $input['name'] . "'";
                    }
                    else if (isset($input['email'])) {
                        $update_field .= "email='" . $input['email'] . "'";
                    }
                    else if (isset($input['address'])) {
                        $update_field .= "address='" . $input['address'] . "'";
                    }
                    else if (isset($input['dob'])) {
                        $update_field .= "dob='" . $input['dob'] . "'";
                    }
                    else if (isset($input['phone_number'])) {
                        $update_field .= "phone_number='" . $input['phone_number'] . "'";
                    }
                    if ($update_field && $input['id']) {
                        $sql = "UPDATE `customer` SET $update_field WHERE `id`='" . $input['id'] . "';";
                        $user->customQuery($sql);
                        var_dump($sql);
                    }
                }
            }
            $this->view('Sample/manage_customer', $data);
        }

       public function add_product()
    {
        $data = [];
        $data['page'] = "add_product";
        $data['pagegroup'] = "UserManagement";
        $data['User'] = $_SESSION['USER']->email;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('item');
            $insert_data = array(
                "i_name" => $_POST['inputName'], 
                "i_des" => $_POST['inputDescription'],
                "i_cate" => $_POST['inputCategory'], 
                "i_sub_cate" => $_POST['inputSubCategory'],
                "i_attach" => $_POST['inputAttachment'], 
                "i_stock" => $_POST['inputStock'],
                "i_brand" => $_POST['inputBrand'], 
                "i_quntity" => $_POST['inputQuantity'],
                "i_expire_date" => $_POST['inputExpireDate'], 
                "i_mani_date" => $_POST['inputManufacturerDate'],
                "price" => $_POST['inputPrice']
  
            );
            $user->insert($insert_data);
            redirect('Sample/product_management');
        }
        $this->view('Sample/add_product', $data);
    }

public function product_management()
    {
        $data['page'] = "product_management";
        $data['pagegroup'] = "UserManagement";
        $data['User'] = $_SESSION['USER']->email;
        $user = new Demo_model;
        $user->set_table('item');
        $user->set_order_column('i_id');
        $row = $user->selectAll();
        $data['product_management'] = $row;
        $this->view('Sample/product_management', $data);
    }

    public function update_product()
    {
        $data = [];
        $data['page'] = "update_product";
        $data['pagegroup'] = "UserManagement";
        $data['User'] = $_SESSION['USER']->email;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('item');
            $update_data = array(
                "i_name" => $_POST['inputName'], 
                "i_des" => $_POST['inputDescription'],
                "i_cate" => $_POST['inputCategory'], 
                "i_sub_cate" => $_POST['inputSubCategory'],
                "i_attach" => $_POST['inputAttachment'], 
                "i_stock" => $_POST['inputStock'],
                "i_brand" => $_POST['inputBrand'], 
                "i_quntity" => $_POST['inputQuantity'],
                "i_expire_date" => $_POST['inputExpireDate'], 
                "i_mani_date" => $_POST['inputManufacturerDate'],
                "price" => $_POST['inputPrice']
            );
            $user->update($_POST['inputId'], $update_data, "i_id");
            redirect('Sample/product_management');
        }
        if (!empty($_GET['i_id'])) {
            $user = new Demo_model;
            $user->set_table('item');
            $arr['i_id'] = $_GET['i_id'];
            $data['product_management'] = $user->selectFirst($arr);
            $this->view('Sample/update_product', $data);
        } else {
            redirect('Sample/product_management');
        }
    }

        public function delete_product()
    {
        $user = new Demo_model;
        $user->set_table('item');
        if (!empty($_GET['Delete'])) {
            $user->delete($_GET['Delete'],'i_id');
            redirect('Sample/product_management');
        }
    }
       
    // public function List_User()
    // {
    //     $data['page'] = "User List";
    //     $data['pagegroup'] = "UserManagement";
    //     $data['User'] = $_SESSION['USER']->email;
    //     $user = new Demo_model;
    //     $user->set_table('users');
    //     $row = $user->selectAll();
    //     $data['Users_table'] = $row;
    //     $this->view('Sample/List_User', $data);
    // }

  
    // public function Update_User()
    // {
    //     $data = [];
    //     $data['page'] = "Update User";
    //     $data['pagegroup'] = "UserManagement";
    //     $data['User'] = $_SESSION['USER']->email;
    //     if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //         $user = new Demo_model;
    //         $user->set_table('users');
    //         $update_data = array(
    //             "email" => $_POST['inputEmail'], 
    //             "password" => $_POST['inputPassword'], 
    //             "date" => $_POST['inputDate']
    //         );
    //         $user->update($_POST['inputId'], $update_data, "id");
    //         redirect('Sample/List_User');
    //     }
    //     if (!empty($_GET['id'])) {
    //         $user = new Demo_model;
    //         $user->set_table('users');
    //         $arr['id'] = $_GET['id'];
    //         $data['Manage_User'] = $user->selectFirst($arr);
    //         $this->view('Sample/Update_User', $data);
    //     } else {
    //         redirect('Sample/List_User');
    //     }
    // }

    // public function Add_User()
    // {
    //     $data = [];
    //     $data['page'] = "Add User";
    //     $data['pagegroup'] = "UserManagement";
    //     $data['User'] = $_SESSION['USER']->email;
    //     if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //         $user = new Demo_model;
    //         $user->set_table('users');
    //         $insert_data = array(
    //             "email" => $_POST['inputEmail'], 
    //             "password" => $_POST['inputPassword']
    //         );
    //         $user->insert($insert_data);
    //         redirect('Sample/List_User');
    //     }
    //     $this->view('Sample/Add_User', $data);
    // }

    // public function Delete_User()
    // {
    //     $data = [];
    //     $data['page'] = "Delete User";
    //     $data['pagegroup'] = "UserManagement";
    //     $data['User'] = $_SESSION['USER']->email;
    //     $user = new Demo_model;
    //     $user->set_table('users');
    //     $row = $user->customQuery("SELECT `id`, `email` FROM `users`;");
    //     $data['User_table'] = $row;
    //     if (!empty($_GET['Delete'])) {
    //         $user->delete($_GET['Delete']);
    //         redirect('Sample/List_User');
    //     }
    //     $this->view('Sample/Delete_User', $data);
    // }

    // public function Manage_User()
    // {
    //     $data = [];
    //     $data['page'] = "Manage User";
    //     $data['pagegroup'] = "";
    //     $data['User'] = $_SESSION['USER']->email;
    //     $user = new Demo_model;
    //     $user->set_table('users');
    //     $user->set_limit('100');
    //     $row = $user->selectAll();
    //     $data['Users_table'] = $row;

    //     if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //         $input = filter_input_array(INPUT_POST);
    //         if ($input['action'] == 'edit') {
    //             $update_field = '';
    //             if (isset($input['email'])) {
    //                 $update_field .= "email='" . $input['email'] . "'";
    //             } else if (isset($input['password'])) {
    //                 $update_field .= "password='" . $input['password'] . "'";
    //             }
    //             if ($update_field && $input['id']) {
    //                 $sql = "UPDATE `users` SET $update_field WHERE `id`='" . $input['id'] . "';";
    //                 $user->customQuery($sql);
    //                 var_dump($sql);
    //             }
    //         }
    //     }
    //     $this->view('Sample/Manage_User', $data);
    // }
 }
