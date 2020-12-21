const sequelize = require("sequelize");

const db = new sequelize("api_posmas","root","",{
    dialect: "mysql"
});

db.sync({});

module.exports = db;