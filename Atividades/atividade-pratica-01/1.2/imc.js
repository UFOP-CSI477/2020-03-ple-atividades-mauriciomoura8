function calcular(){

    let imc = 0;
    let peso = document.formulario.peso.value;
    let altura = document.formulario.altura.value;

    imc = peso / (altura*altura)

    if(imc 
    peso_ideal = imc*altura*altura

    apresentarTabela(imc);

    
}

function apresentarTabela(imc){
    
    document.getElementById('resultado').innerHTML  = 'Resultado: ' + peso;
    document.getElementById('calcular').style.display="none";
    document.getElementById('entradas').style.display="none";
    document.getElementById('novo').style.display="block";

    if(imc < 18.5){
        document.getElementById('1').setAttribute('class','table-success');
    }
    else if(imc >= 18.5 && imc <= 24.9){
        document.getElementById('2').setAttribute('class','table-success');
    }
    else if(imc >= 25 && imc <= 29.9){
        document.getElementById('3').setAttribute('class','table-warning');
    }
    else if(imc >= 30 && imc <= 34.9){
        document.getElementById('4').setAttribute('class','table-warning');
    }else if(imc >= 35 && imc <= 39.9){ 
        document.getElementById('5').setAttribute('class','table-danger');
    }else if(imc > 40){
        document.getElementById('6').setAttribute('class','table-danger');
    }




}



/**Recarregar página*/
function recarregar(){
    location.reload();
  }
  