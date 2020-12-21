const Sequelize = require('sequelize');
const db = require('../config/db.js');

const Penduduk = db.define(
    "data_penduduk",{
        nik:{type:Sequelize.STRING},
        nama:{type:Sequelize.STRING},
        tempat_lahir:{type:Sequelize.STRING},
        tgl_lahir:{type:Sequelize.DATE},
        jenis_kelamin:{type:Sequelize.STRING},
        alamat:{type:Sequelize.STRING},
        rt_rw:{type:Sequelize.STRING},
        kel_desa:{type:Sequelize.STRING},
        kecamatan:{type:Sequelize.STRING},
        kab_kota:{type:Sequelize.STRING},
        agama:{type:Sequelize.STRING},
        status_kawin:{type:Sequelize.STRING},
        pekerjaan:{type:Sequelize.STRING},
        no_kk:{type:Sequelize.STRING}
    },
    {
        freezeTableName:true
    }
);

module.exports = Penduduk;