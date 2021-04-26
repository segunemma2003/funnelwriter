<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\IOFactory;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Bullet;
use PhpOffice\PhpPresentation\Shape\RichText\Paragraph;

class PresentationController extends Controller
{
public function genPptvid(Request $request)
{
      $objPHPPowerPoint = new PhpPresentation();

      $data=(array) $request->all()['$data'];
      $objPHPPowerPoint->removeSlideByIndex(0);
      $this->slide1($objPHPPowerPoint,"How to achieve {$data['fw1']}, IN {$data['fw26']},\n
      WITHOUT {$data['fw12']}. \n (EVEN IF {$data['fw84']})");
      $this->slide1($objPHPPowerPoint,"BEFORE WE CONTINUE… \nHere’s what you’re going to discover during this workshop…");
      $this->slide1($objPHPPowerPoint,"How you can {$data['fw9']} using the \n {$data['fw6']} Method… without {$data['fw3']},\n and without {$data['fw4']}...");
      $this->slide1($objPHPPowerPoint,"The counter-intuitive way to \n brand yourself as an {$data['fw5']} so \n you can {$data['fw7']}…");
      $this->slide1($objPHPPowerPoint,"The {$data['fw8']} keys to {$data['fw9']}...");
      $this->slide1($objPHPPowerPoint,"How you can {$data['fw10']} from the {$data['fw11']}…");
      $this->slide1($objPHPPowerPoint,"My PROMISE to you.");
      $this->slide1($objPHPPowerPoint, "A step-by-step strategy for {$data['fw9']} \n without {$data['fw12']}.");
      $this->slide1($objPHPPowerPoint,"I have some really COOL gifts for \n you. ");
      $this->slide1($objPHPPowerPoint,"Plus, some CRUCIAL things you \n need to understand.");
      $this->slide1($objPHPPowerPoint,"Does this sound like you?");
      $this->slide1($objPHPPowerPoint,"Do you have a special gift in \n {$data['fw13']}, but you {$data['fw14']}?");
      $this->slide1($objPHPPowerPoint,"Are you tired of {$data['fw15']} while {$data['fw16']} succeed?");
      $this->slide1($objPHPPowerPoint,"Are you {$data['fw14']}?");
      $this->slide1($objPHPPowerPoint,"Do you have a {$data['fw17']}, but you \n get {$data['fw18']}?");
      $this->slide1($objPHPPowerPoint, "Most of what we’ve been told \n about {$data['fw1']} is COMPLETELY \n WRONG…");
      $this->slide1($objPHPPowerPoint, "The real problem? ");
      $this->slide1($objPHPPowerPoint,"{$data['fw19']}");
      $this->slide1($objPHPPowerPoint,"…without {$data['fw3']}");
      $this->slide1($objPHPPowerPoint,"The ONE thing you need to \n know…");
      $this->slide1($objPHPPowerPoint,"{$data['fw20']} {$data['fw1']} by {$data['fw85']}.");
      $this->slide1($objPHPPowerPoint,"If you're like most people, you \n know you deserve {$data['fw21']}... but \n {$data['fw3']}.");
      $this->slide1($objPHPPowerPoint,"THE GAME HAS CHANGED.");
      $this->slide1($objPHPPowerPoint,"So who am I?…");
      $this->slide1($objPHPPowerPoint,"Known as…");
      $this->slide1($objPHPPowerPoint,"Creator/author of…");
      $this->slide1($objPHPPowerPoint,"Featured on…");
      $this->slide1($objPHPPowerPoint,"For the past {$data['fw22']}, I’ve been…");
      $this->slide1($objPHPPowerPoint,"My superpower is helping \n {$data['fw20']} {$data['fw1']} WITHOUT {$data['fw3']}");
      $this->slide1($objPHPPowerPoint,"CONFESSION!");
      $this->slide1($objPHPPowerPoint,"YES, I struggled too!");
      $this->slide1($objPHPPowerPoint,"ROCK BOTTOM! ");
      $this->slide1($objPHPPowerPoint,"{$data['fw23']}...");
      $this->slide1($objPHPPowerPoint,"{$data['fw24']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw25']}");
      $this->slide1($objPHPPowerPoint,"So if you’ve ever been nervous \n about\n {$data['fw1']} …");
      $this->slide1($objPHPPowerPoint,"THE TURNING POINT…");
      $this->slide2($objPHPPowerPoint,"Decided to {$data['fw26']}","Decided to commit to {$data['fw27']}");
      $this->slide1($objPHPPowerPoint,"And what happened next was \n rather unexpected…");
      $this->slide1($objPHPPowerPoint,"My life changed FOREVER…");
      $this->slide1($objPHPPowerPoint,"{$data['fw28']}...");
      $this->slide1($objPHPPowerPoint,"{$data['fw29']}...");
      $this->slide1($objPHPPowerPoint,"I “ACCIDENTALLY” discovered \n {$data['fw30']}");
      $this->slide1($objPHPPowerPoint,"The only pathway to lasting \n success is to {$data['fw90']}");
      $this->slide1($objPHPPowerPoint,"Stop {$data['fw31']}.");
      $this->slide1($objPHPPowerPoint,"Start {$data['fw32']}.");
      $this->slide1($objPHPPowerPoint,"Here’s why this is important…");
      $this->slide1($objPHPPowerPoint,"{$data['fw33']} have been able to {$data['fw9']} \n with my {$data['fw34']}.");
      $this->slide1($objPHPPowerPoint,"This is a FAST/EASY system for \n [achieving another big result].");
      $this->slide1($objPHPPowerPoint,"I want to help you [achieve  \n another big goal] in {$data['fw35']}.");
      $this->slide1($objPHPPowerPoint,"So let’s get into the {$data['fw36']} to \n {$data['fw1']}:");
      $this->slide1($objPHPPowerPoint,"{$data['fw33']} have been able to {$data['fw9']} \n with my {$data['fw34']}.");
      $this->slide1($objPHPPowerPoint,"Key 1 {$data['fw37']}");
      $this->slide1($objPHPPowerPoint,"Here’s why this is important…");
      $this->slide1($objPHPPowerPoint,"{$data['fw38']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw39']}");
      $this->slide1($objPHPPowerPoint,"Example / Testimonial");
      $this->slide1($objPHPPowerPoint,"{$data['fw42']}");
      $this->slide1($objPHPPowerPoint,"Here’s why this is important…");
      $this->slide1($objPHPPowerPoint,"{$data['fw42']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw43']}");
      $this->slide1($objPHPPowerPoint,"Example / Testimonial");
      $this->slide1($objPHPPowerPoint,"Key 3 {$data['fw45']}");
      $this->slide1($objPHPPowerPoint,"Here’s why this is important…");
      $this->slide1($objPHPPowerPoint,"{$data['fw46']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw47']}");
      $this->slide1($objPHPPowerPoint,"Example / Testimonial");
      $this->slide1($objPHPPowerPoint,"Key 4 {$data['fw49']}");
      $this->slide1($objPHPPowerPoint,"Here’s why this is important…");
      $this->slide1($objPHPPowerPoint,"{$data['fw50']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw50']}");
      $this->slide1($objPHPPowerPoint,"Example / Testimonial");
      $this->slide1($objPHPPowerPoint,"But {$data['fw3']}");
      $this->slide1($objPHPPowerPoint,"If you’re like most people…");
      $this->slide1($objPHPPowerPoint,"You probably {$data['fw52']}.");
      $this->slide1($objPHPPowerPoint,"You may {$data['fw53']}.");
      $this->slide1($objPHPPowerPoint,"You likely {$data['fw54']}.");
      $this->slide1($objPHPPowerPoint,"So clearly {$data['fw55']} works.");
      $this->slide1($objPHPPowerPoint,"What I’ve just shown you is the \n exact system I’ve personally \n used to {$data['fw1']}.");
      $this->slide1($objPHPPowerPoint,"And if you’d like me to help you \n implement everything we’ve  \ngone over, I’d be honored.");
      $this->slide1($objPHPPowerPoint,"Here’s how we’ll do it…");
      $this->slide1($objPHPPowerPoint,"Introducing...");
      $this->slide1($objPHPPowerPoint,"{$data['fw56']} \n & {$data['fw57']}");
      $this->slide1($objPHPPowerPoint,"I’m not going to get all hypey.");
      $this->slide1($objPHPPowerPoint,"You’ve listened to me…");
      $this->slide1($objPHPPowerPoint,"You’ve heard my story…");
      $this->slide1($objPHPPowerPoint,"You know what I’m saying can  \n help you…");
      $this->slide1($objPHPPowerPoint,"{$data['fw56']} includes:");
      $this->slide1($objPHPPowerPoint,"{$data['fw58']} so you can {$data['fw60']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw61']} so you can {$data['fw63']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw64']} so you can {$data['fw66']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw67']} so you can {$data['fw69']}");
      $this->slide1($objPHPPowerPoint,"Imagine if you {$data['fw86']} \n in your life…");
      $this->slide1($objPHPPowerPoint,"This is the ULTIMATE game \n changer.");
      $this->slide1($objPHPPowerPoint,"Get {$data['fw87']} to {$data['fw88']}.");
      $this->slide1($objPHPPowerPoint,"Get {$data['fw89']} to {$data['fw90']}.");
      $this->slide1($objPHPPowerPoint,"Get {$data['fw91']} to {$data['fw92']}.");
      $this->slide1($objPHPPowerPoint,"How does it work?");
      $this->slide1($objPHPPowerPoint,"{$data['fw70']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw71']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw56']} becomes your secret \n weapon");
      $this->slide1($objPHPPowerPoint,"{$data['fw60']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw63']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw66']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw69']}");
      $this->slide1($objPHPPowerPoint,"But It Gets Better…");
      $this->slide1($objPHPPowerPoint,"Bonus #1: {$data['fw72']}. \n A {$data['fw73']} value.");
      $this->slide1($objPHPPowerPoint,"{$data['fw74']}");
      $this->slide1($objPHPPowerPoint,"Bonus #2: {$data['fw75']}. \n A {$data['fw76']} value.");
      $this->slide1($objPHPPowerPoint,"{$data['fw77']}");
      $this->slide1($objPHPPowerPoint,"How much is {$data['fw56']}?");
      $this->slide1($objPHPPowerPoint,"Normally, this would easily cost \n {$data['fw79']}…");
      $this->slide1($objPHPPowerPoint,"But because you’re here, you’re \n getting [awesome feature]...");
      $this->slide1($objPHPPowerPoint,"PLUS {$data['fw78']}...");
      $this->slide1($objPHPPowerPoint,"For just {$data['fw83']}.");
      $this->slide1($objPHPPowerPoint,"Best Guarantee Ever!");
      $this->slide1($objPHPPowerPoint,"I 100% stand behind {$data['fw56']}. If \n you're unhappy for any reason \n whatsoever, let me know within  \n 30 days and we'll give you a full \n refund.");
      $this->slide1($objPHPPowerPoint,"Here’s what others are saying \n about {$data['fw56']}…");
      $this->slide1($objPHPPowerPoint,"{$data['fw80']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw81']}");
      $this->slide1($objPHPPowerPoint,"Recap:");
      $this->slide1($objPHPPowerPoint,"1. {$data['fw58']} a {$data['fw59']} value.");
      $this->slide1($objPHPPowerPoint,"2. {$data['fw61']} a {$data['fw62']} value.");
      $this->slide1($objPHPPowerPoint,"3. {$data['fw64']} a {$data['fw65']} value.");
      $this->slide1($objPHPPowerPoint,'4.  [Feature #4] a [$X] value.');
      $this->slide1($objPHPPowerPoint,"{$data['fw82']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw93']}");
      $this->slide1($objPHPPowerPoint,"{$data['fw94']}");
      $this->slide1($objPHPPowerPoint,"Again, you get:");
      $this->slide2($objPHPPowerPoint,"{$data['fw58']} a {$data['fw59']} value","{$data['fw61']} a {$data['fw62']} value","{$data['fw64']} a {$data['fw65']} value","{$data['fw67']} a {$data['fw68']} value");
      $this->slide1($objPHPPowerPoint,"If not now… when?");
      $this->slide1($objPHPPowerPoint,"When will you finally be able \n to {$data['fw86']}.");
      $this->slide1($objPHPPowerPoint,"When you will finally stop {$data['fw3']} \n and start {$data['fw86']}?");
      $this->slide1($objPHPPowerPoint,"When will you finally take \n action?");
      $this->slide1($objPHPPowerPoint,"Make your decision, then sign \n up for this limited time  special  \n offer by going to [CALL TO \n ACTION]");
      $this->slide1($objPHPPowerPoint,"This offer is only good until \n {$data['fw93']}. \n\n After that? {$data['fw94']}.");
      $this->slide1($objPHPPowerPoint,"It’s time to make your decision and take a \n leap forward.\n Join {$data['fw56']} \n[insert url of sales page] \nAny questions?");
      $oWriterPPTX = IOFactory::createWriter($objPHPPowerPoint, 'PowerPoint2007');
        $file=strtotime(now());
       $oWriterPPTX->save(public_path()."/powerpoint/{$file}.pptx");
      //  $this->generatePPt1("$file.pptx");
      return response()->json(['data'=>"powerpoint/{$file}.pptx"]);


}
    public function generateDoc(Request $request){

        $objPHPPowerPoint = new PhpPresentation();

$data=(array) $request->all()['$data'];
$objPHPPowerPoint->removeSlideByIndex(0);
        $this->slide1($objPHPPowerPoint,"I have two news for you");
        $this->slide1($objPHPPowerPoint,"The good and bad");
        $this->slide1($objPHPPowerPoint,"Today, {$data[5]}");
      $this->slide1($objPHPPowerPoint,"$data[6]. why?");
      $this->slide1($objPHPPowerPoint,$data[7]);
      $this->slide1($objPHPPowerPoint,$data[8]);
      $this->slide1($objPHPPowerPoint,$data[9]);
      $this->slide1($objPHPPowerPoint,$data[10]);
      $this->slide1($objPHPPowerPoint,$data[11]);
      $this->slide1($objPHPPowerPoint,"But it's not just about these ....");
      $this->slide1($objPHPPowerPoint,"Actually, there's more and it gets even worse...");
      $this->slide1($objPHPPowerPoint,"Here's the problem you're facing");
      $this->slide1($objPHPPowerPoint,$data[12]);
      $this->slide1($objPHPPowerPoint,$data[13]);
      $this->slide1($objPHPPowerPoint,$data[14]);
      $this->slide1($objPHPPowerPoint,"But the good news is that, there's now a solution ....");
      $this->slide1($objPHPPowerPoint,"Introducing");
      $this->slide1($objPHPPowerPoint,"\"$data[15]\"");
      $this->slide1($objPHPPowerPoint,"\"$data[15]\" is a $data[16] for $data[2] who wants to $data[4]");
      $this->slide2($objPHPPowerPoint,$data[15],$data[20],$data[21],$data[22],$data[23],$data[24]);
      $this->slide2($objPHPPowerPoint,$data[15],$data[25],$data[26],$data[27],$data[28],$data[29]);
      $this->slide1($objPHPPowerPoint,"Hi, My name is $data[1] and by now,you're probably asking...");
      $this->slide1($objPHPPowerPoint,"Who am I and how can i make these claims?");
      $this->slide1($objPHPPowerPoint,"Here's why i can make these promises to you:");
      $this->slide1($objPHPPowerPoint,$data[30]);
      $this->slide1($objPHPPowerPoint,$data[31]);
      $this->slide1($objPHPPowerPoint,$data[32]);
      $this->slide1($objPHPPowerPoint,$data[33]);
      $this->slide1($objPHPPowerPoint,$data[34]);
      $this->slide1($objPHPPowerPoint,"But don't take my word for it");
      $this->slide1($objPHPPowerPoint,"Take a look at this");
      $this->slide1($objPHPPowerPoint,"INSERT PROOF!");
      $this->slide1($objPHPPowerPoint,$data[35]);
      $this->slide1($objPHPPowerPoint,$data[36]);
      $this->slide1($objPHPPowerPoint,$data[37]??null);
      $this->slide1($objPHPPowerPoint,$data[38]??null);
      $this->slide1($objPHPPowerPoint,$data[39]?? null);

      $this->slide2($objPHPPowerPoint,"Here is exactly what you get with \"$data[15]\"",$data[40]??null,$data[41]??null,$data[42]??null,$data[43]??null,$data[44]??null);
      $this->slide1($objPHPPowerPoint,"If You ACT NOW,You Get These bonuses");
      $this->slide1($objPHPPowerPoint,"BONUS #1 -" .  count($data)>44?$data[45]:null);
      $this->slide1($objPHPPowerPoint,"BONUS #2 - " .count($data)>45?$data[46]:null);
      $this->slide1($objPHPPowerPoint,"BONUS #3 -" .count($data)>46?$data[47]:null);
      $this->slide1($objPHPPowerPoint,"Act Now- Before It's Too Late!...");
      $this->slide1($objPHPPowerPoint,"Get Started with $data[15] now");
      $this->slide1($objPHPPowerPoint,"If you want to");
      $this->slide1($objPHPPowerPoint,"$data[17]");
      $this->slide1($objPHPPowerPoint,"$data[18]");
      $this->slide1($objPHPPowerPoint,"$data[19]");
      $this->slide1($objPHPPowerPoint,"Then Take Action Right Now!");
      $oWriterPPTX = IOFactory::createWriter($objPHPPowerPoint, 'PowerPoint2007');
        $file=strtotime(now());
       $oWriterPPTX->save(public_path()."/powerpoint/{$file}.pptx");
      //  $this->generatePPt1("$file.pptx");
      return response()->json(['data'=>"powerpoint/{$file}.pptx"]);

}

// public function generatePPt1($data)
// {
//       $oReader = IOFactory::createReader('PowerPoint2007');
//       $oReader->load(public_path()."/powerpoint/$data");
//       foreach($oReader as $res){
//             echo $res->display();
//       }
// }
public function generatePPt(Request $request){

        $objPHPPowerPoint = new PhpPresentation();

$data=(array) $request->all()['data'];
$objPHPPowerPoint->removeSlideByIndex(0);
        $this->slide1($objPHPPowerPoint,"I have two news for you");
        $this->slide1($objPHPPowerPoint,"The good and bad");
        $this->slide1($objPHPPowerPoint,"Today, {$data[5]}");
      $this->slide1($objPHPPowerPoint,"$data[6]. why?");
      $this->slide1($objPHPPowerPoint,$data[7]);
      $this->slide1($objPHPPowerPoint,$data[8]);
      $this->slide1($objPHPPowerPoint,$data[9]);
      $this->slide1($objPHPPowerPoint,$data[10]);
      $this->slide1($objPHPPowerPoint,$data[11]);
      $this->slide1($objPHPPowerPoint,"But it's not just about these ....");
      $this->slide1($objPHPPowerPoint,"Actually, there's more and it gets even worse...");
      $this->slide1($objPHPPowerPoint,"Here's the problem you're facing");
      $this->slide1($objPHPPowerPoint,$data[12]);
      $this->slide1($objPHPPowerPoint,$data[13]);
      $this->slide1($objPHPPowerPoint,$data[14]);
      $this->slide1($objPHPPowerPoint,"But the good news is that, there's now a solution ....");
      $this->slide1($objPHPPowerPoint,"Introducing");
      $this->slide1($objPHPPowerPoint,"\"$data[15]\"");
      $this->slide1($objPHPPowerPoint,"\"$data[15]\" is a $data[16] for $data[2] who wants to $data[4]");
      $this->slide2($objPHPPowerPoint,$data[15],$data[20],$data[21],$data[22],$data[23],$data[24]);
      $this->slide2($objPHPPowerPoint,$data[15],$data[25],$data[26],$data[27],$data[28],$data[29]);
      $this->slide1($objPHPPowerPoint,"Hi, My name is $data[1] and by now,you're probably asking...");
      $this->slide1($objPHPPowerPoint,"Who am I and how can i make these claims?");
      $this->slide1($objPHPPowerPoint,"Here's why i can make these promises to you:");
      $this->slide1($objPHPPowerPoint,$data[30]);
      $this->slide1($objPHPPowerPoint,$data[31]);
      $this->slide1($objPHPPowerPoint,$data[32]);
      $this->slide1($objPHPPowerPoint,$data[33]);
      $this->slide1($objPHPPowerPoint,$data[34]);
      $this->slide1($objPHPPowerPoint,"But don't take my word for it");
      $this->slide1($objPHPPowerPoint,"Take a look at this");
      $this->slide1($objPHPPowerPoint,"INSERT PROOF!");
      $this->slide1($objPHPPowerPoint,$data[35]);
      $this->slide1($objPHPPowerPoint,$data[36]);
      $this->slide1($objPHPPowerPoint,$data[37]??null);
      $this->slide1($objPHPPowerPoint,$data[38]??null);
      $this->slide1($objPHPPowerPoint,$data[39]?? null);

      $this->slide2($objPHPPowerPoint,"Here is exactly what you get with \"$data[15]\"",$data[40]??null,$data[41]??null,$data[42]??null,$data[43]??null,$data[44]??null);
      $this->slide1($objPHPPowerPoint,"If You ACT NOW,You Get These bonuses");
      $this->slide1($objPHPPowerPoint,"BONUS #1 -" .  count($data)>44?$data[45]:null);
      $this->slide1($objPHPPowerPoint,"BONUS #2 - " .count($data)>45?$data[46]:null);
      $this->slide1($objPHPPowerPoint,"BONUS #3 -" .count($data)>46?$data[47]:null);
      $this->slide1($objPHPPowerPoint,"Act Now- Before It's Too Late!...");
      $this->slide1($objPHPPowerPoint,"Get Started with $data[15] now");
      $this->slide1($objPHPPowerPoint,"If you want to");
      $this->slide1($objPHPPowerPoint,"$data[17]");
      $this->slide1($objPHPPowerPoint,"$data[18]");
      $this->slide1($objPHPPowerPoint,"$data[19]");
      $this->slide1($objPHPPowerPoint,"Then Take Action Right Now!");
      $oWriterPPTX = IOFactory::createWriter($objPHPPowerPoint, 'PowerPoint2007');
        $file=strtotime(now());
       $oWriterPPTX->save(public_path()."/powerpoint/{$file}.pptx");
      //  $this->generatePPt1("$file.pptx");
      return response()->json(['data'=>"powerpoint/{$file}.pptx"]);

    }
    public function slide1(&$objPHPPowerPoint,$data){
        // Create slide
      $currentSlide = $objPHPPowerPoint->createSlide();

        $shape = $currentSlide->createRichTextShape()
              ->setHeight(300)
              ->setWidth(600)
              ->setOffsetX(170)
              ->setOffsetY(180);
        $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER );
        $textRun = $shape->createTextRun($data);
        $textRun->getFont()->setBold(true)
                           ->setSize(60)
                           ->setColor( new Color( '000' ) );
      }

      public function slide2($objPHPPowerPoint,$data1=null,$data2=null,$data3=null,$data4=null,$data5=null,$data6=null)
      {
            $currentSlide = $objPHPPowerPoint->createSlide();


        $shape = $currentSlide->createRichTextShape()
                  ->setHeight(200)
                  ->setWidth(600)
                  ->setOffsetX(10)
                  ->setOffsetY(40);
            $shape->getActiveParagraph()->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT)
            ->setMarginLeft(25)
            ->setIndent(-25);



            $textRun = $shape->createTextRun($data1);
            $textRun->getFont()->setBold(true)
            ->setSize(20)
            ->setColor( new Color( '000' ) );
            $shape->createBreak();

            $shape->getActiveParagraph()->getBulletStyle()->setBulletType(Bullet::TYPE_BULLET);
            $shape->getActiveParagraph()->getFont()->setSize(20)
             ->setColor(new Color( '000' ));
             if(!is_null($data2)){ $shape->createParagraph()->createTextRun($data2);}
             if(!is_null($data3)){ $shape->createParagraph()->createTextRun($data3);}
             if(!is_null($data4)){  $shape->createParagraph()->createTextRun($data4);}
             if(!is_null($data5)){ $shape->createParagraph()->createTextRun($data5);}
             if(!is_null($data6)){
                  $shape->createParagraph()->createTextRun($data6);}






      }


}
