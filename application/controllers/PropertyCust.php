<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class PropertyCust extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('inventory_model');
        $this->load->model('request_model');
        $this->load->helper('date');
    }

    public function index()
    {
        $data['departments'] = $this->inventory_model->display_department();
        $this->load->view('property_cust/inventory/inventory_view', $data);
    }

    #adding/delete/edit item to inventory
    public function add_item()
    {
        $item = $this->input->post('item');
        $description = $this->input->post('description');
        $unit = $this->input->post('unit');
        $quantity = $this->input->post('quantity');
        $control_no = $this->input->post('control_no');
        $remarks = $this->input->post('remarks');
        $dept = $this->input->post('deptID');
        $deptArea = $this->input->post('deptArea');
        $brand = $this->input->post('brand');
        $serial = $this->input->post('serial_num');
        $date = date('Y-m-d h:m:s');

        $item = array(
            'item_name' => $item,
            'item_description' => $description,
            'brand' => $brand,
            'unit' => $unit,
            'quantity' => '1',
            'control_number' => $control_no,
            'serial_number' => $serial,
            'remarks' => $remarks,
            'department' => $dept,
            'dept_section' => $deptArea
        );
        for ($i = 1; $i <= (int) $quantity; $i++) {
            $add = $this->inventory_model->insert_item($item);
            $log = array(
                'description' => 'Added Item',
                'itemID' => $add,
                'user_incharge' => $this->request_model->get_user_id($this->session->userdata('username')),
                'trans_date' => $date
            );
            $this->inventory_model->item_log($log);
        }
        redirect('PropertyCust/physicalCount');
    }

    public function edit_item_details()
    {
        $area = $this->input->post('assignedArea');
        $itemName = $this->input->post('item_name');
        $description = $this->input->post('item_description');
        $unit = $this->input->post('item_unit');
        $control_no = $this->input->post('item_control');
        $serial = $this->input->post('item_serial');
        $item = $this->input->post('itemID');
        $remarks = $this->input->post('item_remarks');
        $date = date('Y-m-d h:m:s');

        for ($i = 0; $i < count($item); $i++) {
            foreach ($this->inventory_model->items($item[$i]) as $itm) {
                $add = $this->inventory_model->maintenance($itm->item_id);
                if (count($add) == 0) {
                    $update = array(
                        'item_id' => $itm->item_id,
                        'description' => $itm->item_description,
                        'item_name' => $itm->item_name,
                        'model' => $itm->model,
                        'brand' => $itm->brand,
                        'unit' => $itm->unit,
                        'quantity' => $itm->quantity,
                        'control_no' => $itm->control_number,
                        'serial_number' => $itm->serial_number,
                        'department' => $itm->department,
                        'dept_area' => $itm->dept_section
                    );
                    $this->inventory_model->item_changes_log($update);
                }
            }

            $updateItem = array(
                'dept_section' => $area[$i],
                'unit' => $unit[$i],
                'item_description' => $description[$i],
                'item_name' => $itemName[$i],
                'control_number' => $control_no[$i],
                'serial_number' => $serial[$i],
                'remarks' => $remarks[$i]
            );
            $this->inventory_model->update_item($item[$i], $updateItem);
            
            
            $changes = array(
                'dept_section' => $area[$i],
                'unit' => $unit[$i],
                'description' => $description[$i],
                'item_name' => $itemName[$i],
                'control_number' => $control_no[$i],
                'serial_number' => $serial[$i],
                'item_id' => $item[$i],
                'date_updated' => $date
            );
            $this->inventory_model->itemChanges($changes);

            $log = array(
                'description' => 'Edited Item',
                'itemID' => $item[$i],
                'trans_date' => $date,
                'user_incharge' => $this->request_model->get_user_id($this->session->userdata('username'))
            );
            $this->inventory_model->item_log($log);
        }
        redirect('PropertyCust/search');
    }


    public function editItem()
    {
        $item = $this->input->post('item');
        $description = $this->input->post('description');
        $unit = $this->input->post('unit');
        $quantity = $this->input->post('quantity');
        $itemID = $this->input->post('itemID');
        $control_num = $this->input->post('control_num');
        $serial = $this->input->post('serial_num');
        $remarks = $this->input->post('remarks');
        $brand = $this->input->post('brand');
        $deptArea = $this->input->post('dept_area');

        $itemDetails = array(
            'item_name' => $item,
            'item_description' => $description,
            'brand' => $brand,
            'unit' => $unit,
            'quantity' => $quantity,
            'control_number' => $control_num,
            'serial_number' => $serial,
            'remarks' => $remarks,
            'dept_section' => $deptArea
        );

        $this->inventory_model->update_item($itemID, $itemDetails);


        redirect('PropertyCust/physical_count_details');
    }

    public function restoreItem()
    {
        $itemID = $this->input->post('itemID');
        $dept = $this->input->post('deptID');

        $itemUpdate = array(
            'status' => 'restored'
        );

        $disposedUpdate = array(
            'status' => 'restored'
        );

        $this->inventory_model->update_disposed($itemID, $itemUpdate);
        $this->inventory_model->update_item($itemID, $itemUpdate);
        redirect('PropertyCust/deptInventory');
    }

    public function dispose_item()
    {
        $itemID = $this->input->post('itemID');
        $dept = $this->input->post('deptID');
        $remarks = $this->input->post('remarks');
        $date = date('Y-m-d');

        foreach ($this->inventory_model->inventoryItems($dept) as $item) {
            if ($item->item_id == $itemID) {
                $disposeItem = array(
                    'item_id' => $item->item_id,
                    'item_name' => $item->item_name,
                    'brand' => $item->brand,
                    'item_description' => $item->item_description,
                    'unit' => $item->unit,
                    'quantity' => $item->quantity,
                    'pricePerUnit' => $item->pricePerUnit,
                    'control_number' => $item->serial_number,
                    'status' => 'disposed',
                    'remarks' => $remarks,
                    'department' => $item->department,
                    'dept_section' => $item->dept_section,
                    'date_received' => $item->date_received,
                    'date_disposed' => $date
                );
                $this->inventory_model->dispose_item($disposeItem);

                $item = array('status' => 'disposed');
                $this->inventory_model->update_item($itemID, $item);
            }
        }
        redirect('PropertyCust/deptInventory');
    }

    public function editInventory()
    {
        $item = $this->input->post('item');
        $description = $this->input->post('description');
        $brand = $this->input->post('brand');
        $unit = $this->input->post('unit');
        $quantity = $this->input->post('quantity');
        $id = $this->input->post('itemID');
        $control_num = $this->input->post('control_num');
        $serial = $this->input->post('serial');
        $remarks = $this->input->post('remarks');
        $status = $this->input->post('status');
        $deptArea = $this->input->post('dept_area');
        $received_by = $this->input->post('received_by');

        if ($deptArea == "") {
            $itemDetails = array(
                'item_name' => $item,
                'item_description' => $description,
                'brand' => $brand,
                //'unit' => $unit,
                //'quantity' => $quantity,
                'control_number' => $control_num,
                'serial_number' => $serial,
                'remarks' => $remarks,
                'status' => $status,
                'received_by' => $received_by,
                'dept_section' => '0'
            );
            $this->inventory_model->update_item($id, $itemDetails);
        } else {
            $itemDetails = array(
                'item_name' => $item,
                'item_description' => $description,
                'brand' => $brand,
                //'unit' => $unit,
                //'quantity' => $quantity,
                'control_number' => $control_num,
                'serial_number' => $serial,
                'remarks' => $remarks,
                'status' => $status,
                'received_by' => $received_by,
                'dept_section' => $deptArea
            );
            $this->inventory_model->update_item($id, $itemDetails);
        }


        $this->session->set_userdata('id', $id);
        $this->session->set_userdata('area', $deptArea);

        redirect('PropertyCust/deptInventory');
    }

    public function itemDetail()
    {
        $id = $this->session->userdata('id');
        $data['history'] = $this->inventory_model->item_history($id);
        $data['rep_history'] = $this->inventory_model->repair_history($id);
        $data['item_details'] = $this->inventory_model->item_details($id);
        $data['trans_history'] = $this->inventory_model->transItems();
        $data['repair_history'] = $this->inventory_model->repHistory();
        $data['repHistory'] = $this->inventory_model->repairItems();
        $data['departments'] = $this->inventory_model->display_department();
        $data['dept'] = $this->inventory_model->display_department();
        $data['areas'] = $this->inventory_model->area();
        $data['area'] = $this->inventory_model->area();
        $this->load->view('property/item_details', $data);
    }


    public function deleteItem()
    {
        $itemID = $this->input->post('itemID');
        $this->inventory_model->delete_item($itemID);
        redirect('PropertyCust/physical_count_details');
    }

    //purchase order (view)
    public function incoming_items()
    {
        $data['po'] = $this->request_model->displayPO();
        $data['item'] = $this->request_model->poItems();
        $data['departments'] = $this->inventory_model->display_department();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/incoming_po', $data);
    }

    public function recently_added()
    {

        $data['po'] = $this->request_model->displayPO();
        $data['item'] = $this->request_model->poItems();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['departments'] = $this->inventory_model->display_department();
        $this->load->view('property/done_po', $data);
    }

    public function pending_po()
    {
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['po'] = $this->inventory_model->display_pending_po();
        $data['item'] = $this->request_model->poItems();
        $data['unit_modal'] = $this->request_model->item_unit_modal();
        $data['pending_item'] = $this->inventory_model->pendingItems();
        $data['received'] = $this->inventory_model->view_received_items();
        $data['departments'] = $this->inventory_model->display_department();
        $this->load->view('property/pending_po', $data);
    }

    public function delivery_summary()
    {
        $data['po'] = $this->inventory_model->display_pending_po();
        $data['item'] = $this->request_model->poItems();
        $data['unit_modal'] = $this->request_model->item_unit_modal();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['pending_item'] = $this->inventory_model->pendingItems();
        $data['received'] = $this->inventory_model->view_received_items();
        $data['departments'] = $this->inventory_model->display_department();
        $this->load->view('property/delivery_summary', $data);
    }



    public function validate_po()
    {
        $po = $this->input->post('poNum');
        $remarks = $this->input->post('remarks');
        $itemID = $this->input->post('incomplete');
        $id = $this->input->post('itemID');
        $quantity = $this->input->post('quantity_delivered');
        $poDetails = $this->inventory_model->poDetails($po);
        $items = $this->request_model->poItems();
        $date = date('Y-m-d h:m:s');
        $choice = $this->input->post('choice');
        $requestID = $this->input->post('requestID');
        $with_problem_quantity = $this->input->post('with_problem');
        $requestID = $this->input->post('requestID');
        $deptName = $this->inventory_model->requestDept($requestID);
        $dept = $this->inventory_model->getDeptID($deptName);


        for ($i = 0; $i < count($id); $i++) {
            //for ($y = 1; $y <= (int) $quantity[$i]; $y++) {
            foreach ($items as $item) {
                if ($item->itemID == $id[$i]) {
                    if ($quantity[$i] === $item->quantity) {
                        $updateStatus = array(
                            'status' => 'complete',
                            'quantity_delivered' => $item->quantity,
                            //  'with_discrepancy' => 0,
                            'date_delivered' => $date,
                            'label' => ''
                        );
                        $this->request_model->update_item($id[$i], $updateStatus);
                    } else {
                        $updateStatus = array(
                            'status' => 'incomplete',
                            'quantity_delivered' => $quantity[$i],
                            'label' => 'inc',
                            //  'with_discrepancy' => $with_problem_quantity[$i],
                            'date_delivered' => $date
                        );
                        $this->request_model->update_item($id[$i], $updateStatus);
                    }

                    for ($y = 0; $y < (int) $quantity[$i]; $y++) {
                        if ($this->input->post('to_inventory') != "") {
                            $received_items = array(
                                'itemID' => $item->itemID,
                                'itemName' => $item->itemName,
                                'model' => $item->model,
                                'itemDescription' => $item->itemDescription,
                                'brand' => $item->brand,
                                'unit' => $item->unit,
                                'quantity' => '1',
                                'pricePerUnit' => $item->pricePerUnit,
                                'item_requestID' => $item->requestID,
                                'date_delivered' => $date,
                                'status' => "Added to Inventory"
                            );

                            $itm_id = $this->inventory_model->received_items($received_items);

                            $inventoryItems = array(
                                'quantity' => '1',
                                'unit' => $item->unit,
                                'model' => $item->model,
                                'item_group_id' => $itm_id,
                                'item_name' => $item->itemName,
                                'item_description' => $item->itemDescription,
                                'brand' => $item->brand,
                                'pricePerUnit' => $item->pricePerUnit,
                                'date_received' => $date,
                                'request_id' => $requestID,
                                'po_number' => $po,
                                'department' => $dept,
                                'dept_section' => '0',
                                'control_number' => '',
                                'serial_number' => ''
                            );

                            $this->inventory_model->insertIntoInventory($inventoryItems);
                            // $this->inventory_model->received_items($received_items);
                        } else {
                            $received_items = array(
                                'itemID' => $item->itemID,
                                'itemName' => $item->itemName,
                                'model' => $item->model,
                                'itemDescription' => $item->itemDescription,
                                'brand' => $item->brand,
                                'unit' => $item->unit,
                                'quantity' => '1',
                                'pricePerUnit' => $item->pricePerUnit,
                                'item_requestID' => $item->requestID,
                                'date_delivered' => $date
                            );
                            $this->inventory_model->received_items($received_items);
                        }
                    }
                }
            }
            //  }
        }


        $num_items = $this->inventory_model->totalItems($requestID);
        $total_complete = $this->inventory_model->checkStatus($requestID);
        $total = $num_items - $total_complete;
        if ($total == 0) {
            $updatePo = array('status' => 'Delivery Complete');
            $request = array('status' => 'Delivered');
            $this->inventory_model->updatePo($po, $updatePo);
            $this->request_model->update_request($requestID, $request);
        } else {
            $updatePo = array('status' => 'Incomplete Delivery');
            $this->inventory_model->updatePo($po, $updatePo);
        }

        redirect('PropertyCust/incoming_items');
    }

    public function po_details()
    {
        $po = $this->input->post('poNum');
        $data['po_num'] = $po;
        $data['reqID'] = $this->input->post('reqID');
        $data['po'] = $this->inventory_model->display_pending_po();
        $data['item'] = $this->request_model->poItems();
        $data['unit_modal'] = $this->request_model->item_unit_modal();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['pending_item'] = $this->inventory_model->pendingItems();
        $data['received'] = $this->inventory_model->view_received_items();
        $data['departments'] = $this->inventory_model->display_department();
        $this->load->view('property/pending_test', $data);
    }

    public function received_items()
    {
        $po = $this->input->post('poNum');
        $data['po_num'] = $po;
        $data['reqID'] = $this->input->post('reqID');
        $data['po'] = $this->inventory_model->display_pending_po();
        $data['item'] = $this->request_model->poItems();
        $data['unit_modal'] = $this->request_model->item_unit_modal();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['pending_item'] = $this->inventory_model->pendingItems();
        $data['received'] = $this->inventory_model->view_received_items();
        $data['departments'] = $this->inventory_model->display_department();
        $data['count_received'] = $this->inventory_model->countReceived($this->input->post('reqID'));
        $data['count_discrepancies'] = $this->inventory_model->countDiscrepancies($this->input->post('reqID'));
        $data['count_added'] = $this->inventory_model->countAddedToInventory($this->input->post('reqID'));
        $this->load->view('property/received_items', $data);
    }

    public function update_received_items()
    {
        /*
        $itemName = $this->input->post('item');
        $itemDescription = $this->input->post('description');
        $brand = $this->input->post('brand');
        $model = $this->input->post('model');
        $control_no = $this->input->post('control_no');
        $serial = $this->input->post('serial');
        $item_no = $this->input->post('item_no');
        $warranty = $this->input->post('warranty');

        $with_warranty = "N/A";
        if ($warranty != "") {
            $with_warranty = "Yes";
        }

        $received_item = array(
            'itemName' => $itemName,
            'itemDescription' => $itemDescription,
            'brand' => $brand,
            'model' => $model,
            'control_no' => $control_no,
            'serial_number' => $serial,
            'with_warranty' => $with_warranty
        );

        $this->inventory_model->edit_received_items($item_no, $received_item);
        */

        $itemName = $this->input->post('receivedItemName');
        $itemBrand = $this->input->post('receivedItemBrand');
        $itemModel = $this->input->post('receivedItemModel');
        $itemDescription = $this->input->post('receivedItemDescription');
        $itemControl = $this->input->post('receivedItemControl');
        $itemSerial = $this->input->post('receivedItemSerial');
        $itemWarranty = $this->input->post('receivedItemWarranty');
        $warrantyLength = (int) $this->input->post('receivedWarrantyLength');
        $item_no = $this->input->post('item_no');
        $choice = $this->input->post('choice');


        for ($i = 0; $i < count($item_no); $i++) {

            if (is_array($itemWarranty)) {
                $isChecked = (array_search($item_no[$i], $itemWarranty) === false) ? false : true;
                $changes = array(
                    'itemName' => $itemName[$i],
                    'brand' => $itemBrand[$i],
                    'model' => $itemModel[$i],
                    'itemDescription' => $itemDescription[$i],
                    'control_no' => $itemControl[$i],
                    'serial_number' => $itemSerial[$i],
                    'with_warranty' => $isChecked,
                    'warranty_length' => $warrantyLength[$i],
                    'remarks' => $choice[$i]
                );

                $this->inventory_model->edit_received_items($item_no[$i], $changes);
            }

            if (!is_array($itemWarranty)) {
                $itemWarranty = array();
                $isChecked = (array_search($item_no[$i], $itemWarranty) === false) ? false : true;
                $changes = array(
                    'itemName' => $itemName[$i],
                    'brand' => $itemBrand[$i],
                    'model' => $itemModel[$i],
                    'itemDescription' => $itemDescription[$i],
                    'control_no' => $itemControl[$i],
                    'serial_number' => $itemSerial[$i],
                    'with_warranty' => $isChecked,
                    'warranty_length' => $warrantyLength[$i],
                    'remarks' => $choice[$i]
                );

                $this->inventory_model->edit_received_items($item_no[$i], $changes);
            }
        }

        redirect('PropertyCust/pending_po');
    }

    public function update_delivery()
    {
        $po = $this->input->post('poNum');
        $id = $this->input->post('itemID');
        $requestID = $this->input->post('requestID');
        $quantity = $this->input->post('quantity_delivered');
        $poDetails = $this->inventory_model->poDetails($po);
        $items = $this->request_model->poItems();
        $date = date('Y-m-d h:m:s');
        $choice = $this->input->post('choice');
        $with_problem_quantity = $this->input->post('with_problem');
        $requestID = $this->input->post('requestID');
        $deptName = $this->inventory_model->requestDept($requestID);
        $dept = $this->inventory_model->getDeptID($deptName);


        for ($i = 0; $i < count($id); $i++) {
            foreach ($items as $item) {
                if ($item->itemID == $id[$i]) {

                    if ((int) $quantity[$i] + (int) $item->quantity_delivered == $item->quantity) {
                        $updateStatus = array(
                            'status' => 'complete',
                            'quantity_delivered' => $item->quantity,
                            'date_delivered' => $date,
                            'label' => '',
                            'date_updated' => $date
                        );
                        $this->request_model->update_item($id[$i], $updateStatus);

                        $total_items = (int) $item->quantity - (int) $item->quantity_delivered;
                        for ($k = 1; $k <= $total_items; $k++) {

                            if ($this->input->post('to_inventory') != "") {
                                $received_items = array(
                                    'itemID' => $item->itemID,
                                    'itemName' => $item->itemName,
                                    'model' => $item->model,
                                    'itemDescription' => $item->itemDescription,
                                    'brand' => $item->brand,
                                    'unit' => $item->unit,
                                    'quantity' => '1',
                                    'pricePerUnit' => $item->pricePerUnit,
                                    'item_requestID' => $item->requestID,
                                    'date_delivered' => $date,
                                    'status' => 'Added to Inventory'
                                );

                                $itm_id = $this->inventory_model->received_items($received_items);

                                $inventoryItems = array(
                                    'quantity' => '1',
                                    'unit' => $item->unit,
                                    'model' => $item->model,
                                    'item_name' => $item->itemName,
                                    'item_group_id' => $itm_id,
                                    'item_description' => $item->itemDescription,
                                    'brand' => $item->brand,
                                    'pricePerUnit' => $item->pricePerUnit,
                                    'date_received' => $date,
                                    'request_id' => $requestID,
                                    'po_number' => $po,
                                    'department' => $dept,
                                    'dept_section' => '0'
                                );
                                $this->inventory_model->insertIntoInventory($inventoryItems);
                            } else {
                                $received_items = array(
                                    'itemID' => $item->itemID,
                                    'itemName' => $item->itemName,
                                    'model' => $item->model,
                                    'itemDescription' => $item->itemDescription,
                                    'brand' => $item->brand,
                                    'unit' => $item->unit,
                                    'quantity' => '1',
                                    'pricePerUnit' => $item->pricePerUnit,
                                    'item_requestID' => $item->requestID,
                                    'date_delivered' => $date
                                );
                                $this->inventory_model->received_items($received_items);
                            }
                        }
                    } else {

                        $total_quantity = ((int) $quantity[$i] + (int) $item->quantity_delivered);
                        $updateStatus = array(
                            'status' => 'incomplete',
                            'quantity_delivered' => $total_quantity,
                            'label' => 'inc',
                            'date_updated' => $date

                        );

                        $this->request_model->update_item($id[$i], $updateStatus);
                        for ($y = 1; $y <= (int) $quantity[$i]; $y++) {
                            if ($this->input->post('to_inventory') != "") {
                                $received_items = array(
                                    'itemID' => $item->itemID,
                                    'itemName' => $item->itemName,
                                    'model' => $item->model,
                                    'itemDescription' => $item->itemDescription,
                                    'brand' => $item->brand,
                                    'unit' => $item->unit,
                                    'quantity' => '1',
                                    'pricePerUnit' => $item->pricePerUnit,
                                    'item_requestID' => $item->requestID,
                                    'date_delivered' => $date,
                                    'status' => 'Added to Inventory'
                                );

                                $itm_id = $this->inventory_model->received_items($received_items);

                                $inventoryItems = array(
                                    'quantity' => '1',
                                    'unit' => $item->unit,
                                    'model' => $item->model,
                                    'item_group_id' => $itm_id,
                                    'item_name' => $item->itemName,
                                    'item_description' => $item->itemDescription,
                                    'brand' => $item->brand,
                                    'pricePerUnit' => $item->pricePerUnit,
                                    'date_received' => $date,
                                    'request_id' => $requestID,
                                    'po_number' => $po,
                                    'department' => $dept,
                                    'dept_section' => '0'
                                );
                                $this->inventory_model->insertIntoInventory($inventoryItems);
                            } else {
                                $received_items = array(
                                    'itemID' => $item->itemID,
                                    'itemName' => $item->itemName,
                                    'model' => $item->model,
                                    'itemDescription' => $item->itemDescription,
                                    'brand' => $item->brand,
                                    'unit' => $item->unit,
                                    'quantity' => '1',
                                    'pricePerUnit' => $item->pricePerUnit,
                                    'item_requestID' => $item->requestID,
                                    'date_delivered' => $date
                                );
                                $this->inventory_model->received_items($received_items);
                            }
                        }
                    }
                }
            }
        }



        $num_items = $this->inventory_model->totalItems($requestID);
        $total_complete = $this->inventory_model->checkStatus($requestID);
        $total = $num_items - $total_complete;
        if ($total == 0) {
            $updatePo = array('status' => 'Delivery Complete');
            $request = array('status' => 'Delivered');
            $this->inventory_model->updatePo($po, $updatePo);
            $this->request_model->update_request($requestID, $request);
        } else {
            $updatePo = array('status' => 'Incomplete Delivery');
            $this->inventory_model->updatePo($po, $updatePo);
        }

        redirect('PropertyCust/pending_po');
    }

    public function addToInventory()
    {
        $requestID = $this->input->post('requestID');
        $po_number = $this->input->post('poNum');
        $deptName = $this->inventory_model->requestDept($requestID);
        $dept = $this->inventory_model->getDeptID($deptName);

        foreach ($this->inventory_model->inventory_items($requestID) as $item) {
            if ($item->status != "Added to Inventory") {
                $area = $item->dept_section;
                if ($area == "") {
                    $area = "0";
                }

                $inventoryItems = array(
                    'quantity' => $item->quantity,
                    'item_group_id' => $item->item_no,
                    'unit' => $item->unit,
                    'model' => $item->model,
                    'item_name' => $item->itemName,
                    'item_description' => $item->itemDescription,
                    'brand' => $item->brand,
                    'pricePerUnit' => $item->pricePerUnit,
                    'control_number' => $item->control_no,
                    'serial_number' => $item->serial_number,
                    'with_warranty' => $item->with_warranty,
                    'date_received' => $item->date_delivered,
                    'request_id' => $item->item_requestID,
                    'po_number' => $po_number,
                    'department' => $dept,
                    'dept_section' => $area,
                    'received_by' => $item->received_by
                );

                $updateStatus = array('status' => 'Added to Inventory');

                $this->inventory_model->edit_received_items($item->item_no, $updateStatus);
                $this->inventory_model->insertIntoInventory($inventoryItems);
            }
        }

        redirect('PropertyCust/pending_po');
    }

    /*
    public function addToInventory()
    {
        $requestID = $this->input->post('reqID');
        $item_id = $this->input->post('add_item');
        $items = $this->request_model->item($requestID);
        $control_no = $this->input->post('control_no');
        $serial = $this->input->post('serial');
        $dept = $this->input->post('department');
        $po = $this->input->post('poNum');
        $deptArea = '0';

        for ($i = 0; $i < count($item_id); $i++) {
            foreach ($items as $item_detail) {
                if ($item_detail->itemID == $item_id[$i]) {
                    $add_item_inventory = array(
                        'item_id' => $item_detail->itemID,
                        'quantity' => $item_detail->quantity,
                        'brand' => $item_detail->brand,
                        'item_description' => $item_detail->itemDescription,
                        'unit' => $item_detail->unit,
                        'item_name' => $item_detail->itemName,
                        'date_received' => $item_detail->date_delivered,
                        'serial_number' => $serial,
                        'control_number' => $control_no,
                        'department' => $dept,
                        'dept_section' => $deptArea,
                        'status' => '',
                        'remarks' => '',
                    );
                    $this->inventory_model->insert_item($add_item_inventory);
                }
            }
        }

        redirect('PropertyCust/pending_po');
    }
    */

    //Populate textboxes id=Address/Contact on dropdown select
    public function areaName()
    {
        $dept = $this->input->post('id', TRUE);
        $data = $this->inventory_model->display_deptArea($dept);
        echo json_encode($data);
    }

    //item_inventory part
    public function inventoryDetails()
    {
        $dept = $this->input->post('id', TRUE);
        $data = $this->inventory_model->inventoryItem($dept);
        echo json_encode($data);
    }

    //(view)
    public function displayInventory()
    {
        $data['departments'] = $this->inventory_model->display_department();
        $data['inventory'] = $this->inventory_model->displayInventory();

        $this->load->view('property_cust/inventory/item_inventory', $data);
    }

    public function deptAreaChoice()
    {
        $dept = $this->input->post('id', TRUE);
        $data = $this->inventory_model->selectedArea($dept);
        echo json_encode($data);
    }

    //search inventory (views)
    public function showDepartment()
    {
        $data['departments'] = $this->inventory_model->display_department();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['un_assigned'] = $this->inventory_model->unAssigned();
        $this->load->view('property/view_inventory', $data);
    }

    public function physicalCount()
    {
        $data['departments'] = $this->inventory_model->display_department();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/physical_count', $data);
    }

    public function physical_count_details()
    {
        $dept = $this->session->userdata('area');
        $data['dept_choice'] = $this->inventory_model->getDeptName($dept);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['departments'] = $this->inventory_model->display_department();
        $data['items'] = $this->inventory_model->inventoryItems($dept);
        $data['areas'] = $this->inventory_model->displayArea($dept);
        $this->load->view('property/pc_details', $data);
    }

    public function search()
    {
        $dept = $this->input->post('department');
        $data['dept_choice'] = $this->inventory_model->getDeptName($dept);
        $data['departments'] = $this->inventory_model->display_department();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['item_group'] = $this->inventory_model->pc_details($dept);
        $data['items'] = $this->inventory_model->inventoryItems($dept);
        $data['areas'] = $this->inventory_model->displayArea($dept);
        $data['maintenance'] = $this->request_model->item_selections();
        $this->load->view('property/pc_details', $data);
    }

    public function view_pc()
    {
        $dept = $this->input->post('department');
        $deptID = $this->inventory_model->getDeptID($dept);
        $data['dept_choice'] = $dept;
        $data['departments'] = $this->inventory_model->display_department();
        $data['item_group'] = $this->inventory_model->pc_details($deptID);
        $data['items'] = $this->inventory_model->inventoryItems($deptID);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['areas'] = $this->inventory_model->displayArea($deptID);
        $this->load->view('property/pc_details', $data);
    }

    public function deptInventory()
    {
        $dept = $this->input->post('department');
        $name = $this->inventory_model->getDeptName($dept);
        $data['deptID'] = $dept;
        $data['dept_choice'] = $this->inventory_model->getDeptName($dept);
        $data['departments'] = $this->inventory_model->display_department();
        $data['items'] = $this->inventory_model->inventoryItems($dept);
        $data['group'] = $this->inventory_model->noAssignedDept($dept);
        $data['item_group'] = $this->inventory_model->itemGroup($dept);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['repair'] = $this->inventory_model->repairItems();
        $data['areas'] = $this->inventory_model->displayArea($dept);
        $data['transfer_history'] = $this->inventory_model->transfer();
        $data['repair_history'] = $this->inventory_model->repairDetails();
        $data['disposed'] = $this->inventory_model->disposed_item_history();
        $data['totalAssigned'] = $this->inventory_model->countAssigned($dept);
        $data['totalNoAssigned'] = $this->inventory_model->countNoAssigned($dept);
        $data['totalTransfer'] = $this->inventory_model->countTransfer($name);
        $data['totalRepair'] = $this->inventory_model->countRepair($dept);
        $data['totalDisposed'] = $this->inventory_model->countDisposed($dept);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        //$this->load->view('property/inventory', $data);
        $this->load->view('property/test', $data);
    }

    public function deptInventoryPage()
    {
        $dept = $this->session->flashdata('dept');
        $name = $this->inventory_model->getDeptName($dept);
        $data['deptID'] = $dept;
        $data['dept_choice'] = $this->inventory_model->getDeptName($dept);
        $data['departments'] = $this->inventory_model->display_department();
        $data['items'] = $this->inventory_model->inventoryItems($dept);
        $data['group'] = $this->inventory_model->noAssignedDept($dept);
        $data['item_group'] = $this->inventory_model->itemGroup($dept);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['repair'] = $this->inventory_model->repairItems();
        $data['areas'] = $this->inventory_model->displayArea($dept);
        $data['transfer_history'] = $this->inventory_model->transfer();
        $data['repair_history'] = $this->inventory_model->repairDetails();
        $data['disposed'] = $this->inventory_model->disposed_item_history();
        $data['totalAssigned'] = $this->inventory_model->countAssigned($dept);
        $data['totalNoAssigned'] = $this->inventory_model->countNoAssigned($dept);
        $data['totalTransfer'] = $this->inventory_model->countTransfer($name);
        $data['totalRepair'] = $this->inventory_model->countRepair($dept);
        $data['totalDisposed'] = $this->inventory_model->countDisposed($dept);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        //$this->load->view('property/inventory', $data);
        $this->load->view('property/test', $data);
    }

    #search item
    public function searchItem()
    {
        $control_no = $this->input->post('control_no');
        $data['items'] = $this->inventory_model->searchItem($control_no);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['departments'] = $this->inventory_model->display_department();
        $this->load->view('property_cust/inventory/itemSearchResult', $data);
    }

    public function print()
    {
        $dept = $this->inventory_model->getDeptID($this->input->post('deptID'));
        $data['department'] = $this->inventory_model->department($dept);
        $data['items'] = $this->inventory_model->displayItems($dept);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['areas'] = $this->inventory_model->displayArea($dept);
        $data['date'] = date('F j, Y');
        $this->load->view('property_cust/inventory/printPhysicalCount', $data);
    }


    public function transItem()
    {
        /*
        $dept = $this->inventory_model->getDeptID($this->input->post('department'));
        $this->session->set_userdata('department_transfer', $this->input->post('department'));
        $this->session->set_userdata('dept_id', $dept);

        $date = date('Y-m-d');
        $newTransfer = array(
            'transfer_from' => $this->input->post('department'),
            'transfer_to' => $this->input->post('transferTo'),
            'received_by' => $this->input->post('trans_received_by'),
            'request_by' => $this->input->post('trans_requested_by'),
            'transfer_reason' => $this->input->post('trans_transfer_remarks')
        );
        $this->session->set_userdata('transID', $this->inventory_model->transferTransaction($newTransfer));
        $this->session->set_userdata('trans_to', $this->inventory_model->getDeptID($this->input->post('transferTo')));

        $data['dept_choice'] = $this->session->userdata('department_transfer');
        $data['items'] = $this->inventory_model->inventoryItems($this->session->userdata('dept_id'));
        $data['item_transfer'] = $this->inventory_model->itemTransfered();
        $this->load->view('property/transfer_item', $data);*/


        $dept = $this->inventory_model->getDeptID($this->input->post('department'));
        $this->session->set_userdata('department_transfer', $this->input->post('department'));
        $this->session->set_userdata('dept_id', $dept);

        $newTransfer = array(
            'transfer_from' => $this->input->post('department'),
        );

        $this->session->set_userdata('transID', $this->inventory_model->transferTransaction($newTransfer));


        $data['dept_choice'] = $this->session->userdata('department_transfer');
        $data['departments'] = $this->inventory_model->display_department();
        $data['items'] = $this->inventory_model->inventoryItems($this->session->userdata('dept_id'));
        $data['item_transfer'] = $this->inventory_model->itemTransfered($this->session->userdata('transID'));
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/transfer_item', $data);
    }

    public function transferView()
    {
        $data['dept_choice'] = $this->session->userdata('department_transfer');
        $data['departments'] = $this->inventory_model->display_department();
        $data['items'] = $this->inventory_model->inventoryItems($this->session->userdata('dept_id'));
        $data['item_transfer'] = $this->inventory_model->itemTransfered($this->session->userdata('transID'));
        $data['transID'] = $this->session->userdata('transID');
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/transfer_item', $data);
    }

    public function unfinished_trans_transaction()
    {
        $transID = $this->input->post('transID');
        $this->session->set_userdata('transID', $transID);
        $data['dept_choice'] = $this->input->post('deptFrom');
        $data['departments'] = $this->inventory_model->display_department();
        $data['items'] = $this->inventory_model->inventoryItems($this->inventory_model->getDeptID($this->input->post('deptFrom')));
        $data['item_transfer'] = $this->inventory_model->itemTransfered($transID);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/transfer_item', $data);
    }

    public function saveTransTransaction()
    {

        $updateTransfer = array(
            'transfer_to' => $this->inventory_model->getDeptName($this->input->post('transferTo')),
            'received_by' => $this->input->post('trans_received_by'),
            'request_by' => $this->input->post('trans_requested_by'),
            'transfer_reason' => $this->input->post('trans_transfer_remarks'),
            'date_transfer' => date('Y-m-d')
        );
        $this->inventory_model->updateTransTransaction($this->input->post('transID'), $updateTransfer);

        $dept_sec = $this->input->post('area_to');
        $area = '';
        if ($dept_sec != "") {
            $area = $dept_sec;
        }

        $updateItem = array(
            'department' => $this->input->post('transferTo'),
            'dept_section' => $area
        );

        foreach ($this->inventory_model->for_transfer($this->input->post('transID')) as $item) {
            $this->inventory_model->update_item($item->itemID, $updateItem);
        }

        redirect('PropertyCust/deptInventory');
    }

    public function cancel_transfer()
    {
        $item_transfered = $this->inventory_model->itemTransfered($this->session->userdata('transID'));
        foreach ($item_transfered as $item) {
            $updateItem = array(
                'department' => $this->inventory_model->getDeptID($this->session->userdata('department_transfer'))
            );

            $this->inventory_model->update_item($item->itemID, $updateItem);
        }
        $this->inventory_model->delete_transfer_transaction($this->session->userdata('transID'));
        $this->inventory_model->delete_item_transfer($this->session->userdata('transID'));
        redirect('PropertyCust/deptInventory');
    }

    public function itemTransferTransac()
    {
        $checkboxes = $this->input->post('select');
        $deptFrom = $this->session->userdata('department_transfer');
        $item_id = $this->input->post('item_id');

        for ($i = 0; $i < count($item_id); $i++) {
            foreach ($checkboxes as $itemID) {
                if ($itemID == $item_id[$i]) {
                    $item = $this->inventory_model->itemDetails($item_id[$i]);

                    $transferItem = array(
                        'transfer_number' => $this->session->userdata('transID'),
                        'itemID' => $item->item_id,
                        'control_no' => $item->control_number,
                        'serial_number' => $item->serial_number,
                        'quantity' => $item->quantity
                    );

                    $item_update = array(
                        'department' => '0'
                    );

                    /* $history = array(
                'transID' => $this->session->userdata('transID'),
                'itemID' => $itemID,
                'activity_description' => 'Transfer of item',
                'date' => date('Y-m-d h:m:s')
            ); */

                    $this->inventory_model->update_item($itemID[$i], $item_update);
                    $this->inventory_model->itemTransferTransaction($transferItem);
                    //$this->inventory_model->history($history);
                }
            }
        }

        $dept = $this->inventory_model->getDeptID($this->input->post('department'));
        $this->session->set_userdata('department_transfer', $this->input->post('department'));
        $this->session->set_userdata('dept_id', $dept);
        redirect('PropertyCust/transferView');
    }

    public function assignArea()
    {
        $area = $this->input->post('assignedArea');
        $itemName = $this->input->post('item_name');
        $description = $this->input->post('item_description');
        $unit = $this->input->post('item_unit');
        $control_no = $this->input->post('item_control');
        $serial = $this->input->post('item_serial');
        $item = $this->input->post('itemID');
        $requestID = $this->input->post('requestID');
        $remarks = $this->input->post('item_remarks');
        $rr_item = $this->input->post('idItem');
        $date = date('Y-m-d h:m:s');


        for ($i = 0; $i < count($item); $i++) {
           /* foreach ($this->inventory_model->items($item[$i]) as $itm) {
                $add = $this->inventory_model->maintenance($itm->item_id);
                if (count($add) == 0) {
                    $update = array(
                        'item_id' => $itm->item_id,
                        'description' => $itm->item_description,
                        'item_name' => $itm->item_name,
                        'model' => $itm->model,
                        'brand' => $itm->brand,
                        'unit' => $itm->unit,
                        'quantity' => $itm->quantity,
                        'control_no' => $itm->control_number,
                        'serial_number' => $itm->serial_number,
                        'department' => $itm->department,
                        'dept_area' => $itm->dept_section
                    );
                    $this->inventory_model->item_changes_log($update);
                }
            }
            */

            $updateItem = array(
                'dept_section' => $area[$i],
                'unit' => $unit[$i],
                'item_description' => $description[$i],
                'item_name' => $itemName[$i],
                'control_number' => $control_no[$i],
                'serial_number' => $serial[$i],
                'remarks' => $remarks[$i]
            );
            $this->inventory_model->update_item($item[$i], $updateItem);

            $updateReceived = array(
                'control_no' => $control_no[$i],
                'serial_number' => $serial[$i]
            );
            $this->inventory_model->update_item_received($rr_item[$i], $updateReceived);

            $changes = array(
                'dept_section' => $area[$i],
                'unit' => $unit[$i],
                'description' => $description[$i],
                'item_name' => $itemName[$i],
                'control_number' => $control_no[$i],
                'serial_number' => $serial[$i],
                'item_id' => $item[$i],
                'date_updated' => $date
            );
            $this->inventory_model->itemChanges($changes);

            $log = array(
                'description' => 'Edited Item',
                'itemID' => $item[$i],
                'trans_date' => $date,
                'user_incharge' => $this->request_model->get_user_id($this->session->userdata('username'))
            );
            $this->inventory_model->item_log($log);
        }

        redirect('PropertyCust/deptInventory');
    }

    #transfer Item
    public function transferItem()
    {
        $control_no = $this->input->post('control_no');
        $itemID = $this->input->post('itemID');
        $deptFrom = $this->input->post('deptFrom');
        $originDept = $this->inventory_model->getDeptID($deptFrom);

        $destinationDept = $this->input->post('transferTo');
        $destDept = $this->inventory_model->getDeptName($destinationDept);
        $deptArea = $this->input->post('area_to');
        $deptSection = $this->inventory_model->getDeptSection($deptArea);
        $remarks = $this->input->post('transfer_remark');


        //

        $date = date("Y-m-d h:m:s");

        //$quantity_transfered = $this->input->post('quantity_transfer');

        $transferTransac = array(
            'transfer_from' => $deptFrom,
            'transfer_to' => $destDept,
            'date_transfer' => $date,
            'transfer_reason' => $remarks
        );

        $transID = $this->inventory_model->transferTransaction($transferTransac);

        $this->session->set_flashdata('item_trans_id', $transID);
        $history = array(
            'transID' => $transID,
            'itemID' => $itemID,
            'activity_description' => 'Transfer of item',
            'date' => $date
        );

        $item_update = array(
            'department' => $destinationDept,
            'dept_section' => '0',
            'remarks' => "Transfered from $deptFrom",
        );

        $this->inventory_model->update_item($itemID, $item_update);
        $this->inventory_model->history($history);




        /*foreach ($this->inventory_model->displayItem() as $item) {
            if ($item->item_id == $itemID) {
                $remaining_quantity = ((int) $item->quantity - (int) $quantity_transfered);
                if ($remaining_quantity > 0) {
                    $update_item = array(
                        'quantity' => $remaining_quantity
                    );
                    $this->inventory_model->update_item($itemID, $update_item);

                    $new_item = array(
                        'quantity' => (int) $quantity_transfered,
                        'item_name' => $item->item_name,
                        'brand' => $item->brand,
                        'unit' => $item->unit,
                        'item_description' => $item->item_description,
                        'department' => $destinationDept,
                        'dept_section' => '0',
                        'remarks' => "Transfered from $deptName",
                        'date_received' => $date
                    );
                    $this->inventory_model->insert_item($new_item);

                    $transferTransac = array(
                        'itemID' => $itemID,
                        'control_no' => $control_no,
                        'transfer_from' => $this->inventory_model->getDeptName($originDept),
                        'transfer_to' => $this->inventory_model->getDeptName($destinationDept),
                        'dept_section' => $this->inventory_model->getDeptSection($deptArea),
                        'quantity' => $quantity_transfered,
                        'date_transfer' => $date
                    );

                    $history = array(
                        'transID' => $this->inventory_model->transferTransaction($transferTransac),
                        'itemID' => $itemID,
                        'activity_description' => 'Transfer of item',
                        'date' => $date
                    );

                    $this->inventory_model->history($history);
                } else {
                    $item_update = array(
                        'quantity' => $item->quantity,
                        'department' => $destinationDept,
                        'remarks' => "Transfered from $deptName",
                        'dept_section' => '0'
                    );
                    $this->inventory_model->update_item($itemID, $item_update);

                    $transferTransac = array(
                        'itemID' => $itemID,
                        'control_no' => $control_no,
                        'transfer_from' => $this->inventory_model->getDeptName($originDept),
                        'transfer_to' => $this->inventory_model->getDeptName($destinationDept),
                        'dept_section' => $this->inventory_model->getDeptSection($deptArea),
                        'quantity' => $quantity_transfered,
                        'date_transfer' => $date
                    );

                    $history = array(
                        'transID' => $this->inventory_model->transferTransaction($transferTransac),
                        'itemID' => $itemID,
                        'activity_description' => 'Transfer of item',
                        'date' => $date
                    );

                    $this->inventory_model->history($history);
                }
            }*/


        redirect('PropertyCust/deptInventory');
    }

    public function backButton()
    { }

    public function transferedItems()
    {
        $data['items'] = $this->inventory_model->transItems();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property_cust/report/transfered_item', $data);
    }

    public function print_trans_form()
    {
        $id = $this->input->post('itemID');
        $data['dept_choice'] = $this->input->post('dept');
        $data['transfer'] = $this->inventory_model->transferredItems($id);
        $data['date'] = $this->inventory_model->dateTransfer($id);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/item_transfer', $data);
    }

    public function item_repair()
    { }

    public function repair_item()
    {
        $itemID = $this->input->post('itemID');
        $repType = $this->input->post('repair_type');
        $dept = $this->input->post('deptID');
        $location = $this->input->post('repair_loc');
        $in_charge = $this->input->post('in_charge');
        $remarks = $this->input->post('remarks');
        $control_no = $this->input->post('control_no');
        $date = date('Y-m-d');

        $details = array(
            'item_id' => $itemID,
            'repair_type' => $repType,
            'repair_location' => $location,
            'repair_date' => $date,
            'remarks' => $remarks,
            'in_charge' => $in_charge,
            'status' => "Under Repair",
            'department' => $dept
        );

        $id = $this->inventory_model->repair_item($details);

        $update = array(
            'status' => 'Under Repair'
        );

        $history = array(
            'transID' => $id,
            'itemID' => $itemID,
            'activity_description' => 'Repair',
            'date' => $date
        );

        $this->inventory_model->update_item($itemID, $update);

        $this->inventory_model->history($history);

        redirect('propertyCust/deptInventory');
    }

    public function updateItemRepair()
    {
        $itemID = $this->input->post('itemID');
        $repType = $this->input->post('repair_type');
        $location = $this->input->post('repair_loc');
        $in_charge = $this->input->post('in_charge');
        $remarks = $this->input->post('remarks');
        $status = $this->input->post('status');
        $date = date('Y-m-d');

        $details = array(
            'item_id' => $itemID,
            'repair_type' => $repType,
            'repair_location' => $location,
            'repair_date' => $date,
            'remarks' => $remarks,
            'in_charge' => $in_charge,
            'status' => $status
        );
        $this->inventory_model->update_repair_item($itemID, $details);

        redirect('propertyCust/deptInventory');
    }

    public function markRepairDone()
    {
        $date = date('Y-m-d');
        $itemID = $this->input->post('itemID');

        $details = array(
            'status' => 'Repair Done',
            'date_completed' => $date
        );
        $this->inventory_model->update_repair_item($itemID, $details);

        $update = array(
            'status' => 'Repair Done'
        );
        $this->inventory_model->update_item($itemID, $update);

        redirect('propertyCust/deptInventory');
    }

    #activity log
    public function activityLog()
    {
        $this->load->view('property_cust/report/activity_log');
    }

    #report

    public function po_validation()
    {
        $poNumber = $this->input->post('po_number');
        $data['items'] = $this->request_model->poItems();
        $data['received_items'] = $this->request_model->poItems();
        $data['po_details'] = $this->request_model->displayPurchaseOrder($poNumber);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/po_validation', $data);
    }

    public function newReceivingReport()
    {
        $date = date('Y-m-d');
        $poNumber = $this->input->post('poNum');
        $report = array(
            'date_created' => $date
        );
        $rr_id = $this->inventory_model->receivingReport($report);
        $this->session->set_userdata('rr', $rr_id);
        $this->session->set_userdata('rr_po_number', $poNumber);
        redirect('PropertyCust/receivingReport');
    }

    public function receivingReport()
    {
        $poNumber = $this->session->userdata('rr_po_number');
        $dateNow = date('Y-m-d');
        $data['rr_no'] = $this->inventory_model->getReceivingReport($this->session->userdata('rr'));
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
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/receiving_report', $data);
    }

    public function printRR()
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
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['rr'] = $this->inventory_model->viewReceivingReport($this->session->userdata('rr'));
        $this->load->view('property/print_rr', $data);
    }

    public function updateRR()
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
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/update_rr', $data);
    }

    public function createReceivingReport()
    {
        $poNumber = $this->input->post('poNum');
        $vendor = $this->inventory_model->supplier($poNumber);
        $delivery_date = $this->input->post('delivery_date');
        $delivered_via = $this->input->post('delivered_via');
        $department = $this->inventory_model->requestDepartment($poNumber);
        $received_by = $this->input->post('received_by');
        $invoice_no = $this->input->post('invoice_no');
        $inspected_by = $this->input->post('inspected_by');
        $date_received = $this->input->post('date_received');
        $date_ordered = $this->inventory_model->dateOrdered($poNumber);
        $requestID = $this->inventory_model->poRequestID($poNumber);
        $date = date('Y-m-d');
        $category = $this->input->post('category');
        $rr_no = $this->input->post('rr_no');
        $poStatus = $this->inventory_model->poStatus($poNumber);

        $report = array(
            'po_num' => $poNumber,
            'vendor' => $vendor,
            'invoice_no' => $invoice_no,
            'request_id' => $requestID,
            'date_ordered' => $date_ordered,
            'delivery_date' => $delivery_date,
            'delivered_via' => $delivered_via,
            'received_by' => $received_by,
            'date_received' => $date_received,
            'department' => $department,
            'inspected_by' => $inspected_by,
            'processed_by' => $this->session->userdata('username')
        );
        $this->inventory_model->updateReceivingReport($rr_no, $report);

        $updatePo = array('remarks' => 'Receiving Report Created');
        $this->inventory_model->updatePo($poNumber, $updatePo);

        foreach ($this->inventory_model->inventory_items($requestID) as $item) {
            $update = array('received_by' => $received_by);
            $this->inventory_model->update_received_items($item->item_requestID, $update);
        }

        foreach ($this->inventory_model->displayInventory() as $itemInventory) {
            if ($itemInventory->request_id == $requestID) {
                $update = array('received_by' => $received_by);
                $this->inventory_model->update_inventory_item($itemInventory->request_id, $update);
            }
        }

        /*
        if ($poStatus->status == "Delivery Complete") {
            $quantity = $this->input->post('quantity');
            $brand = $this->input->post('brand');
            $description = $this->input->post('description');
            $name = $this->input->post('itemName');
            $unit = $this->input->post('unit');
            $price = $this->input->post('price');
            $requestID = $this->input->post('requestID');
            $date_delivered = $this->input->post('date_delivered');
            $id = $this->input->post('itemID');



            for ($i = 0; $i < count($id); $i++) {
                $item = array(
                    'itemID' => $id[$i],
                    'itemName' => $name[$i],
                    'itemDescription' => $description[$i],
                    'quantity' => $quantity[$i],
                    'brand' => $brand[$i],
                    'unit' => $unit[$i],
                    'requestID' => $requestID[$i],
                    'date_delivered' => $date_delivered[$i],
                    'pricePerUnit' => $price[$i]
                );

                $this->inventory_model->received_items($item);


                $requestUpdate = array(
                    'status' => 'Delivered',
                    'delivery_date' => $date
                );

                $this->request_model->update_request($requestID[$i], $requestUpdate);

                $updatePo = array('date_completed' => $date, 'remarks' => 'Receiving Report Updated', 'status' => 'Delivery Complete');
                $this->inventory_model->updatePo($poNumber, $updatePo);

                if ($category == "Equipment") {
                    for ($j = 1; $j <= (int) $quantity[$i]; $j++) {
                        $add_item_inventory = array(
                            'item_group_id' => $id[$i],
                            'quantity' => '1',
                            'brand' => $brand[$i],
                            'item_description' => $description[$i],
                            'unit' => $unit[$i],
                            'item_name' =>  $name[$i],
                            'date_received' => $date_delivered[$i],
                            'department' => $this->inventory_model->getDeptID($department),
                            'dept_section' => '0',
                            'pricePerUnit' => $price[$i]
                        );
                        $this->inventory_model->insert_item($add_item_inventory);
                    }
                }
            }
            redirect('PropertyCust/printRR');
        }
        */

        redirect('PropertyCust/printRR');
    }

    public function create_rr()
    {
        $this->load->view('property/create_rr');
    }

    public function editReceivingReport()
    {
        $rr_no = $this->input->post('rr_no');
        $poNumber = $this->input->post('poNum');
        $vendor = $this->input->post('vendor');
        $delivery_date = $this->input->post('delivery_date');
        $delivered_via = $this->input->post('delivered_via');
        $department = $this->input->post('department');
        $received_by = $this->input->post('received_by');
        $invoice_no = $this->input->post('invoice_no');
        $inspected_by = $this->input->post('inspected_by');
        $date_received = $this->input->post('date_received');
        $date_ordered = $this->input->post('date_ordered');
        $date = date('Y-m-d');
        $date_edited = date('Y-m-d H:m:s');
        $category = $this->input->post('category');

        $report = array(
            'po_num' => $poNumber,
            'vendor' => $vendor,
            'invoice_no' => $invoice_no,
            'date_ordered' => $date_ordered,
            'delivery_date' => $delivery_date,
            'delivered_via' => $delivered_via,
            'received_by' => $received_by,
            'date_received' => $date_received,
            'department' => $department,
            'inspected_by' => $inspected_by,
            'date_created' => $date,
            'processed_by' => $this->session->userdata('username'),
            'date_edited' => $date_edited
        );
        $this->inventory_model->updateReceivingReport($rr_no, $report);

        /*
        $quantity = $this->input->post('quantity');
        $brand = $this->input->post('brand');
        $description = $this->input->post('description');
        $name = $this->input->post('itemName');
        $unit = $this->input->post('unit');
        $price = $this->input->post('price');
        $requestID = $this->input->post('requestID');
        $date_delivered = $this->input->post('date_delivered');
        $id = $this->input->post('itemID');
        $item_no = $this->input->post('item_no');

        for ($i = 0; $i < count($id); $i++) {
            $item = array(
                'itemName' => $name[$i],
                'itemDescription' => $description[$i],
                'quantity' => $quantity[$i],
                'brand' => $brand[$i],
                'unit' => $unit[$i],
                'requestID' => $requestID[$i],
                'date_delivered' => $date_delivered[$i],
                'pricePerUnit' => $price[$i]
            );
            $this->inventory_model->edit_received_items($item_no[$i], $item);

            if ($category == "Equipment") {
                $item_inventory = array(
                    'item_id' => $id[$i],
                    'quantity' => $quantity[$i],
                    'brand' => $brand[$i],
                    'item_description' => $description[$i],
                    'unit' => $unit[$i],
                    'item_name' =>  $name[$i],
                    'date_received' => $date_delivered[$i],
                    'department' => $this->inventory_model->getDeptID($department)
                );
                $this->inventory_model->update_item($id[$i], $item_inventory);
            }
        }
        */
        redirect('PropertyCust/view_rr');
    }

    #receiving report
    public function view_rr()
    {
        $data['receiving_report'] = $this->inventory_model->view_rr();
        $data['items'] = $this->inventory_model->view_received_items();
        $data['departments'] = $this->inventory_model->display_department();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/view_rr', $data);
    }

    public function view_generated_rr()
    {
        $rr_no = $this->input->post('rr_no');
        $data['po'] = $this->request_model->displayPO();
        $data['items'] = $this->inventory_model->view_received_items();
        $data['rr'] = $this->inventory_model->viewReceivingReport($rr_no);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/generated_rr', $data);
    }

    public function view_history()
    {
        $this->load->view('property_cust/inventory/tracking');
    }

    public function history_result()
    {
        $id = $this->input->post('itemID');
        $dept = $this->input->post('dept');

        $data['choice'] = $dept;
        $data['history'] = $this->inventory_model->item_history($id);
        $data['rep_history'] = $this->inventory_model->repair_history($id);
        $data['item_details'] = $this->inventory_model->item_details($id);
        $data['trans_history'] = $this->inventory_model->transItems();
        $data['repair_history'] = $this->inventory_model->repairDetails();
        $data['repHistory'] = $this->inventory_model->repHistory();
        $data['departments'] = $this->inventory_model->display_department();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $data['dept_area'] = $this->inventory_model->displayArea($dept);
        $data['areas'] = $this->inventory_model->area();
        $data['area'] = $this->inventory_model->area();
        $this->load->view('property/item_details', $data);
    }

    public function test()
    {
        $this->load->view('property_cust/inventory/test');
    }

    public function displayRecentItems()
    {
        $data['recent_items'] = $this->inventory_model->view_received_items();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/recent_items', $data);
    }

    public function displayRepairHistory()
    {
        $data['repair_history'] = $this->inventory_model->repairHistory();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/repair_history', $data);
    }

    public function displayTransferHistory()
    {
        $data['departments'] = $this->inventory_model->display_department();
        $data['trans_history'] = $this->inventory_model->transItems();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/transfer_history', $data);
    }

    public function transfer_hist()
    {
        $dept = $this->input->post('department');
        $data['dept_choice'] = $dept;
        $data['departments'] = $this->inventory_model->display_department();
        $data['trans_history'] = $this->inventory_model->itemTransfer($dept);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/trans_hist', $data);
    }

    public function displayTurnoverHistory()
    {
        $data['turnover_history'] = $this->inventory_model->turnovered_items();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/item_turnover', $data);
    }

    public function disposedItems()
    {
        $data['items'] = $this->inventory_model->disposed_item_history();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/disposed_items', $data);
    }

    public function chartReport()
    {
        $val = $this->inventory_model->graphRepairReport();
        $data = [];

        foreach ($val as $d) {
            $data['label'][] = $d->y;
            $data['data'][] = (int) $d->a;
        }

        $data['chart_data'] = json_encode($data);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/chart', $data);
    }

    public function inventoryLaptopReport()
    {
        $val = $this->inventory_model->count_laptops();
        $data = [];

        foreach ($val as $d) {
            $data['label'][] = $d->y;
            $data['data'][] = (int) $d->a;
        }

        $data['chart_data'] = json_encode($data);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/laptop_chart', $data);
    }

    public function search_department_list()
    {
        $data['depts'] = $this->inventory_model->display_department();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/search_department_list', $data);
    }

    public function search_dept_result()
    {
        $dept = $this->input->post('department');
        $data['depts'] = $this->inventory_model->display_department();
        $data['dept_choice'] = $this->inventory_model->getDeptName($dept);
        $data['areas'] = $this->inventory_model->display_deptArea($dept);
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/department_list', $data);
    }

    public function add_department()
    {
        $dept = $this->input->post('new_dept');
        $new_dept = array('deptName' => $dept);
        $this->inventory_model->new_dept($new_dept);
        redirect('PropertyCust/search_department_list');
    }

    public function add_area()
    {
        $area = $this->input->post('new_area');
        $deptID = $this->inventory_model->getDeptID($this->input->post('dept_choice'));
        $new_area = array(
            'areaName' => $area,
            'deptID' => $deptID
        );
        $this->inventory_model->new_area($new_area);
        redirect('PropertyCust/search_department_list');
    }

    public function edit_area()
    {
        $area = $this->input->post('areaID');
        $detail = $this->input->post('dept_area');
        $update = array(
            'areaName' => $detail
        );
        $this->inventory_model->edit_area($area, $update);
        redirect('PropertyCust/search_department_list');
    }

    public function delete_area()
    {
        $area = $this->input->post('areaID');
        $this->inventory_model->delete_area($area);
        redirect('PropertyCust/search_department_list');
    }

    public function print_transfer()
    {
        $this->load->view('property/print_transfer');
    }

    public function item_log()
    {
        $data['logs'] = $this->inventory_model->show_log();
        $data['original'] = $this->inventory_model->show_original();
        $data['changes'] = $this->inventory_model->show_changes();
        $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
        $this->load->view('property/item_log', $data);
    }
}
