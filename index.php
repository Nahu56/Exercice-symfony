<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Document</title>

    <?php 
    require_once("models/database.php"); 
    $dbh = initDatabase();
    
    ?>
</head>
<body>
    <h1>Bonjour, je m'appelle Thimothé</h1>

    <?php 
    $query = requeteposts($dbh);
    
    //var_dump($query[0]);
    //var_dump($query[0]["title"]); 
    ?>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created at</th>
          </tr>
        </thead>
        <tbody>

          <?php
            foreach($query as $post){
              //var_dump($post);
              echo "<tr>";
              echo "<th scope='row'>". $post['id'] ."</th>";
              echo "<td>". $post['title'] ."</td>";
              echo "<td>". $post['description'] ."</td>";
              echo "<td>". $post['created_at'] ."</td>";
              echo "<td> <a href=''></a> </td>";
              echo "</tr>";
            }
          ?>

          

        </tbody>
      </table>


</body>
</html>
