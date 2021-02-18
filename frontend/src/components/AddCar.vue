<template>
  <div class="add-car">
    <form class="ui form">
      <div class="fields">
        <div class="four wide field">
          <label>Marca</label>
          <input type="text" name="marca" placeholder="Marca">
        </div>

        <div class="four wide field">
          <label>Ano</label>
          <input type="number" name="ano" placeholder="Ano">
        </div>

        <div class="two wide field">
          <button class="ui primary button submit-button">Salvar</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "AddCar"
};
</script>

<style scoped>

</style>
