create table Users(
ID int primary key auto_increament,
FullName varchar(200),
password varchar(20),
Email varchar (20),);

 create table categories (
 ID int primary key auto_increament,
 CategorieName varchar (50)
 );

 create table SousCatégories(
 ID int primary key auto_increament,
 SousCatégoriesName varchar (50)
 );

create table Projects( 
ID int primary key auto_increament,
ProjectTitle varchar(50),
Description varchar (400),
categoriesID int foreign key references categories (ID),
SousCatégoriesID int foreign key references SousCatégories (ID),
UsersID int foreign key references Users (ID)
);
create table Testimonials(
ID int primary key auto_increament,
Comments varchar (200),
UserID int foreign key references Users (ID)
);
create table Freelaces(
ID int primary key auto_increament,
FullName varchar(50),
Compétances varchar (200),
UserID int foreign key references Users (ID),
);
create table Offres (
ID int primary key auto_increament,
Amount int ,
Deadline time,
);
insert into Users (FullName,password ,Email)
values
('basmaElandalosy','youcode','basma@gmail.com'),
('SalimaBouhamidi','IamHere','salima@gmail.com');

select*from Users 

insert into  categories (CategorieName)
values ('Technologiques'),
values ('Santé');
select * from categories;

insert into SousCatégories (SousCatégoriesName)
values
('Electronique'),
 ('Médecine');
select*from SousCatégories;

insert into Projects (ProjectTitle, Description, categoriesID, SousCatégoriesID, UserID) 
values 
('Projet Web', 'Développement un site web moderne', 2, 2, 1);

update Projects
set ProjectTitle='Recherche des maladies',Description='Trouver des maladies rares'
where ID=2;

insert into Testimonials ( Comments,UserID)
values 
('Une collaboration exceptionnelle',1),
('Le projet a été livré à temps',2);
select *from Testimonials;

insert into Freelaces (FullName,Compétances,UserID)
values
('Ibttisam Hani','Devlopeure',1),
('Ouissal Amekroud','Desiner',2);

update Freelaces
set FullName='Aymane benhima',Compétances='Full stuck'
where ID=2;
select *from Freelaces;

drop table Offres;

create table Offres (
ID int primary key auto-increament,
Amount int ,
Deadline Date,
);
insert into Offres (Amount, Deadline)
values 
(200,'2023-12-12'),
(400,'2023-4-12');

update Offres
set Amount=300
where ID=2;














