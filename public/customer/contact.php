<?php

$title = "Contact US";

include '../../includes/header.php'; //calling the header

?>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
body{
  background-image: url('../../private/img/background1.jpg');
}
</style>

   <h3>Contact Form</h3>

   <div class="container">
     <form action="contact.php">
       <label for="fname">First Name</label>
       <input type="text" id="fname" name="firstname" placeholder="Your name..">
   
       <label for="lname">Last Name</label>
       <input type="text" id="lname" name="lastname" placeholder="Your last name..">
   
       <label for="country">Country</label>
       <select id="country" name="country">
         <option value="australia">Australia</option>
         <option value="canada">Canada</option>
         <option value="usa">USA</option>
         <option value="brazil">Brazil</option>
         <option value="ireland">Ireland</option>

       </select>
   
       <label for="subject">Subject</label>
       <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
   
       <input type="submit" value="Submit">
     </form>
   </div>
  
   <?php
   include '../../includes/footer.php'; // calling the footer

?>