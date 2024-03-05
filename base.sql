create table clients(
    num number not(10) primary key,
    nom varchar2(25) not nul,
    prenom varchar2(25) not null,
    ville varchar2(30) not null ,
);

create table Recoltes(
numV number(10)not null,
numP number(10)not null,
quantite number(10) not null ,
constraint precolte primary key(numV,numP),
constraint cs1 foreign key(nunV) references Vins(numV),
constraint cs2 foreign key(numP) references Producteurs(numP),
);
create table Commandes(
    ncde number(10) primary key,
    dates date not null;
    numC number(10) not null,
    numV number(10) not null,
    qte number(10,2) not null,
    constraint cs3 foreign key(numC) references Clients(numC),
    constraint cs4 foreign key(numV) references Vins(numV),
);
create table Livraisons (
    ncde number(10) not null,
    no_ordre number(10),
    qtelivree number(10,2),
   constraint plivraison primary key(ncde,no_ordre),
   constraint cs5 foreign key(ncde) references Commandes(ncde),  
);
create table Producteurs(
    numP number(10) primary key,
    nom varchar2(25) not null,
    prenom varchar2(25) not null,
    region varchar2(30) not null,
);
create table Vins(
    numV number(25) primary key,
    cru varchar2(20) not null ,
    degre number(20) not null,
);