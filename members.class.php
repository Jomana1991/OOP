<?php

Class person {

protected $first_name;
protected $last_name;

public function __construct ($args = []) {
 $this->first_name = $args['first_name'] ?? NULL;
 $this->last_name = $args['last_name'] ?? NULL;
}

//Jomana
public function search_person () {
//Ghena     
}
}
class Author extends person {

}

class Member extends person {

protected $address;
protected $DOB;
protected $email;
protected $join_date;


public function __construct ($args = []) {
 parent::__construct($args);
 $this->address = $args['address'] ?? NULL;
 $this->DOB = $args['DOB'] ?? NULL;
 $this->email = $args['email'] ?? NULL;
 $this->join_date = $args['join_date'] ?? NULL;
}

public function update_member () {} 
//Allegra
}
$newMember = new Member ( ['first_name' => 'Bob', 'last_name' => 'Marley', 'address' => 'baker street', 'DOB' => '12/03/1988', 'email' => 'test@gmail.com', 'join_date' => 'date' ] ); 
//$newMember->add_person (['first_name' => 'Bob', 'last_name' => 'Marley', 'address' => 'baker street', 'DOB' => '12/03/1988', 'email' => 'test@gmail.com', 'join_date' => 'date' ]);
print_r ($newMember);

?>

