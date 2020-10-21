# Recruitment-Process-Management

## Itroduction

Recruiter Process Management project is developed to make the recruitment process
advance by providing a web-portal to the recruiter. Collecting the candidate’s
information to scheduling an interview of that candidate and taking the status to
selection - done as easily as possible. Recruiter can manage all candidate which he/she
have entered. After adding the candidate, he/she can schedule that candidate’s
interview which can be updatable, after interview give the different rounds of interview
as a status which provides easy to access. Overall all the phases of recruitment would
achieve by this project.

## Prerequisites

1. Copy Downloaded folder and paste it in htdocs folder if you have XAMPP Server or www folder if you have Wamp server.
2. Open phpmyadmin and create database and name it as "project" and then click import section and select
  Main_project/Database/project.sql and import it.
3. Open Main_project\application\config\constants and change Base_url constrain (change localhost port according to your system)
  and provide second argument for SENDER_EMAIL,SENDER_PASSWORD through which email sent.
4. Default Recruiter:
    Username: Company_rec
    Password: company_rec
   Default Admin:
    Username: Company_admin
    Password: company_admin
    
   You can create Recruiter and Admin accounts by entering details in user table and specify their roles in u_role Column.
5. That's all you need to do. Now Enjoy!

## Screenshots

   ![s1](https://user-images.githubusercontent.com/63452683/96695058-d4c34d00-13a6-11eb-9822-e07644b5a015.PNG)
   ![s2](https://user-images.githubusercontent.com/63452683/96695110-e60c5980-13a6-11eb-8571-4e9f8d9e5c37.PNG)
   ![s3](https://user-images.githubusercontent.com/63452683/96695152-f1f81b80-13a6-11eb-948c-f00cae7f2c07.PNG)

## Technologies

* CodeIgniter (PHP Web Framework)
* Mysql Database
