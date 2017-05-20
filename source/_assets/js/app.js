Vue.component('status', {
  template: '<a :class="getSystemColor" class="button is-small is-outlined is-pulled-right" href="https://status.samyerkes.com" target="_blank"><strong>{{ systemStatus.data }}</strong></a>',
  data: function () {
    return {
	    systemStatus: 'All systems are operational',
	    systemClass: 'is-success'
	 }
  },
  mounted: function() {
  	this.getSystemStatus();
  },
  computed: {
		getSystemColor: function() {
            if(this.systemStatus.data !== 'All systems are operational') {
                return this.systemClass = 'is-danger';    
            }
            return this.systemClass = 'is-success';
        }
	},
  methods: {
		getSystemStatus: function() {
            this.$http.get('https://status.samyerkes.com/api/v1/status').then((data) => {
                console.log("Retreived status from https://status.samyerkes.com/api/v1/status");
                this.systemStatus = data.body;
            }, (response) => {
                this.systemStatus = "Couldn't retrieve system status.";
            });
        }
	}
})

var app = new Vue({
  el: '#app'
})