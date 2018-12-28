<template>
    <div class="container p-2">
        <div class="col-md-12 p-0 mr-auto m-l-auto">
            <div>
                <h5 class="text-muted">Kaya > Admin > Cadastros</h5>
            </div>
            <div class="mt-4">
                <div class="p-3" style="float:left">
                    <input type="radio" id="one" value="add-from-distrito" v-model="picked">
                    <label for="one">Cadastrar Distritos</label>
                </div>

                <div class="p-3">
                    <input type="radio" id="two" value="add-from-faculs" v-model="picked">
                <label for="two">Cadastrar Universidades</label>
                </div>
            </div>
            <p v-if="errors.length">
                <b>Por favor corrija o seguinte erro(s):</b>
                <ul>
                    <li v-for="error in errors" :key="error">{{ error }}</li>
                </ul>
            </p>
            <div :class="['col-md-12 p-0 bg-white ms-shadow', picked]" >
                <div class="form-facul" style="display:none">
                    <form v-on:submit.prevent="onSubmitUniversidade" action="/founder/panel" method="post" novalidate="true" class="row m-0">
                        <div class="col-md-2 mt-3" disabled>
                            <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Pais</div>
                            <div>
                                <select name="pais" id="" class="custom-select d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;" disabled>
                                <option value="Moz">Moz</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Distrito</div>
                            <div>
                                <select v-model="distrito_id" name="distrito_id" id="" class="custom-select d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;">
                                <option :p_id="distrito.provincia_id" :value="distrito.id" v-if="distritos" v-for="distrito in distritos" :key="distrito.id">{{distrito.nome}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Universidade</div>
                            <div>
                                <input v-model="nome_facul" name="nome_facul" type="text" placeholder="Nome da Universidade" class="form-control d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;">
                            </div>
                        </div>
                        <div class="col-md-2 mt-5" disabled>
                            <button class="btn btn-primary" style="height: calc(2.75rem + 2px) !important;">Cadastrar</button>
                        </div>
                    </form>

                    <div class="card border-0 mt-5 ms-shadow p-4">
                        <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Universidades ({{universidades.length}})</div>
                        <div class="table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="max-width:60px" class="f-title">#</th>
                                        <th class="f-title">Nome</th>
                                        <th class="f-title">Sigla</th>
                                        <th class="f-title">Data de Cadastro</th>
                                        <th class="f-title">Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="universidades" v-for="universidade in universidades" :key="universidade.id">
                                        <td>{{universidades.indexOf(universidade)+1}}</td>
                                        <td>{{universidade.nome}}</td>
                                        <td>{{universidade.sigla}}</td>
                                        <td>{{universidade.updated_at}}</td>
                                        <td>
                                            <button class="btn btn-warning">Editar</button>
                                            <button v-on:click="removerFacul(universidade)" class="btn btn-danger">Remover</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Form Distritos -->
            <div :class="['col-md-12 p-0 bg-white ms-shadow', picked]">
                <div class="form-distrito" style="display:none">
                    <form v-on:submit.prevent="onSubmitDistrito" action="/founder/panel" method="post" novalidate="true" class="row m-0">
                        <div class="col-md-2 mt-3" style="display:none">
                            <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Pais</div>
                            <div>
                                <select name="pais" id="" class="custom-select d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;" disabled>
                                <option value="Moz">Moz</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Provincia</div>
                            <div>
                                <select v-model="provincia_id" name="provincia_id" id="" class="custom-select d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;">
                                    <option :value=provincia.id v-for="provincia in provincias" :key="provincia.id">{{ provincia.nome }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Distrito</div>
                            <div>
                                <input v-model="nome" name="nome" type="text" placeholder="Nome do Distrito" class="form-control d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;">
                            </div>
                        </div>
                        <div class="col-md-2 mt-5" disabled>
                            <button class="btn btn-primary" style="height: calc(2.75rem + 2px) !important;">Cadastrar</button>
                        </div>
                    </form>

                    <div class="card border-0 mt-5 ms-shadow p-4">
                        <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Distritos ({{distritos.length}})</div>
                        <div class="table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="max-width:60px" class="f-title">#</th>
                                        <th class="f-title">Província</th>
                                        <th class="_text-bc">Distrito</th>
                                        <th class="f-title">Data de Cadastro</th>
                                        <th class="f-title">Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="distritos" v-for="distrito in distritos" :key="distrito.id">
                                        <td>{{distritos.indexOf(distrito)+1}}</td>
                                        <td>{{distrito.provincia}}</td>
                                        <td>{{distrito.nome}}</td>
                                        <td>{{distrito.updated_at}}</td>
                                        <td>
                                            <button class="btn btn-warning">Editar</button>
                                            <button v-on:click="removerElemento(distrito)" class="btn btn-danger">Remover</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .container {
        margin: 70px 0 0 0;
        padding: 12px !important;
    }

    .add-from-distrito .form-distrito{
       display: block !important;
    }
    .add-from-faculs .form-facul{
        display: block !important;
    }
</style>

<style>

</style>


<script>
export default {
    created() {
          this.getProvincias(),
          this.getDistritos();
          this.getUniversidade();
        },
    data () {
        return {
        provincia_id: null,
        distrito_id:null,
        provincia:null,
        nome_facul:null,
        nome: null,
        picked: null,
        //provinvias
        provincias: [],
        provs_endpoint: '/api/kaya/data/provincias/',
        // Data Distritos
        distritos: [],
        distritosEndpoint: '/api/kaya/data/distritos/',
        // Universidades
        universidades:[],
        universidadesEndpoint: '/api/kaya/data/universidades/',
        //
        errors: [],
        id_prov: null,
        nome_distrito: null
        }
    },
    methods:{
        getProvincias() {
              axios(this.provs_endpoint)
                .then(response => {
                  this.provincias = response.data
                })
                .catch( error => {
                  console.log('-----error-------');
                  console.log(error)
                })
            },
        getDistritos(){
            axios(this.distritosEndpoint)
                .then(response=>{
                    this.distritos = response.data
                })
                .catch(error =>{
                    console.log("----- Error on Load Distrito --------");
                    console.log(error);
                })
        },
        getUniversidade(){
            axios(this.universidadesEndpoint)
                .then(response =>{
                    this.universidades = response.data
                })
                .catch(error =>{
                    console.log("------ Error on Load Universidades------")
                })
        },
        onSubmitDistrito: function (e) {
            this.errors = [];

            if (!this.provincia_id) {
                this.errors.push("Provincia required.");
            }
            if (!this.nome) {
                this.errors.push('Distrito required.');
            }
            if (!this.errors.length) {
                axios.post('/api/kaya/data/distritos', {
                        nome: this.nome,
                        id_prov: this.provincia_id
                    })
                    .then( response => this.distritos.push(response.data));
            }

            e.preventDefault();
        },
        removerElemento: function (distrito) {
            this.distritos.splice(this.distritos.indexOf(distrito), 1);
            axios.delete('/api/kaya/data/distritos/' + distrito.id, {})
        },
        onSubmitUniversidade: function(e){
            this.errors = [];

            if (!this.distrito_id) {
                this.errors.push("Distrito required.");
            }
            if (!this.nome_facul) {
                this.errors.push('Universidade required.');
            }
            if (!this.errors.length) {
                axios.post('/api/kaya/data/universidades', {
                        nome_facul: this.nome_facul,
                        provincia_id: this.prov_id,
                        distrito_id: this.distrito_id
                    })
                    .then( response => this.universidades.push(response.data));
            }
            e.preventDefault();
        },
        removerFacul: function (universidade) {
            this.universidades.splice(this.universidades.indexOf(universidade), 1);
            axios.delete('/api/kaya/data/universidades/' + universidade.id, {})
        },
    }

}
</script>
