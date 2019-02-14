<template>
    <div class="main_container" style="margin-top: 0px">
      <div class="row m-row m-0">
        <div class="col-md-4 pt-4 pb-4 bg-white no-float" style="max-width: 360px;">

          <div class="p-3" style="text-align: justify">
            <div class="mb-3">
              <h4 class="_text-bc" style="font-weight: 400">Ola Edilson Mucanze!</h4>
            </div>


          </div>
          <div class="card-step p-3 rounded" style=" background: #e7f5ff; color:rgb(11, 48, 82)">
            <div><strong>Passo 1</strong></div>
            <p class="stype_content mb-0">Informacao basica do apartamento... Nome do apartamento, nota introdutoria e etc..</p>
          </div>

          <footer class="pt-3 pt-md-3 mt-3 border-top" style=" bottom: 0; position: absolute; right: 15px; left: 15px; ">
            <div class="row mr-3">
              <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">© 2018 - Todos direitos reservados a Scriptech
                  <br>
                  <br>
                  <b>Fundadores</b>
                  <br>
                  <a class="text-muted" href="#edilson">Edilson Mucanze </a>&
                  <a class="text-muted" href="#edson">Edson Sigauque</a>
                </small>
              </div>
            </div>
          </footer>
        </div>
        <div class="col-md-8 pt-4 pb-4 no-float">
          <div class="row p-l-12 p-r-12">
            <!-- Multi step form -->
            <div class="col-md-12 m-auto">
              <form v-on:submit.prevent="onSubmitKaya" action="#" >
                <div v-if="step1" class="row m-0 step-1 fade show">
                  <div class="m-4 col-md-6 p-3" style="max-width: 500px;">
                    <h4 class="_text-bc">Onde o seu apartamento esta localizado?</h4>
                      <p class="text-muted"> Para começar vamos indicar onde o seu apartamento esta localizado..</p>
                    <div class="_from">
                      <div>
                        <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Pais</div>
                          <div>
                            <select name="pais" id="" class="custom-select d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;">
                              <option value="Moçambique">Moçambique</option>
                            </select>
                          </div>
                      </div>
                      <div class="row m-0 pt-3">
                        <div class="col-6 pl-0">
                          <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Provincia</div>
                          <div>
                            <select v-model="provincia" name="prov" id="" class="custom-select d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;"  >
                              <option :value="null">Províncias...</option>
                              <option :value="provincia.nome" v-for="provincia in provincias" :key="provincia.id">{{ provincia.nome }}</option>
                            </select>
                          </div>

                        </div>
                        <div class="col-6 pl-0 pr-0">
                          <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Distrito</div>
                          <select  v-model="distrito" name="distrito_id" id="" class="custom-select d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;">
                            <option v-if="!provincia" :value="null">Selecione a Província ...</option>
                            <option v-if="provincia" :value="null">Distritos ({{filterDistritos.length}}) ...</option>
                            <option v-if="provincia" :p_id="distrito.provincia_id" :value="distrito.nome" v-for="distrito in filterDistritos" :key="distrito.id">{{distrito.nome}}</option>
                          </select>
                        </div>
                      </div>
                      <div class="m-0">
                        <div class="col-12 mt-4 p-0">
                          <div class="f-title text-muted mb-2" style="font-weight:500; text-transform:upercase">Selecione as universidades próximas</div>
                          <p class="text-muted"> Ao indicar as universidades próximas do seu apartamento você ajuda o usuário a encontra-lo com maior facilidade.</p>
                          <div class="ms-shadow p-2 bg-white rounded" style="min-height:230px;">

                              <div class="row m-0" v-if="provincia" v-for="universidade in filterUniversidades" :key="universidade.id" >
                                <div v-if="distrito" class="custom-control custom-radio sel-l-opt" >
                                  <input class="custom-control-input" type="checkbox" :id="universidade.id" :value="universidade.id">
                                  <label class="custom-control-label my-custom-label" :for="universidade.id">{{universidade.nome}}</label>
                                </div>
                              </div>
                          </div>
                        </div>

                        <div class="col-12 mt-4 p-0">
                          <div class="float-md-right"><div class="btn btn-primary" v-on:click="toStep(2)">Continuar</div></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div v-if="step2" class="step-2 fade show">
                  <div class="m-4 col-md-6 p-3" style="max-width: 500px;">
                    <h4 class="_text-bc">Tipo de apartamento</h4>
                    <p class="text-muted">Indique o tipo de casa na qual os estudantes serão hospedes.</p>
                    <div class="mt-4 border-top selection_from">
                      <div class="sl-op m-2 mb-3 p-1 custom-control custom-radio">
                        <input type="radio"  class="custom-control-input" name="hostType" id="typeRoom1" value="repo" v-model="hostType">
                        <label class="f-title custom-control-label" for="typeRoom1">República</label>
                        <div class="sb-c-l text-muted">
                          Republicas são apartamento (geralmente uma casa) com dois ou mais quartos compartilháveis.
                        </div>
                      </div>

                      <div class="sl-op m-2 mb-3 p-1 custom-control custom-radio">
                        <input type="radio"  class="custom-control-input" name="hostType" id="typeRoom2" value="condo" v-model="hostType">
                        <label class="f-title custom-control-label" for="typeRoom2">Condómino (para estudantes)</label>
                        <div class="sb-c-l text-muted">
                          Uma rede de quartos construídos especificamente para hospedar estudantes.
                        </div>
                      </div>

                      <div class="sl-op m-2 mb-3 p-1 custom-control custom-radio">
                        <input  class="custom-control-input" type="radio" name="hostType" id="typeRoom3" value="room" v-model="hostType">
                        <label class="f-title text-muted custom-control-label" for="typeRoom3">Um Quarto (para estudantes)</label>
                        <div class="sb-c-l text-muted">
                          Estou recebendo hospedes para um quarto. (quarto fora da casa principal ou quarto privado).
                        </div>
                      </div>

                    </div>
                    <div v-if="hostType" mode="in-out">
                      <div transation="expand" class="mt-4 p-3 card border-0 ms-shadow">
                        <h4 class="_text-bc ">Condições do imóvel</h4>
                        <p class="text-muted">Indique o tipo de casa na qual os estudantes serão hospedes (rever texto).</p>
                        <div class="pt-3 border-top selection_from">
                          <div>
                            <div class="row bt-2 pl-3 pr-3">
                              <div class="bt-label m-shadow bg-orange-label">Energia</div>
                            </div>
                            <div class="selection_options pl-4">
                              <div class="sl-op m-2 mb-3 p-1 custom-control custom-radio">
                                <input type="radio"  class="custom-control-input" v-model="typeContador" name="typeContador" id="typeContador1" value="3003">
                                <label class="f-title custom-control-label" for="typeContador1">Contador Particular</label>
                                <div class="sb-c-l text-muted">
                                  No contador particular, a gestão de compra e consumo de energia é com o hospede da casa.
                                </div>
                              </div>

                              <div class="sl-op m-2 mb-3 p-1 custom-control custom-radio">
                                <input type="radio"  class="custom-control-input" v-model="typeContador" name="typeContador" id="typeContador2" value="3030">
                                <label class="f-title custom-control-label" for="typeContador2">Contador Compartilhado</label>
                                <div class="sb-c-l text-muted">
                                  O contador é único (ou do condomínio), e gestão do consumo é com os hospedes do condomínio.
                                </div>
                              </div>
                            </div>
                          </div>

                            <div>
                            <div class="row bt-2 pl-3 pr-3">
                              <div class="bt-label m-shadow bg-red-label" style="float-right">Água</div>
                            </div>
                            <div class="selection_options pl-4" style="margin-top:35px;">
                              <div class="sl-op m-2 mb-3 p-1 custom-control custom-radio">
                                <input type="radio"  class="custom-control-input" v-model="hostAgua" name="hostAgua" id="aguaOption1" value="3187">
                                <label class="f-title custom-control-label" for="aguaOption1">No quintal</label>
                                <div class="sb-c-l text-muted">
                                  No quintal onde esta localizado o apartamento tem água canalizada.
                                </div>
                              </div>

                              <div class="sl-op m-2 mb-3 p-1 custom-control custom-radio">
                                <input type="radio"  class="custom-control-input" v-model="hostAgua" name="hostAgua" id="aguaOption2" value="8798">
                                <label class="f-title custom-control-label" for="aguaOption2">Fácil Acesso</label>
                                <div class="sb-c-l text-muted">
                                  Não temos água canalizada mais é de fácil acesso no bairro.
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mt-4 p-0" style="height:70px;">
                        <div class="float-md-right">
                          <div class="btn btn-outline-primary" v-on:click="toStep(1)">Voltar</div>
                          <div class="btn btn-primary" v-on:click="toStep(3)">Continuar</div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div v-if="step3" class="step-3 fade show">
                  <div class="m-4 col-md-6 p-3" style="max-width: 500px;">
                    <div class="card border-0 ms-shadow p-3">
                      <h4 class="_text-bc">Tipo de apartamento</h4>
                      <p class="text-muted">Indique o tipo de casa na qual os estudantes serão hospedes.</p>
                    </div>
                    <div class="mt-4 border-top selection_from">
                        <div class="mt-3">
                          <div class="f-title" style="font-weight:500; text-transform:upercase">Nome do Apartamento</div>
                          <p class="text-muted pb-1 m-0">Indique o tipo de casa na qual os estudantes serão hospedes.</p>
                          <input type="text" name="hostNome" v-model="hostNome" id="inp-n-home" class="border-0 d-block w-100" placeholder="Nome do Apartamento">
                        </div>

                        <div class="mt-3">
                          <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Apresentação do Apartamento <em>({{nota_Desc.length}}  up to a {{text_maxlength}} characters)</em></div>
                          <textarea id="textarea-home" v-model="nota_Desc" :maxlength="text_maxlength" class="border-0 w-100" placeholder="Digite..."></textarea>
                          <p class="text-muted pt-2 pl-1 pr-1 border-top">Apresentação resumida da casa é primeira informação que os usuários vão poder ver quando pesquisarem sobre casas. Dica: seja objetivo. (Localização, Dimensões, Tipo de apartamento).</p>
                        </div>
                    </div>
                  </div>
                  <div class="row ml-5 mr-5 mt-2">
                    <div class="pt-3 border-top" style="max-width:740px;">
                      <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Descrição do Apartamento <em>(Seja criativo, e "Venda").</em></div>
                      <div  class="mt-2">
                        <InfoEditor v-model="sobre_casa"></InfoEditor>
                      </div>
                      <p class="text-muted pt-2 pl-1 pr-1">Fale um pouco mais sobre o apartamento, seu histórico, sobre os antigos moradores e que o seu cliente pode encontrar. False sobre as dimensões, e tudo que for relevante.</p>
                      <div class="col-12 mt-4 p-0" style="height:70px;">
                        <div class="float-md-right">
                          <div class="btn btn-outline-primary" v-on:click="toStep(2)">Voltar</div>
                          <div class="btn btn-primary" v-on:click="toStep(4)">Continuar</div>
                          </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div v-if="step4" class="step-4 fade show">
                  <div class="m-4 col-md-6 p-3" style="max-width: 600px;">
                    <div class="card border-0 ms-shadow p-3">
                      <h4 class="_text-bc">Moveis disponíveis</h4>
                      <p class="text-muted">Selecione os Moveis básicos disponíveis para o estudante no apartamento.</p>

                      <div class="border-top p-3" style="min-height:150px">
                          <div class="row m-0" v-for="universidade in universidades" :key="universidade.id" >
                            <div class="custom-control custom-radio sel-opt mt-2" >
                              <input class="custom-control-input" type="checkbox" :id="universidade.id" :value="universidade.id">
                              <label class="custom-control-label" :for="universidade.id">{{universidade.nome}}</label>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="col-12 p-0 m-0 mt-4">
                      <div class="card ms-shadow p-5 border-0 mb-4">
                        <div class="m-auto text-md-center">
                          <h5 class="_text-bc">Selecione apenas 5 fotos...</h5>
                          <p class="text-muted"><strong>Nota:</strong><em> A primeira será a foto de capa da sua casa.!</em></p>
                        </div>
                        <div class="bt-upload m-auto">
                          <button class="file btn btn-secondary">
                            <input class="p-1" type="file" name="fotos_home" @change="fotokaya" style="position:absolute; opacity:0; margin-left: -11.5px; margin-top:-7px; max-width:150px" multiple accept="image/*">
                            Selecione as fotos
                          </button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div v-if="fotos_Kaya[0]" class="card border-0 p-3 ms-shadow" >
                            <div v-for="foto in fotos_Kaya" :key="foto.file_name" class="flex-row alert-dismissible pb-2 pt-2 border-bottom pos-relative" style="padding-right:45px !important">
                              <div class="rounded-circle border" style="min-width:74px; min-height:74px">
                                 <img class="rounded-circle" :src="foto.data_img_url" width="74" height="74" alt="home-fotos">
                              </div>
                              <div class="ml-3">
                                <div class="_text-bc"><strong>{{foto.file_name}}</strong> </div>
                                <div class="mt-2 fade show" v-if="fotos_Kaya[0].file_name === foto.file_name">
                                  <span class="rounded-text-bt">Foto Princiapl</span>
                                </div>
                              </div>
                              <button v-on:click="removeFoto(foto)" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 mb-4 mt-4 p-0">
                      <div class="float-md-right">
                      <div class="btn btn-outline-primary" v-on:click="toStep(3)">Voltar</div>
                      <div class="btn btn-primary" v-on:click="toStep(4)">Continuar</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div  v-if="errors.length" class="error" style="max-width: 500px;">
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Você deve verificar alguns desses campos abaixo.
                    <hr>
                    <ul>
                      <li v-for="error in errors" :key="error">{{ error }}</li>
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
              </form>
            </div>

            <!-- End Multi step form -->
          </div>
        </div>
      </div>
      <div id="nav_boolean" :class="const_nav"></div>
    </div>
</template>

<style scoped>

  #inp-n-home{
    font-family: -apple-system,BlinkMacSystemFont,"Roboto",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol" !important;
    height: calc(2.75rem + 2px) !important;
    background: none;
    font-size: 1.6rem;
    color: #383838;
    font-weight: 500;
    }

  #textarea-home{
    font-family: -apple-system,BlinkMacSystemFont,"Roboto",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol" !important;
    min-height: 150px;
    max-height: 150px;
    background: none;
    font-size: 1.3rem;
    color: #383838;
    font-weight: 400;
    line-height: 1.50;
    letter-spacing: .006em;
  }

  .ProseMirror-custom{
    font-family: -apple-system,BlinkMacSystemFont,"Roboto",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol" !important;
    min-height: 150px;
    max-height: 150px;
    background: none;
    font-size: 1.3rem;
    color: #383838;
    font-weight: 400;
    line-height: 1.50;
    letter-spacing: .006em;
  }

  .bt-label{
    border-radius: .35rem!important;
    display: inline-block;
    font-size: 16px;
    font-weight: 500;
    line-height: 40px;
    min-width: 140px;
    position: relative;
    text-align: center;
    text-decoration: none;
    font-family: -apple-system, BlinkMacSystemFont, 'Roboto', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
  }

  .bg-orange-label{
    background-color: #FCB036;
    color: white;
  }

  .bg-red-label{
    right: 25;
    position: absolute;
    background: #CE3737;
    color: white;
  }

html,body,.main_container {
    height:100%;
    }
    .main_container {
        display:table;
        width: 100%;
        margin-top: -50px;
        padding: 50px 0 0 0; /*set left/right padding according to needs*/
        box-sizing: border-box;
        margin-left: auto;
        margin-right: auto;
    }

    .m-row {
        height: 100%;
    }

    .m-row .no-float {
      display: table-cell;
      float: none;
    }

    .sl-op label{
      margin: 0px !important;
      font-weight: 500;
    }
    .sb-c-l{
      font-size: 15px;
    }
</style>

<script>
import Vue from 'vue';
import axios from 'axios';
import InfoEditor from '@/js/components/InfoEditor';
import { Editor, EditorContent } from 'tiptap';
import { EyeIcon } from 'vue-feather-icons'
import { BookmarkIcon } from 'vue-feather-icons'
import { HeartIcon } from 'vue-feather-icons'
import { CameraIcon } from 'vue-feather-icons'

export default {
        components: {
          EditorContent,
          InfoEditor,
          EyeIcon,
          BookmarkIcon,
          HeartIcon,
          CameraIcon
        },
        props : ['const_nav'],
        mounted() {
            console.log('NovaKaya Component mounted.'),
            this.loaded(),
            this.editor = new Editor({
            })
        },
        beforeDestroy() {
          this.editor.destroy()
        },
        created() {
          this.getProvincias(),
          this.getUniversidade(),
          this.getDistritos()
        },

        data() {
            return {
              // Variaveis
              step1: false,
              step2: false,
              step3: false,
              step4: true,
              text_maxlength: 140,
              provincia_id: null,
              distrito_id:null,
              addFade:'my-fade',
              //Info Apartamento
              pais: null,
              provincia: null,
              distrito: null,
              hostType: null,
              typeContador: null,
              hostAgua: null,
              hostNome: null,
              nota_Desc: '',
              sobre_casa:'',
              // Fotos da casa
              fotos_Kaya: [],
              // Error
              errors: [],
              //EndPoints
              provincias: [],
              provs_endpoint: '/api/kaya/data/provincias/',
              // Data Distritos
              distritos: [],
              distritosEndpoint: '/api/kaya/data/distritos/',
              // Universidades
              universidades:[],
              universidadesEndpoint: '/api/kaya/data/universidades/',
            }
        },

        methods: {
            toStep(step){
              this.errors = [];
              switch (step) {
                case 1:
                  if (!this.errors.length) {
                    this.step1 = true;
                    this.step2 = false;
                    this.step3 = false;
                    this.step4 = false;
                  }
                  break;
                case 2:

                  if (!this.provincia) {
                    this.errors.push("Província required.");
                  }
                  if (!this.distrito) {
                    this.errors.push("Distrito required.");
                  }
                  if(!this.errors.length){
                    this.step1 = false;
                    this.step2 = true;
                    this.step3 = false;
                    this.step4 = false;
                  }
                  break;
                case 3:
                  if (!this.hostType) {
                    this.errors.push("Tipo de Apartamento required.");
                  }
                  if (!this.typeContador) {
                    this.errors.push("Tipo de contador required.");
                  }
                  if (!this.hostAgua) {
                    this.errors.push("Acesso a Água required.");
                  }if(!this.errors.length){
                    this.step1 = true;
                    this.step2 = false;
                    this.step3 = true;
                    this.step4 = false;
                  }
                  break;
                case 4:
                  if (!this.hostNome) {
                    this.errors.push("Nome do Apartamento required.");
                  }
                  if (!this.nota_Desc) {
                    this.errors.push("Apresentação do Apartamento required.");
                  }if(!this.errors.length){
                    this.step1 = false;
                    this.step2 = false;
                    this.step3 = false;
                    this.step4 = true;
                  }
                  break;
                default:
                  break;
              }
            },
            loaded: function () {

              $('.navbar').removeClass('nav-menu_show').removeClass('bg-wihte-op');
              $('.container').addClass('container-fluid').removeClass('container');
              $('.nav-search-cont').css({display:'none'});
            },
            getProvincias() {
              axios(this.provs_endpoint)
                .then(response => {
                  this.provincias = response.data
                })
                .catch( error => {
                  console.log('----- Error on Load Províncias -------');
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
            // Uploader fotos
            fotokaya(e){
              let fotos = e.target.files
              var num_fotos = fotos.length;

              if(this.fotos_Kaya.length < 5){
                if((num_fotos + this.fotos_Kaya.length) > 5 ){
                  this.errors.push("Maximo 5 Fotos");
                }else{
                  if(num_fotos < 6){
                    for (let i = 0; i < num_fotos; i++) {
                    this.loadFotos(fotos[i]);
                    }
                  }else{
                    this.errors.push("Maximo 5 Fotos");
                  }
                }
              }else{
                this.errors.push("Maximo 5 Fotos");
              }
            },
            // Load Fotos
            loadFotos(foto){
              let reader = new FileReader();
              reader.readAsDataURL(foto);
              let fotoNameObj = new Object();
                fotoNameObj.file_name = foto.name;

              reader.onload = () =>{

                var fotoObj = new Object();
                    fotoObj = {
                      file_name: foto.name,
                      data_img_url : reader.result
                    }
                this.fotos_Kaya.push(fotoObj);
              }
            },
            removeFoto: function(foto){
              // Remove Foto
              this.fotos_Kaya.splice(this.fotos_Kaya.indexOf(foto), 1);
            },
            // Sumit form
            onSubmitKaya: function(e){
              console.log(e)
            },
        },

        computed:{
          filterDistritos(){
             let distritos = this.distritos
             if(distritos.length){
               if(this.provincia){
                  this.distrito = null
                  distritos = distritos.filter((p) => {
                  return p.provincia.indexOf(this.provincia) !== -1
                })
              }if(!this.provincia){
                this.distrito = null
              }
              return distritos
             }else{
               return "Loading Distritos";
             }
          },
          filterUniversidades(){
             let universidades = this.universidades
             if(universidades.length){
               if(this.distrito){
                  universidades = universidades.filter((p) => {
                  return p.distrito.indexOf(this.distrito) !== -1
                })
              }
              return universidades
             }else{
               return "Loading Distritos";
             }
          }
        }

    }
</script>
