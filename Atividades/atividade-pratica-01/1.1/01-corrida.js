var contador = 0;
var array = [];

function corredor(id, nome, tempo){
    this.id=id;
    this.nome =nome;
    this.tempo = tempo;
}

function cadastrar(){
    contador = contador + 1;
    window.alert('Numero de corredores cadastrados: '+contador);
    if(contador <= 6){
    let nome = document.formulario.nome.value;
    let tempo = document.formulario.tempo.value;
    

    const c = new corredor(contador, nome, tempo);
    array.push(c);

    //conferir se conteudo está correto visualizando na tela
    //window.alert('adicionado: ' + c.id + c.nome + c.tempo)
    }else{
        window.alert('Limite de corredores atingido');
    }
}

function exibirTabelas(){

    /*Exibindo elementos cadastrados no log
    array.forEach(element => {
        console.log(array);
    });*/

    //TABELA DOS DADOS
    //exibe pelo id do div a tabela
    document.getElementById("lista").style.display="block";
    for(let contador = 0; contador < array.length; contador++){

        let l=document.createElement('tr'); //cria nova linha
        //adiona, id, nome e tempo
        l.insertCell(0).innerHTML= array[contador].id;
        l.insertCell(1).innerHTML= array[contador].nome;
        l.insertCell(2).innerHTML= array[contador].tempo;
        //adiciona as linhas na tabela pelo id da tabela
        document.getElementById("tlista").appendChild(l);

      }

      //TABELA DO RESULTADO
      array.sort(ordenarPorTempo);
      formulario.cad.disabled=true;
      formulario.exibir.disabled=true;
      formulario.tempo.disabled=true;
      formulario.nome.disabled=true;
      //varrer array ordenado
      for(let cont = 0; cont < array.length; cont++){

        let primeiroTempo=array[0].tempo;

        //cria elemento linha
        let l=document.createElement('tr');
        l.insertCell(0).innerHTML= cont + 1;
        l.insertCell(1).innerHTML= array[cont].id;
        l.insertCell(2).innerHTML= array[cont].nome;
        l.insertCell(3).innerHTML= array[cont].tempo;

        if(array[cont].tempo==primeiroTempo){
          l.insertCell(4).innerHTML="Vencedor(a)!";
        }else{
          l.insertCell(4).innerHTML="-";
        }
        //cria linha na tabela
        document.getElementById("tresultado").appendChild(l);
        //exibe a tabela pelo id do div
        document.getElementById("resultado").style.display="block";
      }


/**
 * Ordenar a lista de competidores pelo tempo
 */
function ordenarPorTempo(a, b){
    return a.tempo - b.tempo;
  }


  /**Recarregar página*/
function reload(){
    location.reload();
  }
}