const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: './server.php',
      albums: [],
    };
  },

  mounted() {

    this.getAlbums();
  },

  methods: {
    getAlbums() {
      axios.get(this.apiUrl)
        .then(response => {
        
          this.albums = response.data;
        })
       
    },
  },
}).mount('#app');
