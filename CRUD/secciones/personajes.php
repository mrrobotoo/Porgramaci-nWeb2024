<?php include('../templates/cabecera.php'); ?>

<!--<div class="card" style="width: 18rem; margin-right: 15px; margin-top: 10px;">
  <img class="card-img-top;" src="" alt="Imagen del personaje">
  <div class="card-body">
    <center><h5 class="card-title"></h5></center>
    <p class="card-text"></p>
  </div>
</div>-->

<script>
    async function VerInfo(){
    let URLPAR = new URLSearchParams(window.location.search);
    const name = URLPAR.get('name');

    if (name){
      const result = await fetch(`https://gateway.marvel.com/v1/public/characters?nameStartsWith=${name}&ts=1000&apikey=9293e6d6ad05ec5ace80428c8b4c8e25&hash=f0ae2c8b87fe06ae5d75d5e7c280f164`);
      const data = result.json();
        data.data.result.array.forEach(Personaje => {

          let pathImg = 
      
      });
    }else{
      console.warn("No se proporcionó el nombre del personaje");
    }

  }
</script>


<!-- 
        let personaje = data.data.results[0];

      let nombre = personaje.name;
      let descripcion = personaje.description;
      let pathImg = personaje.thumbnail.path;
      let ExtImg = personaje.thumbnail.extension;
      const URLimagen = `${pathImg}.${ExtImg}`;

      document.getElementById("nombre").textContent = nombre;
      document.getElementById("descripcion").textContent = descripcion;
      document.getElementById("imagen").src = URLimagen;
-->