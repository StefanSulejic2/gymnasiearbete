<?php
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>NTI Gymnasiet Södertälje</title>
    <script src="meny.js"></script>
</head>
<body>
 
    <link rel="stylesheet" href="startsidan.php">

    <?php
    require "menu.php";
    ?>
    <?php
    require "ntilogga.php";
    ?>

<h1>Program</h1>
<p>Här på NTI Gymnasiet i Södertälje erbjuder vi dig en trygg framtid med våra två program, teknik och IT-programmet.</p>
<h1>Teknikprogram</h1>
<p>Teknikprogrammet med inriktningen informations- och medieteknik lär dig programmera. Att kunna programmera betyder tryggt framtid eftersom behov av programmerare idag är stor och i framtiden blir den ännu större. I våran skola får du en bred grund i att programmera framtidens både mjuk- och hårdvaror. Efter 3 års utbildning får du en bred behörighet till vidare studier.</p>
<h2>Fördjupning - Software</h2>
<p>Här kan du lära dig programmering och webb med fokus på spel. Från programmering av spel till ljud, grafik och publicering på nätet. Efter utbildningen har du goda kunskaper i programmering och matematik, du har också bred högskolebehörighet. Om du inte vill fortsätta studera vidare har du möjlighet till ett jobb direkt efter gymnasiet hos ett startup-företag eller ett etablerat företag i mjukvarubranschen.</p>
<h2>Fördjupning - Engineering</h2>
<p>Det här är ett högskoleförberedande program. Om du vill läsa vidare på KTH och andra Sveriges mest kända skolor inom civilingenjör så är det här programmet just för dig. Det handlar inte bara om ett fantastisk teknisk utbildning utan även om IT-kompetens genom programmering och webbutveckling.</p>

<button type="button" class="txtbtn" onclick="ShowCourses('gygemte')">Gymnasiegemensamma kurser 1100 poäng</button>
<table id="gygemte" style="display: none">
    <tr>
        <td>Engelska 5</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Engelska 6</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Historia 1a1</td>
        <td>50 poäng</td>
    </tr>
    <tr>
        <td>Idrott och hälsa 1</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Matematik 1c</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Matematik 2c</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Matematik 3c</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Religionskunskap 1</td>
        <td>50 poäng</td>
    </tr>
    <tr>
        <td>Samhällskunskap 1b</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Svenska 1</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Svenska 2</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Svenska 3</td>
        <td>100 poäng</td>
    </tr>
</table>
<button type="button" class="txtbtn" onclick="ShowCourses('prgemte')">Programgemensamma kurser 400 poäng</button>
<table id="prgemte" style="display: none">
    <tr>
        <td>Fysik 1a</td>
        <td>150 poäng</td>
    </tr>
    <tr>
        <td>Kemi 1</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Teknik 1</td>
        <td>150 poäng</td>
    </tr>
</table>
<button type="button" class="txtbtn" onclick="ShowCourses('inrkute')">Inriktningskurser 300 poäng</button>
<table id="inrkute" style="display: none">
    <tr>
        <td>Dator- och nätverksteknik</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Programering 1</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Webbutveckling</td>
        <td>100 poäng</td>
    </tr>
</table>
<button type="button" class="txtbtn" onclick="ShowCourses('fösofte')">Fördjupningskurser: Software 400 poäng</button>
<table id="fösofte" style="display: none">
    <tr>
        <td>Programering 2</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Webbserverprogramering </td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Tillämpad programering</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Digitalt skapande 1</td>
        <td>100 poäng</td>
    </tr>
</table>
<button type="button" class="txtbtn" onclick="ShowCourses('föengte')">Fördjupningskurser: Engineering 400 poäng</button>
<table id="föengte" style="display: none">
    <tr>
        <td>Matematik 4</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Fysik 2</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Tillämpad programering</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Programering 2</td>
        <td>100 poäng</td>
</table>
<button type="button" class="txtbtn" onclick="ShowCourses('invalte')">Individuellt val 200 poäng</button>
<table id="invalte" style="display: none">
    <tr>
        <td>Digitalt skapande 1</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Digitalt skapande 2</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Engelska 7</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Fysik 2</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Matematik 1c</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Idrott och hälsa 2</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Matematik 4</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Matematik 5</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Webbserverprogrammering 1</td>
        <td>100 poäng</td>
    </tr>
</table>

<h2>Summa (med gymnasiearbete som är 100 poäng): 2500 poäng</h2>


<h1>IT - Programmet</h1>
<p>El- och energiprogrammet med inriktning dator- och kommunikationsteknik lär dig allt om nätverk. Här kan du lära dig att bygga nätverk, hantera servrar och programmera. Det här är ett yrkesprogram vilket betyder att skolans mål är att du efter 3 år ska vara anställningsbar.</p>
<p>Under din utbildningstid ska du lära dig använda rätt material och verktyg samt att kunna planera och utvärdera en arbetsprocess. Du ska kunna utföra korrekta beräkningar och därför kommer du utveckla dina matematiska kunskaper hos oss. I framtida yrkeslivet kommer du oftast att samarbeta med andra yrkesgrupper och därför är det viktigt att du utvecklar din förmåga att samarbeta, bemöta kunder, ge service och att skickligt utföra ditt arbete både på företag och människornas hem. Vi erbjuder våra elever på det här programmet APL vilket kommer hjälpa eleverna att förstå hur yrket fungerar och vad som förväntas av dem. </p>
<h2>Fördjupning - Infrastructure</h2>
<p>Gillar du problemlösningar? Vill du lära dig mer om routrar, switchar, servrar, support, programmering och företagande? Då är detta en kurs för dig! Efter utbildningen är du färdig utbildad innom nätverksbranchen men dörar för vidarestudier stängs inte eftersom du har möjlighet att läsa grundläggande högskolabehörighet.</p>

<button type="button" class="txtbtn" onclick="ShowCourses('gygemit')">Gymnasiegemensamma kurser 600 poäng</button>
<table id="gygemit" style="display: none">
    <tr>
        <td>Engelska 5</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Historia 1a1</td>
        <td>50 poäng</td>
    </tr>
    <tr>
        <td>Idrott och hälsa 1</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Matematik 1a</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Naturkunskap 1a1</td>
        <td>50 poäng</td>
    </tr>
    <tr>
        <td>Religionskunskap 1</td>
        <td>50 poäng</td>
    </tr>
    <tr>
        <td>Samhällskunskap 1a1</td>
        <td>50 poäng</td>
    </tr>
    <tr>
        <td>Svenska 1</td>
        <td>100 poäng</td>
    </tr>
</table>
<button type="button" class="txtbtn" onclick="ShowCourses('prgemit')">Programgemensamma kurser 400 poäng</button>
<table id="prgemit" style="display: none">
    <tr>
        <td>Datorteknik 1a</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Elektromekanik</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Energiteknik 1</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Mekatronik 1</td>
        <td>100 poäng</td>
    </tr>
</table>
<button type="button" class="txtbtn" onclick="ShowCourses('inrkuit')">Inriktningskurser 400 poäng</button>
<table id="inrkuit" style="display: none">
    <tr>
        <td>Dator- och nätverksteknik</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Elektronik och mikrodatorteknik</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Kommunikationsnät 1</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Nätverksteknik</td>
        <td>100 poäng</td>
    </tr>
</table>
<button type="button" class="txtbtn" onclick="ShowCourses('föengit')">Fördjupningskurser: Infrastructure 800 poäng</button>
<table id="föengit" style="display: none">
    <tr>
        <td>Programmering 1</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Tillämpad programering</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Datorsamordning och support</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Nätverksteknologier</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Nätverksadministration</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Nätverkssäkerhet</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Administration av nätverk och serverutrustning/Engelska 6</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Entreprenörskap </td>
        <td>100 poäng</td>
    </tr>
</table>
<button type="button" class="txtbtn" onclick="ShowCourses('invalit')">Individuellt val 200 poäng</button>
<table id="invalit" style="display: none">
    <tr>
        <td>Matematik 2a</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Svenska 2</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Digitalt skapande 1</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Svenska 3</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Idrott och hälsa 2</td>
        <td>100 poäng</td>
    </tr>
    <tr>
        <td>Samhällskunskap 1a2</td>
        <td>50 poäng</td>
    </tr>
</table>

<h2>Summa (med gymnasiearbete som är 100 poäng): 2500 poäng</h2>

    <?php
    require "footer.php"
    ?>

    <script>
        function ShowCourses(id){
            if(document.getElementById(id).style.display=="none")
            {
                document.getElementById(id).style.display = "block";
            }else{
                document.getElementById(id).style.display="none";
            }
        }
    </script>
</body>