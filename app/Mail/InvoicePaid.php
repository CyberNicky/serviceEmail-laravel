<!-- <?php

use App\Mail\InvoicePaid;
use App\Models\Invoice;

$invoice = Invoice::find(1);
 
return (new InvoicePaid($invoice))->render();

function test_mailable_content()
    {
        $user = User::factory()->create();
     
        $mailable = new InvoicePaid($user);
     
        $mailable->assertFrom('jeffrey@example.com');
        $mailable->assertTo('taylor@example.com');
        $mailable->assertHasCc('abigail@example.com');
        $mailable->assertHasBcc('victoria@example.com');
        $mailable->assertHasReplyTo('tyler@example.com');
        $mailable->assertHasSubject('Invoice Paid');
        $mailable->assertHasTag('example-tag');
        $mailable->assertHasMetadata('key', 'value');
     
        $mailable->assertSeeInHtml($user->email);
        $mailable->assertSeeInHtml('Invoice Paid');
        $mailable->assertSeeInOrderInHtml(['Invoice Paid', 'Thanks']);
     
        $mailable->assertSeeInText($user->email);
        $mailable->assertSeeInOrderInText(['Invoice Paid', 'Thanks']);
     
        $mailable->assertHasAttachment('/path/to/file');
        $mailable->assertHasAttachment(Attachment::fromPath('/path/to/file'));
        $mailable->assertHasAttachedData($pdfData, 'name.pdf', ['mime' => 'application/pdf']);
        $mailable->assertHasAttachmentFromStorage('/path/to/file', 'name.pdf', ['mime' => 'application/pdf']); -->
        $mailable->assertHasAttachmentFromStorageDisk('s3', '/path/to/file', 'name.pdf', ['mime' => 'application/pdf']);
    }
