# laravel grapphql lesson

## Overview
This is a learning repository for building a graphql server in laravel.</br>
We are building a backend for a twitter-like SNS application.</br>
Please refer to the following for the implemented functions.</br>
Note that the front end has not been implemented.</br>
You can view the execution results in the playground.

## versions

・php     v8.2.13</br>
・nginx   v1.25.3</br>
・MySQL   v8.0.33</br>
・laravel v10.37.3</br>

## Settings

To execute in a local environment, please follow the steps below.</br>

### supplement

・Commands to operate docker are summarized in a makefile.</br>
</br>
[makefile](https://github.com/Yuta-Matsumoto999/laravel_graphql_backend/blob/main/makefile)

### Prerequisites

・Docker Desktop must be installed.

### procedure

①Clone this repository
</br>
```
git clone https://github.com/Yuta-Matsumoto999/laravel_graphql_backend.git
```
</br>

②Start the container
</br>
```
make up
```
</br>

③Enter the app container
</br>
```
make app
```
</br>

④Install a group of libraries
</br>
```
composer install
```
</br>

⑤Create .env file
</br>
```
cp .env.example .env
```
</br>

⑥Set the application key
</br>
```
php artisan key:generate
```
</br>

⑦Database Connection Settings</br>
</br>
・Change the description of the .env file

```
DB_CONNECTION=db
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=root_master
DB_USERNAME=root
DB_PASSWORD=root
```
</br>

⑧Migration Execution
</br>
```
php artisan migrate
```
</br>

⑨Access to local host</br>
</br>
・Please type into your browser
```
localhost:80
```

## libraries


※ add here...