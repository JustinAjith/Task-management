<template>
    <div class="row justify-content-center pageComponent">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Change Password</h4>

                    <form v-on:submit.prevent="changePassword">
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" class="form-control border-input" placeholder="enter current password" v-model="user.current_password">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control border-input" placeholder="enter new password" v-model="user.password">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label>Re-type Password</label>
                            <input type="password" class="form-control border-input" placeholder="enter re-type password" v-model="user.password_confirmation">
                            <small class="text-danger"></small>
                        </div>
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
                    'current_password': '',
                    'password': '',
                    'password_confirmation': ''
                }
            };
        },
        mounted() {

        },
        methods: {
            changePassword() {
                console.log('password Reset');
            },
        }
    }
</script>
