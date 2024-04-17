const {createApp} = Vue;

createApp ({

  data () {
    return {
      apiUrl: "server.php",
      disk: []
    }
  },

  methods: {
    getApi() {
      axios.get(this.apiUrl)
        .then(result => {
          console.log(result.data);
          this.disk= result.data;
        })
    }

  },
  mounted() {
    this.getApi();
  }

}).mount ('#app')