const dns = require(`dns`).promises

const verifyValidEmail = async email => {
  if (!/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g.test(email)) {
    return false
  }

  const [, mxDomain = `` ]= email.split('@')

  try {
    const results = await dns.resolveMx(mxDomain)

    if (results.length>0) return true
  } catch (err) {
    return false
  }

  return false
}

async function main() {
  const result = await verifyValidEmail('')

  console.log(result)
}

main()