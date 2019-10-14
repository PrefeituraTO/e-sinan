     <div id="page-wrapper container-fluid col-md-12">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
       <form class="form-inline" action="inc/busca.php" method="POST">

        <div class="panel panel-default" id="GeneralData">
         <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Dados Gerais
           </a>
          </h4>
         </div><!--#headingOne-->
         <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">

           <div class="col-md-12 row form-group">
            <div class="col-md-4">                
             <label class="sr-only" for="NotificationType">Tipo de Notificação</label>
             <div class="input-group">
              <div class="input-group-addon">Tipo de Notificação</div>
              <select name="NotificationType" id="NotificationType" class="form-control">
               <option value="">Escolha</option>
               <option value="1">Negativa</option>
               <option value="2">Individual</option>
               <option value="3">Surto</option>
               <option value="4">Inquérito Tracoma</option>
              </select>
             </div>
            </div>

            <div class="col-md-4">
             <label class="sr-only" for="idDoenca">Doença</label>
             <div class="input-group">
              <div class="input-group-addon">Doença</div>
              <select name="idDoenca" id="idDoenca" class="form-control">
               <option value="">Escolha</option>
               <option value="1">AIDS</option>
               <option value="2">Chikungunya</option>
               <option value="3">Dengue</option>
               <option value="4">Sarampo</option>
              </select>
             </div>
            </div>

            <div class="col-md-4">
             <label class="sr-only" for="NotificationDate">Data da Notificação</label>
             <div class="input-group">
              <div class="input-group-addon">Data da Notificação</div>
              <input type="text" name="NotificationDate" id="NotificationDate" class="form-control" />
             </div>
            </div>

           </div><!--col-md-12 row form-group-->
           <div class="col-md-12 row form-group">

            <div class="col-md-4">
             <label class="sr-only" for="NotificationCity">Local da Notificação</label>
             <div class="input-group">
              <div class="input-group-addon">Local da Notificação</div>
              <select name="NotificationCity" id="NotificationCity" class="form-control selectpicker" data-live-search="true">
               <option value="">Escolha</option>
               <option data-tokens="Teófilo Otoni" value="1">Teófilo Otoni - MG</option>
               <option data-tokens="Poté" value="2">Poté - MG</option>
               <option data-tokens="Itambacuri" value="3">Itambacuri - MG</option>                  
              </select>
             </div>
            </div>

            <div class="col-md-4">
             <label class="sr-only" for="HealthCenter">Unidade de Saúde</label>
              <div class="input-group">
               <div class="input-group-addon">Unidade de Saúde</div>
               <input type="text" name="HealthCenter" id="HealthCenter" class="form-control" />
              </div>
             </div>

             <div class="col-md-4">
             <label class="sr-only" for="FirstSymptomsDate">Data dos Primeiros Sintomas</label>
             <div class="input-group">
              <div class="input-group-addon">Data dos Primeiros Sintomas</div>
              <input type="text" name="FirstSymptomsDate" id="FirstSymptomsDate" class="form-control" />
             </div>
            </div>

            </div><!--panel-group--> 
           </div><!--col-md-12 row form-group-->
          </div><!--panel-body-->
         </div><!--collapseOne-->
        </div><!--#GeneralData-->

        <div class="panel panel-default" id="IndividualNotification">
         <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Notificação Individual
           </a>
          </h4>
         </div><!--headingTwo-->
         <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
           <div class="col-md-12 row form-group">
            <div class="col-md-8">
             <label class="sr-only" for="PatientName">Nome do Paciente</label>
             <div class="input-group">
              <div class="input-group-addon">Nome do Paciente</div>
              <input type="text" name="PatientName" id="PatientName" class="form-control" />
             </div>
            </div>

            <div class="col-md-4">
             <label class="sr-only" for="BirthdayDate">Data de Nascimento</label>
             <div class="input-group">
              <div class="input-group-addon">Data de Nascimento</div>
              <input type="text" name="BirthdayDate" id="BirthdayDate" class="form-control" />
             </div>
            </div>

           </div><!--col-md-12 row form-group-->
           <div class="col-md-12 row form-group">

            <div class="col-md-4">                
             <label class="sr-only" for="genre">Sexo</label>
             <div class="input-group">
              <div class="input-group-addon">Sexo</div>
              <select name="genre" id="genre" class="form-control">
               <option value="">Escolha</option>
               <option value="F">Feminino</option>
               <option value="I">Ignorado</option>
               <option value="M">Masculino</option>
              </select>
             </div>
            </div>

            <div class="col-md-4">                
             <label class="sr-only" for="pregnant">Gestante</label>
             <div class="input-group">
              <div class="input-group-addon">Gestante</div>
              <select name="pregnant" id="pregnant" class="form-control">
               <option value="">Escolha</option>
               <option value="1">1° Trimestre</option>
               <option value="2">2° Trimestre</option>
               <option value="3">3° Trimestre</option>
               <option value="4">Idade gestacional Ignorada</option>
               <option value="5">Não</option>
               <option value="6">Não se aplica</option>
               <option value="9">Ignorado</option>
              </select>
             </div>
            </div>            

            <div class="col-md-4">                
             <label class="sr-only" for="race">Raça/Cor</label>
             <div class="input-group">
              <div class="input-group-addon">Raça/Cor</div>
              <select name="race" id="race" class="form-control">
               <option value="">Escolha</option>
               <option value="1">Amarela</option>
               <option value="2">Branca</option>
               <option value="3">Indigena</option>
               <option value="4">Parda</option>
               <option value="5">Preta</option>
               <option value="9">Ignorado</option>
              </select>
             </div>
            </div>

           </div><!--col-md-12 row form-group-->
           <div class="col-md-12 row form-group">

            <div class="col-md-4">
             <label class="sr-only" for="SUSCard">Cartão SUS</label>
             <div class="input-group">
              <div class="input-group-addon">Cartão SUS</div>
              <input type="text" name="SUSCard" id="SUSCard" class="form-control" />
             </div>
            </div>

            <div class="col-md-8">
             <label class="sr-only" for="MotherName">Nome da Mãe</label>
             <div class="input-group">
              <div class="input-group-addon">Nome da Mãe</div>
              <input type="text" name="MotherName" id="MotherName" class="form-control" />
             </div>
            </div>           

           </div><!--col-md-12 row form-group-->
          </div><!--panel-body-->
         </div><!--collapseTwo-->
        </div> <!--#IndividualNotification-->

        <div class="panel panel-default" id="SurgeNotification">
         <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Notificação de Surto
           </a>
          </h4>
         </div>
         <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
           <div class="col-md-12 row form-group">

            <div class="col-md-6">
             <label class="sr-only" for="FirstCasesDate">Data dos 1°s sintomas do 1° Caso Suspeito</label>
             <div class="input-group">
              <div class="input-group-addon">Data dos 1ºs sint. do 1° Caso</div>
              <input type="text" name="FirstCasesDate" id="FirstCasesDate" class="form-control" />
             </div>
            </div><!--col-md-6-->

            <div class="col-md-6">
             <label class="sr-only" for="CaseNumbers">N° de Casos Suspeitos/Expostos</label>
             <div class="input-group">
              <div class="input-group-addon">N° de Casos Suspeitos/Expostos</div>
              <input type="text" name="CaseNumbers" id="FirstCasesDate" class="form-control" />
             </div>
            </div>
           </div><!--col-md-12-->

           <div class="col-md-12 row form-group"> 

            <div class="col-md-6">                
             <label class="sr-only" for="SurgePlace">Local de de Ocorrencia do Surto</label>
             <div class="input-group">
              <div class="input-group-addon">Local de de Ocorrencia do Surto</div>
              <select name="SurgePlace" id="SurgePlace" class="form-control">
               <option value="">Escolha</option>
               <option value="1">Residência</option>
               <option value="2">Hospital/Un. de Saúde</option>
               <option value="3">Creche/Escola</option>
               <option value="4">Asilo</option>
               <option value="5">Outras Instalações (alojamento, trabalho)</option>
               <option value="6">Restaurante/Padaria</option>
               <option value="7">Eventos</option>
               <option value="8">Casos Dispersos no Bairro</option>
               <option value="8">Casos Dispersos no Município</option>
               <option value="10">Outros</option>
              </select>
             </div>
            </div><!--col-md-6-->

            <div class="col-md-6">
             <label class="sr-only" for="OtherPlaces">Outros</label>
             <div class="input-group">
              <div class="input-group-addon">Outros</div>
              <input type="text" name="OtherPlaces" id="OtherPlaces" class="form-control" />
             </div>
            </div><!--col-md-6-->

           </div><!--col-md-12 row form-group-->
           </div>
          </div><!--panel-body-->
         </div> <!--collapseThree-->
        </div> <!--#SurgeNotification-->

        <div class="panel panel-default" id="ResidentialData">
         <div class="panel-heading" role="tab" id="headingFour">
          <h4 class="panel-title">
           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Dados de Residência
           </a>
          </h4>
         </div><!--headingFour-->
         <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="panel-body">
           <div class="col-md-12 row form-group">

            <div class="col-md-4">
             <label class="sr-only" for="HomeCity">Local de Residência</label>
             <div class="input-group">
              <div class="input-group-addon">Local de Residência</div>
               <select name="HomeCity" id="HomeCity" class="form-control selectpicker" data-live-search="true">
               <option value="">Escolha</option>
               <option data-tokens="Teófilo Otoni" value="1">Teófilo Otoni - MG</option>
               <option data-tokens="Poté" value="2">Poté - MG</option>
               <option data-tokens="Itambacuri" value="3">Itambacuri - MG</option>                  
              </select>
             </div>
            </div><!--col-md-4-->

            <div class="col-md-4">
             <label class="sr-only" for="homeDistrict">Distrito</label>
             <div class="input-group">
              <div class="input-group-addon">Distrito</div>
              <input type="text" name="homeDistrict" id="homeDistrict" class="form-control" />
             </div>
            </div><!--col-md-4-->

            <div class="col-md-4">
             <label class="sr-only" for="homeNeighbor">Bairro</label>
             <div class="input-group">
              <div class="input-group-addon">Bairro</div>
              <input type="text" name="homeNeighbor" id="homeNeighbor" class="form-control" />
             </div>
            </div><!--col-md-4-->

           </div><!--col-md-12 row form-group-->
           <div class="col-md-12 row form-group">

            <div class="col-md-6">
             <label class="sr-only" for="homePublicPlace">Logradouro</label>
             <div class="input-group">
              <div class="input-group-addon">Logradouro</div>
              <input type="text" name="homePublicPlace" id="homePublicPlace" class="form-control" />
             </div>
            </div><!--col-md-6-->

            <div class="col-md-2">
             <label class="sr-only" for="homeNumber">Número</label>
             <div class="input-group">
              <div class="input-group-addon">Número</div>
              <input type="text" name="homeNumber" id="homeNumber" class="form-control" />
             </div>
            </div><!--col-md-2-->

            <div class="col-md-4">
             <label class="sr-only" for="homeAdj">Complemento</label>
             <div class="input-group">
              <div class="input-group-addon">Complemento</div>
              <input type="text" name="homeAdj" id="homeAdj" class="form-control" />
             </div>
            </div><!--col-md-4-->

           </div><!--col-md-12 row form-group-->
           <div class="col-md-12 row form-group">

            <div class="col-md-6">
             <label class="sr-only" for="homeReff">Ponto de Referência</label>
             <div class="input-group">
              <div class="input-group-addon">Ponto de Referência</div>
              <input type="text" name="homeReff" id="homeReff" class="form-control" />
             </div>
            </div><!--col-md-6-->

            <div class="col-md-3">
             <label class="sr-only" for="homeZIP">CEP</label>
             <div class="input-group">
              <div class="input-group-addon">CEP</div>
              <input type="text" name="homeZIP" id="homeZIP" class="form-control" />
             </div>
            </div><!--col-md-3-->

            <div class="col-md-3">
             <label class="sr-only" for="homePhone">Telefone</label>
             <div class="input-group">
              <div class="input-group-addon">Telefone</div>
              <input type="text" name="homePhone" id="homePhone" class="form-control" />
             </div>
            </div><!--col-md-3-->

           </div><!--col-md-12 row form-group-->

          </div><!--panel-body-->
         </div><!--headingFour-->
        </div><!--#ResidentialData-->

        <div class="panel panel-default" id="Notifier">
         <div class="panel-heading" role="tab" id="headingFive">
          <h4 class="panel-title">
           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Notificante
           </a>
          </h4>
         </div>
         <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
          <div class="panel-body">
          <div class="col-md-12 row form-group">
          
          </div><!--col-md-12 row form-group-->
          </div><!--panel-body-->
         </div><!--collapseFive-->            
        </div><!--#Notifier-->

       </form>
      </div><!--.panel-group-->
     </div><!--.page-wrapper-->
