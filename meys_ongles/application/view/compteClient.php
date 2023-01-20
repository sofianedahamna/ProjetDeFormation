<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/accueil.css">
    <script src="/assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".nav-link").mouseenter(function(e) {
                e.preventDefault();
                $("nav a").removeClass("active");
                $(this).addClass("active");

            });

        });
    </script>


<div class="container">
  <h1>Mon compte</h1>
  <div class="row">
    <div class="col-md-6">
      <h2>Mes informations personnelles</h2>
      <form>
        <div class="form-group">
          <label for="name">Nom</label>
          <input type="text" class="form-control" id="name" value="John Doe">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" value="johndoe@example.com">
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
      </form>
    </div>
    <div class="col-md-6">
      <h2>Prendre un rendez-vous</h2>
      <form>
        <div class="form-group">
          <label for="service">Service</label>
          <select class="form-control" id="service">
            <option>Manucure</option>
            <option>Pédicure</option>
            <option>Extensions de cils</option>
            <option>Autre</option>
          </select>
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" class="form-control" id="date">
        </div>
        <div class="form-group">
          <label for="time">Heure</label>
          <input type="time" class="form-control" id="time">
        </div>
        <button type="submit" class="btn btn-primary">Prendre un rendez-vous</button>
      </form>
    </div>
  </div>
</div>