const util = require(`util`)
const axios = require(`./lib/axios`)

const api = async () => {
  try {
    const {data} = await axios.get(`/products/1962026532923.json`)
    console.log(util.inspect(data, false, null, true))

    const { product: {variants: [{ price } = {}] = []} ={} } = data

    console.log(price)
    return price
  } catch (err) {
    console.log(err, `it's in error`)
  }

}

const main = async () => {
  await api()
}

main()
