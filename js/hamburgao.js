
    var valorHamburguer = 0;
    var total = 0;
    var subtotalSubtraido = 0;
    var iten = true;
    var iten2 = true;
    var iten3 = true;
    var iten4 = true;
    var iten5 = true;
    var iten6 = true;
    var iten7 = true;
    var iten8 = true;
    var acrescimos = 0;
    var acrescimos1 = true;
    var acrescimos2 = true;
    var acrescimos3 = true;
    var acrescimos4 = true;
    var acrescimos5 = true;
    var acrescimos6 = true;
    var acrescimos7 = true;
    var acrescimos8 = true;
    var acrescimos9 = true;
    var acrescimos10 = true;
    var acrescimos11 = true;
    var acrescimos12 = true;
    var batatasP = 0;
    var batatasM = 0;
    var batatasG = 0;
    var ValorRefri = 0;
    var ValorSuco = 0;
    

    function retornaId(id){
        return document.getElementById(id); 
    }

    var largou = false;

    function drag_start(event) {
        
        event.dataTransfer.dropEffect = "move";
        event.dataTransfer.setData("text", event.target.getAttribute('id') );
    }


    function drag_drop(event) {
    
        var elemento_id = event.dataTransfer.getData("text");

        event.target.appendChild( retornaId(elemento_id) );

        largou = true;

         if (elemento_id == "carne" && iten == true) {
            valorHamburguer += 4;
            iten = false;
            retornaId("itenCarne").value = "Carne";          
         }

         else if (elemento_id == "alface" && iten2 == true) {
            valorHamburguer += 3;
            iten2 = false;
            
            retornaId("itenAlface").value = "Alface";
            
         }

         else if (elemento_id == "bacon" && iten3 == true) {
            valorHamburguer += 5;
            iten3 = false;
            retornaId("itenBacon").value = "Bacon";
         }


         else if (elemento_id == "tomate" && iten4 == true) {
            valorHamburguer += 0.5;
            iten4 = false;
            retornaId("itenTomate").value = "Tomate";
         }

          else if (elemento_id == "cheddar" && iten5 == true) {
            valorHamburguer += 0.5;
            iten5 = false;
            retornaId("itenCheddar").value = "Cheddar";
         }

         else if (elemento_id == "picles" && iten6 == true) {
            valorHamburguer += 0.5;
            iten6 = false;
            retornaId("itenPicles").value = "Picles";
         }

         else if (elemento_id == "presunto" && iten7 == true) {
            valorHamburguer += 0.5;
            iten7 = false;
            retornaId("itenPresunto").value = "Presunto";
         }

         else if (elemento_id == "ovo" && iten8 == true) {
            valorHamburguer += 0.5;
            iten8 = false;
            retornaId("itenOvo").value = "Ovo";
         }
         
         retornaId("subtotal").value = valorHamburguer;
         retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
         retornaId("totalFinalH").value = retornaId("totalFinal").value;
        
         retornaId('app_status').innerHTML = "Adicionou " + elemento_id;
    }

    function allowDrop(ev){
        if (ev.target.getAttribute("droppable") == "false") {
            ev.data.dataTransfer.dropEffect = "none";
            ev.preventDefault();
        }
        else{
            ev.dataTransfer.dropEffect = "all";
            ev.preventDefault();
        }
    }

    function cancelar(event){
        
        var elemento_id = event.dataTransfer.getData('text');
        event.target.appendChild( retornaId(elemento_id) );

        retornaId(elemento_id).removeAttribute("draggable");

        if (elemento_id == "carne" && iten == false) {            
            iten = true;

            valorHamburguer = valorHamburguer - 4;
            retornaId("itenCarne").value = "";           
        }

        else if (elemento_id == "alface" && iten2 == false){
            iten2 = true;
            valorHamburguer = valorHamburguer - 3;
            retornaId("itenAlface").value = ""; 
        }

        else if (elemento_id == "bacon" && iten3 == false){
            iten3 = true;
            valorHamburguer = valorHamburguer - 5;
            retornaId("itenBacon").value = "";
        }

         else if (elemento_id == "tomate" && iten4 == false){
            iten4 = true;
            valorHamburguer = valorHamburguer - 0.5;
            retornaId("itenTomate").value = "";
        }

         else if (elemento_id == "cheddar" && iten5 == false){
            iten5 = true;
            valorHamburguer = valorHamburguer - 0.5;
            retornaId("itenCheddar").value = "";
        }

        else if (elemento_id == "picles" && iten6 == false){
            iten6 = true;
            valorHamburguer = valorHamburguer - 0.5;
            retornaId("itenPicles").value = "";
        }

         else if (elemento_id == "presunto" && iten7 == false){
            iten7 = true;
            valorHamburguer = valorHamburguer - 0.5;
            retornaId("itenPresunto").value = "";
        }

        else if (elemento_id == "ovo" && iten8 == false){
            iten8 = true;
            valorHamburguer = valorHamburguer - 0.5;
            retornaId("itenOvo").value = "";
        }

       
        retornaId("subtotal").value = valorHamburguer;
        retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
        retornaId("totalFinalH").value = retornaId("totalFinal").value;
       

        retornaId('app_status').innerHTML = "Removeu " + elemento_id;

    }


    function localizacao(){

        for (var i = 0; i < retornaId("hamburguer").children.length; i++) {
            itensHamburguer = retornaId("hamburguer").children[i].id;             
        }

    }



   function verificaChecks(Aid) {

        acrescimo_id = Aid;
        if (acrescimo_id == "Acarne") {
            if (acrescimos1 == true) {
                valorHamburguer += 1.5;
                acrescimos1 = false;
            }
            else if (acrescimos1 == false) {
                valorHamburguer = valorHamburguer - 1.5;
                acrescimos1 = true;
            }            
        }
        if (acrescimo_id == "Abacon") {
            if (acrescimos2 == true) {
                valorHamburguer += 1.5;
                acrescimos2 = false;
            }
            else if (acrescimos2 == false) {
                valorHamburguer = valorHamburguer - 1.5;
                acrescimos2 = true;
            }            
        }
        if (acrescimo_id == "Apicles") {
            if (acrescimos3 == true) {
                valorHamburguer += 1.5;
                acrescimos3 = false;
            }
            else if (acrescimos3 == false) {
                valorHamburguer = valorHamburguer - 1.5;
                acrescimos3 = true;
            }            
        }
        if (acrescimo_id == "Aqueijo") {
            if (acrescimos4 == true) {
                valorHamburguer += 1.5;
                acrescimos4 = false;
            }
            else if (acrescimos4 == false) {
                valorHamburguer = valorHamburguer - 1.5;
                acrescimos4 = true;
            }            
        }
        if (acrescimo_id == "Asalada") {
            if (acrescimos5 == true) {
                valorHamburguer += 1.5;
                acrescimos5 = false;
            }
            else if (acrescimos5 == false) {
                valorHamburguer = valorHamburguer - 1.5;
                acrescimos5 = true;
            }            
        }
        if (acrescimo_id == "Acebola") {
            if (acrescimos6 == true) {
                valorHamburguer += 1.5;
                acrescimos6 = false;
            }
            else if (acrescimos6 == false) {
                valorHamburguer = valorHamburguer - 1.5;
                acrescimos6 = true;
            }            
        }
        if (acrescimo_id == "Aazeite") {
            if (acrescimos7 == true) {
                valorHamburguer += 1.5;
                acrescimos7 = false;
            }
            else if (acrescimos7 == false) {
                valorHamburguer = valorHamburguer - 1.5;
                acrescimos7 = true;
            }            
        }
        if (acrescimo_id == "Abarbecue") {
            if (acrescimos8 == true) {
                valorHamburguer += 1.5;
                acrescimos8 = false;
            }
            else if (acrescimos8 == false) {
                valorHamburguer = valorHamburguer - 1.5;
                acrescimos8 = true;
            }            
        }
        if (acrescimo_id == "Amaionese") {
            if (acrescimos9 == true) {
                valorHamburguer += 1.5;
                acrescimos9 = false;
            }
            else if (acrescimos9 == false) {
                valorHamburguer = valorHamburguer - 1.5;
                acrescimos9 = true;
            }            
        }
        if (acrescimo_id == "Aketshup") {
            if (acrescimos10 == true) {
                valorHamburguer += 1.5;
                acrescimos10 = false;
            }
            else if (acrescimos10 == false) {
                valorHamburguer = valorHamburguer - 1.5;
                acrescimos10 = true;
            }            
        }
        if (acrescimo_id == "AChip") {
            if (acrescimos11 == true) {
                valorHamburguer += 1.5;
                acrescimos11 = false;
            }
            else if (acrescimos11 == false) {
                valorHamburguer = valorHamburguer - 1.5;
                acrescimos11 = true;
            }            
        }
        if (acrescimo_id == "Amost") {
            if (acrescimos12 == true) {
                valorHamburguer += 1.5;
                acrescimos12 = false;
            }
            else if (acrescimos12 == false) {
                valorHamburguer = valorHamburguer - 1.5;
                acrescimos12 = true;
            }            
        }

         retornaId("subtotal").value = valorHamburguer;
         retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
         retornaId("totalFinalH").value = retornaId("totalFinal").value;
}

    function batataP(){
        var s = retornaId("batataPequena");
        var itemSelecionado = s.options[s.selectedIndex].value;
        if (itemSelecionado == "1") {
            batatasP = 2;
           retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
           retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
        else if (itemSelecionado == "2") {
            batatasP = 4;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
        else if (itemSelecionado == "3"){
            batatasP = 6;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
        else{
           batatasP = 0;
           retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
           retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
    }

     function batataM(){
        var s = retornaId("batataMedia");
        var itemSelecionado = s.options[s.selectedIndex].value;
        if (itemSelecionado == "1") {
            batatasM = 4;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
        else if (itemSelecionado == "2") {
            batatasM = 8;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
        else if (itemSelecionado == "3"){
            batatasM = 12;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
        else{
           batatasM = 0;
           retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
           retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
    }

     function batataG(){
        var s = retornaId("batataGrande");
        var itemSelecionado = s.options[s.selectedIndex].value;
        if (itemSelecionado == "1") {
            batatasG = 6;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
        else if (itemSelecionado == "2") {
            batatasG = 12;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
        else if (itemSelecionado == "3"){
            batatasG = 18;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
        else{
           batatasG = 0;
           retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
           retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
    }


    function formRefri(){
        var s = retornaId("refri");
        var escolha = s.options[s.selectedIndex].value;
        if (escolha == "semRefri") {
            retornaId("quantidadeRefri").disabled = true;
            retornaId("quantidadeRefri").value = "";
            retornaId("saborRefri").value = "";
            retornaId("saborRefri").disabled = true;
        }
        else if (escolha == "Lata" || escolha == "umLitro" || escolha == "doisLitros") {
            retornaId("nada1").disabled = true;
            retornaId("nada2").disabled = true;
            retornaId("saborRefri").disabled = false;
            retornaId("saborRefri").value = "Coca-Cola";
            retornaId("quantidadeRefri").disabled = false;
            retornaId("quantidadeRefri").value = 1;

        }
    }

     function formSuco(){
        var s = retornaId("suco");
        var escolha1 = s.options[s.selectedIndex].value;
        if (escolha1 == "semSuco") {
            retornaId("quantidadeSuco").disabled = true;
            retornaId("quantidadeSuco").value = "";
            retornaId("saborSuco").value = "";
            retornaId("saborSuco").disabled = true;
        }
        else if (escolha1 == "Lata" || escolha1 == "umLitro") {
            retornaId("nada3").disabled = true;
            retornaId("nada4").disabled = true;
            retornaId("saborSuco").disabled = false;
            retornaId("saborSuco").value = "Uva";
            retornaId("quantidadeSuco").disabled = false;
            retornaId("quantidadeSuco").value = 1;

        }
    }

    function calcRefri(){
        var s = retornaId("refri");
        var escolha = s.options[s.selectedIndex].value;

        var e = retornaId("quantidadeRefri");
        var escolhaa = e.options[e.selectedIndex].value;
        
        if (escolha == "Lata") {
            ValorRefri = 2.5 * escolhaa;
           retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
           retornaId("totalFinalH").value = retornaId("totalFinal").value;
           }
        else if (escolha == "umLitro") {
            ValorRefri = 3.5 * escolhaa;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }
        else if (escolha == "doisLitros") {
            ValorRefri = 4.5 * escolhaa;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }

        else if (escolha == "semRefri") {
            ValorRefri = 0;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
        }   
    }

    function calcSuco(){
        var s = retornaId("suco");
        var escolha = s.options[s.selectedIndex].value;

        var e = retornaId("quantidadeSuco");
        var escolhaa = e.options[e.selectedIndex].value;
        
        if (escolha == "Lata") {
            ValorSuco = 2.5 * escolhaa;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
            
           }
        else if (escolha == "umLitro") {
            ValorSuco = 3.5 * escolhaa;
           retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
           retornaId("totalFinalH").value = retornaId("totalFinal").value;
           
        }

        else if (escolha == "semSuco") {
            ValorSuco = 0;
            retornaId("totalFinal").value = valorHamburguer + batatasP + batatasM + batatasG + ValorRefri + ValorSuco;
            retornaId("totalFinalH").value = retornaId("totalFinal").value;
            
        }   
    }
        
