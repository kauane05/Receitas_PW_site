const input = document.querySelectorAll("[required]");
input.forEach((elemento)=>{
    elemento.addEventListener("blur", (evento)=>{
        console.log(evento.target.value)
        validacampo(evento.target)
    });
});

function validacampo(campo){

    const msnErro = campo.parentNode.querySelector("[data-erro]");

    if(campo.name == "nome")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite um nome";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "nomefun")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite um nome";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "numero")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite o número de assinatura";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "valor")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite o valor da assinatura";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    
    if(campo.name === "tipo")
    {
        if(campo.value === "")
        {
            msnErro.textContent = "Informe o tipo de pagamento";
        }
        else
        {
            msnErro.textContent = "";
        }
    }

    if(campo.name === "periodo")
    {
        if(campo.value === "")
        {
            msnErro.textContent = "Informe o período de assinatura";
        }
        else
        {
            msnErro.textContent = "";
        }
    }

    if(campo.name === "data")
    {
        if(campo.value === "")
        {
            msnErro.textContent = "Informe a data";
        }
        else
        {
            msnErro.textContent = "";
        }
    }

}