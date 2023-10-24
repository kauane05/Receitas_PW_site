create database bd_site_receita;
use bd_site_receita;

create table Funcionario(
id_fun int primary key not null,
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
id_log int primary key not null,
nome_log varchar(250),
email_log varchar(150),
senha_log varchar(8)
);

create table Receita (
id_rec int primary key not null,
nome_rec varchar(250),
ingrediente_rec varchar(2000),
tipo_rec varchar(45),
modo_preparo_rec varchar(5000),
tempo_preparo_rec varchar(45),
nome_chef_rec varchar(250),
data_publi_rec date,
quant_pess_serve_rec int,
id_fun_fk int,
foreign key(id_fun_fk) references Funcionario(id_fun)
);

create table Usuario(
id_usu int primary key not null,
nome_usu varchar(120),
sobrenome_usu varchar(120),
senha_usu varchar(8),
telefone_usu varchar(50),
data_nasc_usu date,
email_usu varchar(150),
endereco_usu varchar(150),
cpf_usu varchar(45),
id_log_fk int,
foreign key(id_log_fk) references Login(id_log)
);

create table Assinatura(
id_ass int primary key not null,
tipo_pag_ass varchar(45),
periodo_ass varchar(45),
valor_ass double,
data_ass date,
data_encerra_ass date
);

create table Produto (
id_pro int primary key not null,
nome_pro varchar(250),
codigo_barras_pro varchar(200),
data_vali_pro date,
data_fab_pro date,
quant_pro int,
descricao_pro varchar(250)
);

create table Assinatura_Produto(
id_asspro int primary key not null,
id_ass_fk int,
foreign key (id_ass_fk) references Assinatura (id_ass),
id_pro_fk int,
foreign key (id_pro_fk) references Produto (id_pro)
);

create table Venda (
id_ven int primary key not null,
valor_ven double,
tipo_pag_ven varchar(50),
tipo_cartao_ven varchar(50),
data_ven date,
id_usu_fk int,
foreign key(id_usu_fk) references Usuario (id_usu),
id_fun_fk int,
foreign key (id_fun_fk) references Funcionario (id_fun),
id_ass_fk int,
foreign key (id_ass_fk) references Assinatura (id_ass)
);

create table Venda_Produto (
id_venpro int primary key not null,
id_ven_fk int,
foreign key (id_ven_fk) references Venda (id_ven),
id_pro_fk int,
foreign key (id_pro_fk) references Produto (id_pro)
);
