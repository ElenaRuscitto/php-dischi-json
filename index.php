<?php
  include_once __DIR__ . '/partials/head.php';
?>

<body>

  <div id="app">

      <div class="container">

        <h2 class="text-center titolo mt-3">I tuoi dischi preferiti</h2>
        <div class="row row-cols-3  my-5">

        
          <div 
          v-for="(item, index) in disk"
          :key="index"
          class="col my-3">
            <div class="card my-card text-center d-flex justify-content-center align-items-center text-white " style="width: 18rem;">
              <img 
              :src="item.poster" class="card-img-top w-75" 
              :alt="item.title">
              <div class="card-body">
                <h5 class="card-title"> {{item.title}} </h5>
                <p class="card-text"> {{item.author}} </p>
                <h5 class="card-title"> {{item.year}} </h5>
                <p class="card-text text-white fw-lighter  "></small>{{item.genre}} </p>
                <!-- <p class="card-text text-white"><small class="text-body-secondary text-white"> {{item.genre}} </small></p> -->
              </div>
            </div>
          </div>

        </div>

        <h2 class="text-center titolo">Aggiungi un nuovo disco</h2>
        <div class="text-white d-flex justify-content-center m-5">
          

          <div class="d-flex flex-column mx-2">
            <label for="">Title</label>
            <input 
              v-model.trim="newDisk.title"
              placeholder="Aggiungi un titolo"
              type="text" name="">
          </div>

          <div class="d-flex flex-column mx-2">
            <label for="">Author</label>
            <input 
              v-model.trim="newDisk.author"
              placeholder="Aggiungi un autore"
              type="text" name="">
          </div>

          <div class="d-flex flex-column mx-2">
            <label for="">Year</label>
            <input 
              v-model.trim="newDisk.year"
              placeholder="Aggiungi l'anno"
              type="text" name="">
          </div>

          <div class="d-flex flex-column mx-2">
            <label for="">Genre</label>
            <input 
              v-model.trim="newDisk.genre"
              placeholder="Aggiungi il genere"
              type="text" name="">
          </div>

        </div>
        
        <div class="d-flex justify-content-center align-items-center mb-5">
          <button 
            @click.stop="addNewTask"
            type="button" 
            class="btn btn-success btn-sm">Aggiungi</button>
        </div>
      </div>

  </div>

  <script src="script.js"></script>
  
</body>

</html>