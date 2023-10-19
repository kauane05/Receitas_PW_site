const input = document.querySelectorAll("[required]");
input.forEach((elemento)=>{
    elemento.addEventListener("blur", (evento)=>{
        console.log(evento.target.value)
        validacampo(evento.target)
    });
});

function validacampo(campo){

    const msnErro = campo.parentNode.querySelector("[data-erro]");

    if(campo.name == "produto")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite o nome do produto";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "data_vali")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite a data de validade";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "codigo")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite o código do produto";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "quantidade")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite a quantidade";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "pro_des")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite a descrição do produto";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "data")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite a data de fabricação do produto";
        }
        else
        {
            msnErro.textContent="";
        }
    }

}