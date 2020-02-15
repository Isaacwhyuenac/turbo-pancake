const axios = require("./lib/axios")

const api = async () => {
  try {
    const { data } = await axios.post("/products.json", {
      product: {
        title: "Isaac Wai Hung YUEN",
        body_html: "<strong>A programmer willing to join the team</strong>",
        vendor: "Isaac",
        product_type: "Php and Nodejs Programmer",
        tags: [
          "php",
          "JavaScript",
          "Node.js",
        ],
        published: false
      }
    })

    console.log("whta is result data", data)
  } catch (err) {
    console.log(err, "it's in error")
  }
}

const main = async() => {
  await api()
}

main()