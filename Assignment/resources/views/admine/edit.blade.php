<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        
     <!DOCTYPE html>
<html>
  <title>Simple Sign up from</title>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display:inline-block block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
      }
      button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    </style>
  </head>
  <body>
    <form action="update" method="post">
         {{csrf_field()}}
      <h1>update your information</h1>
      <div class="icon">
        <i class="fas fa-user-circle"></i>
      </div>
      <div class="formcontainer">
      <div class="container">
        <label for="uname"><strong>FirstName</strong></label>
        <input type="text" placeholder="Enter firstName"name="fname" value="{{$id->fname}}" >
        
        <label for="mail"><strong>LastName</strong></label>
        <input type="text" placeholder="Enter LastName" name="lname" value="{{$id->lname}}">
        
        <label for="mail"><strong>Email</strong></label>
        <input type="text" placeholder="Enter Email"name="email" value="{{$id->email}}"><br>
        
        <label for="psw"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password"name="password" value="{{$id->password}}" >
        
        <label for="psw"><strong>tel</strong></label>
        <input type="text" placeholder="Enter telephone" name="telephone" value="{{$id->telephone}}">
      
      </div>
      <button type="submit"><strong>Update</strong></button>
     
       
    </form>
  </body>
</html>  
        
       
        
        
        
        <?php
        // put your code here
        ?>
   