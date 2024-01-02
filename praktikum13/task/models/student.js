const db = require("../config/database");
const students = require("../data/students");

// make Student model
class Student {
    static all() {
        return new Promise((resolve, reject) => {
            // lakukan query ke db untuk ambil data
            const sql = "SELECT * FROM students";
            db.query(sql, (sql, results) => {
                resolve(results);
            });
        });
    }

    /**
  * TODO 1: Buat fungsi untuk insert data.
  * Method menerima parameter data yang akan diinsert.
  * Method mengembalikan data student yang baru diinsert.
  */
    static async create(Student) {
        const id = await new Promise((resolve, reject) => {
            const sql = "INSERT INTO students SET ?";
            db.query(sql, Student, (err, results) => {
                resolve(this.show(results.insertId));
            });
        });


        return new Promise((resolve, reject) => {
            const sql = "INSERT INTO students SET ?";
            db.query(sql, Student, (err, results) => {
                resolve(this.show(result.insertId));
            });
        });
    }

    static show(id) {
        return new Promise((resolve, reject) => {
            const sql = `SELECT * FROM students WHERE id = ${id} `;
            db.query(sql, (err, results) => {
                resolve(results);
            });
        });
    }

    static async update(id,data){
        await new Promise((resolve,reject)=>{
            const sql = "UPDATE students SET ? WHERE id = ?";
            db.query(sql, [data.id],(err, results)=>{
                resolve(results);
            });

        }); 

        const student = await this.find(id);
        return student;
    }

    static async delete(id) {
        return new Promise((resolve,reject) =>{
            const sql = "DELETE FROM students WHERE id = ?";
            db.query(sql, id, (err, results) =>{
                resolve(results)
            });
        });
    }


}


// export model
module.exports = Student;