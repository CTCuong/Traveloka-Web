<?php

    $connection = mysqli_connect('locahost','root','','book-form');

    if(isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = " insert into book_form(name, email, phone, address,	location	guests	arrivals	leaving	)"

    }

?>