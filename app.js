const { createApp } = Vue;

createApp({
  data() {
    return {
      musica: [],
    };
  },

  methods: {
    fetchData() {
      axios
        .get("http://localhost/php-dischi-json/server.php")
        .then((res) => {
          this.musica = res.data.results; // Assegna direttamente l'array di risultati a this.musica
          console.log(this.musica);
        })
        .catch((error) => {
          console.error("Error fetching data:", error);
        });
    },
  },
  mounted() {
    this.fetchData();
  },
}).mount("#app");
