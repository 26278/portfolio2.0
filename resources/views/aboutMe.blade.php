@extends('layout.master')
@section('stylesheets')
@endsection
@section('main')
    <div class="background"></div>
    <div class="container">
        <div class="left">
            <div class="whoami">
                <h2 class="title">Wie ben ik?</h2>
                <h3 class="subtitle">Introductie</h3>
                <p class="paragraph">Na mijn VMBO-T en koksopleiding afgerond te hebben ben ik begonnen met programmeren omdat ik de horeca lichamelijk te zwaar vond en altijd interesse heb gehad in ICT en (social) media. Toen besloot ik de opleiding Media Development te doen.</p>
                <h3 class="subtitle">Waar sta ik nu?</h3>
                <p class="paragraph">Op dit moment heb ik de basis van front-end development en UI/UI design in de vingers.  Met behulp van de juiste online recourses kan ik met Javascript en libraries als jQuery componenten maken zoals sliders en modal boxes, en kan ik met behulp van GSAP aantrekkelijke animaties maken.
                    Ook kan ik aardig aan de slag met Laravel en weet ik het een en ander van GitHub. </p>
                <h3 class="subtitle">Werk ervaring</h3>
                <p class="paragraph">Op dit moment loop ik stage bij JustPremium, een programmatic advertising marketplace bij Schiphol. Hier ben ik voornamelijk bezig met programmeren van responsive web advertenties met HTML, CSS en JS, en designen van advertenties in Adobe Photoshop.</p>
                <h3 class="subtitle">Toekomst visie</h3>
                <p class="paragraph">Na deze opleiding wil ik graag de HBO-opleiding Informatica volgen aan de Hogeschool Leiden omdat ik meer wil leren binnen het vakgebied van een fullstack developer.</p>
            </div>
            <div class="socialskills">
                <h2 class="title">Sociale vaardigheden</h2>
                <h3 class="subtitle">Communicatie</h3>
                <p class="paragraph">Bij groepsopdrachten en projecten zorg ik ervoor dat er duidelijke afspraken worden gemaakt met een taakverdeling en een planning.
                    Ook op mijn eerste stage heb ik gemerkt dat goede communicatie belangrijk is om de planning goed te laten verlopen.</p>
                <h3 class="subtitle">Presenteren</h3>
                <p class="paragraph">Op het Mediacollege Amsterdam presenteer ik regelmatig mijn opdrachten en projecten voor de klas, maar ook voor groter publiek in de aula. Ik vind het spannend om te presenteren, maar dat weerhoud mij er niet van.</p>
                <h3 class="subtitle">Omgaan met tijdsdruk en spanning</h3>
                <p class="paragraph">Deadlines en hoge verwachtingen maken mij niet zo snel gek, maar ze motiveren mij om sneller en efficiënter te werken.
                    Ik presteer beter als ik dagelijkse doelen stel voor mezelf.</p>
            </div>
        </div>
        <div class="right">
            <div class="languages">
                <h2 class="title">Programmeertalen</h2>
                <div class="specie">
                    <h3 class="italic-subtitle">Front-end</h3>
                    <div class="desc">
                        <div class="number"><p>1</p></div>
                        <h3 class="language">HTML</h3>
                    </div>
                    <p class="paragraph">Hypertext Markup language, de eerste taal waarmee ik code begon te schrijven.</p>
                    <div class="desc">
                        <div class="number"><p>2</p></div>
                        <h3 class="language">CSS</h3>
                    </div>
                    <p class="paragraph">Cascading Style Sheets, de taal waarmee ik websites opmaak. Ik maak hierbij vaak gebruik van SCSS om efficiënter (en dus sneller) te werken.</p>
                    <div class="desc">
                        <div class="number"><p>3</p></div>
                        <h3 class="language">Javascript</h3>
                    </div>
                    <p class="paragraph">Ik gebruik javascript om interactieve onderdelen zoals modaal vensters en carrousels te maken op websites. Ook maak ik vaak gebruik van jQuery, JSON en GSAP.</p>
                </div>
               <div class="specie">
                   <h3 class="italic-subtitle">Back-end</h3>
                   <div class="desc">
                       <div class="number"><p>4</p></div>
                       <h3 class="language">PHP</h3>
                   </div>
                   <p class="paragraph">PHP gebruik ik voor MVC (Model View Controller) systemen en CMS (Content Management System) panelen te maken. Ook gebruik ik PHP voor database connecties en inlog systemen. Ik vind PHP een van de leukste programmeertalen.</p>
                   <div class="desc">
                       <div class="number"><p>5</p></div>
                       <h3 class="language">SQL</h3>
                   </div>
                   <p class="paragraph">Database management taal, hiermee kan ik databases aansturen.</p>
                   <div class="desc">
                       <div class="number"><p>6</p></div>
                       <h3 class="language">Java</h3>
                   </div>
                   <p class="paragraph">Programmeertaal waarmee ik op school web-based applicaties leer schrijven. Ik begrijp de basis, maar ik heb nog niet zo veel ervaring.</p>
               </div>
            </div>
        </div>
    </div>
@endsection