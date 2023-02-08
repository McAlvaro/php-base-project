# Front Controller Base Project - PHP
This is a base PHP project using the Front Controller design pattern.

> 💡 The objective is to synthesize the operation of the major PHP frameworks and understand how they really work behind the scenes.

### Requirements
- PHP ^7.4
- Composer

### Description
- A base folder structure was created, to better organize views, controllers, public files, etc.
- The ```Request.php``` class is in charge of parsing the request and segmenting the URI and obtaining the Controller and the method to execute.
- The ```Response.php``` class is in charge of processing the response that we must return to the request.
- The ```helpers.php``` file contains commonly used functions.

### Usage
- Clone the repository in your local environment
```shell
    git clone https://github.com/McAlvaro/php-base-project.git
```
- Enter into the project folder and execute the command
```shell
    composer dump
```