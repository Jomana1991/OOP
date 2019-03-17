<?php

Class Book  { 
var $bookName;
var $pubDate;
var $edition;
var $location;
var $stock;
var $genre;
var $ISBN;
var $authorFirstName;
var $authorLastName;

//Function update_book  () {
// 
//}

Function add_book ($bookName, $pubDate, $edition, $stock, $authorFirstName, $authorLastName, $genre) {
          $this->authorFirstName = $authorFirstName;
          $this->bookName = $bookName;
          $this->authorLastName = $authorLastName;
          $this->pubDate = $pubDate;
          $this->edition = $edition;
          $this->stock = $stock ;
          $this->genre = $genre;
        
}

// below function works
//function set_Properties($array)
//{
//  foreach($array as $property => $value)
//  {
//    $this->{$property} = $value;
//  }
//  return $this;
//} }


//Function remove_book () {
//}
//Function update author info
//Function add author
//Function remove author
//Function search for book via author firstname
//

function search_book (Array $array, $key, $value)
        {   
    {
    foreach ($array as $subarray){  
        if (isset($subarray[$key]) && $subarray[$key] == $value)
          return $subarray;       
    } 
}
}
}
$a = array ( 
    0=> array('bookname' => 'Harry Potter', 'firstName' => 'JK', 'lastName' => 'Rowling'),
    1=> array ('bookname' => 'Vampire Diaries', 'firstName'=> 'John', 'lastName' =>'Smith')
     );



// useage
//echo $newbook-> multidimensional_array_search('Harry Potter',$books);
    

//    
//}
//Function search for book via ISBN
//Function search for author firstname/lastname
//Function search for book via location
//
//}
//
//Class locations 
//$location
//
//loan class {
//
// }
//
$newbook = new Book;
//$newbook->bookName = 'Harry Potter';
//$newbook->authorFirstName = 'JK';
//$newbook->authorLastName = 'Rowling';
//$newbook->add_book ('Harry Potter', 'JK', 'Rowling', 'a', 'b', 'c', 'd');
//
//$newbook->set_properties(array('bookname'=> 'Harry Potter', 'authorFirstName'=> 
//    'JK', 'authorLastName'=>'Rowling'));
//
//print_r ($newbook);
//$booksearch = search_book ();
//echo $booksearch;
print_r($newbook->search_book($a,'bookname', 'Vampire Diaries'));
