<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_model extends BF_Model {
    
protected $table_name	= 'home';
	protected $key			= 'id';
	protected $date_format	= 'datetime';

	protected $log_user 	= false;
	protected $set_created	= false;
	protected $set_modified = false;
	protected $soft_deletes	= false;


	// Customize the operations of the model without recreating the insert,
    // update, etc. methods by adding the method names to act as callbacks here.
	protected $before_insert 	= array();
	protected $after_insert 	= array();
	protected $before_update 	= array();
	protected $after_update 	= array();
	protected $before_find 	    = array();
	protected $after_find 		= array();
	protected $before_delete 	= array();
	protected $after_delete 	= array();

	// For performance reasons, you may require your model to NOT return the id
	// of the last inserted row as it is a bit of a slow method. This is
    // primarily helpful when running big loops over data.
	protected $return_insert_id = true;

	// The default type for returned row data.
	protected $return_type = 'object';

	// Items that are always removed from data prior to inserts or updates.
	protected $protected_attributes = array();

	// You may need to move certain rules (like required) into the
	// $insert_validation_rules array and out of the standard validation array.
	// That way it is only required during inserts, not updates which may only
	// be updating a portion of the data.
	protected $validation_rules 		= array(
		array(
			'field' => 'name',
			'label' => 'lang:home_page_field_name',
			'rules' => 'required|max_length[255]',
		),
		array(
			'field' => 'page_name',
			'label' => 'lang:home_page_field_page_name',
			'rules' => 'required|max_length[255]',
		),
		array(
			'field' => 'field_content',
			'label' => 'lang:home_page_field_field_content',
			'rules' => 'required',
		),
	);
    

    function HomeTitle() {
        
        //   $query = $this->db->query('SELECT * FROM items WHERE id="$id"');
        // $query =  $this->db->having('id = 1'); 
        $query = $this->db->select('name, page_name, field_content')->from('bf_general_page_fields')->get();
        return $query->result();
    }

   
    
}
