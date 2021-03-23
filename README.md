I've created this repository for learning docker and use for future reference.

Its a simple server based on 3 containers:
- A postgres database, with an example users table.
- A NodeJS - with Express API to connect on database and listing users.
- A basic PHP website to consume the API and show the users in an HTML table.

Setup
---
There is a simple bash script, that setup everything, like dependencies and build images.<br>
You can build the project and get the containers up by running the following command in the root folder of the project:

`sh build.sh && docker-compose up`

Make sure you have installed `docker` and `docker-compose`

Usage
---
After build and getting the containers up and running, will be two addresses available:

- `http://localhost:8888` - PHP Website
- `http://localhost:4000/users` - NodeJS API