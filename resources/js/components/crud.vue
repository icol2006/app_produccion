<script>
    export default {
        data(){
            return{
                nombre:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                descripcion:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                update:0, /*Esta variable contrarolará cuando es una nueva tarea o una modificación, si es 0 significará que no hemos seleccionado
                          ninguna tarea, pero si es diferente de 0 entonces tendrá el id de la tarea y no mostrará el boton guardar sino el modificar*/
                arrayData:[], //Este array contendrá las tareas de nuestra bd
            }
        },
        methods:{
            getData(){                
                let me =this;
                
                let url = '/app_produccion/public/api/materiales' //Ruta que hemos creado para que nos devuelva todas las tareas
                axios.get(url).then(function (response) {
                       console.log(response);
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.arrayData = response.data;
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                    console.log("Adsasd");
                });
            },
            saveData(){
                let me =this;
                let url = '/app_produccion/public/api/materiales' //Ruta que hemos creado para enviar una tarea y guardarla
                axios.post(url,{ //estas variables son las que enviaremos para que crear la tarea
                    'nombre':this.nombre,
                    'descripcion':this.descripcion,
                }).then(function (response) {
                    console.log(response.data);
                    me.getData();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                    me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                })
                .catch(function (error) {
                    console.log(error);
                });   
                
            },
            updateData(){/*Esta funcion, es igual que la anterior, solo que tambien envia la variable update que contiene el id de la
                tarea que queremos modificar*/
                let me = this;
                let url = '/app_produccion/public/api/materiales/'+this.update //Ruta que hemos creado para enviar una tarea y guardarla
                axios.post(url,{
                    'id':this.update,
                    'nombre':this.nombre,
                    'descripcion':this.descripcion,
                    _method: 'patch' 
                }).then(function (response) {
                    console.log(response.data);
                   me.getData();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                   me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                })
                .catch(function (error) {
     
                    console.log(error);
                });
            },
            loadFieldsUpdate(data){ //Esta función rellena los campos y la variable update, con la tarea que queremos modificar
                this.update = data.id
                let me =this;
                let url = '/app_produccion/public/api/materiales/'+data.id;
                axios.get(url).then(function (response) {
                         console.log(response.data);
                    me.nombre= response.data.nombre;
                    me.descripcion= response.data.descripcion;
                
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                }); 
            },
            deleteData(data){//Esta nos abrirá un alert de javascript y si aceptamos borrará la tarea que hemos elegido
                let me =this;
                let id = data.id
                if (confirm('¿Seguro que deseas borrar esta tarea?')) {
                    axios.delete('/app_produccion/public/api/materiales/destroy', {params: {'id': id}}
                    ).then(function (response) {
                        me.getData();
                    })
                    .catch(function (error) {
                        console.log(error);
                    }); 
                }
            },
            clearFields(){/*Limpia los campos e inicializa la variable update a 0*/
                this.nombre = "";
                this.descripcion = "";
                this.update = 0;
            }
        },
        mounted() {
           this.getData();
        }
    }
</script>

<template>
    <div class="container container-task">
        <div class="row">
            <div class="col-md-6">
                <h2>Lista de tareas</h2>
                <table class="table text-center"><!--Creamos una tabla que mostrará todas las tareas-->
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="data in arrayData" :key="data.id"> <!--Recorremos el array y cargamos nuestra tabla-->
                                <td v-text="data.nombre"></td>
                                <td v-text="data.descripcion"></td>
                                <td>
                                    <!--Botón modificar, que carga los datos del formulario con la tarea seleccionada-->
                                    <button class="btn" @click="loadFieldsUpdate(data)">Modificar</button>
                                    <!--Botón que borra la tarea que seleccionemos-->
                                    <button class="btn" @click="deleteData(data)">Borrar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div class="col-md-6">
                <div class="form-group"><!-- Formulario para la creación o modificación de nuestras tareas-->
                    <label>Nombre</label>
                    <input v-model="nombre" type="text" class="form-control">

                    <label>Descripción</label>
                    <input v-model="descripcion" type="text" class="form-control">

                </div>
                <div class="container-buttons">
                    <!-- Botón que añade los datos del formulario, solo se muestra si la variable update es igual a 0-->
                    <button v-if="update == 0" @click="saveData()" class="btn btn-success">Añadir</button>
                    <!-- Botón que modifica la tarea que anteriormente hemos seleccionado, solo se muestra si la variable update es diferente a 0-->
                    <button v-if="update != 0" @click="updateData()" class="btn btn-warning">Actualizar</button>
                    <!-- Botón que limpia el formulario y inicializa la variable a 0, solo se muestra si la variable update es diferente a 0-->
                    <button v-if="update != 0" @click="clearFields()" class="btn">Atrás</button>
                </div>
            </div>
        </div>
    </div>
</template>