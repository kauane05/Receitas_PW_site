create database bd_site_pw2;
use bd_site_pw2;

create table Funcionario(
id_fun int primary key auto_increment,
nome_fun varchar(250),
email_fun varchar(150),
endereco_fun varchar(150),
setor_fun varchar(100),
telefone_fun varchar(50),
funcao_fun varchar(150),
cpf_fun varchar(45),
data_nasc_fun date 
);

create table Login (
id_log int primary key auto_increment,
nome_log varchar(250),
email_log varchar(150),
senha_log varchar(8)
);

create table Receita (
id_rec int primary key auto_increment,
nome_rec varchar(250),
ingrediente_rec varchar(2000),
tipo_rec varchar(45),
modo_preparo_rec varchar(5000),
tempo_preparo_rec varchar(45),
nome_chef_rec varchar(250),
data_publi_rec date,
quant_pess_serve_rec int
);

create table Usuario(
id_usu int primary key auto_increment,
nome_usu varchar(120),
sobrenome_usu varchar(120),
senha_usu varchar(8),
telefone_usu varchar(50),
data_nasc_usu date,
email_usu varchar(150),
endereco_usu varchar(150),
cpf_usu varchar(45)
);

create table Assinatura(
id_ass int primary key auto_increment,
nome_ass varchar(45),
email_ass varchar(45),
senha_ass varchar(300)
);

create table Produto (
id_pro int primary key auto_increment,
nome_pro varchar(250),
codigo_barras_pro varchar(200),
data_vali_pro date,
data_fab_pro date,
quant_pro int,
valor_pro double,
descricao_pro varchar(250)
);

create table Venda (
id_ven int primary key auto_increment,
nomeCli_ven varchar(300),  
nomeFun_ven varchar(300), 
numero_ven int, 
valor_ven double, 
tipo_ven varchar(50),
data_ven date, 
endereco_ven varchar(300),
dataEnt_ven date 
);

create table Pagamento (
id_pag int primary key auto_increment,
dia_pag varchar(100), 
numeroVen_pag int,
valor_pag double, 
numeroCart_pag int,
titularCart_pag varchar(300), 
mes_pag varchar(100), 
ano_pag varchar(100), 
cvvCart_pag varchar(100)
);