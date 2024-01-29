<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>La mia To-do List!</h1>
                </div>
                <div class="col-12">
                    <h4>Mansioni da svolgere:</h4>
                    <li class="list-unstyled my-2" v-for="tasks, index in todoList" :key="index"> {{ tasks.todo }}</li>
                </div>
                <div class="col-12">
                    <input type="text" v-model="todoItem" @keyup.inter="addTask" class="form-control" placeholder="Inserisci nuova task">
                    <button class="btn btn-primary" @click="addTask" type="button" > Aggiungi </button>
                </div>
            </div>
        </div>

    </div>
    <script src="./js/script.js" type="text/javascript" ></script>
</body>
</html>