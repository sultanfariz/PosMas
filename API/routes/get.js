const express = require("express");
const router = express.Router();
// const jwt = require("jsonwebtoken");
// const bcrypt = require("bcryptjs");
const Penduduk = require("../models/data_penduduk.js");

router.use(express.urlencoded({extended:true}));

// router.route("/get")
//     //show all user
//     .get(async (req,res)=>{
//         try {
//             const getAll = res.json(await Penduduk.findAll({}));

//         } catch (err) {
//             console.error(err.message);
//             res.status(500).json(err);
//         }
//     }).post(async (req,res)=>{
//         try {
//         //     const {username, email, password} = req.body;

//         //     bcrypt.hash(req.body.password, 10).then(async (hash)=>{
//         //         const newUser =  new User({
//         //             username, email, password: hash
//         //         })
//         //         await newUser.save();
//         //         const message = "User successfully inserted!";
//         //         res.json({newUser, message:message});
//         //     })
//         } catch (err) {
//             console.error(err.message);
//             res.status(500).json(err);
//         }
//     });

router.route("/get")
    //search user by id
    .get(async (req,res)=>{
        try {
            const nik = req.body.nik;
            const nokk = req.body.nokk;
            const getNik = res.json(await Penduduk.findOne({
                where: {nik:nik}
            }));

        } catch (err) {
            console.error(err.message);
            res.status(500).json(err);
        }
    });
    
module.exports = router;