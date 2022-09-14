var app = new Vue({
    el: '#app',
    data: {
      message: 'Hello Vue!'
    },
    created() {
        console.log('Vue inizializzato!');

        axios.get('http://localhost/404-live-coding/api/')
        .then(response => {
            this.message = response.data.response;
        })
    }
  })
