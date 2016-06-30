<?php  
        date_default_timezone_set ("America/Los_Angeles");
        
        $rate = $_POST['rate'];
        $pickup_date = $_POST['pickup_date'];
        $deliver_date = $_POST['deliver_date'];
        $book_date = $_POST['book_date'];
        $weight = $_POST['weight'];
        $trailer_type = $_POST['trailer_type'];
        $comment = $_POST['comment'];
        $load_type = $_POST['load_type'];
        
        $origin_state = empty($_POST['origin_state']) ? '' : $_POST['origin_state'];
        $origin_city_id = empty($_POST['origin_city']) ? '' : $_POST['origin_city'];
        if($origin_city_id == 'Please Select')
            $origin_city_id = '';
        $origin_city_name = empty($_POST['origin_city_name']) ? 'Please Select' : $_POST['origin_city_name'];
        $origin_zipcode = $_POST['origin_zipcode'];
        $dest_state = empty($_POST['dest_state']) ? '' : $_POST['dest_state'];
        $dest_city_id = empty($_POST['dest_city']) ? '' : $_POST['dest_city'];
        if($dest_city_id == 'Please Select')
            $dest_city_id = '';
        $dest_city_name = empty($_POST['dest_city_name']) ? 'Please Select' : $_POST['dest_city_name'];
        $dest_zipcode = $_POST['dest_zipcode'];

        echo '<pre>';var_dump($origin_city_id);echo '</pre>';
        $number_pickups  = $_POST['number_pickups'];
        $number_drops  = $_POST['number_drops'];
        include 'html.postload.php';
