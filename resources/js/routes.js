export const routes = [
    { path: '/dashboard', component: require('./components/DashboardComponent.vue').default },


    { path: '/task', component: require('./components/TaskComponent.vue').default },


    { path: '/staff', component: require('./components/staff/StaffComponent.vue').default },
    { path: '/staff/create', component: require('./components/staff/StaffCreateComponent.vue').default },
    { path: '/staff/edit/:id', component: require('./components/staff/StaffEditComponent.vue').default },


    { path: '/setting', component: require('./components/SettingComponent.vue').default }
];