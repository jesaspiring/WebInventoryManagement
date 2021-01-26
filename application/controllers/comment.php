<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('request_model');
    }

    public function userComment()
    {
        $comment = $this->input->post('message');
        $transID = $this->input->post('requestID');
        $user = $this->request_model->get_user_id($this->session->userdata('username'));
        $current_date = date("Y-m-d h:m:s");

        if ($this->request_model->process_request_purchasing($transID)->status == "Pending Dean Approval") {
            if ($this->request_model->get_user_role($user) == "Faculty") {
                $newComment = array(
                    'tableCommented' => "item request table",
                    'comment' => $comment,
                    'userID' => $user,
                    'requestID' => $transID,
                    'date' => $current_date,
                    'replied_to' => $this->request_model->get_id('Dean', $this->request_model->get_user_department($user))
                );
                $this->request_model->itemComment($newComment);
            } elseif ($this->request_model->get_user_role($user) == "Dean") {
                $newComment = array(
                    'tableCommented' => "item request table",
                    'comment' => $comment,
                    'userID' => $user,
                    'requestID' => $transID,
                    'date' => $current_date,
                    'replied_to' => $this->request_model->process_request_purchasing($transID)->userID
                );
                $this->request_model->itemComment($newComment);
            }
        } elseif ($this->request_model->process_request_purchasing($transID)->status == "Pending Approval Budgeting") {
            if ($this->request_model->get_user_role($user) == "Faculty") {
                $newComment = array(
                    'tableCommented' => "item request table",
                    'comment' => $comment,
                    'userID' => $user,
                    'requestID' => $transID,
                    'date' => $current_date,
                    'replied_to' => $this->request_model->get_id('Officer', 'Budgeting')
                );
                $this->request_model->itemComment($newComment);
            } elseif (($this->request_model->get_user_role($user) == "Officer")) {
                $newComment = array(
                    'tableCommented' => "item request table",
                    'comment' => $comment,
                    'userID' => $user,
                    'requestID' => $transID,
                    'date' => $current_date,
                    'replied_to' => $this->request_model->process_request_purchasing($transID)->userID
                );
                $this->request_model->itemComment($newComment);
            }
        } elseif (
            $this->request_model->process_request_purchasing($transID)->status == "Pending Approval Purchasing"
            || $this->request_model->process_request_purchasing($transID)->status == "Approved by Purchasing"
            || $this->request_model->process_request_purchasing($transID)->status == "Returned by Purchasing"
            || $this->request_model->process_request_purchasing($transID)->status == "Edited by Requisitioner"
            || $this->request_model->process_request_purchasing($transID)->status == "Canvassing"
            || $this->request_model->process_request_purchasing($transID)->status == "PO Prepared"
            || $this->request_model->process_request_purchasing($transID)->status == "ordered"
        ) {
            if ($this->request_model->get_user_role($user) == "Faculty") {
                $newComment = array(
                    'tableCommented' => "item request table",
                    'comment' => $comment,
                    'userID' => $user,
                    'requestID' => $transID,
                    'date' => $current_date,
                    'replied_to' => $this->request_model->get_id('Officer', 'Purchasing')
                );
                $this->request_model->itemComment($newComment);
            } elseif (($this->request_model->get_user_role($user) == "Officer")) {
                $newComment = array(
                    'tableCommented' => "item request table",
                    'comment' => $comment,
                    'userID' => $user,
                    'requestID' => $transID,
                    'date' => $current_date,
                    'replied_to' => $this->request_model->process_request_purchasing($transID)->userID
                );
                $this->request_model->itemComment($newComment);
            }
        }



        if ($this->session->userdata('role') == "Faculty") {
            redirect('UserRequest/trackView');
        } elseif ($this->session->userdata('role') == "Dean") {
            redirect('approval/displayDeptRequest');
        } elseif ($this->session->userdata('department') == "Budgeting") {
            redirect('approval/displayRequestBudgeting');
        } elseif ($this->session->userdata('department') == "Purchasing") {
            redirect('approval/displayRequestPurchasing');
        }
    }

    public function mark_as_read()
    {
        $transID = $this->input->post('requestID');
        $user = $this->request_model->get_user_id($this->session->userdata('username'));


        $mark_as_read = array(
            'status' => '1',
        );
        $this->request_model->mark_read($user, $transID, $mark_as_read);


        if ($this->session->userdata('role') == "Faculty") {
            redirect('UserRequest/trackView');
        } elseif ($this->session->userdata('role') == "Dean") {
            redirect('approval/displayDeptRequest');
        } elseif ($this->session->userdata('department') == "Budgeting") {
            redirect('approval/displayRequestBudgeting');
        } elseif ($this->session->userdata('department') == "Purchasing") {
            redirect('approval/displayRequestPurchasing');
        }
    }
}
