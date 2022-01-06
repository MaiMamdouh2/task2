<?php
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female


// collection => laravel => array of objects
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
        'email' => 'ahmewd@gamil.com',
        
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running', 'acting'
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'email' => 'mohamed@gamil.com',
    ],
    (object)[
        'id' => 3,
        'name' => 'mai',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing',
            'theater' => 'acting',
        ],
        'email' => 'mai@gamil.com',
    ],
];



$table = "<table class='table border  table-primary table-striped ' >
            <thead>
                <tr>";
                    foreach ($users[0] as $keyOfUsers => $value) {
                        $table .= " <th> $keyOfUsers </th>";
                    }
                   
$table .=       "</tr>
            </thead>
            <tbody>";
                    foreach ($users as $index => $user) {

                        $table .=  "<tr>";

                            foreach ($user as $keyOfUsers => $value) {

                                $table .=  "<td>";

                                    if(gettype($value) != 'array' && gettype($value) != 'object')
                                    {
                                        $table .= $value;
                                    }
                                    else
                                    {
                                        foreach ($value as $k => $val)
                                        {
                                            if($keyOfUsers == 'gender')
                                            {
                                                if($val == 'm')
                                                {
                                                    $val = 'male';
                                                }else
                                                {
                                                    $val = 'female';
                                                }
                                            }
                                            $table .= $val .' , ';
                                        }
                                    }
                                   
                                $table .= "</td>";
                            }
                        $table .=  "</tr>";
                    }
$table .=   "</tbody>
        </table>";

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="padding-top: 50px ;">
    <?php echo $table; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>