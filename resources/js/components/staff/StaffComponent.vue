<template>
    <div class="pageComponent">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title float-left">Striped Table</h4>
                    <router-link to="/staff/create" class="btn btn-sm btn-success float-right">
                        <i class="mdi mdi-account-plus"></i>
                        Add Staff
                    </router-link>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="user,key in users ">
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.phone }}</td>
                                <td>{{ user.type }}</td>
                                <td>
                                    <router-link v-bind:to="'/staff/edit/' + user.id" class="mdi mdi-pencil-box action-icons mr-1 text-primary"></router-link>
                                    <i class="mdi mdi-eye action-icons mr-1 text-success" data-toggle="modal" data-target="#showStaffDeatiles" v-on:click="userDetails(user)"></i>
                                    <i class="mdi mdi-close-box-outline action-icons text-danger" v-on:click="deleteUser(key, user.id)"></i>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="showStaffDeatiles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Staff Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <small>Name</small><br>
                                <span>{{ userDeatil.name }}</span>
                            </div>
                            <div class="col-6">
                                <small>Email</small><br>
                                <span>{{ userDeatil.email }}</span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <small>Phone</small><br>
                                <span>{{ userDeatil.phone }}</span>
                            </div>
                            <div class="col-6">
                                <small>Type</small><br>
                                <span>{{ userDeatil.type }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                users: {},
                userDeatil: {
                    'name': '',
                    'email': '',
                    'type': ''
                }
            }
        },
        mounted() {
            axios.get('/api/users').then(response => {
                this.users = response.data;
            }).catch(error => {

            });
        },
        methods: {
            deleteUser(key, user) {
                if(confirm('Are you sure you want to delete this user?')) {
                    axios.delete(`/api/user-delete/${user}`).then(response => {
                        this.users.splice(key, 1);
                    }).catch(error => {});
                }
            },
            userDetails(user) {
                this.userDeatil = user;
            }
        }
    }
</script>
