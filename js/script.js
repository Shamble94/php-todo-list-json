const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: "server.php",
            todoList : [],
            todoItem: ""
        }
    },
    mounted() {
        this.getTodoList();
    },
    methods:{
        addTask(){
            const data = {
                addtask: this.todoItem
            }
            axios.post(this.apiUrl, data,{
                headers: { "Content-type": "multipart/form-data"}
            }).then((response) => {
                this.todoItem = "";
                this.todoList = response.data
                
            })
        },
        getTodoList(){
            axios.get(this.apiUrl).then((response) => {
                console.log(response.data)
                this.todoList = response.data
            });
        } 

    }
}).mount("#app")