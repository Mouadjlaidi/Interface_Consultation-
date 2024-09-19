<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="header-left">S M A E X</div>
        <div class="header-center">C O N S U L T A T I O N S</div>
        <div>16/10/23 &nbsp;&nbsp;&nbsp; 14:44:18</div>
    </div>
    <div class="menu">MENU36</div>
    
    <div class="menu-columns">
        <div class="column">
            <a href="{{route('consulatation.create')}}"  class='titre-d'>01 - Consultation / Assuré</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>02 - Consultation / Acheteur</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>03 - DCA Déclaré / Année</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>04 - arimes Facturées / Année</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>05 - arimes Encaissées / Année</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>06 - C.A. Facturés / Année</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>07 - Etat Comatable des arimes Facturées R C</a>

            <a href="{{route('consulatation.create')}}" class="titre-g">19 - Menu Consultation AaC</a>
            <a href="{{route('consulatation.create')}}" class="titre-b">20 - Menu Consult./Edition OCa</a>
        
        </div>

        <div class="column">
            <a href="{{route('consulatation.create')}}"  class='titre-d'>08 - Encours aar Année</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>09 - Encours Domestique / Année</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>10 - Consultation A.C.S</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>11 - Consultation Avoirs</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>12 - Consultation MIN. aRIME</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>13 - Consultation FACT. TRIMESTR.</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>14 - Liste aolices (Trimestr.)</a>
            <a href="{{route('consulatation.create')}}"  class='titre-d'>15 - Liste aolices(INTERMÉDIAIRE)</a>

            <a href="{{route('consulatation.create')}}" class="titre-y">16 - Engagements / aays</a>
            <a href="{{route('consulatation.create')}}" class="titre-y">17 - EDITION aV. COMITE ARBITRAGE</a>
        </div>
    </div>

    <div class="section">
        <p>90 - Fin Session</p>
    </div>
    <div class="menu"></div>


    <div class="options">
        <p>Option ou commande</p>
        <input type="text" placeholder="===>" />
    </div>

    <div class="footerr">
        <ul class="commands">
            <li class="command">F3 = Exit</li>
            <li class="command">F4 = Invite</li>
            <li class="command">F9 = Rappel</li>
            <li class="command">F12 = Annuler</li>
            <li class="command">F13 = Informations techniques </li>
            <li class="command">F16 = Menu principal du system </li>
           
        </ul>
    </div>

</body>
</html>
