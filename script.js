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
        poster: "https://m.media-amazon.com/images/I/61WnkDvkqUL._AC_SL1048_.jpg",
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

    addNewTask () {
      const data = new FormData();
      data.append('newDiskTitle', this.newDisk.title);
      data.append('newDiskAuthor', this.newDisk.author);
      data.append('newDiskYear', this.newDisk.year);
      data.append('newDiskGenre', this.newDisk.genre);

      axios.post(this.apiUrl, data)
        then(result =>{
          console.log(result.data);
      })
    }

  },
  mounted() {
    this.getApi();
  }

}).mount ('#app')