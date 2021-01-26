<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Request_model extends CI_Model
{

    //---------------------------------user----------------------------------//
    //get user id
    public function get_user_id($username)
    {
        $this->db->select('userID')->from('users')->where('username', $username);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->userID;
        }
    }

    

    public function get_user_department($id)
    {
        $this->db->select('department')->from('users')->where('userID', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->department;
        }
    }

    public function get_department($role, $dept)
    {
        $this->db->select('department')->from('users')->where('role', $role)->where('department', $dept);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->department;
        }
    }

    public function get_id($role, $dept)
    {
        $this->db->select('userID')->from('users')->where('role', $role)->where('department', $dept);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->userID;
        }
    }

    public function get_user_role($id)
    {
        $this->db->select('role')->from('users')->where('userID', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->role;
        }
    }


    //-----------------------------item processing-----------------------------//
    //get item id
    public function get_item_id()
    {
        $this->db->select('itemID')->from('item')->where('itemID');
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);
            return $row->itemID;
        }
    }

    public function getUserID($requestID){
        $this->db->select('userID')->from('item_request')->where('requestID', $requestID);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);
            return $row->userID;
        }
    }

    //Request
    public function get_request_id($id)
    {
        $this->db->select('requestID')->from('item_request')->where('requestID', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);
            return $row->requestID;
        }
    }

    public function get_request_status($id)
    {
        $this->db->select('status')->from('item_request')->where('requestID', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);
            return $row->status;
        }
    }

    public function request_type($id)
    {
        $this->db->select('request_type')->from('item_request')->where('requestID', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);
            return $row->request_type;
        }
    }

    public function declined_by($id)
    {
        $this->db->select('declined_by')->from('item_request')->where('requestID', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);
            return $row->declined_by;
        }
    }

    //check if ID is already in db
    public function checkID($id)
    {
        $this->db->select('requestID')->from('item_request')->where('requestID', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);
            return $row->requestID;
        }
    }


    //--------------------------------supplier  
    public function get_supplier_id($name)
    {
        $this->db->select('supplierID')->from('supplier')->where('supplierName', $name);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);

            return $row->supplierID;
        }
    }

    public function create_supplier($supplier)
    {
        $this->db->insert('supplier', $supplier);
        return $this->db->insert_id();
    }

    public function edit_supplier($supplier, $details){
        $this->db->where('supplierID', $supplier);
        $this->db->update('supplier', $details);
        return $this->db->affected_rows();
    }

    public function delete_supplier($supplier){
        $this->db->where('supplierID', $supplier);
        $this->db->delete('supplier');
        return $this->db->affected_rows();
    }

    public function view_supplier()
    {
        $this->db->select('*');
        $this->db->from('supplier');
        $query = $this->db->get();
        return $query->result();
    }

    public function categories()
    {
        $this->db->select('*');
        $this->db->from('category');
        $query = $this->db->get();
        return $query->result();
    }

    public function selectedCategory($category)
    {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('categoryID', $category);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_supplier_address($name)
    {
        $this->db->select('supplierAddress')->from('supplier')->where('supplierName', $name);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);

            return $row->supplierAddress;
        }
    }

    public function get_supplier_contact($name)
    {
        $this->db->select('phone_no')->from('supplier')->where('supplierName', $name);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);

            return $row->phone_no;
        }
    }

    //-------------------Purchase Order----------------------------// 

    public function purchaseOrder($purchaseOrder)
    {
        $this->db->insert('purchase_order', $purchaseOrder);
        return $this->db->insert_id();
    }


    public function item_maintenance($item)
    {
        $this->db->insert('item_maintenance', $item);
        return $this->db->insert_id();
    }

    public function account($account)
    {
        $this->db->insert('accounts', $account);
        return $this->db->insert_id();
    }

    public function account_maintenance($account_no)
    {
        $this->db->select('account_no');
        $this->db->from('accounts');
        $this->db->where('account_no', $account_no);
        $query = $this->db->get();
        return $query->row();
    }

    public function account_autocomplete()
    {
        $this->db->select('account_no');
        $this->db->from('accounts');
        $this->db->limit(10);
        $query = $this->db->get();
        return $query->result();
    }

    public function account_name($no)
    {
        $this->db->select('account_name')->from('accounts')->where('account_no', $no);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);

            return $row->account_name;
        }
    }

    public function maintenance($item, $itemDescription, $model, $brand)
    {
        $this->db->select('itemName, itemDescription, model, brand');
        $this->db->from('item_maintenance');
        $this->db->where('itemName', $item);
        $this->db->where('itemDescription', $itemDescription);
        $this->db->where('model', $model);
        $this->db->where('brand', $brand);
        $query = $this->db->get();
        return $query->row();
    }

    public function item_selections()
    {
        $this->db->select('itemName, itemDescription, model, brand');
        $this->db->from('item_maintenance');
        $this->db->limit(10);
        $this->db->group_by('itemName');
        $query = $this->db->get();
        return $query->result();
    }

    public function item_brand($name)
    {
        $this->db->select('itemName, itemDescription, model, brand');
        $this->db->from('item_maintenance');
        $this->db->limit(10);
        $this->db->group_by('brand');
        $this->db->where('itemName', $name);
        $query = $this->db->get();
        return $query->result();
    }

    public function item_model($name)
    {
        $this->db->select('itemName, itemDescription, model, brand');
        $this->db->from('item_maintenance');
        $this->db->limit(10);
        $this->db->group_by('model');
        $this->db->where('itemName', $name);
        $query = $this->db->get();
        return $query->result();
    }

    public function item_description($name)
    {
        $this->db->select('itemName, itemDescription, model, brand');
        $this->db->from('item_maintenance');
        $this->db->limit(10);
        $this->db->group_by('itemDescription');
        $this->db->where('itemName', $name);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_po_number($po_number)
    {

        $this->db->select('PO_number');
        $this->db->from('purchase_order');
        $this->db->where('PO_number', $po_number);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);

            return $row->PO_number;
        }
    }

    public function update_po($poNumber, $details)
    {
        $this->db->where('PO_number', $poNumber);
        $this->db->update('purchase_order', $details);
        return $this->db->affected_rows();
    }

    public function deletePuchaseOrderitem($id)
    {
        $this->db->where('itemID', $id);
        $this->db->delete('item');
        return $this->db->affected_rows();
    }

    public function poDetails($id)
    {
        $this->db->select('supplier.supplierID, supplierName, supplierAddress, phone_no, credit_terms, order_date, PO_number');
        $this->db->from('purchase_order');
        $this->db->join('supplier', 'supplier.supplierID = purchase_order.supplier_id');
        $this->db->where('PO_number', $id);
        $query = $this->db->get();
        return $query->row();
    }


    //====================Request manipulation============================//
    public function addRequest($request)
    {
        $this->db->insert('item_request', $request);
        return $this->db->insert_id();
    }

    //insert items
    public function insert_item($item)
    {
        $this->db->insert('item', $item);
        return $this->db->insert_id();
    }

    public function update_item($itemID, $itemDetails)
    {
        $this->db->where('itemID', $itemID);
        $this->db->update('item', $itemDetails);
        return $this->db->affected_rows();
    }


    public function delete_item($itemID)
    {
        $this->db->where('itemID', $itemID);
        $this->db->delete('item');
        return $this->db->affected_rows();
    }

    //after submitting
    public function update_request($requestID, $requestData)
    {
        $this->db->where('requestID', $requestID);
        $this->db->update('item_request', $requestData);
        return $this->db->affected_rows();
    }

    public function delete_request($requestID)
    {
        $this->db->where('requestID', $requestID);
        $this->db->delete('item_request');
        return $this->db->affected_rows();
    }

    public function request_log($details)
    {
        $this->db->insert('request_log', $details);
        return $this->db->insert_id();
    }

    public function displayRequestLog($userID)
    {
        $this->db->select('request_log.requestID, request_log.status, trans_date, username, item_request.department');
        $this->db->from('request_log');
        $this->db->join('item_request', 'item_request.requestID = request_log.requestID');
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->where('request_log.userID', $userID);
        $query = $this->db->get();
        return $query->result();
    }

    public function requestDetails($id)
    {
        $this->db->select('department');
        $this->db->from('item_request');
        $this->db->where('requestID', $id);
        $query = $this->db->get();
        return $query->row();
    }

    //------------------------------Comment-------------------------------------//
    public function itemComment($comment)
    {
        $this->db->insert('comment', $comment);
        return $this->db->insert_id();
    }



    //------------------------------displaying-----------------------------------//
    //displaying records

    public function received_items($id)
    {
        $this->db->select('*');
        $this->db->from('received_items');
        $this->db->where('userID', $id);
        $this->db->group_by('requestID');
        $query = $this->db->get();
        return $query->result();
    }

    public function display_item()
    {
        $this->db->select('itemID, itemName, brand, model, itemDescription, unit, quantity, pricePerUnit, item.requestID,
                           item.attachment_name, item.attachment_path');
        $this->db->from('item_request');
        $this->db->join('item', 'item.requestID = item_request.requestID');
        $query = $this->db->get();
        return $query->result();
    }

    public function display_item_po()
    {
        $this->db->select('itemID, itemName, itemDescription, unit, quantity, item.PO_Number');
        $this->db->from('purchase_order');
        $this->db->join('item', 'item.PO_Number = purchase_order.PO_number');
        $query = $this->db->get();
        return $query->result();
    }

    //display request
    public function display_request($userID)
    {
        $this->db->select('item_request.requestID, username, date_requested, item_request.status, declined_by, approved_by, date_approved, users.userID,
        attachment_name, attachment_path, date_approved_budgeting, date_approved_purchasing, date_canvass, remarks');
        $this->db->from('item_request');
        $this->db->where('users.userID', $userID);
        $this->db->join('users', 'users.userID = item_request.userID'); 
        $this->db->order_by('requestID', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function view_attachment($userID)
    {
        $this->db->select('requestID, attachment_name, attachment_path');
        $this->db->from('item_request');
        $this->db->where('users.userID', $userID);
        $this->db->join('users', 'users.userID = item_request.userID');
        $query = $this->db->get();
        return $query->result();
    }

    public function countRequest($userID)
    {
        $this->db->select('item_request.requestID, username, date_requested, status, declined_by, approved_by, date_approved, users.userID');
        $this->db->from('item_request');
        $this->db->where('users.userID', $userID);
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->order_by('requestID', 'DESC');
        $this->db->where('status !=', 'Pending Submission');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countPendingRequest($userID)
    {
        $this->db->select('requestID, userID');
        $this->db->from('item_request');
       // $this->db->where('status !=', 'Pending Submission');
        $this->db->where('status !=', 'Approved by Purchasing');
        $this->db->where('status !=','Pending Submission');
        $this->db->where('status !=','ordered');
        $this->db->where('status !=','Delivered');
        $this->db->where('status !=','PO prepared');
        $this->db->where('status !=','Declined');
        $this->db->where('status !=','Returned by Purchasing');
        $this->db->where('userID', $userID);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countDraftRequest($userID)
    {
        $this->db->select('item_request.requestID, username, date_requested, status, declined_by, approved_by, date_approved, users.userID');
        $this->db->from('item_request');
        $this->db->where('users.userID', $userID);
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->order_by('requestID', 'DESC');
        $this->db->where('status =', 'Pending Submission');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countProcessedRequest($userID)
    {
        $this->db->select('item_request.requestID, username, date_requested, status, declined_by, approved_by, date_approved, users.userID');
        $this->db->from('item_request');
        $this->db->where('users.userID', $userID);
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->order_by('requestID', 'DESC');
        $this->db->where('status =', 'Canvassing');
        $this->db->or_where('status =', 'Approved by Purchasing');
        $this->db->or_where('status =', 'PO Prepared');
        $this->db->or_where('status =', 'ordered');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function poCount()
    {
        $this->db->select('*');
        $this->db->from('purchase_order');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function purchasingTotalProcessed()
    {
        $this->db->select('*');
        $this->db->from('item_request');
        $this->db->where('status !=', 'Pending Submission');
        $this->db->where('status !=', 'Approved by Purchasing');
        $this->db->where('status =', 'Canvassing');
        $this->db->where('status !=', 'Processing');
        $this->db->or_where('status =', 'PO Prepared');
        $this->db->or_where('status =', 'Ordered');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countDeclinedRequest($userID)
    {
        $this->db->select('item_request.requestID, username, date_requested, status, declined_by, approved_by, date_approved, users.userID');
        $this->db->from('item_request');
        $this->db->where('users.userID', $userID);
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->order_by('requestID', 'DESC');
        $this->db->where('status !=', 'Pending Submission');
        $this->db->where('status =', 'Declined');
        $this->db->or_where('status =', 'Returned by Purchasing');
        $this->db->or_where('status =', 'Cancelled');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countDeliveredRequest($userID)
    {
        $this->db->select('item_request.requestID, username, date_requested, status, declined_by, approved_by, date_approved, users.userID');
        $this->db->from('item_request');
        $this->db->where('users.userID', $userID);
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->order_by('requestID', 'DESC');
        $this->db->where('status !=', 'Pending Submission');
        $this->db->where('status =', 'Delivered');
        $query = $this->db->get();
        return $query->num_rows();
    }

    //display during user adding items
    public function displayOpenRequest($userID)
    {
        $this->db->select('item_request.requestID, status, category, date_requested, users.userID');
        $this->db->from('item_request');
        $this->db->where('status', "Pending Submission");
        $this->db->where('item_request.userID', $userID);
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->order_by('requestID', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function displayUnitHead()
    {
        $this->db->select('item_request.requestID, item_request.userID, username, date_requested, status, item_request.department,
                          cash_payment_to, cash_advance_to, purchase_from, job_to_be_done_by, account_no, account_name');
        $this->db->from('item_request');
        $this->db->where('status', 'Pending Dean Approval');
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->order_by('date_requested', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function requisition_form($id)
    {
        $this->db->select('item_request.requestID, item_request.userID, username, DATE(date_requested) as date, status, item_request.department,
                          cash_payment_to, cash_advance_to, purchase_from, job_to_be_done_by, account_no, account_name, unit_head
                          , purchase_officer, funds_available');
        $this->db->from('item_request');
        $this->db->where('requestID', $id);
        $this->db->join('users', 'users.userID = item_request.userID');
        $query = $this->db->get();
        return $query->row();
    }


    public function displayUnitRequestNotif()
    {
        $this->db->select('requestID, date_requested, status, department');
        $this->db->from('item_request');
        $this->db->where('status', 'Pending Dean Approval');
        $this->db->where('department', $this->session->userdata('department'));
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countApprovedRequest($userID)
    {
        $this->db->select('*');
        $this->db->from('request_log');
        $this->db->where('userID', $userID);
        $query = $this->db->get();
        return $query->num_rows();
    }

    /*public function budgetApprovedRequest($userID)
    {
        $this->db->select('*');
        $this->db->from('request_log');
        $this->db->where('userID', $userID);
        $query = $this->db->get();
        return $query->num_rows();
    }*/

    public function displayBudgetRequestNotif()
    {
        $this->db->select('requestID, date_requested, status');
        $this->db->from('item_request');
        $this->db->where('status', 'Pending Approval Budgeting');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function displayPurchasingRequestNotif()
    {
        $this->db->select('requestID, date_requested, status');
        $this->db->from('item_request');
        $this->db->where('status', 'Pending Approval Purchasing');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function displayCustodianRequestNotif()
    {
        $this->db->select('PO_number');
        $this->db->from('purchase_order');
        $this->db->where('status', 'Ordered');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function displayBudgeting()
    {
        $this->db->select('item_request.requestID, username, date_requested, item_request.department, item_request.userID, 
        status, account_no, account_name, funds_available');
        $this->db->from('item_request');
        $this->db->where('status', 'Pending Approval Budgeting');
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->order_by('requestID', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function displayPurchasing()
    {
        $this->db->select('item_request.requestID, username, date_requested, item_request.department, status,
        cash_advance_to, request_type, item_request.userID');
        $this->db->from('item_request');
        $this->db->where('status', 'Pending Approval Purchasing');
        $this->db->or_where('status', 'Approved by Purchasing');
        $this->db->or_where('status', 'Processing');
        $this->db->or_where('status', 'Canvassing');
        $this->db->or_where('status', 'PO Prepared');
        $this->db->or_where('status', 'Ordered');
        $this->db->or_where('status', 'Cancelled');
        $this->db->or_where('status', 'Returned by Purchasing');
        $this->db->or_where('status', 'Edited by Requisitioner');
        $this->db->where('status !=', 'Declined');
        $this->db->where('status !=', 'Archived');
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->order_by('requestID', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function process_request_purchasing($requestID)
    {
        $this->db->select('item_request.requestID, userID, date_requested, item_request.department, status,
        cash_advance_to, request_type, remarks');
        $this->db->from('item_request');
        $this->db->where('requestID', $requestID);
        $query = $this->db->get();
        return $query->row();
    }

    public function count_request_purchasing(){
        $this->db->select('item_request.requestID, date_requested, item_request.department, status,
        cash_advance_to, request_type');
        $this->db->from('item_request');
        $this->db->where('status !=', 'Pending Approval Budgeting');
        $this->db->where('status !=', 'Pending Dean Approval');
        $this->db->where('status !=', 'Pending Submission');
        $this->db->where('status !=', 'Declined');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_urgent(){
        $this->db->select('item_request.requestID, date_requested, item_request.department, status,
        cash_advance_to, request_type');
        $this->db->from('item_request');
        $this->db->where('request_type =','urgent');
        $this->db->where('status !=', 'PO Prepared');
        $this->db->where('status !=', 'Pending Approval Budgeting');
        $this->db->where('status !=', 'Pending Dean Approval');
        $this->db->where('status !=', 'Pending Submission');
        $this->db->where('status !=', 'Declined');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_cash_advance(){
        $this->db->select('item_request.requestID, date_requested, item_request.department, status,
        cash_advance_to, request_type');
        $this->db->from('item_request');
        $this->db->where('cash_advance_to !=','');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function displayUserRequest()
    {
        $this->db->select('item_request.requestID, username, date_requested, status');
        $this->db->from('item_request');
        $this->db->where('status', 'Waiting Dean');
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->order_by('requestID', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function declinedRequest($userID)
    {
        $this->db->select('item_request.requestID, username, date_requested, status, approved_by, date_approved, users.userID');
        $this->db->from('item_request');
        $this->db->where('users.userID', $userID);
        $this->db->where('status', 'Declined');
        $this->db->join('users', 'users.userID = item_request.userID');
        $query = $this->db->get();
        return $query->result();
    }

    public function displayComment()
    {
        $this->db->select('comment, username, requestID, date, comment.userID, replied_to, commentID');
        $this->db->from('comment');
        $this->db->join('users', 'users.userID = comment.userID');
        $this->db->order_by('date', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function unread_comments($userID){
        $this->db->select('requestID, date, comment.userID, replied_to, commentID, status');
        $this->db->from('comment');
        $this->db->where('status =', '0');
        $this->db->where('replied_to', $userID);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function comment_count($userID){
        $this->db->select('requestID, date, comment.userID, replied_to, status, commentID');
        $this->db->from('comment');
        $this->db->where('status =', '0');
        $this->db->where('replied_to', $userID);
        $this->db->group_by('requestID');
        $query = $this->db->get();
        return $query->result();
    }

    public function mark_read($userID, $requestID, $update){
        $this->db->where('status =', '0');
        $this->db->where('requestID', $requestID);
        $this->db->where('replied_to', $userID);
        $this->db->update('comment', $update);
        return $this->db->affected_rows();
    }

    public function display_supplier()
    {
        $this->db->select('supplierID, supplierName, supplierAddress, phone_no');
        $this->db->from('supplier');
        $query = $this->db->get();
        return $query->result();
    }



    //For Printing
    public function displayRequest($requestID)
    {
        $this->db->select('itemID, itemName, brand, itemDescription, unit, quantity, item.requestID, pricePerUnit, unit_total');
        $this->db->from('item');
        $this->db->where('item.requestID', $requestID);
        $query = $this->db->get();
        return $query->result();
    }

    public function poItems()
    {
        $this->db->select('itemID, po_number, itemName, brand, itemDescription, unit, quantity, quantity_delivered, requestID, pricePerUnit, status, date_delivered, 
        with_discrepancy, label, unit_total, model, date_updated');
        $this->db->from('item');
        $query = $this->db->get();
        return $query->result();
    }

    public function item($id)
    {
        $this->db->select('itemID, itemName, brand, itemDescription, unit, quantity, date_delivered, item.requestID');
        $this->db->from('item');
        $this->db->where('requestID', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function displaySupplier($poNumber)
    {
        $this->db->select('supplier_id, supplierID, supplierName, supplierAddress, phone_no, PO_number');
        $this->db->from('purchase_order');
        $this->db->join('supplier', 'supplier.supplierID = purchase_order.supplier_id');
        $this->db->where('PO_number', $poNumber);
        $query = $this->db->get();
        return $query->row();
    }

    public function displayPurchaseOrder($poNumber)
    {
        $this->db->select('PO_number, credit_terms, order_date, delivery_time, request_id');
        $this->db->from('purchase_order');
        $this->db->where('PO_number', $poNumber);
        $query = $this->db->get();
        return $query->row();
    }

    public function displayPO()
    {
        $this->db->select('PO_number, request_id, order_date, date_received, date_completed, status, remarks');
        $this->db->from('purchase_order');
        $this->db->order_by('PO_number', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function po_total($requestID)
    {
        $this->db->select_sum('unit_total');
        $this->db->from('item');
        $this->db->where('requestID', $requestID);
        $query = $this->db->get();
        return $query->result();
    }

    public function display_po_items($po)
    {
        $this->db->select('itemID, itemName, brand, model, itemDescription, unit, quantity, pricePerUnit');
        $this->db->from('item');
        $this->db->where('po_number', $po);
        $query = $this->db->get();
        return $query->result();
    }


    ##Accomplishment Report
    public function preparedPo($po)
    {
        $this->db->insert('po_prepared', $po);
        return $this->db->insert_id();
    }

    public function requestProcessed($request)
    {
        $this->db->insert('request_processed', $request);
        return $this->db->insert_id();
    }

    public function poOrdered($po)
    {
        $this->db->insert('ordered_po', $po);
        return $this->db->insert_id();
    }

    public function monthlyRequest($date)
    {
        $this->db->select('date_requested');
        $this->db->where('month(date_requested)', $date);
        $this->db->from('item_request');
        $this->db->where('status !=', 'Pending Submission');
        $query = $this->db->get();
        return $query->num_rows();
    }


    ##Accomplishment Report Data for display
    public function poPrepared($date, $year)
    {
        $this->db->select('po_id, date');
        $this->db->from('po_prepared');
        $this->db->where('month(date)', $date);
        $this->db->where('year(date)', $year);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function orderedPo($date, $year)
    {
        $this->db->select('po_id, date');
        $this->db->from('ordered_po');
        $this->db->where('month(date)', $date);
        $this->db->where('year(date)', $year);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function receivedRequest($date, $year)
    {
        $this->db->select('date_requested');
        $this->db->where('month(date_requested)', $date);
        $this->db->where('year(date_requested)', $year);
        $this->db->from('item_request');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function processedRequest($date, $year)
    {
        $this->db->select('requestID, request_date');
        $this->db->from('request_processed');
        $this->db->where('month(request_date)', $date);
        $this->db->where('year(request_date)', $year);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function cashAdvance($date, $year)
    {
        $this->db->select('requestID, request_type, request_date');
        $this->db->from('request_processed');
        $this->db->where('request_type', 'cash_advance');
        $this->db->where('month(request_date)', $date);
        $this->db->where('year(request_date)', $year);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function urgentRequest($date, $year)
    {
        $this->db->select('requestID, request_type, request_date');
        $this->db->from('request_processed');
        $this->db->where('request_type', 'urgent');
        $this->db->where('month(request_date)', $date);
        $this->db->where('year(request_date)', $year);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function package()
    {
        $this->db->select('*');
        $this->db->from('package');
        $query = $this->db->get();
        return $query->result();
    }

    public function package_item($packageID)
    {
        $this->db->select('*');
        $this->db->from('package_item');
        $this->db->where('item_package_id', $packageID);
        $query = $this->db->get();
        return $query->result();
    }

    public function new_package_item($package){
        $this->db->insert('package_item', $package);
        return $this->db->insert_id();
    }

    public function package_name($id){
        $this->db->select('package_name');
        $this->db->from('package');
        $this->db->where('package_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function edit_package($id, $detail){
        $this->db->where('package_id', $id);
        $this->db->update('package', $detail);
        return $this->db->affected_rows();
    }

    public function edit_item_package($id, $detail){
        $this->db->where('item_id', $id);
        $this->db->update('package_item', $detail);
        return $this->db->affected_rows();
    }

    public function delete_item_package($item){
        $this->db->where('item_id', $item);
        $this->db->delete('package_item');
        return $this->db->affected_rows();
    }
    public function delete_package($item){
        $this->db->where('package_id', $item);
        $this->db->delete('package');
        return $this->db->affected_rows();
    }

    public function new_package($package){
        $this->db->insert('package', $package);
        return $this->db->insert_id();
    }

    public function package_items(){
        $this->db->select('*');
        $this->db->from('package_item');
        $query = $this->db->get();
        return $query->result();
    }

    public function getDate()
    {
        $this->db->select('date');
    }

    function get_data($date)
    {
        $dayQuery =  $this->db->query("SELECT  MONTHNAME(date) as y, COUNT(requestID) as a FROM request_processed WHERE MONTH(date_requested) = 
        GROUP BY MONTH(date)");
        return $dayQuery->result();

        /*
        $this->db->select('(SELECT MONTHNAME(date) as y, COUNT(requestID) as a FROM request_processed)', FALSE);
        $this->db->order_by('monthname(date)');
        $dayQuery = $this->db->get();
        return $dayQuery;
        */
    }

    public function item_unit()
    {
        $this->db->select('unit_id, unit_name');
        $this->db->from('unit');
        $query = $this->db->get();
        return $query->result();
    }
    public function item_unit_modal()
    {
        $this->db->select('unit_id, unit_name');
        $this->db->from('unit');
        $query = $this->db->get();
        return $query->result();
    }

    public function archive_request(){
        $this->db->select('*');
        $this->db->where('status =', 'Archived');
        $this->db->from('item_request');
        $query = $this->db->get();
        return $query->result();
    }

    public function archive_po(){
        $this->db->select('*');
        $this->db->where('status =', 'Archived');
        $this->db->from('purchase_order');
        $query = $this->db->get();
        return $query->result();
    }
}
