<?php
  include_once __DIR__ . '/partials/head.php';
?>

<body>

  <div id="app">

      <div class="container">
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
      </div>

  </div>

  <script src="script.js"></script>
  
</body>

</html>