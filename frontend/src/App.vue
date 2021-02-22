<template>
  <div id="app">
    <div class="ui fixed inverted menu vue-color">
      <div class="ui container">
        <a href="#" class="header item">Carros</a>
      </div>
    </div>

    <div class="ui main container">
      <AddCar :form="form" @onFormSubmit="onFormSubmit" />
      <Loader v-if="loader" />
      <ListCar :carros="carros" 
        @onDelete="onDelete"
        @onEdit="onEdit"
      />
    </div>
  </div>
</template>

<script>
import axios from "axios";
import AddCar from "./components/AddCar";
import ListCar from "./components/ListCar";
import Loader from "./components/Loader";

export default {
  name: 'App',
  components: {
    AddCar,
    ListCar,
    Loader
  },
  data() {
    return {
      url: "http://0.0.0.0:8000/api/v1/carros",
      carros: [],
      form: { marca: "", modelo: "", ano: "", isEdit: false },
      loader: false
    };
  },
  methods: {
    getCars() {
      this.loader = true;
      axios.get(this.url).then(data => {
        this.carros = data.data.data;

        this.loader = false;
      });
    },
    deleteCar(id) {
      this.loader = true;

      axios
        .delete(`${this.url}/${id}`)
        .then(() => {
          this.getCars();
        })
        .catch(e => {
          alert(e);
        });
    },
    onDelete(id) {
      // window.console.log("app delete " +id);
      this.deleteCar(id);
    },
    onEdit(data) {
      // window.console.log("app edit ", data);
      this.form = data;
      this.form.isEdit = true;
    },
    createCar(data) {
      this.loader = true;

      axios.post(this.url, {
        marca: data.marca,
        modelo: data.modelo,
        ano: data.ano
      }).then(() => {
        this.getCars();
      }).catch(e => {
        alert(e);
      });
    },
    editCar(data) {
      this.loader = true;

      axios.put(`${this.url}/${data.id}`, {
        marca: data.marca,
        modelo: data.modelo,
        ano: data.ano
      })
      .then(() => {
        this.getCars();
      })
      .catch(e => {
        alert(e);
      });
    },
    onFormSubmit(data) {
      // window.console.log("onFormSubmit", data);
      if(data.isEdit) {
        this.editCar(data);
      } else {
        this.createCar(data);
      }
    }
  },
  created() {
    this.getCars();
  }
};
</script>

<style>
  .vue-color {
    background: #41b883 !important;
  }

  .main.container {
    margin-top: 60px;
  }

  .submit-button {
    margin-top: 24px !important;
    float: right;
  }

  .ui.inverted.dimmer {
    background-color: rgba(255, 255, 255, 0) !important;
  }

  .data {
    margin-top: 15px;
  }

  thead tr th {
    background: #e0e0e0 !important;
  }
</style>
