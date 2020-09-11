function validar(campo){
    
    let n = campo.value;

    if(n.length == 0|| parseInt(n)){
        window.alert("Valor incorreto!");
        campo.value = "";
        campo.focus();
        

    }



}




function calcular(){

        let n1 = document.frmDados.age;
        let n2 = document.frmDados.age;

        let resultado = parseInt(n1) + parseInt(n2);

        document.frmDados.Resultado.value = resultado;
}