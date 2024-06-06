<?php include('../templates/cabecera.php'); ?>

<style>
.card-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(18rem, 1fr));
    gap: 1rem;
    padding: 1rem;
}

.card {
    border: 1px solid #ddd;
    border-radius: 0.5rem;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
}

.card:hover {
    transform: scale(1.05);
}

.card-img-top {
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
}

.card-body {
    padding: 1rem;
    text-align: center;
}

.card-title {
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
}

.card-text {
    font-size: 1rem;
    color: #555;
}

.btn-primary {
    margin-top: 1rem;
}
</style>

<main id="infoCapitanAmerica" class="card-container">
</main>
<?php include('../templates/pie.php'); ?>

<script>
    async function getInfo(){

        const urlParams = new URLSearchParams(window.location.search);
        const name = urlParams.get('name');
        if(name){
            const results = await fetch(`https://gateway.marvel.com/v1/public/characters?nameStartsWith=${encodeURIComponent(name)}&ts=1000&apikey=9293e6d6ad05ec5ace80428c8b4c8e25&hash=f0ae2c8b87fe06ae5d75d5e7c280f164`);
            const data = await results.json();
                
            data.data.results.forEach(personaje => {
                let pathImag = personaje.thumbnail.path.concat(".", personaje.thumbnail.extension);
                const article = document.createRange().createContextualFragment(`
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="${pathImag}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">${personaje.name}</h5>
                            <p class="card-text">${personaje.description}</p>
                        </div>
                    </div>
                `);

                const main = document.querySelector("main#infoCapitanAmerica");
                main.append(article);
            });
        }else{
            const main = document.querySelector("main#infoCapitanAmerica");
            main.innerHTML = '<p>No se proporcionó un nombre válido.</p>';
        }
        
    }


    document.addEventListener("DOMContentLoaded", getInfo);
</script>
