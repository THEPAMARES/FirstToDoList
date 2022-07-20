<?php

require 'bdd.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>To Do List</title>
  </head>
  <body>

    <div class="container">
        <div class="row mt-3">
            <div class="col offset-2">
                <h1>To Do List</h1>
            </div>
        </div>

        <form class="row mt-3" id="formAjout">
            <input type="hidden" name="action" value="add_task">

            <div class="col-6 offset-2">
                <label for="inputTaskName" class="visually-hidden">Tâche</label>
                <input type="text" class="form-control" name="taskName" id="inputTaskName" placeholder="Tâche" required>
            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-info mb-3">Ajouter</button>
            </div>
        </form>
        <?php
            $todo = $conn->query("SELECT * FROM todo ORDER BY id DESC");
        ?>
        <div class="row">
            <div class="col-7 offset-2">
                <table class="table table-bordered table-striped table-hover ">
                    <thead>
                        <th>Fait</th>
                        <th>Nom</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" style="width: 10%;"><input type="checkbox" class="form-check-input"></td>
                            <td id="tache">Nom de la tâche</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

