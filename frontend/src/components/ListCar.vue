<template>
  <div class="list-car">
    <div class="data">
      <table class="ui celled table">
        <thead>
          <tr>
            <th style="width: 50px; text-align: center;">#</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th style="width: 148px;">Ação</th>
          </tr>
        </thead>

        <tbody>
          <Car 
            v-for="carro in carros"
            :key="carro.id"
            :carro="carro"
            @onDelete="onDelete"
          />
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import Car from "./Car";
export default {
  name: "ListCar",
  components: {
    Car
  },
  props: {
    carros: {
      type: Array
    }
  },
  methods: {
    onDelete(id) {
      // window.console.log("Deleta carro" + id);
      this.$emit("onDelete", id);
    }
  }
};
</script>

<style scoped>

</style>
