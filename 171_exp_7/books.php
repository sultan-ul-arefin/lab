<!DOCTYPE html>
<html>

<head>
    <title>
        Search book
    </title>
    <style>
        html,
        body {
            height: 100%;
        }

        html {
            display: table;
            margin: auto;
        }

        body {
            display: table-cell;
            vertical-align: middle;
        }

        .border-1 {
            border: 1px solid black;
        }

        .padding10 {
            padding: 10px;
        }
    </style>
</head>
<?php

$books = array(
    array(
        'price' => '100',
        'name' => 'Sandra Shush',
        'category' => 'Action'
    ),
    array(
        'price' => '546',
        'name' => 'Stefanie Mcmohn',
        'category' => 'Adventure'
    ),
    array(
        'price' => '450',
        'name' => 'Michael',
        'category' => 'Comic'
    ),
    array(
        'price' => '200',
        'name' => 'Sandra Shush',
        'category' => 'Action'
    ),
    array(
        'price' => '300',
        'name' => 'Stefanie Mcmohn',
        'category' => 'Adventure'
    ),
    array(
        'price' => '250',
        'name' => 'Michael',
        'category' => 'Comic'
    )
);


if (isset($_GET['price']) && isset($_GET['category'])) {

    $search_result = search($_GET['price'], isset($_GET['category']), $books);
}


function search($price, $category, $array)
{
    $books = array();
    foreach ($array as $key => $val) {
        if ($val['price'] <= $price && $val['category'] == $category) {
            array_push($books, $key);
        }
    }
    return $books;
}

foreach ($search_result as $key => $val) {
    echo $key;
?>
    <!-- <div class="border-1 padding10">
        <ul>
            <li>
                <?php
                echo    $key;
                ?>
            </li>
            <li>
                <?php
                echo    $key['name'];
                ?>
            </li>
            <li>
                <?php
                echo    $key['category'];
                ?>
            </li>
        </ul>



    </div> -->
<?php
}

?>






</body>

</html>