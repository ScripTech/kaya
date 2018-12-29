<template>
    <div class="main_container" style="margin-top: 0px">
      <div class="row m-row m-0">
        <div class="col-md-4 pt-4 pb-4 bg-white no-float" style="max-width: 480px;">

          <div class="p-3" style="text-align: justify">
            <div class="mb-3">
              <h3 class="_text-bc" style="font-weight: 400">Ola Edilson Mucanze!</h3>
            </div>


          </div>
          <div class="card-step p-3 rounded" style=" background: #00bfff47; border:2px solid rgba(0, 123, 255, 0.37); ">
            <div style="color: #395a6b;"><strong>Passo 1</strong></div>
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
              <form action="#" >
                <div class="row m-0 step-1" style="display:none">
                  <div class="m-4 col-md-6 p-3" style="max-width: 500px;">
                    <h4 class="_text-bc">Onde o seu apartamento esta localizado?</h4>
                      <p class="text-muted"> Para começar vamos indicar onde o seu apartamento esta localizado..</p>
                    <div class="_from">
                      <div>
                        <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Pais</div>
                          <div>
                            <select name="pais" id="" class="custom-select d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;">
                              <option value="Moz">Moz</option>
                            </select>
                          </div>
                      </div>
                      <div class="row m-0 pt-3">
                        <div class="col-6 pl-0">
                          <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Provincia</div>
                          <div>
                            <select v-model="provincia_id" name="prov" id="" class="custom-select d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;"  >
                              <option :value="null">Províncias...</option>
                              <option :value=provincia.id v-for="provincia in provincias" :key="provincia.id">{{ provincia.nome }}</option>
                            </select>
                          </div>

                        </div>
                        <div class="col-6 pl-0 pr-0">
                          <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Distrito</div>
                          <select  v-model="distrito_id" name="distrito_id" id="" class="custom-select d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;">
                            <option :value="null">Distritos...</option>
                            <option :p_id="distrito.provincia_id" :value="distrito.id" v-for="distrito in distritos" :key="distrito.id">{{distrito.nome}}</option>
                          </select>
                        </div>
                      </div>
                      <div class="m-0">
                        <div class="col-12 mt-4 p-0">
                          <div class="f-title text-muted mb-2" style="font-weight:500; text-transform:upercase">Selecione as faculdades</div>
                          <p class="text-muted"> will only get your exact address once they’ve booked a reservation.</p>
                          <div class="ms-shadow p-2 bg-white rounded" style="min-height:230px;">

                              <div class="row m-0" v-for="universidade in universidades" :key="universidade.id" >
                                <div class="custom-control custom-radio sel-l-opt" >
                                  <input class="custom-control-input" type="checkbox" :id="universidade.id" :value="universidade.id">
                                  <label class="custom-control-label my-custom-label" :for="universidade.id">{{universidade.nome}}</label>
                                </div>
                              </div>
                          </div>
                        </div>

                        <div class="col-12 mt-4 p-0">
                          <div class="float-md-right"><button class="btn btn-primary">Continuar</button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="step-2 " style="display:none">
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
                                <input type="radio"  class="custom-control-input" name="typeContador" id="typeContador1" value="condo">
                                <label class="f-title custom-control-label" for="typeContador1">Contador Particular</label>
                                <div class="sb-c-l text-muted">
                                  No contador particular, a gestão de compra e consumo de energia é com o hospede da casa.
                                </div>
                              </div>

                              <div class="sl-op m-2 mb-3 p-1 custom-control custom-radio">
                                <input type="radio"  class="custom-control-input" name="typeContador" id="typeContador2" value="condo">
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
                                <input type="radio"  class="custom-control-input" name="aguaOption" id="aguaOption1" value="condo">
                                <label class="f-title custom-control-label" for="aguaOption1">No quintal</label>
                                <div class="sb-c-l text-muted">
                                  No contador particular, a gestão de compra e consumo de energia é com o hospede da casa.
                                </div>
                              </div>

                              <div class="sl-op m-2 mb-3 p-1 custom-control custom-radio">
                                <input type="radio"  class="custom-control-input" name="aguaOption" id="aguaOption2" value="condo">
                                <label class="f-title custom-control-label" for="aguaOption2">Fácil Acesso</label>
                                <div class="sb-c-l text-muted">
                                  O contador é único (ou do condomínio), e gestão do consumo é com os hospedes do condomínio.
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mt-4 p-0" style="height:150px;">
                        <div class="float-md-right"><button class="btn btn-primary">Continuar</button></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="step-3" style="display:block">
                  <div class="m-4 col-md-6 p-3" style="max-width: 500px;">
                    <div class="card border-0 ms-shadow p-3">
                      <h4 class="_text-bc">Tipo de apartamento</h4>
                      <p class="text-muted">Indique o tipo de casa na qual os estudantes serão hospedes.</p>
                    </div>
                    <div class="mt-4 border-top selection_from">
                        <div class="mt-3">
                          <div class="f-title" style="font-weight:500; text-transform:upercase">Nome do Apartamento</div>
                          <p class="text-muted pb-1 m-0">Indique o tipo de casa na qual os estudantes serão hospedes.</p>
                          <input type="text" name="nome_ap" id="inp-n-home" class="border-0 d-block w-100" placeholder="Nome do Apartamento">
                        </div>

                        <div class="mt-3">
                          <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Descrição do Apartamento <em>({{nota_Desc.length}}  up to a {{text_maxlength}} characters)</em></div>
                          <textarea id="textarea-home" v-model="nota_Desc" :maxlength="text_maxlength" class="border-0 w-100" placeholder="Digite..."></textarea>
                          <p class="text-muted pt-2 pl-1 pr-1">A nota introdutória e uma apresentação sumaria da casa. note que ela e primeira informação que os usuários vão poder ver quando pesquisar sobre casas. <br> <b>Dica:</b> Seja criativo, e "Venda".</p>
                        </div>
                    </div>
                  </div>
                  <div class="row m-5">
                    <div class="pt-3 border-top" style="max-width:740px;">
                      <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Descrição do Apartamento <em>(Seja criativo, e "Venda").</em></div>
                      <textarea id="textarea-home" v-model="home_desc" class="border-0 w-100" placeholder="Digite..."></textarea>
                      <p class="text-muted pt-2 pl-1 pr-1">A nota introdutória e uma apresentação sumaria da casa. note que ela e primeira informação que os usuários vão poder ver quando pesquisar sobre casas.</p>

                      <div class="col-12 mt-4 p-0" style="height:150px;">
                        <div class="float-md-right"><button class="btn btn-primary">Continuar</button></div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="step-4" style="display:none">
                  a
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

export default {
        props : ['const_nav', 'id'],
        mounted() {
            console.log('NovaKaya Component mounted.'),
            this.loaded()
        },

        created() {
          this.getProvincias(),
          this.getUniversidade(),
          this.getDistritos()
        },

        data() {
            return {
              // Variaveis
              text_maxlength: 140,
              nota_Desc: '',
              provincia_id: null,
              distrito_id:null,
              addFade:'my-fade',
              hostType: null,
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
            }
        }

    }
</script>
