<?
  // Creator : Marcus Kim Vibal Manuel
  // Date Created : November 2, 2020
  // Subject : Advance Programming
  // Professor : Ms. Blances Sanchez
?>
<?php
        class User{
          public $name;
          public $username;
          public $email;
          function addFriend($name){
            echo "$name" . " added a friend. <br>";
          }
          function postStatus($name){
            echo "$name" . " posted a status. <br>";
          }
        }
        $example = new User();
        echo $example->addFriend('Marcus Kim Manuel');
        echo "<br>";
        echo $example->postStatus('Marcus Kim Manuel');

  ?>
