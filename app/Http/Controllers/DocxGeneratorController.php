<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocxGeneratorController extends Controller
{
    public function salesDOC(Request $request)
    {
        $data=json_decode($request->all()['data'],true);
       
        $pw = new \PhpOffice\PhpWord\PhpWord();
        $styleTable = array('borderColor'=>'006699',
              'borderSize'=>6,
              'cellMargin'=>50);
        $styleFirstRow = array('bgColor'=>'66BBFF');
        $pw->addTableStyle('myTable', $styleTable, $styleFirstRow);
        $header = array('size' => 16, 'bold' => true);
        $pw->addTitleStyle(4, array('name'=>'HelveticaNeueLT Std Med', 'size'=>16, 'color'=>'990000')); //h1
        $pw->setDefaultFontName('Tahoma');
        $pw->setDefaultFontSize(10);

        $section = $pw->addSection();
        $section->addText("Are you finding it really difficult to {$data['q8']}?");
        $section->addText("");
        $section->addText("{$data['q4']} Reveals How to {$data['q6']} in Just {$data['q7']}");
        $section->addText("");
        $section->addText("Finally, You'll Be Able Push Your Business Forward With a Dead Simple {$data['q5']}");
        $section->addText("");
        $section->addText("You're smart, driven and you've got big plans to push your business forward. But trying to {$data['q8']} is not a small task.
        As you struggle to keep your business afloat, stress has gotten the best of you
        
        You have:
        
        ... and every flop has left you with less than desirable results.
        
        It's extremely frustrating when you know that you're capable of bigger and better things.");
        $section->addText("");
        $section->addText("But There is Good News!");
        $section->addText("Hey there, my name is {$data['q15']} and yes, I know exactly how you're feeling.

        These days, I've managed to achieve quite a bit of success... I'm able to {$data['q16']}, I can also {$data['q17']}, and I'm very lucky in that I can {$data['q18']}.
        
        But I'll be honest...");
        $section->addText("");
        $section->addText("Life As a Business Owner Definitely Didn't Start Out This Way...");
        $section->addText("");
        $section->addText("Before I ever achieved even a tiny taste of success, there were a lot of roadblocks. So many times I was ready to throw in the towel.

        When I first started running my own business, .
        None of it worked out for me and I just ended up ready to quit, thinking I would never be able to {$data['q8']}.
        
        Of course, you know exactly what I'm talking about, right?
        Does Any of This Sound Familiar?
        · You've {$data['q9']} which just resulted in {$data['q10']}.
        
        · You've {$data['q11']} which led to {$data['q12']}.
        
        · You've {$data['q13']} which just ended up in {$data['q14']}.");
        $section->addText("");
        $section->addText("Just Before I Was Ready to Close Up Shop, A Stroke of Luck Changed Everything.");

        $section->addText("You can only run into so many walls before you get so frustrated that the only option left seems to be quitting.

        I was just about at that point when I {$data['q22']}.
        
        As soon as I discovered this, everything instantly got easier.
        
        With this amount of success, I knew I couldn't keep it on lockdown.
        Since then, I've run into multiple others who encountered the same, never-ending battle I went through. And it seemed pretty unfair to keep it to myself... especially since it's been such a huge stepping stone in my success.
        
        So I'd like to let you in on the \"secret\".");
        $section->addText("");
        $section->addText("Introducing...");
        $section->addText("{$data['q23']}");
        $section->addText("");
        $section->addText("The {$data['q5']} that will allow you to {$data['q8']} in the next {$data['q7']}.");
        $section->addText("So what exactly is this going to do for you? Can a simple {$data['q5']} really turn everything around your business?

        Yes. Yes it can.
        
        The entrepreneur life can be stressful at times. That's the price we pay being so self-reliant.
        
        But you don't have to struggle with {$data['q3']} anymore.");
        $section->addText("");
        $section->addText("Here's How {$data['q23']} Will Benefit You:");
        $section->addText("You Don't Have to Take My Word For It...");
        $section->addText("");
        $section->addText("[TESTIMONIAL SECTION START]");
        $section->addText("");
        $section->addText("I've already shared this secret to a select group of business owners already. Truth be told, I wanted to guarantee that this would actually work time and time again.

        More importantly, I wanted to make sure you'd achieve the same results.
        
        And well... I'll let them speak for themselves...");
        $section->addText("");
        $section->addText("[TESTIMONIAL SECTION END]");
        $section->addText("");
        $section->addText("\"Yes! I'd Love to Get in On This, But What's the Catch?\"
        You've heard what I have to say. This {$data['q5']} is wonderful. But what's the catch?
        
        I'll be honest, you could skip over this offer today and {$data['q45']}.
        
        But you'd have to shell out at least {$data['q46']}.
        
        But don't worry.
        
        You won't have to pay anywhere near that amount today.
        
        In fact, I'm actually going to sweeten the deal for you right now.");
        $section->addText("");
        $section->addText("[BONUS SECTION START]");
        $section->addText("");
        $section->addText("When You Sign Up Today, You'll Also Get FREE Access To...");
        $section->addText("");
        $section->addText("You'll Get {$data['q58']} Worth of Great Products Completely Free!");
        $section->addText("");
        $section->addText("[BONUS SECTION END]");
        $section->addText("");
        $section->addText("But there is one thing...

        {$data['q1']}. Once I close down the offer we won't release it again at this price. I'm doing this because {$data['q59']}.
        Not to worry though.
        
        To make your decision extremely easy, I'm going to remove all risk!
        
        Yup, that's right. I want to guarantee you take advantage of this offer today, and feel good about it.
        
        You're protected by our {$data['q60']} money-back guarantee. If for any reason at all you're not completely satisfied, get in touch with our team and we will give you a complete refund. It's that simple.
        
        \"Yes, I Want In! How Much Will This Cost Me?\"
        
        I'm stoked for you to jump in and get started. Even more so, I can't wait for you to see the results that are waiting for you on the other side.
        
        Here's a quick recap of everything you'll receive when you secure your copy right now:
        
        · {$data['q23']}. And You're also Getting:");
        $section->addText("");
        $section->addText("When You Secure Your Copy of {$data['q23']} Today, You'll Get a Total Value of Over {$data['q61']} For ONLY...
        ");
        $section->addText("");
        $section->addText("INSERT YOUR BUY BUTTON HERE");
        $section->addText("");
        $section->addText("Before I let you go, I wanted to send out a big thank you for reading this letter.

        I'm truly excited for you to get started with {$data['q23']} and see what a huge impact this will have on the success of your business.
        
        Talk to you soon, {$data['q15']}
        P.S. You could skip over this offer, but then your business will stay right where you are now. Let me help you get out of the rut you've been in. Start achieving the results you deserve right now. Grab {$data['q23']} by clicking the buy button above.
        
        P.P.S. Just a reminder, {$data['q1']}. But don't worry. You're protected by our money back guarantee. So you can try it out today, and enjoy peace of mind. All you have to do is click the buy button above to get started.");
        $section->addText("");
        $section->addText("[Optin Form Goes Here]");
        $section->addText("");
        $section->addText("Your Company Contact Information, Phone, Email, Help Desk,
        Legal Disclaimers, Etc. Go Here
        <<End Copy>>");

        $nameTosave="offres_".time().".docx";
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($pw, 'Word2007');
        $objWriter->save($nameTosave);
        
        return response()->json(["data"=>$nameTosave]);
    }
    public function salesPDF(Request $request)
    {
        $data=json_decode($request->all()['data'],true);
       
        $pw = new \PhpOffice\PhpWord\PhpWord();
        $styleTable = array('borderColor'=>'006699',
              'borderSize'=>6,
              'cellMargin'=>50);
        $styleFirstRow = array('bgColor'=>'66BBFF');
        $pw->addTableStyle('myTable', $styleTable, $styleFirstRow);
        $header = array('size' => 16, 'bold' => true);
        $pw->addTitleStyle(4, array('name'=>'HelveticaNeueLT Std Med', 'size'=>16, 'color'=>'990000')); //h1
        $pw->setDefaultFontName('Tahoma');
        $pw->setDefaultFontSize(10);

        $section = $pw->addSection();
        $section->addText("Are you finding it really difficult to {$data['q8']}?");
        $section->addText("");
        $section->addText("{$data['q4']} Reveals How to {$data['q6']} in Just {$data['q7']}");
        $section->addText("");
        $section->addText("Finally, You'll Be Able Push Your Business Forward With a Dead Simple {$data['q5']}");
        $section->addText("");
        $section->addText("You're smart, driven and you've got big plans to push your business forward. But trying to {$data['q8']} is not a small task.
        As you struggle to keep your business afloat, stress has gotten the best of you
        
        You have:
        
        ... and every flop has left you with less than desirable results.
        
        It's extremely frustrating when you know that you're capable of bigger and better things.");
        $section->addText("");
        $section->addText("But There is Good News!");
        $section->addText("Hey there, my name is {$data['q15']} and yes, I know exactly how you're feeling.

        These days, I've managed to achieve quite a bit of success... I'm able to {$data['q16']}, I can also {$data['q17']}, and I'm very lucky in that I can {$data['q18']}.
        
        But I'll be honest...");
        $section->addText("");
        $section->addText("Life As a Business Owner Definitely Didn't Start Out This Way...");
        $section->addText("");
        $section->addText("Before I ever achieved even a tiny taste of success, there were a lot of roadblocks. So many times I was ready to throw in the towel.

        When I first started running my own business, .
        None of it worked out for me and I just ended up ready to quit, thinking I would never be able to {$data['q8']}.
        
        Of course, you know exactly what I'm talking about, right?
        Does Any of This Sound Familiar?
        · You've {$data['q9']} which just resulted in {$data['q10']}.
        
        · You've {$data['q11']} which led to {$data['q12']}.
        
        · You've {$data['q13']} which just ended up in {$data['q14']}.");
        $section->addText("");
        $section->addText("Just Before I Was Ready to Close Up Shop, A Stroke of Luck Changed Everything.");

        $section->addText("You can only run into so many walls before you get so frustrated that the only option left seems to be quitting.

        I was just about at that point when I {$data['q22']}.
        
        As soon as I discovered this, everything instantly got easier.
        
        With this amount of success, I knew I couldn't keep it on lockdown.
        Since then, I've run into multiple others who encountered the same, never-ending battle I went through. And it seemed pretty unfair to keep it to myself... especially since it's been such a huge stepping stone in my success.
        
        So I'd like to let you in on the \"secret\".");
        $section->addText("");
        $section->addText("Introducing...");
        $section->addText("{$data['q23']}");
        $section->addText("");
        $section->addText("The {$data['q5']} that will allow you to {$data['q8']} in the next {$data['q7']}.");
        $section->addText("So what exactly is this going to do for you? Can a simple {$data['q5']} really turn everything around your business?

        Yes. Yes it can.
        
        The entrepreneur life can be stressful at times. That's the price we pay being so self-reliant.
        
        But you don't have to struggle with {$data['q3']} anymore.");
        $section->addText("");
        $section->addText("Here's How {$data['q23']} Will Benefit You:");
        $section->addText("You Don't Have to Take My Word For It...");
        $section->addText("");
        $section->addText("[TESTIMONIAL SECTION START]");
        $section->addText("");
        $section->addText("I've already shared this secret to a select group of business owners already. Truth be told, I wanted to guarantee that this would actually work time and time again.

        More importantly, I wanted to make sure you'd achieve the same results.
        
        And well... I'll let them speak for themselves...");
        $section->addText("");
        $section->addText("[TESTIMONIAL SECTION END]");
        $section->addText("");
        $section->addText("\"Yes! I'd Love to Get in On This, But What's the Catch?\"
        You've heard what I have to say. This {$data['q5']} is wonderful. But what's the catch?
        
        I'll be honest, you could skip over this offer today and {$data['q45']}.
        
        But you'd have to shell out at least {$data['q46']}.
        
        But don't worry.
        
        You won't have to pay anywhere near that amount today.
        
        In fact, I'm actually going to sweeten the deal for you right now.");
        $section->addText("");
        $section->addText("[BONUS SECTION START]");
        $section->addText("");
        $section->addText("When You Sign Up Today, You'll Also Get FREE Access To...");
        $section->addText("");
        $section->addText("You'll Get {$data['q58']} Worth of Great Products Completely Free!");
        $section->addText("");
        $section->addText("[BONUS SECTION END]");
        $section->addText("");
        $section->addText("But there is one thing...

        {$data['q1']}. Once I close down the offer we won't release it again at this price. I'm doing this because {$data['q59']}.
        Not to worry though.
        
        To make your decision extremely easy, I'm going to remove all risk!
        
        Yup, that's right. I want to guarantee you take advantage of this offer today, and feel good about it.
        
        You're protected by our {$data['q60']} money-back guarantee. If for any reason at all you're not completely satisfied, get in touch with our team and we will give you a complete refund. It's that simple.
        
        \"Yes, I Want In! How Much Will This Cost Me?\"
        
        I'm stoked for you to jump in and get started. Even more so, I can't wait for you to see the results that are waiting for you on the other side.
        
        Here's a quick recap of everything you'll receive when you secure your copy right now:
        
        · {$data['q23']}. And You're also Getting:");
        $section->addText("");
        $section->addText("When You Secure Your Copy of {$data['q23']} Today, You'll Get a Total Value of Over {$data['q61']} For ONLY...
        ");
        $section->addText("");
        $section->addText("INSERT YOUR BUY BUTTON HERE");
        $section->addText("");
        $section->addText("Before I let you go, I wanted to send out a big thank you for reading this letter.

        I'm truly excited for you to get started with {$data['q23']} and see what a huge impact this will have on the success of your business.
        
        Talk to you soon, {$data['q15']}
        P.S. You could skip over this offer, but then your business will stay right where you are now. Let me help you get out of the rut you've been in. Start achieving the results you deserve right now. Grab {$data['q23']} by clicking the buy button above.
        
        P.P.S. Just a reminder, {$data['q1']}. But don't worry. You're protected by our money back guarantee. So you can try it out today, and enjoy peace of mind. All you have to do is click the buy button above to get started.");
        $section->addText("");
        $section->addText("[Optin Form Goes Here]");
        $section->addText("");
        $section->addText("Your Company Contact Information, Phone, Email, Help Desk,
        Legal Disclaimers, Etc. Go Here
        <<End Copy>>");

        $nameTosave="offres_"."_".time().".pdf";
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($pw, 'PDF');
        $objWriter->save($nameTosave);
        
        return response()->json(["data"=>$nameTosave]);
    }
    public function generate_offer(Request $request)
    {
        
        $data=$request->all()['data'];
       
        $info=json_decode($data['info'],true);
         $offers=json_decode($data['offers']);
        $bonus=json_decode($data['bonus']);
        $pw = new \PhpOffice\PhpWord\PhpWord();
        $styleTable = array('borderColor'=>'006699',
              'borderSize'=>6,
              'cellMargin'=>50);
$styleFirstRow = array('bgColor'=>'66BBFF');
$pw->addTableStyle('myTable', $styleTable, $styleFirstRow);
$header = array('size' => 16, 'bold' => true);
$pw->addTitleStyle(4, array('name'=>'HelveticaNeueLT Std Med', 'size'=>16, 'color'=>'990000')); //h1
$pw->setDefaultFontName('Tahoma');
$pw->setDefaultFontSize(10);

        $section = $pw->addSection();
       
        $section->addText(
            $info['item'],
            array('name' => 'Tahoma', 'size' => 25, 'color' => '1B2232', 'bold' => true)
        );
        $section->addText("Description",  array('name' => 'Tahoma', 'size' => 16, 'color' => '1B2232', 'bold' => true));
        $section->addText(
            $info['desc']
        );
        $section->addText( "Benefit",  array('name' => 'Tahoma', 'size' => 16, 'color' => '1B2232', 'bold' => true));
        $section->addText(
           
            $info['benefit']
        );
        $section->addTextBreak(1);
        $section->addText('What Will you get', $header);
        $table = $section->addTable();
        $table->addRow();
        $table->addCell(1750)->addText("offer");
        $table->addCell(1750)->addText("price");
        for ($r = 0; $r < count($offers); $r++) {
            $table->addRow();
            $table->addCell(1750)->addText(array_keys((array) $offers[$r])[0]);
            $table->addCell(1750)->addText(array_values((array) $offers[$r])[0]);
            
        }
        $section->addText("");

        $table2= $section->addTable();
        $table2->addRow();
        $table2->addCell(1750)->addText("bonuses");
        $table2->addCell(1750)->addText("price");
        for ($r = 0; $r < count($offers); $r++) {
            $table2->addRow();
            
            $table2->addCell(1750)->addText(array_keys((array) $offers[$r])[0]);
            $table2->addCell(1750)->addText(array_values((array) $offers[$r])[0]);
            
        }



        $nameTosave="sales_".auth()->user()->name."_".time().".docx";
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($pw, 'Word2007');
        $objWriter->save($nameTosave);
        
        return response()->json(["data"=>$nameTosave]);
        //download path
        // $download_path = storage_path('app/'.$id.'.zip');
//         $filename=$id.'zip';
//    $headers = ['Content-Type: application/zip','Content-Disposition: attachment; filename={$filename}'];
// return response($download_path, 200,$headers);
        // return response()->download([$info,$offers,$bonus]);
    }
}
