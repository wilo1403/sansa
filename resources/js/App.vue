<template>
    <main>
        <div class="container">
            <div class="col-md-12">
                <h2>Sansa Advertising test laravel</h2>
                <br><br>
                <div class="form-group">
                     <h4>Seleccione el usuario:</h4>
                    <select v-model="userSeleccionado" class="form-control" id="user" @change="onChange">
                        <option v-for="user in users" :value="user">{{user.name}}</option>
                    </select> 
                </div>
            </div>
            <br><br>
            <h4>TODO:</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Done</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="todos" v-for="todo in todos">
                        <td>{{todo.description}}</td>
                        <td>{{todo.done}}</td>
                    </tr>
                </tbody>
            </table>      
        </div>
    </main>    
</template>
<script>
export default {
    components: {},
    data: () => ({
        userSeleccionado: {},
        users: [],
        todos:{},
    }),
    methods: {
        getUsers() { 
            axios.get("/api/todo/users/").then(response => {
                this.users = response.data;
            });
        },
        onChange(){
            axios.get("/api/todo/show/"+this.userSeleccionado.id).then(response => {
                this.todos = response.data; 
            });
        }
    },
    created() {
        this.getUsers();
    }
};
</script>