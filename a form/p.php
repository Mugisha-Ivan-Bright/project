<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $first =$_POST['Firstname'];
    $last =$_POST['secondName'];
    $select=$_POST['select'];
    $email =$_POST['email'];
    $dob =$_POST['date'];
    $textarea =$_POST['textarea'];
    $cv =$_POST['cv'];
    $_others =$_POST['others'];

    $fathername =$_POST['fathername'];
    $mothername =$_POST['mothername'];
    $userpassword =$_POST['password'];
    $phonenumber =$_POST['phonenumber'];

    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        .button{
            background-color: black;
            color: white;
            border:none;
            border-radius:7px;
            margin-top: 30px;
            padding : 10px 20px;
            text-decoration:none
        }
        </style>
    </head>
    <body>
        <h1>Here are your inputs click  on the button to go back</h1>
        <table border="1">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Academic year</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>User Password</th>
                <th>Date of birth</th>
                <th>Extra culcular activites</th>
                <th> Attached Files</th>
                <th>Other Information</th>
                <t
                </tr>
            <tr>
            <td ><?php echo $first?></td>
            <td ><?=$last?></td>
            <td><?=$fathername?></td>
            <td><?=$mothername?></td>
            <td><?php echo $select?></td>
            <td ><?=$email?></td>
            <td><?=$phonenumber?></td>
            <td ><?=$userpassword?></td>
            <td ><?=$textarea?></td>
            <td ><?=$cv?></td>
            <td ><?=$_others?></td>
        
            </tr>
        </table>

        <button class="button"><a href="form.html">Go back</a> </button>
    </body>
    </html>