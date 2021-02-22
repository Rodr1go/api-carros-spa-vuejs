<template>
  <tr>
    <td>{{ carro.id }}</td>
    <td>{{ carro.marca }}</td>
    <td>{{ carro.modelo }}</td>
    <td>{{ carro.ano }}</td>
    <td>
      <button class="mini ui blue button" @click="onEdit">Editar</button>
      <button class="mini ui red button" @click="onDelete">Deletar</button>
    </td>
  </tr>
</template>

<script>
export default {
  name: "Car",
  props: {
    carro: {
      type: Object
    }
  },
  methods: {
    onDelete() {
      // window.console.log("customer list delete " + this.carro.id);
      this.$emit("onDelete", this.carro.id);
    },
    onEdit() {
      // window.console.log("car list edit " + this.carro.id);
      this.$emit("onEdit", this.carro);
    }
  }
};
</script>

<style scoped>

</style>
