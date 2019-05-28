<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>List of Employee</h4>
                    </div>

                    <div class="card-body">
                       <table class="table table-striped">
                           <tr>
                               <th>First Name</th>
                               <th>Last Name</th>
                               <th>Address</th>
                               <th colspan="2">Actions</th>
                           </tr>
                           <tbody>
                           <tr v-for="item,key in lists">
                               <td>{{ item.firstname }}</td>
                               <td>{{ item.lastname }}</td>
                               <td>{{ item.address }}</td>
                               <td>
                                   <a href="#" class="btn btn-secondary btn-danger" @click="delemployee(key, item.id)">Delete</a>
                                   <a href="#" class="btn btn-secondary btn-info" @click="updateemployee(key)">Update</a>
                               </td>

                           </tr>
                           </tbody>
                       </table>
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
                lists: {},
                errors: {}
            }
        },

        methods: {
            loadEmployees() {
                axios.post('/getAll')
                    .then((response) => (this.lists = response.data))
                    .catch((error) => this.errors=error.response.data.errors)
            },

            delemployee(key, id) {
                console.log(`${key} ${id}`)
                axios.delete(`/employee/${id}`)
                    .then((response) => this.lists.splice(key,1))
                    .catch((error) => this.errors=error.response.data.errors)
            },

            updateemployee(key) {
                this.$children[1].list = this.lists[key]
            }
        },

        created() {
           this.loadEmployees();
        }
    }
</script>