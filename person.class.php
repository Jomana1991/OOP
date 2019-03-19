<?php

Class person {

    protected $first_name;
    protected $last_name;

    public function __construct($args = []) {
        $this->first_name = $args['first_name'] ?? NULL;
        $this->last_name = $args['last_name'] ?? NULL;
    }

    public function search_person(Array $array, $key, $value) { {
            foreach ($array as $subarray) {
                if (isset($subarray[$key]) && $subarray[$key] == $value)
                    return $subarray;
            }
        }
    }

    public function set_person($firstName, $secondName) {
        $this->first_name = $firstName;
        $this->second_name = $secondName;
    }

    public function get_person() {
        return $this->first_name . " " . $this->second_name . "\n";
    }

}

class Author extends person {
    
}

class Member extends person {

    protected $address;
    protected $DOB;
    protected $email;
    protected $join_date;

    public function __construct($args = []) {
        parent::__construct($args);
        $this->address = $args['address'] ?? NULL;
        $this->DOB = $args['DOB'] ?? NULL;
        $this->email = $args['email'] ?? NULL;
        $this->join_date = $args['join_date'] ?? NULL;
    }
    
    public function set_member($firstName, $secondName, $Address, $dateOfBirth, $Email, $joinDate, $memberStatus) {
    parent::set_person($firstName, $secondName);
    $this->address= $Address;
    $this->DOB=$dateOfBirth;
    $this->email= $Email;
    $this->join_date=$joinDate;
    $this->status=$memberStatus;
    
        
    
}


public function get_member() {
return 
        parent::get_person().
    $this->address. " " .
    $this->DOB . " " .
    $this->email. " " .
    $this->join_date . " ".
    $this->status . " " . "\n";
    
}  

public function search_member (Array $array, $key, $value) {   
    {
    foreach ($array as $subarray){  
        if (isset($subarray[$key]) && $subarray[$key] == $value)
          return $subarray;       
    } 
}
}

    public function update_member() {
        
    }

//Allegra
}

$newMember = new Member(['first_name' => 'Bob', 'last_name' => 'Marley', 'address' => 'baker street', 'DOB' => '12/03/1988', 'email' => 'test@gmail.com', 'join_date' => 'date']);
//$newMember->add_person (['first_name' => 'Bob', 'last_name' => 'Marley', 'address' => 'baker street', 'DOB' => '12/03/1988', 'email' => 'test@gmail.com', 'join_date' => 'date' ]);
print_r($newMember);


$person1= new person;

$person1->set_person('Jomana', 'Ahmad');
echo $person1->get_person();

$member1 = new member;
$member1-> set_member ('Ghena', 'shaban' , '312 rd', '12/1/1993' , 'ghena@hotmail.co.uk', '12/1/2019' , 'active');
echo $member1-> get_member();


$person = array ( 
    0=> array('first_name' => 'John', 'second_name' => 'Smith'),
    1=> array ('first_name' => 'Lucy', 'second_name' => 'Martin'),
    2=> array ('first_name' => 'Max', 'second_name' => 'JD')
     );

$newPerson = new person ();
print_r($newPerson->search_person($person,'first_name', 'John'));

print_r ($newPerson);

$member = array ( 
    0=> array('first_name' => 'John', 'second_name' => 'Smith', 'address'=> '124 avenue', 'DOB'=> '12/4/1994', 'email'=> 'john@hotmail.com','join_date'=> '1/1/2017','status'=>'active'),
    1=> array('first_name' => 'Max', 'second_name' => 'JD', 'address'=> '111 RD', 'DOB'=> '11074/2000', 'email'=> 'max@hotmail.com','join_date'=> '03/01/2000','status'=>'active')

     );

$searchMember = new member ();
print_r($searchMember->search_member($member,'second_name', 'Smith'));

print_r ($searchMember);

?>