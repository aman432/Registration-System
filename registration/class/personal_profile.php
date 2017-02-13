<?php 

	class profile
	{
		public $fullname;
		public $gender;
		public $email;
		public $id;
		public $eid;
		public $uri;
		public $md5uri;
		public $cname;
		public $cost;
		public $event;
		public $phone;
		public $status;
		public $team;
		public $team_display;
		public $sizeofteam;
		public $uid;
		public $stamp;
		
		function _profile()
		{
			$this->status="unpaid";
			$this->cost="0";
			$this->sizeofteam="20";
		}
		
		public function set_team_display($delimiters,$string)
		{
			$ready = str_replace($delimiters, $delimiters[0], $string);
			$launch = explode($delimiters[0], $ready);
			$this->sizeofteam = sizeof($launch);
			
			return  $launch;
		
		}
		
		public function college_name_correction($option1,$option2)
		{
		if($option1=="01")
			$this->cname="JUIT";
		else
		    $this->cname=$option2."other";
		
		
		}
		public function define_event($option)
		{
		if($option=="e1")
			{
				$this->event="fifa";
				$this->cost="100";
			}
		elseif($option=="e2")
			{
				$this->event="blur";
				$this->cost="200";
			}
		elseif($option=="e3")
			{
				$this->event="roborace";
				$this->cost="400";
			}
		}
		
		public function uri_creator()
			{
				$this->uid=strtolower($this->cname[0].$this->cname[1])."_".$this->id."_".$this->eid;
		
		
			}
		public function encrypt_key()
		{
			$this->md5uri=md5($this->uri);
		}
		
    }





?>