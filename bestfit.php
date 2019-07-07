<?php



try{
    $block = [5,5,5,5,5,5];
    $elements = [4,5,1];
    $response = [];
    foreach ($elements as $key => $value) { // value = 2

        for ($i = 0; $i < count($block); $i++) {
            if ($value <= $block[$i]) {
                $fit[] = ['element' => $value, 'block' => $i + 1];
                $block[$i] = $block[$i] - $value; //
                break;
            }
        }
    }
    array_push($response,$fit);

    echo json_encode($response);
}catch (Exception $exception){
echo $exception;
}
?>