const axios = require(`axios`)

const apiKey = `369c4d989771b5bdc81f7ca203297653`
const password = `15e2b8e0a600d4873eca1488c1cfb46c`

const Authorization = `Basic ${Buffer.from(`${apiKey}:${password}`).toString(`base64`)}`
console.log(Authorization)

module.exports = axios.create({
  baseURL: `https://otltest3.myshopify.com/admin/api/2020-01`,
  headers: { Authorization }
})