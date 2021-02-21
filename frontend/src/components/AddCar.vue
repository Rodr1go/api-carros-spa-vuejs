<template>
  <div class="add-car">
    <form class="ui form">
      <div class="fields">
        <div class="four wide field">
          <label>Marca</label>
          <select v-model="selectedBrand" @change="handleChange">
            <option value="" selected disabled>-- Selecione a Marca --</option>
            <option name="marca" v-for="option in options" v-bind:value="option.value" :key="option.value">
              {{ option.text }}
            </option>
          </select>
          <br><br>
          <p><span>Marca selecionada: {{ selectedBrand  }}</span></p>
        </div>

        <div class="four wide field">
          <label>Modelo</label>
          <input 
            type="text" 
            name="modelo" 
            placeholder="Modelo"
            @change="handleChange"
            :value="form.modelo"
          />
        </div>


        <div class="four wide field">
          <label>Ano</label>
          <input 
            type="number" 
            name="ano" 
            placeholder="Ano"
            @change="handleChange"
            :value="form.ano"
          />
        </div>

        <div class="two wide field">
          <button class="ui primary button submit-button" @click="onFormSubmit">
            Salvar
          </button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "AddCar",
  data() {
    return {
      selectedBrand: '',
      options: [
        { text: 'Audi', value: 'Audi'},
        { text: 'BMW', value: 'BMW'},
        { text: 'BYD', value: 'BYD'},
        { text: 'Chevrolet', value: 'Chevrolet'},
        { text: 'Citroën', value: 'Citroën'},
        { text: 'Dodge', value: 'Dodge'},
        { text: 'Effa', value: 'Effa'},
        { text: 'Ferrari', value: 'Ferrari'},
        { text: 'Fiat', value: 'Fiat'},
        { text: 'Ford', value: 'Ford'},
        { text: 'Foton', value: 'Foton'},
        { text: 'Honda', value: 'Honda'},
        { text: 'Hyundai', value: 'Hyundai'},
        { text: 'Iveco', value: 'Iveco'},
        { text: 'JAC', value: 'JAC'},
        { text: 'Jaguar', value: 'Jaguar'},
        { text: 'Jeep', value: 'Jeep'},
        { text: 'Kia', value: 'Kia'},
        { text: 'Lamborghini', value: 'Lamborghini'},
        { text: 'Land Rover', value: 'Land Rover'},
        { text: 'Lexus', value: 'Lexus'},
        { text: 'Lifan', value: 'Lifan'},
        { text: 'Maserati', value: 'Maserati'},
        { text: 'McLaren', value: 'McLaren'},
        { text: 'Mercedes-AMG', value: 'Mercedes-AMG'},
        { text: 'Mercedes-Benz', value: 'Mercedes-Benz'},
        { text: 'Mini', value: 'Mini'},
        { text: 'Mitsubishi', value: 'Mitsubishi'},
        { text: 'Nissan', value: 'Nissan'},
        { text: 'Peugeot', value: 'Peugeot'},
        { text: 'Porsche', value: 'Porsche'},
        { text: 'RAM', value: 'RAM'},
        { text: 'Renault', value: 'Renault'},
        { text: 'Rolls-Royce', value: 'Rolls-Royce'},
        { text: 'Shineray', value: 'Shineray'},
        { text: 'SsangYong', value: 'SsangYong'},
        { text: 'Subaru', value: 'Subaru'},
        { text: 'Suzuki', value: 'Suzuki'},
        { text: 'Toyota', value: 'Toyota'},
        { text: 'Troller', value: 'Troller'},
        { text: 'Volkswagen', value: 'Volkswagen'},
        { text: 'Volvo', value: 'Volvo'},
      ]
    };
  },
  props: {
    form: {
      type: Object
    }
  },
  methods: {
    handleChange(event) {
      const { name, value } = event.target;
      let form = this.form;
      form[name] = value;
      form.marca = this.selectedBrand;
      this.form = form;
    },
    onFormSubmit(e) {
      e.preventDefault();

      // validação do formulário
      if(this.formValidation()) {
        // window.console.log("pronto para enviar");
        this.$emit("onFormSubmit", this.form);
        
        this.clearFormFields();
      }
    },
    formValidation() {
      // marca
      if(this.selectedBrand === '') {
        alert("Informe a marca");
        return false;
      }

      // modelo
      if(document.getElementsByName('modelo')[0].value === "") {
        alert("Informe a modelo");
        return false;
      }

      // marca
      if(document.getElementsByName('ano')[0].value === "") {
        alert("Informe o ano");
        return false;
      }

      return true;
    },
    clearFormFields() {
      this.selectedBrand = '';
      this.form.marca = this.selectedBrand;
      this.form.modelo = "";
      this.form.ano = "";

      document.querySelector('.form').reset();
    }
  }
};
</script>

<style scoped>

</style>
