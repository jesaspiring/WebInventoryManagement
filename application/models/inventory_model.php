<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Inventory_model extends CI_Model
{

    //--------insert/delete/edit
    public function insert_item($item)
    {
        $this->db->insert('item_inventory', $item);
        return $this->db->insert_id();
    }

    public function dispose_item($item)
    {
        $this->db->insert('disposed_item_inventory', $item);
        return $this->db->insert_id();
    }

    public function update_disposed($item, $details)
    {
        $this->db->where('item_id', $item);
        $this->db->update('disposed_item_inventory', $details);
        return $this->db->affected_rows();
    }

    public function insertIntoInventory($inventory)
    {
        $this->db->insert('item_inventory', $inventory);
        return $this->db->insert_id();
    }

    public function receivingReport($report)
    {
        $this->db->insert('receiving_report', $report);
        return $this->db->insert_id();
    }

    public function getReceivingReport($id)
    {
        $this->db->select('rr_no')->from('receiving_report')->where('rr_no', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->rr_no;
        }
    }

    public function rr($id)
    {
        $this->db->select('rr_no')->from('receiving_report')->where('po_num', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->rr_no;
        }
    }

    public function updateReceivingReport($rr_no, $details)
    {
        $this->db->where('rr_no', $rr_no);
        $this->db->update('receiving_report', $details);
        return $this->db->affected_rows();
    }

    public function viewReceivingReport($rr_no)
    {
        $this->db->select('*');
        $this->db->from('receiving_report');
        $this->db->where('rr_no', $rr_no);
        $query = $this->db->get();
        return $query->row();
    }

    public function received_items($item)
    {
        $this->db->insert('received_items', $item);
        return $this->db->insert_id();
    }

    public function edit_received_items($id, $item)
    {
        $this->db->where('item_no', $id);
        $this->db->update('received_items', $item);
        return $this->db->affected_rows();
    }

    public function update_received_items($id, $item)
    {
        $this->db->where('item_requestID', $id);
        $this->db->update('received_items', $item);
        return $this->db->affected_rows();
    }

    public function update_item_received($id, $item)
    {
        $this->db->where('item_no', $id);
        $this->db->update('received_items', $item);
        return $this->db->affected_rows();
    }

    public function view_received_items()
    {
        $this->db->select('item_no, itemID, itemName, itemDescription, model, brand, item_requestID, unit, quantity, pricePerUnit, control_no, serial_number,
                           date_delivered, with_warranty, warranty_length, status, remarks, dept_section');
        $this->db->from('received_items');
        $query = $this->db->get();
        return $query->result();
    }

    public function countDiscrepancies($id)
    {
        $this->db->select('item_no,  remarks');
        $this->db->from('received_items');
        $this->db->where('item_requestID', $id);
        $this->db->where('remarks', 'wrong item');
        $this->db->or_where('remarks', 'substandard');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countAddedToInventory($id)
    {
        $this->db->select('item_no,  remarks');
        $this->db->from('received_items');
        $this->db->where('item_requestID', $id);
        $this->db->where('status', 'Added to Inventory');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countReceived($id)
    {
        $this->db->select('item_no');
        $this->db->from('received_items');
        $this->db->where('item_requestID', $id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function inventory_items($requestID)
    {
        $this->db->select('item_no, itemID, itemName, itemDescription, model, brand, item_requestID, unit, quantity, pricePerUnit, control_no, serial_number,
                           date_delivered, with_warranty, status, received_by, dept_section');
        $this->db->from('received_items');
        $this->db->where('item_requestID', $requestID);
        $query = $this->db->get();
        return $query->result();
    }

    public function group_received_items()
    {
        $this->db->select('item_no, itemID, itemName, itemDescription, model, brand, item_requestID, unit, quantity, pricePerUnit, control_no, serial_number,
                           date_delivered, with_warranty');
        $this->db->from('received_items');
        $query = $this->db->get();
        return $query->result();
    }

    public function user_ordered_items($id)
    {
        $this->db->select('item_no, itemID, itemName, itemDescription, model, brand, item_requestID, unit, quantity, pricePerUnit, control_no, serial_number,
                           date_delivered, date_requested, received_by, dept_section');
        $this->db->from('received_items');
        $this->db->join('item_request', 'item_request.requestID = received_items.item_requestID');
        $this->db->where('item_request.userID', $id);
        $this->db->group_by('received_items.item_requestID');
        $query = $this->db->get();
        return $query->result();
    }


    public function view_rr()
    {
        $this->db->select('rr_no, date_created, po_num, processed_by, date_edited');
        $this->db->from('receiving_report');
        $query = $this->db->get();
        return $query->result();
    }

    public function update_item($itemID, $itemDetails)
    {
        $this->db->where('item_id', $itemID);
        $this->db->update('item_inventory', $itemDetails);
        return $this->db->affected_rows();
    }

    public function updateInventoryItem($itemID, $itemDetails)
    {
        $this->db->where('item_group_id', $itemID);
        $this->db->update('item_inventory', $itemDetails);
        return $this->db->affected_rows();
    }

    public function delete_item($itemID)
    {
        $this->db->where('item_id', $itemID);
        $this->db->delete('item_inventory');
        return $this->db->affected_rows();
    }

    public function itemDetails($id)
    {
        $this->db->select('item_id, item_name, control_number, serial_number, deptName, quantity');
        $this->db->from('item_inventory');
        $this->db->join('department', 'department.deptID = item_inventory.department');
        $this->db->where('item_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function itemTransfered($id)
    {
        $this->db->select('item_name, item_description, transfer_number, itemID, brand, item_transfer.control_no, item_transfer.serial_number
        , department, dept_section');
        $this->db->from('item_transfer');
        $this->db->select_sum('item_transfer.quantity');
        $this->db->join('item_inventory', 'item_inventory.item_id = item_transfer.itemID');
        $this->db->join('transfer_transaction', 'transfer_transaction.transID = item_transfer.transfer_number');
        $this->db->group_by(array("brand", "item_name", "item_description"));
        $this->db->where('transfer_number', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function for_transfer($id)
    {
        $this->db->select('item_name, item_description, item_transfer.quantity, transfer_number, itemID, brand, item_transfer.control_no, item_transfer.serial_number
        , department, dept_section');
        $this->db->from('item_transfer');
        $this->db->join('item_inventory', 'item_inventory.item_id = item_transfer.itemID');
        $this->db->join('transfer_transaction', 'transfer_transaction.transID = item_transfer.transfer_number');
        $this->db->where('transfer_number', $id);
        $query = $this->db->get();
        return $query->result();
    }



    public function updateTransTransaction($id, $details)
    {
        $this->db->where('transID', $id);
        $this->db->update('transfer_transaction', $details);
        return $this->db->affected_rows();
    }

    public function delete_transfer_transaction($transID)
    {
        $this->db->where('transID', $transID);
        $this->db->delete('transfer_transaction');
        return $this->db->affected_rows();
    }

    public function delete_item_transfer($transID)
    {
        $this->db->where('transfer_number', $transID);
        $this->db->delete('item_transfer');
        return $this->db->affected_rows();
    }


    public function update_inventory_item($requestID, $itemDetails)
    {
        $this->db->where('request_id', $requestID);
        $this->db->update('item_inventory', $itemDetails);
        return $this->db->affected_rows();
    }

    public function delete_inventory_item($itemID)
    {
        $this->db->where('itemID', $itemID);
        $this->db->delete('inventory');
        return $this->db->affected_rows();
    }

    //---------------------------------------get ID
    public function getInventoryID($id)
    {
        $this->db->select('inventory_id')->from('inventory')->where('itemID', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->inventory_id;
        }
    }

    public function getDeptID($name)
    {
        $this->db->select('deptID')->from('department')->where('deptName', $name);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->deptID;
        }
    }

    public function itemDept($id)
    {
        $this->db->select('department')->from('item_inventory')->where('department', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->department;
        }
    }

    public function requestDept($requestID)
    {
        $this->db->select('department')->from('item_request')->where('requestID', $requestID);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->department;
        }
    }

    public function getDeptName($id)
    {
        $this->db->select('deptName')->from('department')->where('deptID', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->deptName;
        }
    }

    public function getDeptSection($id)
    {
        $this->db->select('areaName')->from('department_section')->where('areaID', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->areaName;
        }
    }

    public function requestDeptSection($id)
    {
        $this->db->select('areaName')->from('department_section')->where('department', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->areaName;
        }
    }

    //-------------------------------------display item for inventory
    public function displayItem()
    {
        $this->db->select('item_id, item_name, brand, item_description, unit, quantity, control_number, remarks, department, dept_section');
        $this->db->from('item_inventory');
        $this->db->join('department_section', 'item_inventory.dept_section = department_section.areaID');
        $query = $this->db->get();
        return $query->result();
    }

    public function displayInventory()
    {
        $this->db->select('item_id, item_name, item_description, unit, quantity, control_number, remarks, deptName, areaName, request_id');
        $this->db->from('item_inventory');
        $this->db->join('department', 'item_inventory.department = department.deptID');
        $this->db->join('department_section', 'item_inventory.dept_section = department_section.areaID');
        $query = $this->db->get();
        return $query->result();
    }

    public function selectedArea($dept)
    {
        $this->db->select('item_id, item_name, item_description, unit, quantity, control_number, remarks, department, deptName, areaName');
        $this->db->from('item_inventory');
        $this->db->join('department', 'item_inventory.department = department.deptID');
        $this->db->join('department_section', 'item_inventory.dept_section = department_section.areaID');
        $this->db->where('dept_section', $dept);
        $query = $this->db->get();
        return $query->result();
    }

    public function inventoryItem($dept)
    {
        $this->db->select('item_id, item_name, item_description, unit, quantity, control_number, serial_number, remarks, department, deptName, dept_section, areaName');
        $this->db->from('item_inventory');
        $this->db->join('department', 'item_inventory.department = department.deptID');
        $this->db->join('department_section', 'item_inventory.dept_section = department_section.areaID');
        $this->db->where('deptName', $dept);
        $query = $this->db->get();
        return $query->result();
    }

    //--------------------------------------Department
    public function display_department()
    {
        $this->db->select('deptID, deptName');
        $this->db->from('department');
        $query = $this->db->get();
        return $query->result();
    }

    public function new_dept($dept)
    {
        $this->db->insert('department', $dept);
        return $this->db->insert_id();
    }

    public function new_area($area)
    {
        $this->db->insert('department_section', $area);
        return $this->db->insert_id();
    }

    public function delete_area($id)
    {
        $this->db->where('areaID', $id);
        $this->db->delete('department_section');
        return $this->db->affected_rows();
    }

    public function edit_area($id, $details)
    {
        $this->db->where('areaID', $id);
        $this->db->update('department_section', $details);
        return $this->db->affected_rows();
    }

    //--------------------------------------Department Area
    public function display_deptArea($id)
    {
        $this->db->select('areaID, deptID, areaName');
        $this->db->from('department_section');
        $this->db->where('deptID', $id);
        $query = $this->db->get();
        return $query->result();
    }

    //--------------------------------------inventory search
    public function displayArea($id)
    {
        $this->db->select('areaID, deptID, areaName');
        $this->db->from('department_section');
        $this->db->where('deptID', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function area()
    {
        $this->db->select('areaID, deptID, areaName');
        $this->db->from('department_section');
        $query = $this->db->get();
        return $query->result();
    }
    public function displayItems($id)
    {
        $this->db->select('item_id, control_number, quantity, unit, item_name, item_description, serial_number, status, department, remarks, deptName, dept_section, areaName');
        $this->db->from('item_inventory');
        $this->db->join('department', 'item_inventory.department = department.deptID');
        $this->db->join('department_section', 'department_section.areaID = item_inventory.dept_section');
        $this->db->where('department', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function inventoryItems($id)
    {
        $this->db->select('item_id, item_group_id, model, item_name, brand, item_description, quantity, unit, control_number, serial_number, remarks, department, areaName, deptName, dept_section, status
                            ,with_warranty, received_by, request_id');
        $this->db->from('item_inventory');
        $this->db->join('department', 'item_inventory.department = department.deptID');
        $this->db->join('department_section', 'item_inventory.dept_section = department_section.areaID');
        $this->db->where('department', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function noAssignedinventoryItems($id)
    {
        $this->db->select('item_id, item_group_id, item_name, brand, item_description, quantity, unit, control_number, serial_number, remarks, department, areaName, deptName, dept_section, status, request_id');
        $this->db->from('item_inventory');
        $this->db->join('department', 'item_inventory.department = department.deptID');
        $this->db->join('department_section', 'item_inventory.dept_section = department_section.areaID');
        $this->db->where('department', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function assignedItems($id)
    {
        $this->db->select('item_id, item_group_id, item_name, brand, item_description, quantity, unit, control_number, serial_number, remarks, department, areaName, deptName, dept_section, status');
        $this->db->from('item_inventory');
        $this->db->join('department', 'item_inventory.department = department.deptID');
        $this->db->join('department_section', 'item_inventory.dept_section = department_section.areaID');
        $this->db->where('department', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function pc_details($id)
    {
        $this->db->select('item_id, item_name, model, brand, item_description, unit, control_number, serial_number, remarks, department, areaName, deptName, dept_section, status');
        $this->db->from('item_inventory');
        $this->db->select_sum('quantity');
        $this->db->join('department', 'item_inventory.department = department.deptID');
        $this->db->join('department_section', 'item_inventory.dept_section = department_section.areaID');
        $this->db->where('department', $id);
        $this->db->group_by(array("brand", "item_name", "item_description", "dept_section"));
        $query = $this->db->get();
        return $query->result();
    }

    public function itemGroup($deptID)
    {
        $this->db->select('item_group_id, item_name, unit, brand, dept_section, item_description, model, areaName');
        $this->db->select_sum('quantity');
        $this->db->from('item_inventory');
        $this->db->join('department_section', 'item_inventory.dept_section = department_section.areaID');
        $this->db->where('department', $deptID);
        $this->db->where('dept_section !=', '0');
        $this->db->where('status !=', 'Under Repair');
        $this->db->where('status !=', 'disposed');
        $this->db->group_by(array("brand", "item_name", "dept_section", "item_description", "model"));
        $query = $this->db->get();
        return $query->result();
    }

    public function noAssignedDept($deptID)
    {
        $this->db->select('item_group_id, item_name, unit, brand, dept_section, item_description, model');
        $this->db->select_sum('quantity');
        $this->db->from('item_inventory');
        $this->db->where('department', $deptID);
        $this->db->where('dept_section =', '0');
        $this->db->where('status !=', 'Under Repair');
        $this->db->where('status !=', 'disposed');
        $this->db->group_by(array("brand", "item_name", "dept_section", "item_description"));
        $query = $this->db->get();
        return $query->result();
    }

    public function countNoAssigned($deptID)
    {
        $this->db->select('item_id');
        $this->db->from('item_inventory');
        $this->db->where('department', $deptID);
        $this->db->where('dept_section =', '0');
        $this->db->where('status !=', 'Under Repair');
        $this->db->where('status !=', 'disposed');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function notAssigned()
    {
        $this->db->select('item_id');
        $this->db->from('item_inventory');
        $this->db->where('dept_section =', '0');
        $this->db->where('status !=', 'Under Repair');
        $this->db->where('status !=', 'disposed');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function unAssigned()
    {
        $this->db->select('count(item_id) items, department');
        $this->db->from('item_inventory');
        $this->db->where('dept_section =', '0');
        $this->db->where('status !=', 'Under Repair');
        $this->db->where('status !=', 'disposed');
        $query = $this->db->get();
        return $query->result();
    }

    public function notRecorded()
    {
        $this->db->select('item_no');
        $this->db->from('received_items');
        $this->db->where('status !=', 'Added to Inventory');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countAssigned($deptID)
    {
        $this->db->select('item_id');
        $this->db->from('item_inventory');
        $this->db->where('department', $deptID);
        $this->db->where('dept_section !=', '0');
        $this->db->where('status !=', 'Under Repair');
        $this->db->where('status !=', 'disposed');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countTransfer($deptID)
    {
        $this->db->select('transID');
        $this->db->from('transfer_transaction');
        $this->db->where('transfer_from', $deptID);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countRepair($deptID)
    {
        $this->db->select('transID, item_inventory.status');
        $this->db->from('item_repair');
        $this->db->join('item_inventory', 'item_inventory.item_id = item_repair.item_id');
        $this->db->where('item_repair.department', $deptID);
        $this->db->where('item_repair.status !=', 'Repair Done');
        $this->db->where('item_inventory.status !=', 'disposed');

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countDisposed($deptID)
    {
        $this->db->select('item_id');
        $this->db->from('disposed_item_inventory');
        $this->db->where('department', $deptID);
        $this->db->where('status !=', 'restored');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function department($id)
    {
        $this->db->select('deptID, deptName');
        $this->db->from('department');
        $this->db->where('deptID', $id);
        $query = $this->db->get();
        return $query->row();
    }

    //--------------------------------------display item po
    public function display_item_po()
    {
        $this->db->select('itemID, itemName, itemDescription, unit, quantity, item.PO_number, item.requestID, item_request.requestID, 
                          item_request.userID, users.userID, department, purchase_order.request_id');
        $this->db->from('purchase_order');
        $this->db->join('item', 'item.PO_number = purchase_order.PO_number');
        $this->db->join('item_request', 'item_request.requestID = purchase_order.request_id');
        $this->db->join('users', 'item_request.userID = users.userID');
        $query = $this->db->get();
        return $query->result();
    }

    public function poStatus($po)
    {
        $this->db->select('status, remarks');
        $this->db->from('purchase_order');
        $this->db->where('PO_number', $po);
        $query = $this->db->get();
        return $query->row();
    }

    public function display_pending_po()
    {
        $this->db->select('PO_number, request_id, order_date, date_received, date_completed, status, remarks');
        $this->db->from('purchase_order');
        $this->db->where('status', 'Incomplete Delivery');
        $this->db->or_where('status', 'Delivery Complete');
        $this->db->order_by('PO_number', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    #receving report
    public function poForReport($poNumber)
    {
        $this->db->select('purchase_order.PO_number, purchase_order.order_date, purchase_order.request_id, itemName, itemDescription, quantity, 
                          pricePerUnit, unit, item_request.department, users.userID,
                          supplier.supplierID, supplier.supplierName');
        $this->db->from('purchase_order');
        $this->db->join('item_request', 'item_request.requestID = purchase_order.request_id');
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->join('item', 'item.requestID = item_request.requestID');
        $this->db->join('supplier', 'supplier.supplierID = purchase_order.supplier_id');
        $this->db->where('purchase_order.PO_number', $poNumber);
        $query = $this->db->get();
        return $query->row();
    }

    public function supplier($poNumber)
    {
        $this->db->select('supplierName');
        $this->db->from('supplier');
        $this->db->join('purchase_order', 'supplier.supplierID = purchase_order.supplier_id');
        $this->db->where('purchase_order.PO_number', $poNumber);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->supplierName;
        }
    }

    public function dateOrdered($poNumber)
    {
        $this->db->select('order_date');
        $this->db->from('purchase_order');
        $this->db->where('PO_number', $poNumber);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->order_date;
        }
    }

    public function dateReceived($poNumber)
    {
        $this->db->select('date_received');
        $this->db->from('purchase_order');
        $this->db->where('PO_number', $poNumber);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->date_received;
        }
    }

    public function poRequestID($poNumber)
    {
        $this->db->select('request_id');
        $this->db->from('purchase_order');
        $this->db->where('PO_number', $poNumber);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->request_id;
        }
    }

    public function requestDepartment($poNumber)
    {
        $this->db->select('users.department');
        $this->db->from('item_request');
        $this->db->join('users', 'users.userID = item_request.userID');
        $this->db->join('purchase_order', 'item_request.requestID = purchase_order.request_id');
        $this->db->where('purchase_order.PO_number', $poNumber);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->department;
        }
    }

    #searching
    public function searchItem($no)
    {
        $this->db->select('item_id, control_number, quantity, unit, item_name, item_description, serial_number, status, department, remarks, deptName, dept_section, areaName');
        $this->db->from('item_inventory');
        $this->db->join('department', 'department.deptID = item_inventory.department');
        $this->db->join('department_section', 'department_section.areaID = item_inventory.dept_section');
        $this->db->where('control_number', $no);
        $this->db->or_where('serial_number', $no);
        $query = $this->db->get();
        return $query->result();
    }

    #pending po
    public function pendingPo($details)
    {
        $this->db->insert('pending_po', $details);
        return $this->db->insert_id();
    }

    public function pendingItems()
    {
        $this->db->select('itemID, itemName, itemDescription, pending_po.request_id, quantity, pending_po.quantity_delivered');
        $this->db->from('pending_po');
        $this->db->join('item', 'pending_po.item_id = item.itemID');
        $query = $this->db->get();
        return $query->result();
    }

    public function pendingOrder()
    {
        $this->db->select('PO_No, request_id, quantity');
        $this->db->from('pending_po');
        $query = $this->db->get();
        return $query->result();
    }

    public function poDetails($poNumber)
    {
        $this->db->select('PO_number, supplier_id, order_date, request_id');
        $this->db->from('purchase_order');
        $this->db->where('PO_number', $poNumber);
        $query = $this->db->get();
        return $query->row();
    }

    public function updatePo($poNumber, $details)
    {
        $this->db->where('PO_number', $poNumber);
        $this->db->update('purchase_order', $details);
        return $this->db->affected_rows();
    }

    public function checkStatus($requestID)
    {
        $this->db->select('itemID');
        $this->db->from('item');
        $this->db->where('status', 'complete');
        $this->db->where('requestID', $requestID);
        $query = $this->db->get();
        return $query->num_rows();
    }


    public function cancelledItems($requestID)
    {
        $this->db->select('itemID');
        $this->db->from('item');
        $this->db->where('status', 'Cancelled');
        $this->db->where('requestID', $requestID);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function totalItems($requestID)
    {
        $this->db->select('itemID');
        $this->db->from('item');
        $this->db->where('requestID', $requestID);
        $query = $this->db->get();
        return $query->num_rows();
    }

    #turnover

    public function item_turnover($item)
    {
        $this->db->insert('item_turnover', $item);
        return $this->db->insert_id();
    }

    #repair

    public function repair_item($item)
    {
        $this->db->insert('item_repair', $item);
        return $this->db->insert_id();
    }

    public function update_repair_item($itemID, $details)
    {
        $this->db->where('item_id', $itemID);
        $this->db->update('item_repair', $details);
        return $this->db->affected_rows();
    }

    #transfer Item
    public function transferItem($item_id, $itemDetails)
    {
        $this->db->where('item_id', $item_id);
        $this->db->update('item_inventory', $itemDetails);
        return $this->db->affected_rows();
    }

    public function transferTransaction($item)
    {
        $this->db->insert('transfer_transaction', $item);
        return $this->db->insert_id();
    }

    public function itemTransferTransaction($item)
    {
        $this->db->insert('item_transfer', $item);
        return $this->db->insert_id();
    }

    public function forTransfer($item)
    {
        $this->db->insert('for_transfer', $item);
        return $this->db->insert_id();
    }

    public function for_transfer_items()
    {
        $this->db->select('item_name, brand, model, item_description, quantity');
        $this->db->from('for_transfer');
        $this->db->join('item_inventory', 'item_inventory.item_id = for_transfer.item_id');
    }

    public function updateTransferTransaction($id, $details)
    {
        $this->db->where('transacID', $id);
        $this->db->update('item_transfer', $details);
        return $this->db->affected_rows();
    }

    public function turnovered_items()
    {
        $this->db->select('transID, quantity, item_name, brand, description, control_number, serial_number, remarks, department, trans_date');
        $this->db->from('item_turnover');
        $query = $this->db->get();
        return $query->result();
    }

    public function transferredItems($id)
    {
        $this->db->select('item_description, item_transfer.itemID, transfer_from, transfer_reason, transfer_to, dept_section, item_transfer.quantity, item_name, brand, item_description');
        $this->db->from('item_transfer');
        $this->db->join('item_inventory', 'item_inventory.item_id = item_transfer.itemID');
        $this->db->join('transfer_transaction', 'transfer_transaction.transID = item_transfer.transfer_number');
        $this->db->where('transfer_number', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function transferForm($id)
    {
        $this->db->select('item_description, transfer_from, transfer_reason, transfer_to, dept_section, item_transfer.quantity, item_name, brand, item_description');
        $this->db->from('transfer_transaction');
        $this->db->join('item_inventory', 'item_inventory.item_id = item_transfer.itemID');
        $this->db->join('item_transfer', 'transfer_transaction.transID = item_transfer.transfer_number');
        $this->db->where('transID', $id);
        $query = $this->db->get();
        return $query->result();
    }


    public function transItems()
    {
        $this->db->select('transfer_from, transfer_to, date_transfer, transfer_number, 
                           item_id, item_name, brand, item_description, control_number, deptName, areaName');
        $this->db->from('transfer_transaction');
        $this->db->join('item_transfer', 'transfer_transaction.transID = item_transfer.transfer_number');
        $this->db->join('item_inventory', 'item_inventory.item_id = item_transfer.itemID');
        $this->db->join('department', 'item_inventory.department = department.deptID');
        $this->db->join('department_section', 'item_inventory.dept_section = department_section.areaID');
        // $this->db->order_by('transacID', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function itemTransfer($dept)
    {
        $this->db->select('transfer_from, transfer_to, date_transfer, transfer_number, 
                           item_id, item_name, brand, item_description, control_number, deptName, areaName');
        $this->db->from('transfer_transaction');
        $this->db->join('item_transfer', 'transfer_transaction.transID = item_transfer.transfer_number');
        $this->db->join('item_inventory', 'item_inventory.item_id = item_transfer.itemID');
        $this->db->join('department', 'item_inventory.department = department.deptID');
        $this->db->join('department_section', 'item_inventory.dept_section = department_section.areaID');
        $this->db->where('deptName', $dept);
        $query = $this->db->get();
        return $query->result();
    }

    public function transfer()
    {
        $this->db->select('transfer_from, transfer_to, transfer_reason, date_transfer, transID, itemID');
        $this->db->from('transfer_transaction');
        $this->db->join('item_transfer', 'transfer_transaction.transID = item_transfer.transfer_number');
        // $this->db->order_by('transacID', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function transferFrom($transID)
    {
        $this->db->select('transfer_from');
        $this->db->from('transfer_transaction');
        // $this->db->order_by('transacID', 'DESC');
        $this->db->where('transID', $transID);
        $query = $this->db->get();
        return $query->row();
    }

    public function repairItems()
    {
        $this->db->select('transID, control_no, item_repair.item_id, item_repair.status, repair_type, repair_location, repair_date, in_charge, item_repair.remarks');
        $this->db->from('item_repair');
        $this->db->join('item_inventory', 'item_inventory.item_id = item_repair.item_id');
        $query = $this->db->get();
        return $query->row();
    }

    public function repairDetails()
    {
        $this->db->select('transID, item_name, item_repair.department, model, brand, item_description, control_no, item_repair.item_id, item_repair.status, repair_type, repair_location, repair_date, in_charge, item_repair.remarks');
        $this->db->from('item_repair');
        $this->db->join('item_inventory', 'item_inventory.item_id = item_repair.item_id');
        $this->db->where('item_repair.status =', 'Under Repair');
        $this->db->where('item_inventory.status !=', 'disposed');
        $query = $this->db->get();
        return $query->result();
    }

    public function repHistory()
    {
        $this->db->select('transID, item_name, item_repair.department, brand, item_description, control_no, item_repair.item_id, item_repair.status, repair_type, repair_location, repair_date, in_charge, item_repair.remarks');
        $this->db->from('item_repair');
        $this->db->join('item_inventory', 'item_inventory.item_id = item_repair.item_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function repairHistory()
    {
        $this->db->select('transID, item_repair.item_id, item_repair.status, repair_type, repair_location, repair_date, in_charge,
         item_repair.remarks, item_name, brand, item_description, control_number, serial_number, deptName, areaName');
        $this->db->from('item_repair');
        $this->db->join('item_inventory', 'item_inventory.item_id = item_repair.item_id');
        $this->db->join('department', 'item_inventory.department = department.deptID');
        $this->db->join('department_section', 'item_inventory.dept_section = department_section.areaID');
        $this->db->order_by('transID', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function dateTransfer($id)
    {
        $this->db->select('date_transfer');
        $this->db->from('item_transfer');
        $this->db->join('transfer_transaction', 'item_transfer.transfer_number = transfer_transaction.transID');
        $this->db->where('itemID', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row(0);
            return $row->date_transfer;
        }
    }

    public function history($details)
    {
        $this->db->insert('inventory_history', $details);
        return $this->db->insert_id();
    }

    public function item_details($id)
    {
        $this->db->select('item_id, control_number, serial_number, quantity, unit, item_name, item_description, department, remarks, deptName, 
                           dept_section, areaName, status, received_by, pricePerUnit, brand, date_received, with_warranty, warranty_period');
        $this->db->from('item_inventory');
        $this->db->join('department', 'department.deptID = item_inventory.department');
        $this->db->join('department_section', 'department_section.areaID = item_inventory.dept_section');
        $this->db->where('item_id', $id);
        $this->db->or_where('control_number', $id);
        $this->db->or_where('serial_number', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function item_history($id)
    {
        $this->db->select('activity_description, date, inventory_history.transID');
        $this->db->from('inventory_history');
        $this->db->join('item_transfer', 'item_transfer.transacID = inventory_history.transID');
        $this->db->where('inventory_history.itemID', $id);
        $this->db->where('activity_description', 'Transfer of item');
        $query = $this->db->get();
        return $query->result();
    }

    public function item_log($log)
    {
        $this->db->insert('item_inventory_log', $log);
        return $this->db->insert_id();
    }

    public function item_changes($item)
    {
        $this->db->insert('item_changes_log', $item);
        return $this->db->insert_id();
    }

    public function items($id){
        $this->db->select('*');
        $this->db->from('item_inventory');
        $this->db->where('item_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function maintenance($id)
    {
        $this->db->select('item_id');
        $this->db->from('item_changes_log');
        $this->db->where('item_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function log_maintenance($id){
        $this->db->select('item_id');
        $this->db->from('item_inventory_log');
        $this->db->where('item_id', $id);
        $this->db->where('description =', 'Edited Item');
        $query = $this->db->get();
        return $query->row();
    }

    //during item editing
    public function item_changes_log($id)
    { 
        $this->db->insert('item_changes_log', $id);
        return $this->db->insert_id();
    }

    public function itemChanges($id){
        $this->db->insert('item_changes', $id);
        return $this->db->insert_id();
    }


    public function show_log()
    {
        $this->db->select('transID, itemID, description, username');
        $this->db->from('item_inventory_log');
        $this->db->join('users', 'users.userID = item_inventory_log.user_incharge');
        $query = $this->db->get();
        return $query->result();
    }

    public function show_original(){
        $this->db->select('item_id, item_name, description, brand, model, control_no, serial_number');
        $this->db->from('item_changes_log');
        $query = $this->db->get();
        return $query->result();
    }

    public function show_changes(){
        $this->db->select('item_id, item_name, description, brand, model, control_number, serial_number, date_updated');
        $this->db->from('item_changes');
        $query = $this->db->get();
        return $query->result();
    }

    public function repair_history($id)
    {
        $this->db->select('activity_description, date, inventory_history.transID');
        $this->db->from('inventory_history');
        $this->db->join('item_repair', 'item_repair.transID = inventory_history.transID');
        $this->db->where('inventory_history.itemID', $id);
        $this->db->where('activity_description', 'Repair');
        $query = $this->db->get();
        return $query->result();
    }

    public function disposed_item_history()
    {
        $this->db->select('item_id, control_number, brand, quantity, unit, item_name, item_description, serial_number, status, department, remarks, date_received, pricePerUnit, deptName, dept_section, areaName');
        $this->db->from('disposed_item_inventory');
        $this->db->join('department', 'department.deptID = disposed_item_inventory.department');
        $this->db->join('department_section', 'department_section.areaID = disposed_item_inventory.dept_section');
        $this->db->where('status !=', 'restored');
        $query = $this->db->get();
        return $query->result();
    }

    public function getItemId($control_no)
    {
        $this->db->select('item_id')->from('item_inventory')->where('control_number', $control_no);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row(0);
            return $row->item_id;
        }
    }

    public function graphRepairReport()
    {
        /*        $this->db->select('brand, item_name');
        $this->db->select_sum('item_repair.item_id');
        $this->db->from('item_repair');
        $this->db->join('item_inventory', 'item_repair.item_id = item_inventory.item_id');
        $this->db->where('item_name', 'Laptop');
        $this->db->group_by('brand');
        $query = $this->db->get();
        return $query->result();
*/
        $dayQuery =  $this->db->query("SELECT brand as y, COUNT(transID) as a FROM item_repair JOIN item_inventory 
        ON item_repair.item_id=item_inventory.item_id WHERE item_name='laptop' GROUP BY brand");
        return $dayQuery->result();
    }

    public function count_inventory()
    {
        $this->db->select('*');
        $this->db->from('item_inventory');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_pending_po()
    {
        $this->db->select('*');
        $this->db->from('purchase_order');
        $this->db->where('status =', 'Incomplete Delivery');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_laptops()
    {
        $dayQuery =  $this->db->query("SELECT brand as y, COUNT(item_id) as a FROM item_inventory 
        WHERE item_name='laptop' GROUP BY brand");
        return $dayQuery->result();
    }
}
