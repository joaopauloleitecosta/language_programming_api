# Attention: Readme under construction

# Language Programming API
API project about language programming.

# About
Language programming is an API that allows you to register, update, list and delete records about languages of programming. Information such as name, description, paradigm, first appeared and image of a language are represented in the API. 

## Route list

#### Return the api's status

```http
  GET  api/status
```

| Parameter   | Type       | Description                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `integer` | Return the status code of api |

#### Return all languages

```http
  GET  api/languages
```

| Parameter   | Type       | Description                           |
| :---------- | :--------- | :---------------------------------- |
| `languages` | `string` | **Required**. Return all languages |

#### Return details of language

```http
  GET  api/showLanguage/{id}
```

| Parameter   | Type       | Description                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `integer` | **Required**. Language ID to show details |

#### Return a updated language

```http
  PUT  api/updateLanguage/{id}
```

| Parameter   | Type       | Description                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `integer` | **Required**. Language ID to update info |   
   
#### Endpoint to add a language in form action

```http
  POST  api/addLanguage
```

| Parameter   | Type       | Description                                   |
| :---------- | :--------- | :------------------------------------------ |
| `addLanguage`      | `string` | **Required**. Text to form action |    

#### Return a deleted message

```http
  DELETE  api/deleteLanguage/{id}
```

| Parameter   | Type       | Description                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `integer` | **Required**. Language ID to delete |  
 
# Technologies used
## Back end
- PHP
- Laravel

# Autor
João Paulo Leite Costa

https://www.linkedin.com/in/joaopauloleitecosta/