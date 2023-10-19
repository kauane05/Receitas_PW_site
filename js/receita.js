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

 if(campo.name == "ingrediente")
 {
     if(campo.value.length<5)
     {
         msnErro.textContent = "Digite os ingredientes";
     }
     else
     {
         msnErro.textContent="";
     }
 }

 if(campo.name == "preparo")
 {
     if(campo.value.length<5)
     {
         msnErro.textContent = "Digite o modo de preparo";
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
         msnErro.textContent = "Informe o tipo da receita";
     }
     else
     {
         msnErro.textContent = "";
     }
 }

 if(campo.name == "preparo")
 {
     if(campo.value.length<5)
     {
         msnErro.textContent = "Digite o tempo de preparo";
     }
     else
     {
         msnErro.textContent="";
     }
 } 

 if(campo.name == "nome")
 {
     if(campo.value.length<5)
     {
         msnErro.textContent = "Digite o nome do chef da receita";
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
         msnErro.textContent = "Digite a data de publicação da receita";
     }
     else
     {
         msnErro.textContent="";
     }
 }

 if(campo.name == "nome")
 {
     if(campo.value.length<5)
     {
         msnErro.textContent = "Digite a quantidade de pessoas que essa receita serve";
     }
     else
     {
         msnErro.textContent="";
     }
 }

}