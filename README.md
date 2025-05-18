## Practice PHP language
- Description: This project is used for practice and research with the PHP language.
- Purpose: For learning and researching the PHP language deeper, this project recorded my learning process.
- Create on github: 25/3/2023
- Public: 15/5/2025

## Technology in project:
- Language: HTML, CSS, PHP, JS
- Bootstrap
- Docker

## How to start and testing project
### Start with xampp, wamp (don't need install docker desktop) 
- Start and run project with url localhost xampp:
```
    http://localhost/php/
```
- Start and run project with url mysql xampp:
```
    http://localhost/phpmyadmin/
```

### Start with docker (don't need install xampp, wamp, ...) 
- Install docker desktop first
- Use cmd in this path
- Start project with the command below (just the first time): 
```
    cd .\PHP-docker\
    docker-compose up -d --build
```
- Start and run project with url localhost xampp:
```
    http://localhost:84/
```

## Project structure 
- project
    - PHP-deploy-testing (CI/CD)
    - PHP-docker
        - mysql
        - nginx
            - Dockerfile
            - php.ini
        - www (php project)
        - .env
        - docker-compose.yml
    - .gitignore
    - README.md

The source was set up by KhangNguyen — do not copy