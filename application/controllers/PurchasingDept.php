<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class PurchasingDept extends CI_Controller
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
        $transID = $this->input->post('reqID');
        $data['id'] = $this->id();
        $data['requestID'] = $this->request_model->get_request_id($transID);
        $data['item'] = $this->request_model->display_item_po();
        $data['suppliers'] = $this->request_model->display_supplier();
        $this->load->view('purchase_dept/purchaseOrder/createPurchaseOrder', $data);
    }


    //purchase order number
    public function id()
    {
        $idNumber = rand(10, 100);
        $this->session->set_userdata('po_number', $idNumber);
        return $idNumber;
    }


    #Canvasing 
    public function canvass()
    {
        $date = date('Y-m-d');
        $transID = $this->input->post('reqID');
        $request = $this->request_model->process_request_purchasing($transID);

        $update = array(
            'status' => 'Canvassing'
        );


        if ($request->cash_advance_to != "") {
            $requestProcessed = array(
                'requestID' => $transID,
                'request_date' => $date,
                'request_type' => "Cash Advance"
            );
            $this->request_model->requestProcessed($requestProcessed);
        }
        if ($request->request_type == "urgent") {
            $requestProcessed = array(
                'requestID' => $transID,
                'request_date' => $date,
                'request_type' => "urgent"
            );
            $this->request_model->requestProcessed($requestProcessed);
        }

        if ($request->cash_advance_to == "" || $request->request_type == "ordinary") {
            $requestProcessed = array(
                'requestID' => $transID,
                'request_date' => $date
            );
            $this->request_model->requestProcessed($requestProcessed);
        }


        $this->request_model->update_request($transID, $update);
        $data['requestID'] = $this->request_model->get_request_id($transID);
        $data['request_count'] =  $this->request_model->displayPurchasingRequestNotif();
        $data['items'] = $this->request_model->displayRequest($transID);
        $data['suppliers'] = $this->request_model->display_supplier();
        $this->load->view('purchasing/canvass_form', $data);
    }


    public function print_canvass()
    {
        $transID = $this->input->post('reqID');
        $data['requestID'] = $this->request_model->get_request_id($transID);
        $data['items'] = $this->request_model->displayRequest($transID);
        $data['request_count'] =  $this->request_model->displayPurchasingRequestNotif();
        $data['suppliers'] = $this->request_model->display_supplier();
        $this->load->view('purchasing/canvass_form', $data);
    }

    public function print_rf()
    {
        $id = $this->input->post('reqID');
        $data['form'] = $this->request_model->requisition_form($id);
        $data['item'] = $this->request_model->display_item();
        $data['id'] = $id;
        $this->load->view('purchasing/print_rf', $data);
    }

    //processing of purchase order
    public function processPO()
    {
        $transID = $this->input->post('reqID');
        $this->session->set_userdata('reqID', $transID);
        $data['requestID'] = $transID;
        $data['date_today'] = date('Y-m-d');
        $data['item'] = $this->request_model->displayRequest($transID);
        $data['suppliers'] = $this->request_model->display_supplier();
        $this->load->view('purchasing/new_po', $data);
    }

    public function purchase_order_item()
    {
        $transID = $this->session->userdata('reqID');
        $total = '0';
        foreach ($this->request_model->displayRequest($transID) as $item) {
            $total += $item->unit_total;
        }

        $data['requestID'] = $transID;
        $data['items'] = $this->request_model->displayRequest($transID);
        $data['po_details'] = $this->request_model->displayPurchaseOrder($this->session->userdata('po'));
        $data['po_total'] = number_format($total);
        $this->load->view('purchasing/item_po', $data);
    }


    public function createPurchaseOrder()
    {
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('credit', 'Credit Terms', 'required|numeric');
        $this->form_validation->set_rules('delivery_time', 'Delivery Lead Time', 'required|numeric');
        //$this->form_validation->set_rules('date', 'Order Date', 'required');
        $this->form_validation->set_rules('contact', 'Tel. #, Fax #:', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if ($this->form_validation->run() == FALSE) {
            $transID = $this->input->post('reqID');
            // $this->session->set_userdata('reqID', $transID);
            $data['requestID'] = $transID;
            $data['item'] = $this->request_model->displayRequest($transID);
            $data['suppliers'] = $this->request_model->display_supplier();
            $data['date_today'] = date('Y-m-d');
            $this->load->view('purchasing/new_po', $data);
        } else {


            $supplier = $this->request_model->get_supplier_id($this->input->post('supplier'));
            $creditTerms = $this->input->post('credit');
            $orderDate = $this->input->post('date');
            $delivery_time = $this->input->post('delivery_time');
            $requestID = $this->input->post('reqID');


            $purchaseOrder = array(
                'supplier_id' => $supplier,
                'request_id' => $requestID,
                'order_date' => $orderDate,
                'credit_terms' => $creditTerms,
                'delivery_time' => $delivery_time
            );

            /* $requestUpdate = array('status' => 'PO Prepared');
            $this->request_model->update_request($requestID, $requestUpdate); */

            $po_id = $this->request_model->purchaseOrder($purchaseOrder);
            $this->session->set_userdata('po', $po_id);
            redirect('PurchasingDept/purchase_order_item');
        }
    }

    public function submit_purchase_order()
    {
        $date = date('Y-m-d');

        $preparedPo = array(
            'po_id' => $this->session->userdata('po'),
            'date' => $date
        );

        $update = array(
            'status' => 'PO Prepared'
        );

        $this->request_model->update_request($this->session->userdata('reqID'), $update);
        $this->request_model->preparedPo($preparedPo);
        redirect('approval/displayRequestPurchasing');
    }


    //---- edit/update/delete purchase order
    public function editPurchaseOrder()
    {
        $poNumber = $this->input->post('poNumber');
        $data['po_supplier'] = $this->request_model->display_supplier();
        $data['supplier'] = $this->request_model->displaySupplier($poNumber);
        $data['po_details'] = $this->request_model->displayPurchaseOrder($poNumber);
        $data['po_number'] = $poNumber;
        $data['date_today'] = date('Y-m-d');
        $data['items'] = $this->request_model->poItems($poNumber);
        $this->load->view('purchasing/edit_po', $data);
    }

    public function updatePurchaseOrder()
    {

        $poNumber = $this->input->post('po_number');
        $supplier = $this->request_model->get_supplier_id($this->input->post('supplier'));
        $creditTerms = $this->input->post('credit');
        $orderDate = $this->input->post('date');
        $requestID = $this->input->post('reqID');

        $purchaseOrder = array(
            'supplier_id' => $supplier,
            'request_id' => $requestID,
            'order_date' => $orderDate,
            'credit_terms' => $creditTerms
        );

        $order_details = array(
            'po_id' => $poNumber,
            'date' => $orderDate
        );


        $this->request_model->poOrdered($order_details);
        $this->request_model->update_po($poNumber, $purchaseOrder);
        redirect('PurchasingDept/purchase_order_item');
    }


    public function edit_item()
    {
        $item = $this->input->post('item');
        $description = $this->input->post('description');
        $unit = $this->input->post('unit');
        $brand = $this->input->post('brand');
        $quantity = $this->input->post('quantity');
        $itemID = $this->input->post('itemID');
        $poNumber = $this->input->post('poNum');
        $requestID = $this->input->post('reqID');
        $price = $this->input->post('price');
        $unit_total = (float) $price * $quantity;

        $itemDetails = array(
            'itemName' => $item,
            'itemDescription' => $description,
            'brand' => $brand,
            'unit' => $unit,
            'quantity' => $quantity,
            'pricePerUnit' => $price,
            'unit_total' => $unit_total
        );

        $this->request_model->update_item($itemID, $itemDetails);
        redirect('PurchasingDept/purchase_order_item');
    }

    public function delete_item()
    {
        $itemID = $this->input->post('itemID');
        $poNumber = $this->input->post('poNum');

        $this->request_model->deletePuchaseOrderitem($itemID);
        redirect('PurchasingDept/purchase_order_item');
    }


    //viewing purchase order
    public function view_po()
    {
        $data['po'] = $this->request_model->displayPO();
        $data['request_count'] =  $this->request_model->displayPurchasingRequestNotif();
        $this->load->view('purchasing/generated_po', $data);
    }

    public function archive_po()
    {
        $po_num = $this->input->post('poNumber');
        $req_id = $this->input->post('reqID');

        $update = array(
            'status' => 'Archived'
        );

        $this->request_model->update_po($po_num, $update);
        $this->request_model->update_request($req_id, $update);
        redirect('PurchasingDept/view_po');
    }

    public function archive_request()
    {
        $po_num = $this->input->post('poNum');
        $req_id = $this->input->post('reqID');

        $update = array(
            'status' => 'Archived'
        );

        $this->request_model->update_request($req_id, $update);
        redirect('approval/displayRequestPurchasing');
    }

    public function archive()
    {
        $data['archive_po'] = $this->request_model->archive_po();
        $this->load->view('purchasing/archive', $data);
    }

    public function view_archived_request()
    {
        $id = $this->input->post('requestID');
        $data['id'] = $id;
        $data['form'] = $this->request_model->requisition_form($id);
        $data['item'] = $this->request_model->display_item();
        $this->load->view('purchasing/requisition_form', $data);
    }

    public function purchaseOrder()
    {
        $transID = $this->input->post('reqID');
        $this->session->set_userdata('reqID', $transID);
        $poNumber = $this->input->post('poNumber');
        $data['supplier'] = $this->request_model->displaySupplier($poNumber);
        $data['po_details'] = $this->request_model->displayPurchaseOrder($poNumber);
        $data['request_count'] =  $this->request_model->displayPurchasingRequestNotif();
        $data['po_number'] = $poNumber;
        $data['items'] = $this->request_model->poItems();
        $data['requestID'] = $transID;
        $this->load->view('purchasing/purchase_order', $data);
    }

    public function no_request_po()
    {
        $transID = $this->input->post('reqID');
        $this->session->set_userdata('reqID', $transID);
        $poNumber = $this->input->post('poNumber');
        $data['supplier'] = $this->request_model->displaySupplier($poNumber);
        $data['po_details'] = $this->request_model->displayPurchaseOrder($poNumber);
        $data['request_count'] =  $this->request_model->displayPurchasingRequestNotif();
        $data['po_number'] = $poNumber;
        $data['items'] = $this->request_model->poItems();
        $data['requestID'] = $transID;
        $this->load->view('purchasing/purchase_order', $data);
    }

    public function receivingReport()
    {
        $poNumber = $this->input->post('poNum');
        $dateNow = date('Y-m-d');
        $data['rr_no'] = $this->inventory_model->rr($poNumber);
        $data['poNumber'] = $poNumber;
        $data['dateNow'] = $dateNow;
        $data['poStatus'] = $this->inventory_model->poStatus($poNumber);
        $data['details'] = $this->inventory_model->poForReport($poNumber);
        $data['dateOrdered'] = $this->inventory_model->dateOrdered($poNumber);
        $data['dateReceived'] = $this->inventory_model->dateReceived($poNumber);
        $data['supplier'] = $this->inventory_model->supplier($poNumber);
        $data['items'] = $this->request_model->poItems();
        $data['requestID'] = $this->inventory_model->poRequestID($poNumber);
        $data['department'] = $this->inventory_model->requestDepartment($poNumber);
        $data['request_count'] =  $this->request_model->displayPurchasingRequestNotif();
        $this->load->view('purchasing/receiving_report', $data);
    }

    public function print_rr()
    {
        $poNumber = $this->session->userdata('rr_po_number');
        $dateNow = date('Y-m-d');
        $data['rr_no'] = $this->session->userdata('rr');
        $data['poNumber'] = $poNumber;
        $data['dateNow'] = $dateNow;
        $data['poStatus'] = $this->inventory_model->poStatus($poNumber);
        $data['details'] = $this->inventory_model->poForReport($poNumber);
        $data['dateOrdered'] = $this->inventory_model->dateOrdered($poNumber);
        $data['dateReceived'] = $this->inventory_model->dateReceived($poNumber);
        $data['supplier'] = $this->inventory_model->supplier($poNumber);
        $data['items'] = $this->request_model->poItems();
        $data['requestID'] = $this->inventory_model->poRequestID($poNumber);
        $data['department'] = $this->inventory_model->requestDepartment($poNumber);
        $this->load->view('property/print_rr', $data);
    }

    //print purchase order
    public function print()
    {
        // $transID = $this->input->post('reqID');
        $poNumber = $this->input->post('poNumber');
        $requestID = $this->input->post('reqID');
        $orderDate = $this->input->post('date');


        $update = array(
            'status' => 'ordered'
        );


        $order_details = array(
            'po_id' => $poNumber,
            'date' => $orderDate
        );

        $total = "0";
        foreach ($this->request_model->displayRequest($requestID) as $item) {
            $total += $item->unit_total;
        }

        $this->request_model->poOrdered($order_details);
        $this->request_model->update_request($requestID, $update);
        $this->request_model->update_po($poNumber, $update);
        $data['supplier'] = $this->request_model->displaySupplier($poNumber);
        $data['po_details'] = $this->request_model->displayPurchaseOrder($poNumber);
        $data['item'] = $this->request_model->poItems();
        $data['po_total'] = number_format($total);
        $this->load->view('purchasing/print_po', $data);
    }

    public function cancel_po()
    {
        $poNumber = $this->input->post('poNumber');
        $requestID = $this->input->post('reqID');

        $update = array(
            'status' => 'Cancelled'
        );
        $reason = array(
            'status' => 'Cancelled by VP'
        );

        $this->request_model->update_request($requestID, $reason);
        $this->request_model->update_po($poNumber, $update);

        redirect('PurchasingDept/view_po');
    }

    public function order_po()
    {

        $poNumber = $this->input->post('poNumber');
        $requestID = $this->input->post('reqID');

        $update = array(
            'status' => 'Ordered'
        );

        $this->request_model->update_request($requestID, $update);
        $this->request_model->update_po($poNumber, $update);

        redirect('PurchasingDept/view_po');
    }



    //Populate textboxes id=Address/Contact on dropdown select
    public function show_address()
    {
        $name = $this->input->post('supplier');
        if (isset($_POST['supplier'])) {
            $supplierAddress = $this->request_model->get_supplier_address($name);
            echo $supplierAddress;
        }
    }

    public function show_contact()
    {
        $name = $this->input->post('supplier');
        if (isset($_POST['supplier'])) {
            $supplierContanct = $this->request_model->get_supplier_contact($name);
            echo $supplierContanct;
        }
    }

    #report
    public function generateReport()
    {
        $data['start_year'] =  date('Y');
        $earliest_year = '2019';
        $data['end_year'] = '2029';

        $this->load->view('purchasing/reportGenerator', $data);
    }

    public function report()
    {

        $date = $this->input->post('date');
        $year = $this->input->post('year');
        $data['preparedPo'] = $this->request_model->poPrepared($date, $year);
        $data['orderedPo'] = $this->request_model->orderedPo($date, $year);
        $data['processedRequest'] = $this->request_model->processedRequest($date, $year);
        $data['receivedRequest'] = $this->request_model->receivedRequest($date, $year);
        $data['cashAdvance'] = $this->request_model->cashAdvance($date, $year);
        $data['urgent'] = $this->request_model->urgentRequest($date, $year);
        $this->load->view('purchasing/accomplishment_report', $data);
    }

    public function test()
    {
        $this->load->view('purchase_dept/report/accomplishment_report');
    }

    public function chartReport()
    {
        $year = $this->input->post('date');
        $data = $this->request_model->processedRequest($year);
        $x['data'] = json_encode($data);
        $this->load->view('purchase_dept/report/chart', $x);
    }

    public function pendingPuchaseOrder()
    {

        $this->load->view('purchasing/pending_po');
    }

    public function requisitionForm()
    {
        $id = $this->input->post('requestID');
        $data['form'] = $this->request_model->requisition_form($id);
        $data['item'] = $this->request_model->display_item();
        $data['id'] = $id;
        $this->load->view('purchasing/requisition_form', $data);
    }

    public function create_PO()
    {

        $this->load->view('purchasing/create_PO');
    }

    public function graphReports()
    {

        $this->load->view('purchasing/summary_reports');
    }

    public function supplier_profiling()
    {
        $this->load->view('purchasing/supplier_profiling');
    }

    public function create_supplier()
    {
        $supplierName = $this->input->post('supplier_name');
        $address = $this->input->post('address');
        $contact = $this->input->post('contact_no');
        $email = $this->input->post('email');
        $itemsSupplied = $this->input->post('itemsSupplied');

        $newSupplier = array(
            'supplierName' => $supplierName,
            'supplierAddress' => $address,
            'phone_no' => $contact,
            'email' => $email,
            'itemsSupplied' => $itemsSupplied
        );
        $this->request_model->create_supplier($newSupplier);
        $this->session->set_flashdata('supplier_created', 'Supplier Created');
        redirect('PurchasingDept/supplier_profiling');
    }

    public function edit_supplier()
    {
        $supplierID = $this->input->post('supplierID');
        $supplierName = $this->input->post('supplier_name');
        $address = $this->input->post('address');
        $contact = $this->input->post('contact_no');
        $email = $this->input->post('email');
        $items = $this->input->post('itemsSupplied');

        $details = array(
            'supplierName' => $supplierName,
            'supplierAddress' => $address,
            'phone_no' => $contact,
            'email' => $email,
            'itemsSupplied' => $items
        );
        $this->request_model->edit_supplier($supplierID, $details);
        redirect('PurchasingDept/view_supplier');
    }

    public function delete_supplier(){
        $supplierID = $this->input->post('supplierID');
        $this->request_model->delete_supplier($supplierID);
        redirect('PurchasingDept/view_supplier');
    }

    public function view_supplier()
    {
        $data['suppliers'] = $this->request_model->view_supplier();
        $data['supplier_details'] = $this->request_model->view_supplier();
        $this->load->view('purchasing/view_supplier', $data);
    }

    public function create_request()
    {
        $data['categories'] = $this->request_model->categories();
        $data['accounts'] = $this->request_model->account_autocomplete();
        $this->load->view('purchasing/create_request', $data);
    }

    public function account()
    {
        $name = $this->input->post('account_no');
        if (isset($_POST['account_no'])) {
            $supplierAddress = $this->request_model->account_name($name);
            echo $supplierAddress;
        }
    }

    public function purchasing_request()
    {
        $this->form_validation->set_rules('account_no', 'Account No.', 'required|numeric');
        // $this->form_validation->set_rules('account_name', 'Account Name', 'required|');

        if ($this->form_validation->run() == FALSE) {
            // $data['categories'] = $this->request_model->categories();
            $this->load->view('purchasing/create_request');
        } else {

            $cash_payment_to = $this->input->post('cash_payment_to');
            $cash_advance_to = $this->input->post('cash_advance_to');
            $purchase_from = $this->input->post('purchase_from');
            $job_done_by = $this->input->post('job_done_by');
            $account_no = $this->input->post('account_no');
            $account_name = $this->input->post('account_name');
            //  $category = $this->input->post('category');
            $user = $this->request_model->get_user_id($this->session->userdata('username'));
            $request_type = $this->input->post('request_type');
            $date = date("Y-m-d");
            $newRequest = array(
                'userID' => $user,
                'date_requested' => $date,
                'status' => 'Pending Submission',
                //    'category' => $category,
                'cash_payment_to' => $cash_payment_to,
                'cash_advance_to' => $cash_advance_to,
                'purchase_from' => $purchase_from,
                'job_to_be_done_by' => $job_done_by,
                'account_no' => $account_no,
                'account_name' => $account_name,
                'request_type' => $request_type
            );

            $add = $this->request_model->addRequest($newRequest);
            // $this->session->set_userdata('category', $category);
            $this->session->set_userdata('requestID', $add);
            redirect('PurchasingDept/process_request');
        }
    }

    public function process_request()
    {
        $data['requestID'] = $this->request_model->get_request_id($this->session->userdata('requestID'));
        $data['item'] = $this->request_model->display_item();
        $data['categories'] = $this->request_model->categories();
        $data['package'] = $this->request_model->package();
        $data['selectedCategory'] = $this->request_model->selectedCategory($this->session->userdata('category'));
        $data['unit'] = $this->request_model->item_unit();
        $data['unit_modal'] = $this->request_model->item_unit_modal();
        $this->load->view('purchasing/new_request', $data);
    }

    public function add_item()
    {
        $this->form_validation->set_rules('item', 'Item', 'required|alpha');
        $this->form_validation->set_rules('brand', 'Brand', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'required|numeric');


        if ($this->form_validation->run() == FALSE) {
            $data['requestID'] = $this->request_model->get_request_id($this->session->userdata('requestID'));
            $data['item'] = $this->request_model->display_item();
            $data['package'] = $this->request_model->package();
            $data['unit'] = $this->request_model->item_unit();
            $data['selectedCategory'] = $this->request_model->selectedCategory($this->session->userdata('category'));
            $this->load->view('purchasing/new_request', $data);
        } else {
            $item = $this->input->post('item');
            $brand = $this->input->post('brand');
            $description = $this->input->post('description');
            $unit = $this->input->post('unit');
            $quantity = $this->input->post('quantity');
            $reqID = $this->session->userdata('requestID');
            $model = $this->input->post('model');

            $item = array(
                'itemName' => $item,
                'itemDescription' => $description,
                'brand' => $brand,
                'unit' => $unit,
                'quantity' => $quantity,
                'requestID' => $reqID,
                //            'categoryID' => $this->session->userdata('category'),
                'model' => $model
            );


            $this->request_model->insert_item($item);
            redirect('PurchasingDept/process_request');
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
                'requestID' => $reqID
            );
            $this->request_model->insert_item($newRequest);
        }
        redirect('PurchasingDept/process_request');
    }

    public function edit_request_item()
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


        redirect('PurchasingDept/process_request');
    }

    public function draft_request()
    {
        $userID = $this->request_model->get_user_id($this->session->userdata('username'));
        $data['item'] = $this->request_model->display_item();
        $data['pendingItems'] = $this->request_model->displayOpenRequest($userID);
        $this->load->view('purchasing/draft_request', $data);
    }

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
        $this->load->view('purchasing/edit_request', $data);
    }

    public function delete_request_item()
    {

        $itemID = $this->input->post('itemID');
        $reqID = $this->session->userdata('requestID');

        $this->request_model->delete_item($itemID);

        redirect('PurchasingDept/process_request');
    }

    public function delete_all_item()
    {
        $checkbox = $this->input->post('deleteSelected');
        $values = explode(',', $checkbox);
        foreach ($values as $itemID) {
            $this->request_model->delete_item($itemID);
        }
        redirect('PurchasingDept/process_request');
    }

    public function submit_request()
    {
        $id = $this->request_model->get_user_id($this->session->userdata('username'));
        $transID = $this->session->userdata('requestID');
        $current_date = date('Y-m-d h:i:s');
        $department = $this->request_model->get_user_department($id);


        $status = $this->request_model->get_request_status($this->input->post('id'));
        $declined_by = $this->request_model->declined_by($this->input->post('id'));
        $user = $this->request_model->get_user_id($declined_by);
        $dept = $this->request_model->get_user_department($user);

        $request = array(
            'userID' => $id,
            'date_requested' => $current_date,
            'declined_by' => '',
            'department' => $this->session->userdata('department'),
            'status' => 'Approved by Purchasing'
        );
        $this->request_model->update_request($transID, $request);

        redirect('page/purchasing');
    }

    public function update_request()
    {
        $reqID = $this->input->post('reqID');
        $cash_advance = $this->input->post('cash_advance');
        $cash_payment = $this->input->post('cash_payment');
        $purchase_from = $this->input->post('purchase_from');
        $job_done_by = $this->input->post('job_done');
        $update = array(
            'cash_payment_to' => $cash_payment,
            'cash_advance_to' => $cash_advance,
            'purchase_from' => $purchase_from,
            'job_to_be_done_by' => $job_done_by
        );
        $this->request_model->update_request($reqID, $update);
        redirect('approval/displayRequestPurchasing');
    }



    public function order_cash_advance()
    {
        $update = array('status' => 'ordered');
        $this->request_model->update_request($this->input->post('reqID'), $update);
        redirect('approval/displayRequestPurchasing');
    }

    public function new_po()
    {
        $data['suppliers'] = $this->request_model->display_supplier();
        $this->load->view('purchasing/purchasing_po', $data);
    }

    public function create_new_po()
    {
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('credit', 'Credit Terms', 'required|numeric');
        $this->form_validation->set_rules('delivery_time', 'Delivery Lead Time', 'required|numeric');
        $this->form_validation->set_rules('date', 'Order Date', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['suppliers'] = $this->request_model->display_supplier();
            $data['date_today'] = date('Y-m-d');
            $this->load->view('purchasing/purchasing_po', $data);
        } else {


            $supplier = $this->request_model->get_supplier_id($this->input->post('supplier'));
            $creditTerms = $this->input->post('credit');
            $orderDate = $this->input->post('date');
            $delivery_time = $this->input->post('delivery_time');
            $requestID = $this->input->post('reqID');


            $purchaseOrder = array(
                'supplier_id' => $supplier,
                'request_id' => '',
                'order_date' => $orderDate,
                'credit_terms' => $creditTerms,
                'delivery_time' => $delivery_time
            );

            $po_id = $this->request_model->purchaseOrder($purchaseOrder);
            $this->session->set_userdata('po', $po_id);

            redirect('PurchasingDept/process_new_po');
        }
    }
    public function process_new_po()
    {
        $data['items'] = $this->request_model->display_po_items($this->session->userdata('po'));
        $data['unit'] = $this->request_model->item_unit_modal();
        $this->load->view('purchasing/purchasing_process_po', $data);
    }

    public function add_item_po()
    {
        $item = $this->input->post('item');
        $description = $this->input->post('description');
        $brand = $this->input->post('brand');
        $unit = $this->input->post('unit');
        $quantity = $this->input->post('quantity');
        $poNumber = $this->session->userdata('po');
        $price = $this->input->post('price');

        $itemDetails = array(
            'itemName' => $item,
            'itemDescription' => $description,
            'brand' => $brand,
            'unit' => $unit,
            'quantity' => $quantity,
            'po_number' => $poNumber,
            'pricePerUnit' => $price
        );
        $this->request_model->insert_item($itemDetails);
        redirect('PurchasingDept/process_new_po');
    }

    public function po_submit()
    {
        $date = date('Y-m-d');

        $preparedPo = array(
            'po_id' => $this->session->userdata('po'),
            'date' => $date
        );

        $this->request_model->preparedPo($preparedPo);
        redirect('page/purchasing');
    }

    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|doc|docx|pdf';
        $config['max_size']             = 2000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $itemID = $this->input->post('itemID');

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('msg', $this->upload->display_errors());
            redirect('PurchasingDept/process_request');
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
            redirect('PurchasingDept/process_request');
        }
    }
}
