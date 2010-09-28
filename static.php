<!DOCTYPE html> 
<html lang="fr"> 
<head>  
  <meta charset="utf-8" /> 
  <title>BdE → Accueil ⋅ INSA de Lyon</title> 
  <!-- Et oui, ceci est un header en HTML5. --> 
  <link rel="stylesheet" href="./styles/bdeinsa.css" /> 
  <link rel="shortcut icon" href="./favicon.png" /> 
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script type="text/javascript" src="./scripts/main.js"></script>
</head> 
<body> 
  <div id="verytop">
    Le site que vous voyez ci-dessous est un prototype <strong>rapide</strong>, créé rapidement pour récolter rapidement
    de nombreux avis sur le design, l'organisation rapide du site sur une <em>page statique</em>. Les données qui y sont
    totalement fictives (et ajoutées à l'arrache). <br/>
    Créé par un (semi-)membre<sup>[réf. nécessaire]</sup> de l'équipe Orga'IF/Web du BdE, il ne représente qu'une idée
    et peut être aisément modifié ; n'hésitez pas à <em>contribuer</em> à son enrichissement en donnant votre avis.
  </div>
  <div id="top"> 
    <ul>
      <li><a href="http://www.insa-lyon.fr/">INSA de Lyon</a></li>
    </ul>
  </div> 
  <header> 
    <hgroup> 
      <h1>BdE de l'INSA de Lyon</h1> 
      <h2>Bureau des élèves-ingénieurs de l'INSA de Lyon</h2> 
    </hgroup>
    <p id="logobde"><img src="styles/logobde.png" alt="BdE INSA" /></p>
    <nav>
      <?php ob_start(); ?>
      <ul>
        <li class="el-bde">
          <a href="?/bde/">Tout sur le BdE</a>
          <ul>
            <li><a href="?/bde/bureau">Le Bureau</a></li>
            <li><a href="?/bde/equipe">Les Équipes</a></li>
            <li><a href="?/bde/evenements">Événements</a></li>
            <li><a href="?/bde/lip-dub">Lip Dub</a></li>
          </ul>
        </li>
        <li class="el-assocs">
          <a href="?/assocs/">Vie associative</a>
          <ul class="hidden">
            <li><a href="?/assocs/newsletter">Newsletter</a></li>
            <li><a href="?/assocs/postit">Post'It</a></li>
            <li><a href="?/assocs/botinsa">Bot'INSA</a></li>
            <li><a href="?/assocs/infos-utiles">Informations utiles</a></li>
          </ul>
        </li>
        <li class="el-services">
          <a href="?/services/">Services</a>
          <ul class="hidden">
            <li><a href="?/services/">Tout sur les services</a></li>
            <li><a href="?/services/photocopies">Photocopies</a></li>
            <li><a href="?/services/coop">Coop</a></li>
            <li><a href="?/services/laveries">Laveries</a></li>
          </ul>
        </li>
        <li class="el-shop">
          <a href="?/shop/">Boutiques</a>
          <ul class="hidden">
            <li><a href="?/shop/on-manif">Durant les événements</a></li>
            <li><a href="?/shop/online">En ligne</a></li>
            <li><a href="?/shop/exceptionnelles">Ventes exceptionnelles</a></li>
          </ul>
        </li>
        <li class="el-partenaires">
          <a href="?/partners/">Partenaires</a>
          <ul class="hidden">
            <li><a href="?/partners/list">Liste des partenaires</a></li>
            <li><a href="?/partners/events">Événements partenaires</a></li>
          </ul>
        </li>
        <li class="social">
          <ul>
            <li class="twitter"><a href="http://twitter.com/">Twitter</a></li>
            <li class="facebook"><a href="http://www.facebook.com/">Facebook</a></li>
            <li class="rss"><a href="mailto:">RSS</a></li>
          </ul>
        </li>
      </ul>
      <?php $allnavs = ob_get_flush(); ?>
    </nav>
  </header>

  <div id="allwrap">  
    <aside class="lastnews">
      <h2>Dernières nouvelles</h2>
      <section>
        <h1>C'est la rentrée, au BdE !</h1>
        <p class="infos">par Clément (BdE), hier à 18h42</p>
        <p>Depuis le mardi 14 septembre, la Maison des Étudiants s'anime de nouveau et vous propose toujours plus de services !
           <a href="?infos/2010/09/14/C-est-la-rentree" class="readmore">En lire plus →</a></p>
      </section>
      <section>
        <h1>Le BdE passe aux heures d'été</h1>
        <p class="infos">par Balthazar (BdE), le 08 Juillet 2010</p>
        <p>Durant les deux mois de "grandes vacances", le Bureau reste ouvert le mardi et le jeudi soir pour continuer à vous
        proposer nos principaux services. <a href="?infos/2010/07/08/Le-BdE-passe-aux-heures-d-ete" class="readmore">En lire plus →</a></p>
      </section>
      <p class="navmore"><a href="?infos/">Plus de nouvelles...</a></p>
      <h2>Le Post'It</h2>
      <div id="postit">
        <table>
          <tr>
            <th>L</th><th>M</th><th>M</th>
            <th>J</th><th>V</th><th>S</th>
                      <th>D</th>
          </tr>
          <tr>
            <td class="horsmois">30</td>
            <td class="horsmois">31</td>
            <td>1</td><td>2</td><td>3</td>
            <td>4</td><td>5</td>
          </tr>
          <tr>
            <td>6</td><td>7</td><td>8</td>
            <td>9</td><td>10</td><td>11</td>
                      <td>12</td>
          </tr>
          <tr>
            <td>13</td><td>14</td><td>15</td>
            <td>16</td><td>17</td><td>18</td>
                       <td>19</td>
          </tr>
          <tr>
            <td>20</td><td>21</td><td>22</td>
            <td>23</td><td>24</td><td>25</td>
                       <td>26</td>
          </tr>
          <tr>
            <td>27</td><td>28</td><td>29</td>
            <td>30</td><td>1</td><td>2</td>
                       <td>3</td>
          </tr>
        </table>
      </div>
    </aside>
    <section>
      <article>
        <h1>Bienvenue sur le site officiel du BdE</h1>
        <p>
          Le Bureau des Elèves est une association active auprès des étudiants
          à travers de multiples missions : propulser la vie associative du
          campus INSA, apporter des services aux élèves et participer à la
          valorisation de la formation. 
          <a class="readmore" href="?/bde/">En découvrir plus... →</a>
        </p>
      </article>
    </section>
    <div class="clearall"></div>
  </div>
    
  <footer>
    <div class="wrapcenter">
      <div class="about">
        <img src="styles/logobde-100.png" alt="BdE INSA" class="logofooter" />
        <p>Bureau des Élèves<br/>de l'INSA de Lyon</p>
      </div>
      <nav>
        <?php echo $allnavs; ?>
      </nav>
      <div class="horaires">
        <h3>Horaires</h3>
        <!--
        <h4>Horaires de l'accueil</h4>
        <dl> 
          <dt>Lun., Mar., Mer.</dt><dd>10h-19h</dd>
          <dt>Jeudi</dt><dd>10h-18h</dd> 
          <dt>Vendredi</dt><dd>10h-15h</dd>
        </dl>
        <h4>Horaires de la Coop</h4> 
        <dl>
          <dt>Lundi, Mardi, Mercredi</dt><dd>12h-14h / 18h-19h</dd> 
          <dt>Jeudi</dt><dd>12h-16h</dd> 
          <dt>Vendredi</dt><dd>12h-14h</dd>
        </dl>
        -->
        <table>
          <tr>
            <th></th>
            <th>Accueil</th>
            <th>Coop</th>
          </tr>
          <tr>
            <th>Lun., Mar., Mer.</th>
            <td>10h-19h</td>
            <td class="mini">12h-14h<br />18h-19h</td>
          </tr>
          <tr>
            <th>Jeudi</th>
            <td>10h-18h</td>
            <td>12h-16h</td>
          </tr>
          <tr>
            <th>Vendredi</th>
            <td>10h-15h</td>
            <td>12h-14h</td>
          </tr>
      </div>
    </div>
  </footer>
</body> 
</html>
