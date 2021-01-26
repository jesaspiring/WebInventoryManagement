<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserRequest extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('request_model');
        $this->load->model('inventory_model');
        $this->load->helper('date');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['categories'] = $this->request_model->categories();
        $data['accounts'] = $this->request_model->account_autocomplete();
        $this->load->view('user/create_request', $data);
    }

    //---------------------------------Item 

    public function account()
    {
        $name = $this->input->post('account_no');
        if (isset($_POST['account_no'])) {
            $supplierAddress = $this->request_model->account_name($name);
            echo $supplierAddress;
        }
    }

    public function item_brand()
    {
        $name = $this->input->post('id', true);
        $data = $this->request_model->item_brand($name);
        echo json_encode($data);
    }

    public function item_model()
    {
        $name = $this->input->post('id', true);
        $data = $this->request_model->item_model($name);
        echo json_encode($data);
    }

    public function item_description()
    {
        $name = $this->input->post('id', true);
        $data = $this->request_model->item_description($name);
        echo json_encode($data);
    }



    public function new_request()
    {

        $this->form_validation->set_rules('account_no', 'Account No.', 'required|numeric');
        $this->form_validation->set_rules('account_name', 'Account Name', 'required|alpha');

        if ($this->form_validation->run() == FALSE) {
            $data['categories'] = $this->request_model->categories();
            $this->load->view('user/create_request', $data);
        } else {

            $cash_payment_to = $this->input->post('cash_payment_to');
            $cash_advance_to = $this->input->post('cash_advance_to');
            $purchase_from = $this->input->post('purchase_from');
            $job_done_by = $this->input->post('job_done_by');
            $account_no = $this->input->post('account_no');
            $account_name = $this->input->post('account_name');
            $category = $this->input->post('category');
            $user = $this->request_model->get_user_id($this->session->userdata('username'));
            $request_type = $this->input->post('request_type');
            $funds = $this->input->post('funds_avail');

            $date = date("Y-m-d");
            $newRequest = array(
                'userID' => $user,
                'date_requested' => $date,
                'status' => 'Pending Submission',
                'account_no' => $account_no,
                'account_name' => $account_name,
                'request_type' => $request_type,
                'funds_available' => $funds
            );

            $acc = $this->request_model->account_maintenance($account_no, $account_name);
            if (count($acc) == 0) {
                $accnt = array(
                    'account_no' => $account_no,
                    'account_name' => $account_name,
                );
                $this->request_model->account($accnt);
            }

            $add = $this->request_model->addRequest($newRequest);
            // $this->session->set_userdata('category', $category);
            $this->session->set_userdata('requestID', $add);
            redirect('UserRequest/create_request');
        }
    }

    public function create_request()
    {
        $data['requestID'] = $this->request_model->get_request_id($this->session->userdata('requestID'));
        $data['item'] = $this->request_model->display_item();
        $data['categories'] = $this->request_model->categories();
        $data['request_type'] = $this->request_model->request_type($this->session->userdata('requestID'));
        $data['package'] = $this->request_model->package();
        $data['selectedCategory'] = $this->request_model->selectedCategory($this->session->userdata('category'));
        $data['unit'] = $this->request_model->item_unit();
        $data['unit_modal'] = $this->request_model->item_unit_modal();
        $data['maintenance'] = $this->request_model->item_selections();
        $this->load->view('user/new_request', $data);
    }

    public function add_item()
    {
        $this->form_validation->set_rules('item', 'Item', 'required|alpha');
        $this->form_validation->set_rules('brand', 'Brand', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        // $this->form_validation->set_rules('quantity', 'Quantity', 'required|numeric');



        if ($this->form_validation->run() == FALSE) {
            $data['requestID'] = $this->request_model->get_request_id($this->session->userdata('requestID'));
            $data['item'] = $this->request_model->display_item();
            $data['package'] = $this->request_model->package();
            $data['unit'] = $this->request_model->item_unit();
            $data['selectedCategory'] = $this->request_model->selectedCategory($this->session->userdata('category'));
            $this->load->view('user/new_request', $data);
        } else {
            $itemName = $this->input->post('item');
            $brand = $this->input->post('brand');
            $description = $this->input->post('description');
            $unit = $this->input->post('unit');
            $quantity = $this->input->post('quantity');
            $reqID = $this->session->userdata('requestID');
            $model = $this->input->post('model');

            if ($model == "") {
                $model = "N/A";
            }

            $item = array(
                'itemName' => $itemName,
                'itemDescription' => $description,
                'brand' => $brand,
                'unit' => $unit,
                'quantity' => $quantity,
                'requestID' => $reqID,
                'model' => $model
            );

            $this->request_model->insert_item($item);

            $item_maintenance = $this->request_model->maintenance($itemName, $description, $model, $brand);
            if (count($item_maintenance) == 0) {
                $maintenance = array(
                    'itemName' => $itemName,
                    'itemDescription' => $description,
                    'brand' => $brand,
                    'model' => $model
                );
                $this->request_model->item_maintenance($maintenance);
            }

            redirect('UserRequest/create_request');
        }
    }

    public function add_from_category()
    {
        $choice = $this->input->post('category');
        $items = $this->request_model->package_item($choice);
        $reqID = $this->session->userdata('requestID');

        foreach ($items as $item) {
            $newRequest = array(
                'itemName' => $item->item_name,
                'unit' => $item->unit,
                'quantity' => '1',
                'itemDescription' => $item->description,
                'model' => $item->model,
                'brand' => $item->brand,
                'requestID' => $reqID
            );
            $this->request_model->insert_item($newRequest);
        }
        redirect('UserRequest/create_request');
    }

    public function edit_item()
    {
        $item = $this->input->post('item');
        $description = $this->input->post('description');
        $brand = $this->input->post('brand');
        $unit = $this->input->post('unit');
        $quantity = $this->input->post('quantity');
        $itemID = $this->input->post('itemID');
        $reqID = $this->session->userdata('requestID');
        $model = $this->input->post('model');

        $itemDetails = array(
            'itemName' => $item,
            'brand' => $brand,
            'itemDescription' => $description,
            'unit' => $unit,
            'quantity' => $quantity,
            'model' => $model
        );
        $this->request_model->update_item($itemID, $itemDetails);


        redirect('UserRequest/create_request');
    }

    public function delete_item()
    {

        $itemID = $this->input->post('itemID');
        $reqID = $this->session->userdata('requestID');

        $this->request_model->delete_item($itemID);

        redirect('UserRequest/create_request');
    }

    public function delete_all_item()
    {
        $checkbox = $this->input->post('deleteSelected');
        $values = explode(',', $checkbox);
        foreach ($values as $itemID) {
            $this->request_model->delete_item($itemID);
        }
        redirect('UserRequest/create_request');
    }

    public function delete_returned_items()
    {
        $checkbox = $this->input->post('deleteSelected');
        $values = explode(',', $checkbox);
        foreach ($values as $itemID) {
            $this->request_model->delete_item($itemID);
        }
        redirect('UserRequest/edit_returned_request');
    }
    //-------------------------------Request

    public function edit_request()
    {
        $reqID = $this->input->post('requestID');
        $category = $this->input->post('category');
        $this->session->set_userdata('requestID', $reqID);
        $data['selectedCategory'] = $this->request_model->selectedCategory($category);
        $data['requestID'] = $reqID;
        $data['item'] = $this->request_model->display_item();
        $data['package'] = $this->request_model->package();
        $data['selectedCategory'] = $this->request_model->selectedCategory($this->session->userdata('category'));
        $data['unit'] = $this->request_model->item_unit();
        $data['unit_modal'] = $this->request_model->item_unit_modal();
        $data['maintenance'] = $this->request_model->item_selections();
        $this->load->view('user/edit_request', $data);
    }

    public function delete_request()
    {
        $reqID = $this->input->post('requestID');
        $this->request_model->delete_request($reqID);
        redirect('UserRequest/trackView');
    }

    public function submit_request()
    {
        $id = $this->request_model->get_user_id($this->session->userdata('username'));
        $transID = $this->session->userdata('requestID');
        $current_date = date('Y-m-d h:i:s');
        // $department = $this->request_model->get_user_department($id);
        $status = $this->request_model->get_request_status($this->input->post('id'));
        $declined_by = $this->request_model->declined_by($this->input->post('id'));
        $user = $this->request_model->get_user_id($declined_by);
        $reqID = $this->input->post('requestID');

        if ($this->request_model->process_request_purchasing($reqID)->status == "Returned by Purchasing") {
            if ($this->request_model->process_request_purchasing($reqID)->remarks == "Canvassing") {
                $request = array(
                    'userID' => $id,
                    'date_requested' => $current_date,
                    'declined_by' => '',
                    'status' => 'Edited by Requisitioner'
                );
                $this->request_model->update_request($reqID, $request);
            } else {
                $request = array(
                    'userID' => $id,
                    'date_requested' => $current_date,
                    'declined_by' => '',
                    'status' => 'Pending Approval Purchasing'
                );
                $this->request_model->update_request($reqID, $request);
            }
        } else {
            $request = array(
                'userID' => $id,
                'date_requested' => $current_date,
                'declined_by' => '',
                'department' => $this->session->userdata('department'),
                'status' => 'Pending Dean Approval'
            );
            $this->request_model->update_request($reqID, $request);
        }
        redirect('page/user');
    }

    public function edit_returned_request()
    {
        $reqID = $this->input->post('requestID');
        $category = $this->input->post('category');
        $this->session->set_userdata('requestID', $reqID);
        $data['selectedCategory'] = $this->request_model->selectedCategory($category);
        $data['requestID'] = $this->session->userdata('requestID');
        $data['item'] = $this->request_model->display_item();
        $data['package'] = $this->request_model->package();
        $data['unit'] = $this->request_model->item_unit();
        $data['unit_modal'] = $this->request_model->item_unit_modal();
        $data['maintenance'] = $this->request_model->item_selections();
        $this->load->view('user/edit_returned_request', $data);
    }

    public function edit_returned_item()
    {
        $item = $this->input->post('item');
        $description = $this->input->post('description');
        $brand = $this->input->post('brand');
        $unit = $this->input->post('unit');
        $quantity = $this->input->post('quantity');
        $itemID = $this->input->post('itemID');;
        $model = $this->input->post('model');

        $itemDetails = array(
            'itemName' => $item,
            'brand' => $brand,
            'itemDescription' => $description,
            'unit' => $unit,
            'quantity' => $quantity,
            'model' => $model
        );
        $this->request_model->update_item($itemID, $itemDetails);

        $this->session->userdata('requestID', $this->input->post('requestID'));
        $data['requestID'] = $this->session->userdata('requestID');
        $data['item'] = $this->request_model->display_item();
        $data['package'] = $this->request_model->package();
        $data['unit'] = $this->request_model->item_unit();
        $data['unit_modal'] = $this->request_model->item_unit_modal();
        $data['maintenance'] = $this->request_model->item_selections();
        $this->load->view('user/edit_returned_request', $data);
    }

    public function cancel_request()
    {
        $transID = $this->input->post('requestID');
        $update = array('status' => 'Cancelled');
        $this->request_model->update_request($transID, $update);
        redirect('UserRequest/trackView');
    }

    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|doc|docx|pdf|txt';
        $config['max_size']             = 2000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2048;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $itemID = $this->input->post('itemID');

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('msg', $this->upload->display_errors());
            redirect('UserRequest/create_request');
        } else {
            $data = array('upload_data' => $this->upload->data());
            foreach ($data as $file) {
                $attachment = array(
                    'attachment_name' => $file['file_name'],
                    'attachment_path' => $file['full_path']
                );

                $this->request_model->update_item($itemID, $attachment);
            }
            $this->session->set_flashdata('msg', "File uploaded Successfuly");
            redirect('UserRequest/create_request');
        }
    }

    public function request_attachment()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|doc|docx|pdf';
        $config['max_size']             = 2000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $itemID = $this->input->post('itemID');

        if (!$this->upload->request_attachment('userfile')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('msg', $this->upload->display_errors());
            redirect('UserRequest/create_request');
        } else {
            $data = array('upload_data' => $this->upload->data());

            foreach ($data as $file) {
                $attachment = array(
                    'attachment_name' => $file['file_name'],
                    'attachment_path' => $file['full_path']
                );

                $this->request_model->update_item($this->session->userdata('requestID'), $attachment);
            }
            $this->session->set_flashdata('msg_request', "File uploaded Successfuly");
            redirect('UserRequest/create_request');
        }
    }

    public function file_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|doc|docx|pdf';
        $config['max_size']             = 2000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $itemID = $this->input->post('itemID');

        if (!$this->upload->file_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('msg', $this->upload->display_errors());
            redirect('UserRequest/edit_request');
        } else {
            $data = array('upload_data' => $this->upload->data());

            foreach ($data as $file) {
                $attachment = array(
                    'attachment_name' => $file['file_name'],
                    'attachment_path' => $file['full_path']
                );

                $this->request_model->update_item($itemID, $attachment);
            }
            $this->session->set_flashdata('msg', "File uploaded Successfuly");
            redirect('UserRequest/edit_request');
        }
    }

    public function upload_file()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|doc|docx|pdf';
        $config['max_size']             = 2000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $itemID = $this->input->post('itemID');

        if (!$this->upload->file_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('msg', $this->upload->display_errors());
            redirect('UserRequest/edit_returned_request');
        } else {
            $data = array('upload_data' => $this->upload->data());

            foreach ($data as $file) {
                $attachment = array(
                    'attachment_name' => $file['file_name'],
                    'attachment_path' => $file['full_path']
                );

                $this->request_model->update_item($itemID, $attachment);
            }
            $this->session->set_flashdata('msg', "File uploaded Successfuly");
            redirect('UserRequest/edit_returned_request');
        }
    }


    //--------------------Comment----------------------//

    public function userComment()
    {
        $comment = $this->input->post('message');
        $userID = $this->request_model->get_user_id($this->session->userdata('username'));
        $requestID = $this->input->post('reqID');
        $date = date('Y-m-d h:m:s');
        $reply = $this->input->post('commentID');

        $rep = "";
        if ($reply == "") {
            $rep = "0";
        }

        $newComment = array(
            'comment' => $comment,
            'userID' => $userID,
            'requestID' => $requestID,
            'date' => $date,
            'replied_to' => $rep
        );



        $this->request_model->itemComment($newComment);
        redirect('UserRequest/trackView');
    }

    public function update_received()
    {
        $area = $this->input->post('assignArea');
        $item_no = $this->input->post('item_no');

        for ($i = 0; $i < count($item_no); $i++) {
            $update = array(
                'dept_section' => $area[$i]
            );
            $this->inventory_model->updateInventoryItem($item_no[$i], $update);
            $this->inventory_model->update_item_received($item_no[$i], $update);
        }
        redirect('UserRequest/procurred_items');
    }

    public function my_packages()
    {
        $data['packages'] = $this->request_model->package();
        $data['package_items'] = $this->request_model->package_items();
        $data['unit_modal'] = $this->request_model->item_unit_modal();
        $this->load->view('user/my_package', $data);
    }

    public function create_package()
    {
        $package = $this->input->post('new_package');
        $new_package = array('package_name' => $package);
        $new = $this->request_model->new_package($new_package);
        $this->session->set_userdata('packageID', $new);
        redirect('UserRequest/new_package');
    }

    public function new_package()
    {
        $data['packageID'] = $this->session->userdata('packageID');
        $data['maintenance'] = $this->request_model->item_selections();
        $data['package_items'] = $this->request_model->package_items();
        $data['unit_modal'] = $this->request_model->item_unit_modal();
        $data['unit'] = $this->request_model->item_unit();
        $this->load->view('user/new_package', $data);
    }

    public function add_item_package()
    {
        $this->form_validation->set_rules('item', 'Item', 'required|alpha');
        $this->form_validation->set_rules('brand', 'Brand', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        // $this->form_validation->set_rules('quantity', 'Quantity', 'required|numeric');



        if ($this->form_validation->run() == FALSE) {
            $data['packageID'] = $this->session->userdata('packageID');
            $data['maintenance'] = $this->request_model->item_selections();
            $data['package_items'] = $this->request_model->package_items();
            $data['unit_modal'] = $this->request_model->item_unit_modal();
            $data['unit'] = $this->request_model->item_unit();
            $this->load->view('user/new_package', $data);
        } else {
            $itemName = $this->input->post('item');
            $brand = $this->input->post('brand');
            $description = $this->input->post('description');
            $unit = $this->input->post('unit');
            $quantity = $this->input->post('quantity');
            $pckID = $this->session->userdata('packageID');
            $model = $this->input->post('model');

            if ($model == "") {
                $model = "N/A";
            }

            $item = array(
                'item_name' => $itemName,
                'description' => $description,
                'brand' => $brand,
                'unit' => $unit,
                'quantity' => $quantity,
                'item_package_id' => $pckID,
                'model' => $model
            );

            $this->request_model->new_package_item($item);

            $item_maintenance = $this->request_model->maintenance($itemName, $description, $model, $brand);
            if (count($item_maintenance) == 0) {
                $maintenance = array(
                    'itemName' => $itemName,
                    'itemDescription' => $description,
                    'brand' => $brand,
                    'model' => $model
                );
                $this->request_model->item_maintenance($maintenance);
            }

            redirect('UserRequest/new_package');
        }
    }

    public function edit_item_package()
    {
        $item = $this->input->post('item');
        $description = $this->input->post('description');
        $brand = $this->input->post('brand');
        $unit = $this->input->post('unit');
        $quantity = $this->input->post('quantity');
        $itemID = $this->input->post('itemID');
        $pckID = $this->session->userdata('packageID');
        $model = $this->input->post('model');

        $itemDetails = array(
            'item_name' => $item,
            'brand' => $brand,
            'description' => $description,
            'unit' => $unit,
            'quantity' => $quantity,
            'model' => $model
        );
        $this->request_model->edit_item_package($itemID, $itemDetails);


        redirect('UserRequest/new_package');
    }

    public function delete_item_package()
    {
        $itemID = $this->input->post('itemID');
        $reqID = $this->session->userdata('requestID');

        $this->request_model->delete_item_package($itemID);

        redirect('UserRequest/new_package');
    }

    public function delete_all_item_package()
    {
        $checkbox = $this->input->post('deleteSelected');
        $values = explode(',', $checkbox);
        foreach ($values as $itemID) {
            $this->request_model->delete_item_package($itemID);
        }
        redirect('UserRequest/new_package');
    }

    public function edit_package()
    {
        $packageID = $this->input->post('packageID');
        $this->session->set_userdata('packageID', $packageID);
        $data['packageID'] = $packageID;
        $data['packageName'] = $this->request_model->package_name($this->session->userdata('packageID'));
        $data['maintenance'] = $this->request_model->item_selections();
        $data['package_items'] = $this->request_model->package_items();
        $data['unit_modal'] = $this->request_model->item_unit_modal();
        $data['unit'] = $this->request_model->item_unit();
        $this->load->view('user/edit_package', $data);
    }

    public function delete_package(){
        $itemID = $this->input->post('packageID');
        $reqID = $this->session->userdata('requestID');

        $this->request_model->delete_package($itemID);

        redirect('UserRequest/my_packages');
    }

    public function submit_package(){
        $pack_name = $this->input->post('pack_name');
        $id = $this->input->post('packageID');
        $update = array('package_name'=>$pack_name);
        $this->request_model->edit_package($id, $update);
        redirect('UserRequest/my_packages');
    }



    //-----------------------------End of Request Operations----------------------------------------


    //Display
    public function display_request()
    {
        $data['pendingRequest'] = $this->request_model->displayOpenRequest($this->request_model->get_user_id($this->session->userdata('username')));
        $this->load->view('user/pending_req_view', $data);
    }

    public function procurred_items()
    {
        $data['received_items'] = $this->inventory_model->user_ordered_items($this->request_model->get_user_id($this->session->userdata('username')));
        $data['item'] = $this->inventory_model->view_received_items();
        $data['areas'] = $this->inventory_model->displayArea($this->inventory_model->getDeptID($this->session->userdata('department')));
        $this->load->view('user/procurred_items', $data);
    }


    public function trackView()
    {
        $data['pendingItems'] = $this->request_model->display_request($this->request_model->get_user_id($this->session->userdata('username')));
        $data['item'] = $this->request_model->display_item();
        $data['total_request'] = $this->request_model->countRequest($this->request_model->get_user_id($this->session->userdata('username')));
        $data['total_pending_request'] =
            $this->request_model->countPendingRequest(
                $this->request_model->get_user_id($this->session->userdata('username')),
                $this->request_model->get_user_department($this->session->userdata('username'))
            );
        $data['processed_request'] = $this->request_model->countProcessedRequest($this->request_model->get_user_id($this->session->userdata('username')));
        $data['declined_request'] = $this->request_model->countDeclinedRequest($this->request_model->get_user_id($this->session->userdata('username')));
        $data['delivered_request'] = $this->request_model->countDeliveredRequest($this->request_model->get_user_id($this->session->userdata('username')));
        $data['comment'] = $this->request_model->displayComment();
        $data['userID'] = $this->request_model->get_user_id($this->session->userdata('username'));
        $data['comment_count'] = $this->request_model->comment_count($this->request_model->get_user_id($this->session->userdata('username')));
        $data['unread'] = $this->request_model->unread_comments($this->request_model->get_user_id($this->session->userdata('username')));
        $this->load->view('user/track_view', $data);
    }

    public function declinedRequest()
    {
        $data['declinedRequest'] = $this->request_model->declinedRequest($this->request_model->get_user_id($this->session->userdata('username')));
        $data['item'] = $this->request_model->display_item();
        $data['comment'] = $this->request_model->displayComment();
        $this->load->view('user/declinedRequest', $data);
    }

    public function test()
    {
        $this->view->load('user/add');
    }

    public function draft_request()
    {
        $userID = $this->request_model->get_user_id($this->session->userdata('username'));
        $data['item'] = $this->request_model->display_item();
        $data['pendingItems'] = $this->request_model->displayOpenRequest($userID);
        $this->load->view('user/draft_requisitionform', $data);
    }

    public function activity_log()
    {
        $this->load->view('user/activity_log');
    }

    public function print_requisitionForm()
    {
        $this->load->view('user/print_requisitionForm');
    }
}
