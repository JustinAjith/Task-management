<template>
    <div class="row justify-content-center pageComponent">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add a new staff</h4>
                    <form v-on:submit.prevent="addUser">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control border-input" placeholder="enter full name" v-model="user.name">
                            <small class="text-danger" v-if="errors.name">{{ errors.name[0] }}</small>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control border-input" placeholder="enter email address" v-model="user.email">
                            <small class="text-danger" v-if="errors.email">{{ errors.email[0] }}</small>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control border-input" placeholder="enter phone number" v-model="user.phone">
                            <small class="text-danger" v-if="errors.phone">{{ errors.phone[0] }}</small>
                        </div>
                        <div class="form-group">
                            <label>Staff Type</label>
                            <div class="row m-0">
                                <div class="col-xs-4">
                                    <label class="form-check-label">Admin <input type="radio" value="admin" name="type" v-model="user.type"></label>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="col-xs-4">
                                    <label class="form-check-label">User <input type="radio" value="user" name="type" v-model="user.type"></label>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="col-xs-4">
                                    <label class="form-check-label">Worker <input type="radio" value="worker" name="type" v-model="user.type"></label>
                                </div>
                            </div>
                            <small class="text-danger" v-if="errors.type">{{ errors.type[0] }}</small>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control border-input" placeholder="enter password" v-model="user.password">
                            <small class="text-danger" v-if="errors.password">{{ errors.password[0] }}</small>
                        </div>
                        <router-link to="/staff" class="btn btn-sm btn-secondary">Close</router-link>
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                user: {
                    'name': '',
                    'email': '',
                    'phone': '',
                    'type': '',
                    'password': ''
                },
                errors: {}
            }
        },
        methods: {
            addUser() {
                axios.post('/api/user-store', this.user).then(response => {
                    window.location.href = '/staff';
                }).catch(error => {
                    this.errors = error.response.data.errors;
                });
            },
        }
    }
</script>
