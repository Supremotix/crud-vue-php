<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- fontAwesome -->
    <script src="https://kit.fontawesome.com/484f571a9e.js" crossorigin="anonymous"></script>
    <!-- Sweet Alert 2  -->
    <link rel="stylesheet" href="js/plugins/sweetalert2/sweetalert2.min.css">
    <!-- css -->
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h2 class="text-center text-dark"> <span class="badge badge-success"> CRUD con VUE.js</span> </h2>
    </header>
    ´
    <div id="appMoviles">
        <div class="container">
            <div class="row">
                <div class="col">
                    <button @click="btnAlta" class="btn btn-success" title="Nuevo"><i class="fas fa-plus-circle fa-2x "></i></button>
                </div>
                <div class="col text-right">
                    <h5>Stock Total: <span class="badge badge-success">{{totalStock}}</span></h5>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Stock</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(movil,indice) of moviles">
                                <td>{{movil.id}}</td>
                                <td>{{movil.marca}}</td>
                                <td>{{movil.modelo}}</td>
                                <td>
                                    <div class="col-md-8">
                                        <input type="number" v-model.number="movil.stock" class="form-control text-right" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-secondary" title="Editar" @click="btnEditar(movil.id,movil.marca,movil.modelo,movil.stock)">
                                            <i class="fas fa-pencil-alt"></i></button>
                                        <button class="btn btn-warning" title="Eliminar" @click="btnBorrar(movil.id)"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- jquery -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- vue js  -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- axios  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js"></script>
    <!-- Sweet Alert -->
    <script src="js/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- js -->
    <script src="js/main.js"></script>

</body>

</html>