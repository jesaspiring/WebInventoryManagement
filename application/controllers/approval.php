<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Approval extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('request_model');
    }

    public function approveRequest()
    {
        $transID = $this->input->post('reqID');
        $current_date = date("Y-m-d");

        $request = array(
            'status' => 'Pending Approval Budgeting',
            'date_approved' => $current_date,
            'approved_by' => $this->session->userdata('username'),
            'unit_head' => $this->session->userdata('username')
        );

        $request_log = array(
            'requestID' => $transID,
            'status' => 'approved',
            'userID' => $this->request_model->get_user_id($this->session->userdata('username')),
            'trans_date' => $current_date
        );

        $this->request_model->request_log($request_log);
        $this->request_model->update_request($transID, $request);
        redirect('approval/displayDeptRequest');
    }

    public function budgetingApproveRequest()
    {
        $transID = $this->input->post('reqID');
        $current_date = date("Y-m-d");

        $request = array(
            'status' => 'Pending Approval Purchasing',
            'date_approved_budgeting' => $current_date,
            'approved_by' => $this->session->userdata('username')
        );

        $request_log = array(
            'requestID' => $transID,
            'status' => 'approved',
            'userID' => $this->request_model->get_user_id($this->session->userdata('username')),
            'trans_date' => $current_date
        );

        $this->request_model->request_log($request_log);

        $this->request_model->update_request($transID, $request);
        redirect('approval/DisplayRequestBudgeting');
    }

    public function purchasingApproveRequest()
    {
        $transID = $this->input->post('reqID');
        $current_date = date("Y-m-d");

        $request = array(
            'status' => 'Approved by Purchasing',
            'date_approved_purchasing' => $current_date,
            'approved_by' => $this->session->userdata('username'),
            'purchase_officer' => $this->session->userdata('username')
        );

        $this->request_model->update_request($transID, $request);
        redirect('approval/DisplayRequestPurchasing');
    }

    public function declineRequest()
    {
        $comment = $this->input->post('comment');
        $transID = $this->input->post('requestID');
        $userID = $this->request_model->get_user_id($this->session->userdata('username'));
        $current_date = date("Y-m-d");


        $request = array(
            'status' => 'Declined',
            'declined_by' => $this->session->userdata('username')
        );

        $requestNote = array(
            'tableCommented' => "item request table",
            'comment' => $comment,
            'userID' => $userID,
            'requestID' => $transID,
            'date' => $current_date,
            'replied_to' => $this->request_model->getUserID($transID)
        );

        $request_log = array(
            'requestID' => $transID,
            'status' => 'declined',
            'userID' => $this->request_model->get_user_id($this->session->userdata('username')),
            'trans_date' => $current_date
        );

        $this->request_model->request_log($request_log);

        $this->request_model->update_request($transID, $request);
        $this->request_model->itemComment($requestNote);
        redirect('approval/displayDeptRequest');
    }

    public function declineRequestBudgeting()
    {
        $comment = $this->input->post('comment');
        $transID = $this->input->post('requestID');
        $userID = $this->request_model->get_user_id($this->session->userdata('username'));
        $current_date = date("Y-m-d");


        $request = array(
            'status' => 'Declined',
            'declined_by' => $this->request_model->get_user_id($this->session->userdata('username'))
        );

        $requestNote = array(
            'tableCommented' => "item request table",
            'comment' => $comment,
            'userID' => $userID,
            'requestID' => $transID,
            'date' => $current_date,
            'replied_to' => $this->request_model->getUserID($transID)
        );

        $request_log = array(
            'requestID' => $transID,
            'status' => 'declined',
            'userID' => $this->request_model->get_user_id($this->session->userdata('username')),
            'trans_date' => $current_date
        );

        $this->request_model->update_request($transID, $request);
        $this->request_model->itemComment($requestNote);
        redirect('approval/displayRequestBudgeting');
    }

    public function declineRequestPurchasing()
    {
        $comment = $this->input->post('comment');
        $transID = $this->input->post('requestID');
        $userID = $this->request_model->get_user_id($this->session->userdata('username'));
        $current_date = date("Y-m-d h:m:s");


        if ($this->request_model->process_request_purchasing($transID)->status == "Canvassing") {
            $request = array(
                'status' => 'Returned by Purchasing',
                'declined_by' => $this->session->userdata('username'),
                'remarks' => 'Canvassing'
            );
        }else{
            $request = array(
                'status' => 'Returned by Purchasing',
                'declined_by' => $this->session->userdata('username')
            );
        }

        $requestNote = array(
            'tableCommented' => "item request table",
            'comment' => $comment,
            'userID' => $userID,
            'requestID' => $transID,
            'date' => $current_date,
            'replied_to' => $this->request_model->getUserID($transID)
        );

        $this->request_model->update_request($transID, $request);
        $this->request_model->itemComment($requestNote);
        redirect('approval/displayRequestPurchasing');
    }

    //Displaying Request 
    public function displayDeptRequest()
    {
        $data['request_count'] =  $this->request_model->displayUnitRequestNotif();
        $data['query'] = $this->request_model->displayUnitHead();
        $data['comment_count'] = $this->request_model->comment_count($this->request_model->get_user_id($this->session->userdata('username')));
        $data['item'] = $this->request_model->display_item();
        $data['comment'] = $this->request_model->displayComment();
        $data['userID'] = $this->request_model->get_user_id($this->session->userdata('username'));
        $data['date_today'] = date('Y-m-d');
        $data['request_log'] = $this->request_model->displayRequestLog($this->request_model->get_user_id($this->session->userdata('username')));
        $this->load->view('dept_head/incoming_request', $data);
    }

    public function deptHeadLog()
    {
        $data['request_log'] = $this->request_model->displayRequestLog($this->request_model->get_user_id($this->session->userdata('username')));
        $data['item'] = $this->request_model->display_item();
        $this->load->view('dept_head/activity_log', $data);
    }

    public function head_rf()
    {
        $data['form'] = $this->request_model->requisition_form_unit_head();
        $data['item'] = $this->request_model->display_item();
        $this->load->view('dept_head/requisition_form', $data);
    }

    public function budgetLog()
    {
        $data['request_log'] = $this->request_model->displayRequestLog($this->request_model->get_user_id($this->session->userdata('username')));
        $data['item'] = $this->request_model->display_item();
        $this->load->view('budgeting/activity_log', $data);
    }

    public function displayRequestBudgeting()
    {
        $data['request_count'] =  $this->request_model->displayBudgetRequestNotif();
        $data['query'] = $this->request_model->displayBudgeting();
        $data['item'] = $this->request_model->display_item();
        $data['comment'] = $this->request_model->displayComment();
        $data['comment_count'] = $this->request_model->comment_count($this->request_model->get_user_id($this->session->userdata('username')));
        $data['userID'] = $this->request_model->get_user_id($this->session->userdata('username'));
        $data['date_today'] = date('Y-m-d');
        $data['request_log'] = $this->request_model->displayRequestLog($this->request_model->get_user_id($this->session->userdata('username')));
        $this->load->view('budgeting/incoming_request', $data);
    }

    public function displayRequestPurchasing()
    {
        $data['request_count'] =  $this->request_model->displayPurchasingRequestNotif();
        $data['requests'] = $this->request_model->displayPurchasing();
        $data['requestItems'] = $this->request_model->display_item();
        $data['count_urgent'] = $this->request_model->count_urgent();
        $data['count_cash_advance'] = $this->request_model->count_cash_advance();
        $data['comment_count'] = $this->request_model->comment_count($this->request_model->get_user_id($this->session->userdata('username')));
        $data['tot_request'] = $this->request_model->count_request_purchasing();
        $data['item'] = $this->request_model->display_item();
        $data['comment'] = $this->request_model->displayComment();
        $data['userID'] = $this->request_model->get_user_id($this->session->userdata('username'));
        $this->load->view('purchasing/incoming_request', $data);
    }

    public function unit_head_notif()
    {
        $count = $this->request_model->displayUnitRequestNotif();
        $data = array('unseen_request' => $count);
        echo json_encode($data);
    }

    public function update_request()
    {
        $reqID = $this->input->post('requestID');
        $funds_available = $this->input->post('funds_available');
        $update = array(
            'funds_available' => $funds_available
        );
        $this->request_model->update_request($reqID, $update);
        redirect('approval/displayRequestBudgeting');
    }
}
