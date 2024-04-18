const {createApp} = Vue;

createApp ({

  data () {
    return {
      apiUrl: "server.php",
      disk: [],
      newDisk: {
        title: "",
        author: "",
        year: "",
        poster: "https://m.media-amazon.com/images/I/71ActLxkq3L._AC_UL480_FMwebp_QL65_.jpg",
        genre: ""
      }
    }
  },

  methods: {
    getApi() {
      axios.get(this.apiUrl)
        .then(result => {
          console.log(result.data);
          this.disk= result.data;
        })
    },

    // aggiungo nuovo disco
    addNewTask () {
      const data = new FormData();
      data.append('newDiskTitle', this.newDisk.title);
      data.append('newDiskAuthor', this.newDisk.author);
      data.append('newDiskYear', this.newDisk.year);
      data.append('newDiskPoster', this.newDisk.poster);
      data.append('newDiskGenre', this.newDisk.genre);

      axios.post(this.apiUrl, data)
        .then(result =>{
          console.log(result.data);
          this.disk = result.data;
          // resetto i campi input all'aggiunta del nuovo disco
          this.newDisk.title = "";
          this.newDisk.author = "";
          this.newDisk.year = "";
          this.newDisk.genre = "";
      })
    },

    // rimuovo disco
    removeDisk(index) {
      const data = new FormData();
      data.append('indexToDelete' , index);

      axios.post(this.apiUrl, data)
      .then(result =>{
        console.log(result.data);
        this.disk = result.data;
      })

    }
  },
  mounted() {
    this.getApi();
  }

}).mount ('#app')