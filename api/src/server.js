const express = require("express");
const postgres = require("postgres"); 

const app = express();
const sql = postgres({
    host: 'db',
    database: 'api_database',
    username: 'postgres',
    password: 'postgres'
});

app.get('/users', async (req, res) => {
    let users = await sql`
        SELECT * FROM users
    `;

    res.send(users.map( user => ({id: user.id, name: user.name}) ));
});

app.get('/', (req, res) => {
    res.send("API Online");
})

app.listen(4000, '0.0.0.0', () => {
    console.log("Listening on port 4000")
});