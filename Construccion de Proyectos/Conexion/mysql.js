const mysql = require ('mysql')
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'colegio'
})

connection.connect((err)=>{
    if(err) throw err
    console.log('Conexion establecida')
})

const insertar = "INSERT INTO alumnos VALUES ('4', 'luis', 'suarez', 'ls23@gmail.com')"
connection.query(insertar, (err, rows)=>{
    if(err) throw err
    console.log('Datos insertados con exito')
})

connection.query('Select * From alumnos', (err,rows)=>{
    if(err) throw err
    console.log('Los datos solicitados son: ')
    console.log(rows)
})

connection.end()