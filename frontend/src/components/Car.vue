<template>
  <tr>
    <td>{{ carro.id }}</td>
    <td>{{ carro.marca }}</td>
    <td>{{ carro.modelo }}</td>
    <td>{{ carro.ano }}</td>
    <td>
      <button class="mini ui blue button">Edit</button>
      <button class="mini ui red button" @click="onDelete">Delete</button>
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
    }
  }
};
</script>

<style scoped>

</style>
