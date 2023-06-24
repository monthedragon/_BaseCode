<?php
class Main_model extends CI_Model {
	var $retVal = array();
	
	//These are the fields to be used to validate if the HEALTH DEC is ALLOW to LOG or NOT
	//Answerable by YES OR NO
	public $target_allow_fields = array(
										'c_sore_throat',
										'c_body_pain',
										'c_headache',
										'c_fever',
										'c_worked_stayed_positive',
										'c_has_contact',
										'c_travel_ph');

	//variables being used on main LIST
	//These variables will be used to save on SESSION for easy usage of the screen
	public 	$sw_target_fields = array('firstname','lastname','from_date','to_date','search_type','pending_only','file_reason');
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function change_conn($cd){
		$config['hostname'] = $cd['hostname'];
		$config['username'] = $cd['username'];
		$config['password'] = $cd['password'];
		$config['database'] = $cd['campaign_db'];
		$config['dbdriver'] = "mysql";
		$config['dbprefix'] = "";
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE;

		return $this->load->database($config,true);
	}
	
	
}