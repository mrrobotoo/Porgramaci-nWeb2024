
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

<main  class="card-container">

    <div class="card" style="width: 18rem;" data-name="cap">
        <img class="card-img-top" src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2014/11/406746-cine-superheroes-critica-capitan-america-primer-vengador.jpg?tf=2048x" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Capitan America</h5>
            <a href="#" class="btn btn-primary" onclick="redirectToInfo(this)">Ir a la info</a>
        </div>
    </div>


    <div class="card" style="width: 18rem;" data-name="spi">
        <img class="card-img-top" src="https://cdn.unotv.com/images/2023/07/spider-man-155456.jpg" >
        <div class="card-body">
            <h5 class="card-title">Spider Man</h5>
            <a href="#" class="btn btn-primary" onclick="redirectToInfo(this)">Ir a la info</a>
        </div>
    </div>

  
</main>


<script>
    function redirectToInfo(element) {
        const card = element.closest('.card');
        const name = card.getAttribute('data-name');
        window.location.href = `infoSuper.php?name=${encodeURIComponent(name)}`;
    }
</script>
<?php include('../templates/pie.php'); ?>

