function validar(campo){
    
    let n = campo.value;

    if(n.length == 0|| isNaN (parseInt(n)) || n < 18){
        window.alert("Idade fora do permitido!");
        campo.value = 0;
        campo.focus();
        return false

    }

    return true;

}

        
function validar2(campo2){
    
    let n = campo2;

    if(n.length <= 3){
        window.alert("Nome incorreto!");
        campo.value = "0";
        campo.focus();
        return false

    }

    return true;

}




function calcular(){

        let n1 = document.frmDados.age;
        let n2 = document.frmDados.name;

        if(validar(n1) && validar2(n2)){

        let resultado = parseInt(n1.value);
        let resultado2 = toString(n2)

        document.frmDados.Resultado.value = resultado;
        document.frmDados.Resultado2.toString = resultado2;
        }


}