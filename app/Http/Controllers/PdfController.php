<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use Illuminate\Http\Request;
use TCPDF;
use TCPDF_FONTS;

class LayoutsPdf extends TCPDF {

    // Page header
    public function Header() {
        // Import font
        $fontPath = public_path('/assets/fonts/AbyssinicaSIL-R.ttf');
        $fontName = TCPDF_FONTS::addTTFfont($fontPath, 'TrueTypeUnicode', '', 96);

        // Set font
        $this->SetFont($fontName, 'B', 15);

        // Logo on the left
        $image_left = public_path('assets/images/user.png');
        $this->Image($image_left, 20, 10, 30, 20, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

        // Logo on the right
        $image_right = public_path('assets/images/logo.png');
        $this->SetX(170); // Set X position to the right of the title
        $this->Image($image_right, $this->GetX(), $this->GetY(), 25, 15, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

        // set bacground image
        $img_file = public_path('assets/images/logo.png');

        // Set the transparency level
        $this->SetAlpha(0.1); // Adjust the transparency level (0.0 - 1.0)
        $this->Image($img_file, 12, 80, 180, 90, '', '', '', false, 300, '', false, false, 0);

        // Reset the transparency level
        $this->SetAlpha(1.0); // Reset to full opacity

        // Title
        $this->SetX(70); // Set X position to the right of the image
        $this->MultiCell(80, 10, 'የኢንፎርሜሽን ቴክኖሎጂ ልማት ቢሮ ', 0, 'C');

        // X position to the right for the subtitle
        $this->SetX(25);

        // Subtitle
        $this->SetFont($fontName, '', 12); // Set a smaller font size for the subtitle
        $this->MultiCell(0, 10, "Innovation and Technology Development Bureau", 0, 'C');

        // Move to the next line
        $this->Ln(20);

    }

    // Page footer
    public function Footer() {

        // Import font
        $fontPath = public_path('/assets/fonts/AbyssinicaSIL-R.ttf');
        $fontName = TCPDF_FONTS::addTTFfont($fontPath, 'TrueTypeUnicode', '', 96);

        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont($fontName, 'I', 8);

        // X position to the right for the subtitle
        $this->SetX(180);

        // Page number
        $this->Cell(0, 10, 'ገፅ '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
class PdfController extends Controller
{
    //
    public function RequestPdf($requestId)
{
    // Fetch the request by ID
    $Request = Requests::find($requestId);

    // Check if the request exists
    if (!$Request) {
        return redirect()->back()->with('error', 'Request not found.');
    }

    // Create a new TCPDF instance
    $pdf = new LayoutsPdf();
    $pdf->AddPage();

    // Set title and author
    $pdf->SetTitle('Request Details');
    $pdf->SetAuthor('Your App Name');

    // Add the custom font
    $fontPath = public_path('/assets/fonts/AbyssinicaSIL-R.ttf');
    $fontName = TCPDF_FONTS::addTTFfont($fontPath, 'TrueTypeUnicode', '', 96);
    $pdf->SetFont($fontName, '', 12);

    // Write the content
    $html = view('Admin.Requests.Pdf', compact('Request'))->render();
    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the PDF as a download
    $pdf->Output('request_details.pdf', 'I');
}

}
