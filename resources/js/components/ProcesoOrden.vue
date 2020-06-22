<script>
export default {
  props: {
    pid_orden_rodillo: 0,
    pid_orden_metal: 0
  },
  data() {
    return {
      id: "",
      nombre: "", //Esta variable, mediante v-model esta relacionada con el input del formulario
      descripcion: "", //Esta variable, mediante v-model esta relacionada con el input del formulario
      estatus: "TRABAJANDO",
      operador: "",
      piezas_terminadas: "",
      id_orden_metal: this.pid_orden_metal,
      id_orden_rodillo: this.pid_orden_rodillo,
      update: 0 /*Esta variable contrarolará cuando es una nueva tarea o una modificación, si es 0 significará que no hemos seleccionado
                          ninguna tarea, pero si es diferente de 0 entonces tendrá el id de la tarea y no mostrará el boton guardar sino el modificar*/,
      arrayData: [], //Este array contendrá las tareas de nuestra bd
    };
  },
  methods: {
    getData() {
      let me = this;
      let url = "";
      if (this.pid_orden_rodillo > 0) {
        url =
          "/app_produccion/public/api/getByIdOrdenRodillo/" +
          this.pid_orden_rodillo;
      }
      if (this.pid_orden_metal > 0) {
        url =
          "/app_produccion/public/api/getByIdOrdenMetal/" +
          this.pid_orden_metal;
        console.log(url);
      }
      //let url = "/app_produccion/public/api/getByIdOrdenRodillo/"+this.pid_orden_rodillo; //Ruta que hemos creado para que nos devuelva todas las tareas
      axios
        .get(url)
        .then(function(response) {
          console.log(response);
          //creamos un array y guardamos el contenido que nos devuelve el response
          me.arrayData = response.data;
        })
        .catch(function(error) {
          // handle error
          console.log(error);
        });
    },
    saveData() {
      let me = this;
      let url = "/app_produccion/public/api/procesos_ordenes"; //Ruta que hemos creado para enviar una tarea y guardarla
      axios
        .post(url, {
          //estas variables son las que enviaremos para que crear la tarea
          nombre: this.nombre,
          descripcion: this.descripcion,
          estatus: this.estatus,
          operador: this.operador,
          piezas_terminadas: this.piezas_terminadas,
          id_orden_metal: this.id_orden_metal,
          id_orden_rodillo: this.id_orden_rodillo
        })
        .then(function(response) {
          console.log(response.data);
          me.getData(); //llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
          me.clearFields(); //Limpiamos los campos e inicializamos la variable update a 0
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    updateData() {
      /*Esta funcion, es igual que la anterior, solo que tambien envia la variable update que contiene el id de la
                tarea que queremos modificar*/
      let me = this;
      let url = "/app_produccion/public/api/procesos_ordenes/" + this.update; //Ruta que hemos creado para enviar una tarea y guardarla
      axios
        .post(url, {
          id: this.update,
          nombre: this.nombre,
          descripcion: this.descripcion,
          estatus: this.estatus,
          operador: this.operador,
          piezas_terminadas: this.piezas_terminadas,
          id_orden_metal: this.id_orden_metal,
          id_orden_rodillo: this.id_orden_rodillo,
          _method: "patch"
        })
        .then(function(response) {
          console.log(response.data);
          me.getData(); //llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
          me.clearFields(); //Limpiamos los campos e inicializamos la variable update a 0
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    loadFieldsUpdate(data) {
      //Esta función rellena los campos y la variable update, con la tarea que queremos modificar
      this.update = data.id;
      let me = this;
      let url = "/app_produccion/public/api/procesos_ordenes/" + data.id;
      axios
        .get(url)
        .then(function(response) {
          console.log(response.data);
          me.id = response.data.id;
          me.nombre = response.data.nombre;
          me.descripcion = response.data.descripcion;
          me.estatus = response.data.estatus;
          me.operador = response.data.operador;
          me.piezas_terminadas = response.data.piezas_terminadas;
          me.id_orden_metal = response.data.id_orden_metal;
          me.id_orden_rodillo = response.data.id_orden_rodillo;
        })
        .catch(function(error) {
          // handle error
          console.log(error);
        });
    },
    deleteData(data) {
      //Esta nos abrirá un alert de javascript y si aceptamos borrará la tarea que hemos elegido
      let me = this;
      let id = data.id;
      if (confirm("¿Seguro que deseas borrar esta tarea?")) {
        axios
          .delete("/app_produccion/public/api/procesos_ordenes/destroy", {
            params: { id: id }
          })
          .then(function(response) {
            me.getData();
          })
          .catch(function(error) {
            console.log(error);
          });
      }
    },
    clearFields() {
      /*Limpia los campos e inicializa la variable update a 0*/
      this.id = "";
      this.nombre = "";
      this.descripcion = "";
      this.estatus = "";
      this.operador = "";
      this.piezas_terminadas = "";

      this.update = 0;
    },
       onlyNumber ($event) {
     // console.log($event.keyCode); //keyCodes value
     let keyCode = ($event.keyCode ? $event.keyCode : $event.which);

     // only allow number and one dot
     if ((keyCode < 48 || keyCode > 57) ) { // 46 is dot
      $event.preventDefault();
     }


   }
  },
  mounted() {
    //  console.log('asdasasdds');
    console.log(this.pid_orden_metal);

    this.getData();
  }
};
</script>

<template>
  <div class="container container-task">
    <div class="col-md-12">
      <input type="hidden" v-model="id_orden_metal" />
      <input type="hidden" v-model="id_orden_rodillo" />
      <div class="row col">
        <div class="form-group col-1">
          <label>Cod</label>
          <input v-model="id" type="text" class="form-control" disabled />
        </div>
        <div class="form-group col-4">
          <label>Nombre</label>
          <input v-model="nombre" type="text" class="form-control" />
        </div>
        <div class="form-group col-2">
          <label>Estatus</label>
          <select class="form-control" v-model="estatus" required>
            <option value="TRABAJANDO">TRABAJANDO</option>
            <option value="TERMINADO">TERMINADO</option>
          </select>
        </div>
        <div class="form-group col-2">
          <label>Piezas Terminadas</label>
          <input @keypress="onlyNumber" v-model="piezas_terminadas" type="number" class="form-control" />
        </div>
        <div class="form-group col-3">
          <label>Operador</label>
          <input v-model="operador" type="text" class="form-control" />
        </div>
      </div>
      <div class="form-group col-md-12">
        <!-- Formulario para la creación o modificación de nuestras tareas-->
        <label>Descripción</label>
        <input v-model="descripcion" type="text" class="form-control" />
      </div>

      <div class="container-buttons">
        <!-- Botón que añade los datos del formulario, solo se muestra si la variable update es igual a 0-->
        <button v-if="update == 0" @click="saveData()" class="btn btn-success">Agregar</button>
        <!-- Botón que modifica la tarea que anteriormente hemos seleccionado, solo se muestra si la variable update es diferente a 0-->
        <button v-if="update != 0" @click="updateData()" class="btn btn-success">Actualizar</button>
        <!-- Botón que limpia el formulario y inicializa la variable a 0, solo se muestra si la variable update es diferente a 0-->
        <button v-if="update != 0" @click="clearFields()" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
    <br />
    <table id class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Cod</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Estatus</th>
          <th>Operador</th>
          <th>Piezas Terminadas</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="data in arrayData" :key="data.id">
          <!--Recorremos el array y cargamos nuestra tabla-->
          <td v-text="data.id"></td>
          <td v-text="data.nombre"></td>
          <td v-text="data.descripcion"></td>
          <td v-text="data.estatus"></td>
          <td v-text="data.operador"></td>
          <td v-text="data.piezas_terminadas"></td>
          <td>
            <!--Botón modificar, que carga los datos del formulario con la tarea seleccionada-->
            <button class="btn" @click="loadFieldsUpdate(data)">
              <i class="fa fa-pen icono-editar"></i>
            </button>
            <!--Botón que borra la tarea que seleccionemos-->
            <button class="btn" @click="deleteData(data)">
              <i class="fa fa-trash"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>