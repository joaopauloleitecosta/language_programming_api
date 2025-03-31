# Attention: Readme under construction

# Language Programming API
API project about language programming.

# About
Language programming is an API that allows you to register, update, list and delete records about languages of programming. Information such as name, description, paradigm, first appeared and image of a language are represented in the API. 

# Types of fields represented in the API
name - string,
description - string,
paradigm - string,
firstapeeared - string,
image - string.

# Routes list
GET|HEAD  api/languages   
GET|HEAD  api/showLanguage/{id}   
GET|HEAD  api/status 
PUT       api/updateLanguage/{id}
POST      api/addLanguage 
DELETE    api/deleteLanguage/{id} 

# Technologies used
## Back end
- PHP
- Laravel

# How to execute the project

## Back end
Prerequisites: PHP and Composer instaled.

```bash
# clone repository
git clone https://github.com/joaopauloleitecosta/language_programming_api.git

# enter the project folder
cd name_clone_repository

# install dependencies
composer install

# create configuration file
cp .env.example .env

# open .env and config database credentials
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=user
DB_PASSWORD=password

# generate application key
php artisan key:generate

# config database - If you haven't created the database in MySQL yet, create it manually. Then run the command:
php artisan migrate

# execute the project
php artisan serve
```

# Autor
João Paulo Leite Costa

https://www.linkedin.com/in/joaopauloleitecosta/