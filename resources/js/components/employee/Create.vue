<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Create New Employee</h4>
                    </div>

                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" id="firstname" v-model="list.firstname" v-validate="'required'" class="form-control">
                                <span class="error" v-if="errors.has('firstname')">{{errors.first('firstname')}}</span>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" id="lastname" v-model="list.lastname" v-validate="'required'" class="form-control">
                                <span class="error" v-if="errors.has('lastname')">{{errors.first('lastname')}}</span>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" id="address" v-model="list.address" v-validate="'required'" class="form-control">
                                <span class="error" v-if="errors.has('address')">{{errors.first('address')}}</span>
                            </div>
                            <button type="button" class="btn btn-primary" @click="saveEmployee()">Create</button>
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
             list: {
                 firstname: '',
                 lastname: '',
                 address: ''
             },
             error: null
         }
        },

        methods: {
            saveEmployee() {
                this.$validator.validateAll()

                axios.post('/employee',this.$data.list).then((response)=> {
                    this.$router.push('/home')
                })
                    .catch((error) => console.log(error))
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
