(function ($) {
  'use strict';

  /*--------------------------------------------------------------
  ## Down Load Button Function - Modified for Single Page Fit
  ----------------------------------------------------------------*/
  $('#generatePDF').on('click', function () {
    var downloadSection = $('#download_section');
    var cWidth = downloadSection.width();
    var cHeight = downloadSection.height();
    var topLeftMargin = 0; // Keep margin possibility, though 0 here

    // --- MODIFICATION START ---

    // 1. Calculate PDF page dimensions based on content aspect ratio
    //    The PDF page width will be the content width (plus margins if any)
    //    The PDF page height will be calculated to maintain the original content's aspect ratio.
    var pdfWidth = cWidth + (topLeftMargin * 2);
    var pdfHeight = pdfWidth * (cHeight / cWidth); // Calculate height based on aspect ratio

    // --- MODIFICATION END ---


    // Use html2canvas to capture the content
    html2canvas(downloadSection[0], {
        allowTaint: true,
        useCORS: true, // Often needed for external images/fonts
        scale: 2 // Optional: Increase scale for better resolution, may increase processing time
      }).then(function(canvas) { // 'canvas' is the captured image data
        // canvas.getContext('2d'); // No need to get context here

        var imgData = canvas.toDataURL('image/jpeg', 1.0); // Get image data

        // --- MODIFICATION START ---

        // 2. Create a jsPDF instance with the calculated single page dimensions
        //    The page size array [pdfWidth, pdfHeight] now matches the content's aspect ratio.
        var pdf = new jsPDF('p', 'pt', [pdfWidth, pdfHeight]);

        // 3. Add the *entire* captured image to the *first* (and only) page.
        //    Scale the image to fit the calculated pdfWidth and pdfHeight exactly.
        pdf.addImage(
          imgData,
          'JPG',
          topLeftMargin,  // X position
          topLeftMargin,  // Y position
          pdfWidth,       // Draw the image at the full width of the PDF page
          pdfHeight       // Draw the image at the full height of the PDF page
        );

       // --- MODIFICATION END ---

        // 5. Save the single-page PDF
        pdf.save(`infiniteshores-payment-receipt-${Math.floor(Math.random() * 1000000)}.pdf`);
      });
  });
})(jQuery); // End of use strict
