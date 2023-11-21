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

    if(campo.name == "setor")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite um setor";
        }
        else
        {
            msnErro.textContent="";
        }
    }

    if(campo.name == "funcao")
    {
        if(campo.value.length<5)
        {
            msnErro.textContent = "Digite a função";
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

    const cpf = document.querySelector("#CPF");
    //cpf.value = cpf.value.replace(/\.|-/g, "");
  
    if (
      cpf.value === "11111111111" ||
      cpf.value === "22222222222" ||
      cpf.value === "33333333333" ||
      cpf.value === "44444444444" ||
      cpf.value === "55555555555" ||
      cpf.value === "66666666666" ||
      cpf.value === "77777777777" ||
      cpf.value === "88888888888" ||
      cpf.value === "99999999999" ||
      cpf.value === "00000000000"
    ) 
    {
      alert("O CPF informado é inválido");
  
      return; 
    }
  
    const soma = 0;
    const peso = 10;
  
    for (const i = 0; i < 9; i++) 
    {
      soma += cpf.value[i] * peso;
      peso--;
    }
  
    const digitoUm = soma % 11;
  
    if (digitoUm < 1)
    {
      digitoUm = 0;
    } else {
      digitoUm = 11 - digitoUm;
    }
  
    soma = 0;
    peso = 11;
  
    for (const i = 0; i < 10; i++) 
    {
      soma += cpf.value[i] * peso;
      peso--;
    }
  
    const digitoDois = soma % 11;
  
    if (digitoDois < 2) 
    {
      digitoDois = 0;
    } else 
    {
      digitoDois = 11 - digitoDois;
    }
  
    if (cpf.value[9] == digitoUm && cpf.value[10] == digitoDois) 
    {
      alert("Cadastro realizado!");
      cpf.value = cpf.value.substring(0,3)+"."+cpf.value.substring(3,6)+"."+cpf.value.substring(6,9)+"-"+cpf.value.substring(9,11);
      document.getElementById('CPF').value = cpf.value;
    } else 
    {
      alert("O CPF informado é inválido");
    }

}