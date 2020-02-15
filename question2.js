const moment = require(`moment`)
const format = `YYYY-MM-DD HH:mm`

const verifyDateTimeFormat = dateTime => {
  const result = moment(dateTime, format, true).isValid()

  return result
}

verifyDateTimeFormat(`2020-02-28 23:59`)