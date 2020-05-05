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


## Technologies

* CodeIgniter (PHP Web Framework)
* Mysql Database
