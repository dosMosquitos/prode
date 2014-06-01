<?php
class email{
	private $id;
	private $address;
	private $hash;
	private $unsubscribed;
	private $db;	
	
	function __construct($address = "") { 
		$this->db = new DB();
		$this->db->init();
		if($address != ''){
			$this->getByAddress($address);
		}		
	}

	private function update(){
		$query = 'UPDATE emails SET email = \''.$this->db->escape($this->address).'\' WHERE '.
					'id = '.$this->db->escape($this->id);
		$this->db->execCmd($query);
	}

	private function insert(){
		$query = 'INSERT INTO emails(email,hash,unsubscribed) '.
					'VALUES  (\''.$this->db->escape($this->address).'\',\''.$this->db->escape($this->hash).'\',0)';
		if($this->db->execCmd($query)){
			$this->id = $this->db->getLastId();		
		}	
	}

	public function getByAddress($address){
		$query = 'SELECT * FROM emails WHERE email = \''.$this->db->escape($address).'\'';
		$this->db->getData($query);
		if($this->db->getNumRows() > 0){
			$e = $this->db->getObject();
			$this->id = $e->id;
			$this->address = $e->email;
			$this->hash = $e->hash;
			$this->unsubscribed = $e->unsubscribed;
		}else{
			$this->id = 0;
			$this->address = $address;
			$this->hash = md5($address);
			$this->unsubscribed = 0;			
		}
	}

	public function getById($id){
		$query = 'SELECT * FROM emails WHERE id = \''.$this->db->escape($id).'\'';
		$this->db->getData($query);
		if($this->db->getNumRows() > 0){
			$e = $this->db->getObject();
			$this->id = $e->id;
			$this->address = $e->email;
			$this->hash = $e->hash;
			$this->unsubscribed = $e->unsubscribed;
		}else{
			$this->id = 0;
			$this->address = '';
			$this->hash = md5('');
			$this->unsubscribed = 0;			
		}		
	}

	public function getByHash($hash){
		$query = 'SELECT * FROM emails WHERE hash = \''.$this->db->escape($hash).'\'';
		$this->db->getData($query);
		if($this->db->getNumRows() > 0){
			$e = $this->db->getObject();
			$this->id = $e->id;
			$this->address = $e->email;
			$this->hash = $e->hash;
			$this->unsubscribed = $e->unsubscribed;
		}else{
			$this->id = 0;
			$this->address = '';
			$this->hash = md5('');
			$this->unsubscribed = 0;			
		}		
	}

	public function getId(){
	 	return $this->id;
	}

	public function getAddress(){
	 	return $this->address;
	}

	public function getHash(){
	 	return $this->hash;
	}

	public function getUns(){
	 	return $this->unsubscribed;
	}

	public function getUnsubscribeLink(){
		return baseUrl.'/unsubscribe.php?hash='.$this->hash;
	}	

	public function setAddress($address){
	 	$this->address = $address;
	}

	public function save(){
		if($this->id == 0){
			$this->insert();
		}else{
			$this->update();
		}
	}

	public function unsubscribe(){
		if($this->id > 0){
			$query = 'UPDATE emails SET unsubscribed = 1 WHERE '.
						'id = '.$this->db->escape($this->id);
			$this->db->execCmd($query);
		}
	}
}

class url{
	private $id;
	private $url;
	private $title;
	private $db;	
	
	function __construct($url = "", $title = "") { 
		$this->db = new DB();
		$this->db->init();
		if($url != ''){
			$this->getByUrl($url, $title);
		}		
	}

	private function update(){
		$query = 'UPDATE urls SET url = \''.$this->db->escape($this->url).'\', '.
					'title = \''.$this->db->escape($this->title).'\' '.
					'WHERE id = '.$this->db->escape($this->id);
		$this->db->execCmd($query);
	}

	private function insert(){
		$query = 'INSERT INTO urls(url, title) '.
					'VALUES  (\''.$this->db->escape($this->url).'\',\''.$this->db->escape($this->title).'\')';
		if($this->db->execCmd($query)){
			$this->id = $this->db->getLastId();		
		}	
	}

	public function getByUrl($url,$title){
		$query = 'SELECT * FROM urls WHERE url = \''.$this->db->escape($url).'\'';
		$this->db->getData($query);
		if($this->db->getNumRows() > 0){
			$e = $this->db->getObject();
			$this->id = $e->id;
			$this->url = $e->url;
			$this->title = $e->title;
		}else{
			$this->id = 0;
			$this->url = $url;
			$this->title = $title;
		}
	}

	public function getById($id){
		$query = 'SELECT * FROM urls WHERE id = \''.$this->db->escape($id).'\'';
		$this->db->getData($query);
		if($this->db->getNumRows() > 0){
			$e = $this->db->getObject();
			$this->id = $e->id;
			$this->url = $e->url;
			$this->title = stripcslashes($e->title);
		}else{
			$this->id = 0;
			$this->url = '';
			$this->title = '';
		}		
	}

	public function getId(){
	 	return $this->id;
	}

	public function getUrl(){
	 	return $this->url;
	}

	public function getTitle(){
	 	return $this->title;
	}

	public function setUrl($url){
	 	$this->url = $url;
	}

	public function setTitle($title){
	 	$this->title = $title;
	}

	public function save(){
		if($this->id == 0){
			$this->insert();
		}else{
			$this->update();
		}
	}
}

class share{
	private $id;
	private $url;
	private $sender;
	private $receiver;
	private $name;
	private $message;
	private $time;
	private $db;		
	
	function __construct($url, $sender, $name, $message) { 
		$this->db = new DB();
		$this->db->init();
		$this->url = new url();
		$this->url->getById($url);
		$this->sender = new email();
		$this->sender->getById($sender);
		$this->name = $name;
		$this->message = $message;
		$this->time = time();
		$this->insert();
	}

	private function insert(){
		$query = 'INSERT INTO shares(`url`, `sender`, `message`, `when`) '.
					'VALUES  ('.$this->url->getId().','.$this->sender->getId().
					',\''.$this->db->escape($this->message).'\','.$this->time.')';
		if($this->db->execCmd($query)){
			$this->id = $this->db->getLastId();		
		}	
	}

	public function send($email){
		$this->receiver = new email($email);
		$this->receiver->save();
		
		if($this->receiver->getUns() == 0){
			$query = 'INSERT INTO sharesEmail(`share`, `to`) '.
						'VALUES  ('.$this->id.','.$this->receiver->getId().')';
			$this->db->execCmd($query);
			
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: ' .  $this->sender->getAddress() . "\r\n";		
		
			$subject = file_get_contents('./tpl/subject.tpl');	
			$body = file_get_contents('./tpl/email.tpl');
		
			$subject = $this->replaceWildCards($subject);		
			$body = $this->replaceWildCards($body);

			mail($email,$subject,$body,$headers);		
		}		
	}

	private function replaceWildCards($text){
		$text = str_replace('{sender_name}',$this->name,$text);
		$text = str_replace('{sender_email}',$this->sender->getAddress(),$text);			
		$text = str_replace('{message}',$this->message,$text);
		$text = str_replace('{title}',$this->url->getTitle(),$text);
		$text = str_replace('{url}',$this->url->getUrl(),$text);
		$text = str_replace('{unsubscribe}',$this->receiver->getUnsubscribeLink(),$text);
		$text = str_replace('{receiver_email}',$this->receiver->getAddress(),$text);
		return $text;
	}
}


?>