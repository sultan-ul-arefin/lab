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
$categories = array(
    'Action', 'Adventure',
    'Horror', 'Comic',
    'Fiction', 'Non Fiction'
);
?>

<body>
    <div class="border-1 padding10">
        <h1>Search book</h1>
        <form action="books.php" method="GET">
            <fieldset>
                <legend>
                    Enter condition
                </legend>
                Maximum Price:
                <input type="number" name="price" id="price">
                <br>
                <br>
                Category:
                <select name="category" id="category">
                    <?php
                    foreach ($categories as $category) {

                        echo "<option value='" . $category . "'>" . $category . "</option>";
                    }
                    ?>

                </select>
                <br>
            </fieldset>
            <br><br>
            <input type="submit" value="Search">
        </form>
    </div>


</body>

</html>