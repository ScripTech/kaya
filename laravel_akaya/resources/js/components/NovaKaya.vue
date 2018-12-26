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
                <div class="row m-0 step-1">
                  <div class="m-4 col-md-6 p-3" style="max-width: 500px;">
                    <h4 class="_text-bc">Where’s your place located?</h4>
                      <p class="text-muted"> will only get your exact address once they’ve booked a reservation.</p>
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
                            <select name="prov" id="" class="custom-select d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;"  >

                              <option value="">Províncias</option>
                              <option :value=provincia.id v-for="provincia in provincias" :key="provincia.id">{{ provincia.nome }}</option>
                            </select>
                          </div>

                        </div>
                        <div class="col-6 pl-0 pr-0">
                          <div class="f-title mb-2" style="font-weight:500; text-transform:upercase">Distrito</div>
                          <select  name="destrito" id="" class="custom-select d-block w-100 ng-binding" style="height: calc(2.75rem + 2px) !important;">
                            <option value="Maputo">Kambukuana</option>
                          </select>
                        </div>
                      </div>
                      <div class="m-0">
                        <div class="col-12 mt-4 p-0">
                          <div class="f-title text-muted mb-2" style="font-weight:500; text-transform:upercase">Selecione as faculdades</div>
                          <p class="text-muted"> will only get your exact address once they’ve booked a reservation.</p>
                          <div class="border p-2 bg-white rounded" style="min-height:230px;">

                              <div class="rounded p-1">
                                  <input type="checkbox" id="jack" value="Jack">
                                  <label for="jack">UEM-ESNEC</label>
                              </div>
                          </div>
                        </div>

                        <div class="col-12 mt-4 p-0">
                          <div class="float-md-right"><button class="btn btn-primary">Continuar</button></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="m-4 col-md-6 p-3" style="max-width: 500px; display:none">
                    <h4 class="_text-c">Where’s your place located?</h4>
                      <p> will only get your exact address once they’ve booked a reservation.</p>
                    <div class="_from">
                      <div>
                        <div style="font-weight:500; text-transform:upercase">Pais</div>
                          <div>
                            <select name="pais" id="" class="form-control">
                              <option value="Moz">Moz</option>
                            </select>
                          </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="step-2" style="display:none">
                    a
                </div>
                <div class="step-3" style="display:none">
                  a
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
</style>


<script>
import Vue from 'vue';
import axios from 'axios';

export default {
        props : ['const_nav', 'id'],
        mounted() {
            console.log('NovaKaya Component mounted.'),
            this.loaded(),
            this.selectfunction()
        },

        created() {
          this.getProvincias()
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
                  console.log('-----error-------');
                  console.log(error)
                })
            }
        },
        data() {
            return {
              provincias: [],
              provs_endpoint: 'http://localhost:3523/api/kaya/data/provincias/'
            }
          }
    }
</script>
