
<?php 

	App::uses('AuthComponent', 'Controller/Component');
	class User extends AppModel {
		public $validate = array
		(
				'username' 	=> array(
				'required'	 	=> array(
				'rule' 		 		=> array('notEmpty'),
				'message' 		=> 'A username is required'
				)
			),
				'password' => array(
				'required' 	=> array(
				'rule' 			=> array('notEmpty'),
				'message' 	=> 'A password is required'
				)
			),
			//Password Match
			'match_passwords'	=> array(
				'rule'					=> 'matchPasswords',
				'message'			=> 'Your passwords do not match'
			),

				'password_confirm' => array(
				'required' 	=> array(
				'rule' 			=> array('notEmpty'),
				'message' 	=> 'Please Re-Enter Your Password/Confirm Password'
				)
			),
				'role' 				=> array(
				'valid' 			=> array(
				'rule' 				=> array('inList', array('admin', 'author')),
				'message' 		=> 'Please enter a valid role',
				'allowEmpty' 	=> false
				)
			)
		);
		
		
		// app/Model/User.php - Act2		
		public function beforeSave($options = array()) {
			if (isset($this->data[$this->alias]['password'])) {
				$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
			}
				return true;
		}
	
		

		public function matchPasswords($data) {
			if ($data['password'] == $this->data['User'] ['password_confirm']) {
				return true;
				}
				$this->invalidate('password_confirm', 'Your password do not match');
				return false;
			}
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

?>





























