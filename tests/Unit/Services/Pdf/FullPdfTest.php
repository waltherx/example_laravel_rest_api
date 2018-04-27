<?php

namespace Tests\Unit\Services\Pdf;

use App\Constants\PdfTypes;
use App\Services\Pdf\FullPdf;
use App\Structs\PdfData;

class FullPdfTest extends AbstractPdfTestCase
{
    private const FILENAME_PATTERN = 'full_%d.pdf';
    private const HTML_TEMPLATE = 'pdfs.full';

    protected function getFilename(): string
    {
        return sprintf(self::FILENAME_PATTERN, self::USER_ID);
    }

    protected function getTemplate(): string
    {
        return self::HTML_TEMPLATE;
    }

    protected function getPdfData(): PdfData
    {
        $pdfDataArray = $this->getPdfDataArray();
        $pdfData = $pdfDataArray[$this->getPdfTypeTitle()];
        return $pdfData;
    }

    protected function getPdfType(): string
    {
        return FullPdf::class;
    }

    protected function getPdfTypeTitle(): string
    {
        return PdfTypes::$titles[PdfTypes::FULL];
    }
}
