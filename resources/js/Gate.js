export default class Gate {
    constructor(user) {
        this.user = user;
    }
    isAdmin() {
        return this.user.type === 'admin';
    }
    isUser() {
        return this.user.type === 'user';
    }
    isWorker() {
        return this.user.type === 'worker';
    }
}