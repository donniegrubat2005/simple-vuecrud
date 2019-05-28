<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Employee</h4>
                    </div>

                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" id="firstname" v-model="list.firstname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" id="lastname" v-model="list.lastname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" id="address" v-model="list.address" class="form-control">
                            </div>
                            <button type="button" class="btn btn-primary" @click="updateEmployee">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {

         return {
             list: {},
             errors: {}
         }
        },

        methods: {
            updateEmployee() {
                let uri = '/employee/' + this.$route.params.id;
                axios.patch(uri, this.list)
                    .then((response) => {
                        this.list = response.data;
                        this.$router.push({name: 'home'});
                    })
                    .catch((error) => this.errors = error.response.data.errors)
            }
        },
        created() {
            let uri = '/employee/'+this.$route.params.id+'/edit';
            axios.get(uri)
                .then((response) => {
                    this.list = response.data;
                })
                .catch((error) => this.errors=error.response.data.errors)
        },
    }
</script>