
const createpdf = () =>{
// Landscape export, 2×4 inches
var doc = new jsPDF({
  orientation: 'landscape',
  unit: 'in',
  format: [200, 200]
})

// ###########################################################################

// ###############################################################################
doc.text('Hello world!', 1, 1)

doc.save('two-by-four.pdf')

}