<!DOCTYPE html>
<html>


  <head>
    <meta charset="utf-8">
    <title>Exercice MySQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  </head>


  <body>
    <?php
      include 'connection.php';

      include 'table.php';
    ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Fenêtre temporaire.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form class="form-container" style="width:100%;">
                <div class="form-title"><h2>Ajouter un contact</h2></div>
                <div class="form-title">Nom</div>
                <input class="form-field" type="text" name="Nom" /><br />
                <div class="form-title">Anniversaire</div>
                <input class="form-field" type="date" name="Anniversaire" /><br />
                <div class="form-title">Telephone</div>
                <input class="form-field" type="text" name="Telephone" /><br />
                <div class="form-title">Mail</div>
                <input class="form-field" type="text" name="Mail" /><br />
                <div class="submit-container">
                  <input class="submit-button" type="submit" value="Submit" />
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>




  </body>


</html>
