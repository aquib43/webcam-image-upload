<?php 

if (isset($_POST['image'])) {
    
    $data = $_POST['image'];

    // remove this => data:image/png;base64,
    $arr_1 = explode(';', $data);
    $arr_2 = explode(',', $arr_1[1]);

    $data = base64_decode($arr_2[1]);

    $image_name = 'images/' .time() . '.png';

    file_put_contents($image_name, $data);

    echo '<img src="'. $image_name .'" class="img-thumbnail">';

}