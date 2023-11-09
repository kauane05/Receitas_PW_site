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

    if(campo.name == "sobrenome")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite um sobrenome";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "senha")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite uma senha";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "telefone")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite um telefone";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "data_nasc")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite a data de nascimento";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "email")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite um email";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "endereco")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite um endereço";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "cpf")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite um cpf";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "login")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite o id do login";
        }
        else
        {
            msnErro.textContent="";
        }
    }


}