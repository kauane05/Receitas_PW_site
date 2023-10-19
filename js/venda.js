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
                msnErro.textContent = "Digite o número de venda";
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
                msnErro.textContent = "Digite o valor da venda";
            }
            else
            {
                msnErro.textContent="";
            }
        }

        if(campo.name == "tipo")
        {
            if(campo.value.length<5)
            {
                msnErro.textContent = "Digite o tipo de pagamento";
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
                msnErro.textContent = "Digite a data da venda";
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

    if(campo.name == "data")
        {
            if(campo.value.length<5)
            {
                msnErro.textContent = "Digite a data de estimativa da entrega";
            }
            else
            {
                msnErro.textContent="";
            }
        }
    
    }
    
