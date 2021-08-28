module.exports = {
  columns: 12,
  offset: '20px', //columns
  container: {
    maxWidth: '1440px',
    fields: '130px' // Внимание! fields обязан быть >= offset / 2
  },
  breakPoints: {
    xl: {
      width: '1194px',
      fields: '26px'
    },
    lg: {
      width: '992px',
      fields: '20px'
    },
    md: {
      width: '768px'
    },
    sm: {
      width: '414px'
    },
    xs: {
      width: '320px',
      fields: '10px'
    }
  },
  // detailedCalc: true
};