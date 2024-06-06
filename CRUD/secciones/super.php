<?php include('../templates/cabecera.php'); ?>

<div class="card" style="width: 18rem; margin-right: 10px; margin-top: 10px;" data-name="cap">
  <img class="card-img-top" src="https://i0.wp.com/imgs.hipertextual.com/wp-content/uploads/2019/05/hipertextual-avengers-endgame-futuro-capitan-america-2019781893-scaled.jpg?resize=768%2C480&quality=55&strip=all&ssl=1" alt="Card image cap">
  <div class="card-body">
    <center><h5 class="card-title">Capitan America</h5>
        <!-- <input class="btn btn-primary" type="button" onclick="VerInfo()" value="Ver información"> -->
    <a href="personajes.php" type="button" class="btn btn-primary">Ver información</a></center>
  </div>
</div>

<div class="card" style="width: 18rem;  margin-right: 10px; margin-top: 10px;"data-name="spi">
  <img class="card-img-top" src="https://img2.rtve.es/i/?w=1600&i=1442912664626.jpg" alt="Card image cap">
  <div class="card-body">
    <center><h5 class="card-title">Spiderman</h5>
    <!-- <input class="btn btn-primary" type="button" onclick="VerInfo()" value="Ver información"> -->
    <a href="personajes.php" type="button" class="btn btn-primary">Ver información</a></center>
  </div>
</div>

<div class="card" style="width: 18rem;  margin-right: 10px; margin-top: 10px;"data-name="iron">
  <img class="card-img-top" src="https://media.contentapi.ea.com/content/dam/news/www-ea/common/ea-motive-new-title-teaser-16x9.jpg.adapt.1456w.jpg" alt="Card image cap">
  <div class="card-body">
    <center><h5 class="card-title">Iron Man</h5>
    <!-- <input class="btn btn-primary" type="button" onclick="VerInfo()" value="Ver información"> -->
    <a href="personajes.php" type="button" class="btn btn-primary">Ver información</a></center>
  </div>
</div>

<script>
  
</script>
<!-- <script>
  async function VerInfo(done){
    const url = ("https://gateway.marvel.com/v1/public/characters?nameStartsWith=cap&ts=1000&apikey=9293e6d6ad05ec5ace80428c8b4c8e25&hash=f0ae2c8b87fe06ae5d75d5e7c280f164");
    fetch(url)
    .then(Response => Response.json())
    .then(data =>{
      let personaje = data.data.results[0];

      let nombre = personaje.name;
      let des = personaje.description;
      let pathImg = personaje.thumbnail.path;
      let ExtImg = personaje.thumbnail.extension;

      let URLimagen = pathImg + '.' + ExtImg;

      console.log("Nombre: "+nombre);
      let img = document.createElement('img');
      img.src = URLimagen;

      let p = document.createElement('p');
      p.textContent = "Descripción: "+ des;
      
      document.body.appendChild(img);
      document.body.appendChild(p);
    })
    .catch(error => console.error('Error: ',error));
  }
    </script>-->