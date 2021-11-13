<?php
    $title = "Library";
    require_once "layout/header.php";
?>
<?php

$servername = "localhost";
$username = "id17924747_somk";
$password = '}Lc}x^8!!Z@($cT<';
$database = "id17924747_taptima_lib";

$library = new mysqli($servername, $username, $password, $database);
$library->query("SET NAMES 'utf8'");

if ($library->connect_error) {
    echo 'Error number:'.$library->connect_errno.'<br>';
    echo 'Error: '.$library->connect_error;
}
?>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Author</th>
        <th>Description</th>
        <th>Year</th>
    </tr>
    </thead>
    <tbody>
        <form class="form" action="form.php" method="post">
            <div class="row-sm-5">
                <input class="form-control" type="text" name="image" placeholder="how can i add an image?">
            </div>
            <div class="row-sm-5">
                <input class="form-control" type="text" name="b_name" placeholder="Book name">
            </div>
            <div class="row-sm-5">
                <input class="form-control" type="text" name="a_name" placeholder="Author name">
            </div>
            <div class="row-sm-5">
                <input class="form-control" type="text" name="description" placeholder="Description">
            </div>
            <div class="row-sm-5">
                <input class="form-control" type="text" name="year" placeholder="Year">
            </div>
            <div>
                <button type="submit" class="btn btn-light">Send</button>
            </div>
        </form>

<?php

    //echo 'Host info: '.$library->host_info;

    $books = $library->query("SELECT * FROM `boocks`");
    if($books->num_rows > 0){
        while ($book = $books->fetch_assoc()){
            echo "<tr>";
            echo "<th>".$book['image']."</th>";
            echo "<th>".$book['name']."</th>";
            echo "<th>".$book['author']."</th>";
            echo "<th>".$book['description']."</th>";
            echo "<th>".$book['year']."</th>";
            echo "<th>
                    <div>
                        <button type='submit' class='btn btn-light'>Edit</button>
                    </div>
                  </th>";
            echo "</tr>";


        }
    }


    $library->close();
?>

<!--Инлайн-редактирование-->
<!--Что если сделать тег form и в качестве лейбла-->
<!--залить данные из таблицы? Обновление будет -->
<!--происходитьпо нажатию Enter или сабмита-->

    </tbody>
</table>


<?php
    require "layout/footer.php";
?>
