<?php


function flash($message,$level='info'){

session()->flash('flash_message',$message);
session()->flash('flash_message_level',$level);


}


function sort_users_by($column,$body){

 return '<a href='.route('users',['sortBy'=>$column]).'>'.$body.'</a>';

}



 ?>
