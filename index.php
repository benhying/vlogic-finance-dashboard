<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46066221-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-46066221-3');
  </script>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Finance Dashboard</title>
  <link rel="stylesheet" type="text/css" href="../css/finance.css">
  <link rel="icon" href="http://artillery.studio/artillery-icon.jpg">
  <meta name="description" content="A financial dashboard demo created for Visual Logic">
  <meta name="keywords" content="finance, dashboard, performance, statistics, money, value, stocks, podcasts, social, user, graph, transactions, buy, sell">
  <meta name="author" content="Benjamin Hying">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- <meta property="og:image" content="http://artillery.studio/artillery-icon.jpg">
  <meta property="og:title" content="Artillery Illustrations">
  <meta property="og:description" content="Go Art With A Bang"> edit all of this -->


</head>

<body>

    <div id="left-menu">

      <div id="avatar">
        <img src="../images/avatar.png"/>
        <h1 id="username">Jenny Buffet</h1>
        <h2 id="location">New York, NY</h2>
      </div>

      <!----------------------------------------------------------------------->

      <div id="follow">
        <div id="followers">
          <h3 class="follow-title">Followers</h3>
          <h4 class="follow-stat">22,293</h4>
        </div>
        <div id="following">
          <h3 class="follow-title">Following</h3>
          <h4 class="follow-stat">186</h4>
        </div>
      </div>

      <!----------------------------------------------------------------------->

      <div id="nav">
        <ul>
          <li>
            <a class="selected" onclick="opt('0');">
              <div class="indicator"></div>
            <svg version="1.1" id="chart-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" style="enable-background:new 0 0 40.27 40.27;" viewBox="0 0 40.27 40.27" xml:space="preserve">
                <g class="active">
	                <path d="M15.2,10.4c-4.9,1.43-8.47,5.96-8.47,11.32c0,6.52,5.28,11.8,11.8,11.8c2.69,0,5.17-0.9,7.16-2.42"/>
	                <path d="M20.91,6.75v13.69l11.42,7.55c0.78-1.85,1.21-3.89,1.21-6.02C33.55,14.39,28.1,8.09,20.91,6.75z"/>
                </g>
            </svg>
            <span class="nav-active">Dashboard</span>
            </a>
          </li>
          <!------------------------------------------------------------------->
          <li>
            <a class="unselected" onclick="opt('1');">
              <div class="indicator"></div>
              <svg version="1.1" id="uptrend-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" style="enable-background:new 0 0 40.27 40.27;" viewBox="0 0 40.27 40.27" xml:space="preserve">
                  <g class="inactive">
                  	<polyline points="8.23,25.93 15.24,18.92 21.35,25.03 32.04,14.34 	"/>
                  	<polyline points="32.04,24.51 32.04,14.34 22.01,14.34 	"/>
                  </g>
              </svg>
              <span class="nav-inactive">Performance</span>
            </a>
          </li>
          <!------------------------------------------------------------------->
          <li>
            <a class="unselected" onclick="opt('2');">
              <div class="indicator"></div>
              <svg version="1.1" id="leaf-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" style="enable-background:new 0 0 40.27 40.27;" viewBox="0 0 40.27 40.27" xml:space="preserve">
                <g class="inactive">
                	<path d="M31.78,8.02c-0.71,6.89-3.33,26.61-19.48,20.2C6.12,14.2,23.46,9.92,31.78,8.02z"/>
                  <line x1="8.49" y1="32.25" x2="20.47" y2="20.37"/>
                </g>
              </svg>
              <span class="nav-inactive">Articles</span>
            </a>
          </li>
          <!------------------------------------------------------------------->
          <li>
            <a class="unselected" onclick="opt('3');">
              <div class="indicator"></div>
              <svg version="1.1" id="comment-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" style="enable-background:new 0 0 40.27 40.27;" viewBox="0 0 40.27 40.27" xml:space="preserve">
                <g class="inactive">
                  <path d="M31.3,18.95c0-5.25-5-9.5-11.17-9.5S8.97,13.7,8.97,18.95c0,5.25,5,9.5,11.17,9.5c1.07,0,2.11-0.14,3.09-0.38
                  l5.18,2.75v-5.5C30.2,23.64,31.3,21.4,31.3,18.95z"/>
                </g>
              </svg>
              <span class="nav-inactive">Messages</span>
            </a>
          </li>
          <!------------------------------------------------------------------->
          <li>
            <a class="unselected" onclick="opt('4');">
              <div class="indicator"></div>
              <svg version="1.1" id="pulse-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" style="enable-background:new 0 0 40.27 40.27;" viewBox="0 0 40.27 40.27" xml:space="preserve">
                <g class="inactive">
                  <polyline points="7.9,19.9 13.84,19.9 17.4,13.24 22.63,27.03 26.19,20.14 32.37,20.14 "/>
                </g>
              </svg>
              <span class="nav-inactive">Stats</span>
            </a>
          </li>
          <!------------------------------------------------------------------->
          <li>
            <a class="unselected" onclick="opt('5');">
              <div class="indicator"></div>
              <svg version="1.1" id="bolt-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" style="enable-background:new 0 0 40.27 40.27;" viewBox="0 0 40.27 40.27" xml:space="preserve">
                <g class="inactive">
                  <path d="M26.72,9.09h-4.07h-2.52h-6.58L6.97,20.9l7.13,10.29h3.33h2.71h6.04L33.3,20.9L26.72,9.09z M20.14,23.83
  	              c-2.04,0-3.69-1.65-3.69-3.69c0-2.04,1.65-3.69,3.69-3.69s3.69,1.65,3.69,3.69C23.83,22.18,22.18,23.83,20.14,23.83z"/>
                </g>
              </svg>
              <span class="nav-inactive">Settings</span>
            </a>
          </li>
        </ul>
      </div>

    </div>

  </div> <!-- end left menu --------------------------------------------------->

<!----------------------------------------------------------------------------->

  <div id="main-panel">

    <div id="kpis">

      <div id="transactions">
        <h1 class="transaction-volume">1000</h1>
        <h2 class="transaction-label">TRANSACTIONS VOL</h2>
        <img src="../images/Path 16.png"/>
        <ul>
          <li>SUN</li>
          <li>MON</li>
          <li>TUE</li>
          <li>WED</li>
          <li>THU</li>
          <li>FRI</li>
          <li>SAT</li>
        </ul>
      </div>

      <div id="totalvalue">
        <h1 class="kpi-num">1228</h1>
        <h2 class="kpi-label">TOTAL VALUE</h2>
        <svg version="1.1" id="down-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26.02 26.02" style="enable-background:new 0 0 26.02 26.02;" xml:space="preserve">
          <g class="red">
	          <line x1="13.01" y1="2.94" x2="13.01" y2="23.08"/>
	          <polyline points="8.66,18.76 12.98,23.08 17.36,18.7 	"/>
          </g>
        </svg>
        <h3 class="daily-value-red">-6%</h3>
      </div>

      <div id="avgprice">
        <h1 class="kpi-num">12.83</h1>
        <h2 class="kpi-label">AVG PRICE</h2>
        <svg version="1.1" id="up-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26.02 26.02" style="enable-background:new 0 0 26.02 26.02;" xml:space="preserve">
          <g class="green">
	          <line x1="13.01" y1="23.08" x2="13.01" y2="2.94"/>
	          <polyline points="17.36,7.26 13.04,2.94 8.66,7.32 	"/>
          </g>
        </svg>
        <h3 class="daily-value-green">+2%</h3>
      </div>

    </div>

    <!------------------------------------------------------------------------->

    <div id="graph">

      <div>
        <div id="lines">
          <div class="bar" id="jan18"></div>
          <div class="bar" id="feb18"></div>
          <div class="bar" id="mar18"></div>
          <div class="bar" id="apr18"></div>
          <div class="bar" id="may18"></div>
          <div class="bar" id="jun18"></div>
          <div class="bar" id="jul18"></div>
          <div class="bar" id="aug18"></div>
          <div class="bar" id="sep18"></div>
          <div class="bar" id="oct18"></div>
          <div class="bar" id="nov18"></div>
          <div class="bar" id="dec18"></div>
          <div class="bar" id="jan19"></div>
        </div>
        <div id="background">
          <div id="one-fourth" class="horizontal-line"></div>
          <div id="two-fourths" class="horizontal-line"></div>
          <div id="three-fourths" class="horizontal-line"></div>
          <div id="four-fourths" class="horizontal-line"></div>
        </div>

        <div id="y-series">
          <ul>
            <li>80</li>
            <li>60</li>
            <li>40</li>
            <li>20</li>
            <li>0</li>
          </ul>
        </div>

        <div id="x-series">
          <ul>
            <li id="jan18-label">01/18</li>
            <li id="may18-label">05/18</li>
            <li id="sep18-label">09/18</li>
            <li id="jan19-label">01/19</li>
          </ul>
        </div>

      </div>

    </div>

    <!------------------------------------------------------------------------->

    <div id="latest-transactions">
      <h1 class="section-head transactions-head">Latest transactions</h1>
      <table>
        <tr>
          <td class="trans-icon"><img src="../images/amazon-icon-256.png"/></td>
          <td class="company">Amazon</td>
          <td class="stock-abbrev">AMZN</td>
          <td class="purchase-amt" style="color:#70ae9d;">1,871.15</td>
          <td class="shopping-cart"><img class="shopping-cartimg" src="../images/shopping-cart.png"/></td>
        </tr>
        <tr>
          <td class="trans-icon"><img src="../images/Twitter_Bird.svg.png"/></td>
          <td class="company">Twitter</td>
          <td class="stock-abbrev">TWTR</td>
          <td class="purchase-amt" style="color:#70ae9d;">37.90</td>
          <td class="shopping-cart"><img class="shopping-cartimg" src="../images/shopping-cart.png"/></td>
        </tr>
        <tr>
          <td class="trans-icon"><img src="../images/1200px-McDonald's_Golden_Arches.svg.png"/></td>
          <td class="company">McDonald's</td>
          <td class="stock-abbrev">MCD</td>
          <td class="purchase-amt" style="color:#c84333;">199.07</td>
          <td class="shopping-cart"><img class="shopping-cartimg" src="../images/shopping-cart.png"/></td>
        </tr>
        <tr>
          <td class="trans-icon"><img src="../images/1280px-Carrefour_logo_no_tag.svg.png"/></td>
          <td class="company">Carrefour</td>
          <td class="stock-abbrev">CA</td>
          <td class="purchase-amt" style="color:#70ae9d;">17.40</td>
          <td class="shopping-cart"><img class="shopping-cartimg" src="../images/shopping-cart.png"/></td>
        </tr>
      </table>
    </div>

    <div id="podcasts">
      <h1 class="section-head podcasts-head">Podcasts</h1>
      <table>
        <tr id="pod1">
          <td class="pod-icon"><img src="../images/the-economist-logo-square-logo.png"/></td>
          <td class="pod-title">Watchlist <span class="pod-author">James Johns</span></td>
          <td class="play-btn"><img src="../images/play-arrow.png"/></td>
        </tr>
        <tr id="pod2">
          <td class="pod-icon"><img src="../images/Rectangle.png"/></td>
          <td class="pod-title">Investors guide <span class="pod-author">Jenson Button</span></td>
          <td class="play-btn"><img src="../images/play-arrow.png"/></td>
        </tr>
        <tr id="pod3">
          <td class="pod-icon"><img src="../images/insurance-icon.png"/></td>
          <td class="pod-title">Best insurance <span class="pod-author">Richard Anthony</span></td>
          <td class="play-btn"><img src="../images/play-arrow.png"/></td>
        </tr>
        <tr id="pod4">
          <td class="pod-icon"><img src="../images/unicorns-icon.png"/></td>
          <td class="pod-title">Unicorns <span class="pod-author">Alicia Florricks</span></td>
          <td class="play-btn"><img src="../images/play-arrow.png"/></td>
        </tr>
      </table>
    </div>

    <!------------------------------------------------------------------------->

  </div>

  <div id="stocks-panel">

    <h1 class="section-head stocks-head">Top stocks</h1>
    <div id="search-box"><img src="../images/zoom-split.png"/></div>
    <table>
      <tr>
        <td class="alpha"></td>
        <td class="beta">CAC 40</td>
        <td class="stockval">5,430.01 (+2.1%)</td>
      </tr>
      <tr>
        <td class="alpha"></td>
        <td class="beta">FTSE 100</td>
        <td class="stockval">7,353.33 (+2.1%)</td>
      </tr>
      <tr>
        <td class="alpha"></td>
        <td class="beta">Microsoft</td>
        <td class="stockval">137.23 (+2.1%)</td>
      </tr>
      <tr>
        <td class="alpha"></td>
        <td class="beta">Amazon</td>
        <td class="stockval">1,908.98 (+2.1%)</td>
      </tr>
      <tr>
        <td class="alpha"></td>
        <td class="beta">Adobe</td>
        <td class="stockval">284.10 (+2.1%)</td>
      </tr>
      <tr>
        <td class="alpha"></td>
        <td class="beta">Air liquide</td>
        <td class="stockval">117.80 (+2.1%)</td>
      </tr>
      <tr>
        <td class="alpha"></td>
        <td class="beta">AXA</td>
        <td class="stockval">22.56 (+2.1%)</td>
      </tr>
      <tr>
        <td class="alpha"></td>
        <td class="beta">Rightmove</td>
        <td class="stockval">567.90 (+2.1%)</td>
      </tr>
      <tr>
        <td class="alpha"></td>
        <td class="beta">Volkswagen</td>
        <td class="stockval">147.8 (+2.1%)</td>
      </tr>
      <tr>
        <td class="alpha"></td>
        <td class="beta">PSA</td>
        <td class="stockval">229.09 (+2.1%)</td>
      </tr>
      <tr>
        <td class="alpha"></td>
        <td class="beta">LVMH</td>
        <td class="stockval">320.40 (+2.1%)</td>
      </tr>
      <tr>
        <td class="alpha"></td>
        <td class="beta">Nicox</td>
        <td class="stockval">4,847 (+2.1%)</td>
      </tr>
    </table>

  </div>




</body>

<script>

var alphaList = new Array();

opt(0);
assignAlphas();

  function assignAlphas(){
    var stockString;
    var firstChar;
    var stockList = document.getElementById('stocks-panel').getElementsByClassName("beta");
    var alphaColumn = document.getElementById('stocks-panel').getElementsByClassName("alpha");
    var stockVals = document.getElementById('stocks-panel').getElementsByClassName("stockval");
    for (var i=0; i < stockList.length; i++){
      stockString = stockList[i].innerHTML;
      firstChar = stockString.charAt(0);
      alphaList.push(firstChar);
      if (i === 0 || i === 2 || i === 3 || i === 6 || i === 7 || i === 8 || i === 10 || i === 11){
        stockVals[i].style.color = "#70ae9d";
      }
      else{
        stockVals[i].style.color = "#c84333";
      }
    }

    for (var i=0; i < alphaList.length; i++){
      alphaColumn[i].innerHTML = alphaList[i];
      if (i === 0 || i === 3 || i === 4 || i === 7 || i === 8 || i === 11){
        alphaColumn[i].style.color = "#347cf6";
        alphaColumn[i].style.backgroundColor = "#dcecfd";
      }
      else if (i === 1 || i === 5 || i === 9){
        alphaColumn[i].style.color = "#e6b25b";
        alphaColumn[i].style.backgroundColor = "#fbf4e6";
      }
      else if (i === 2 || i === 6 || i === 10){
        alphaColumn[i].style.color = "#d34a44";
        alphaColumn[i].style.backgroundColor = "#f7e3e2";
      }
    }

  }

  function opt(anchorNum){

    var allIndicators = document.getElementsByClassName('indicator');
    var allAnchors = document.getElementById('nav').getElementsByTagName('A');
    var allIcons = document.getElementById('nav').getElementsByClassName('active');
    var allText = document.getElementById('nav').getElementsByTagName('SPAN');

    for (var i=0; i < allIcons.length; i++){
      allIcons[i].setAttribute("class","inactive");
    }

    for (var i=0; i < allIndicators.length; i++){
      allIndicators[i].style.opacity = 0;
    }

    allIndicators[anchorNum].style.opacity = 1;

    var newIcon = document.getElementById('nav').getElementsByTagName('A')[anchorNum].getElementsByClassName('inactive')[0];

    newIcon.setAttribute("class","active");

    for (var i=0; i < allText.length; i++){
      allText[i].className = "nav-inactive";
    }

    var newText = document.getElementById('nav').getElementsByTagName('A')[anchorNum].getElementsByClassName('nav-inactive');

    for (var i=0; i < newText.length; i++){
      newText[i].className = "nav-active";
    }
  }











  function openPhoto(num){
    current = num;

    document.getElementById('num').innerHTML = current + 1; //update left fraction number in nav

    if (choice === "oil") //------------------------------------------------------- change photo
      document.getElementById('out-of').innerHTML = oilPhotos.length;
    else if (choice === "ink")
      document.getElementById('out-of').innerHTML = inkPhotos.length;

    var cPhoto = document.getElementById('photo').getElementsByTagName("IMG")[0];
    var cTitle = document.getElementById('title');

    if (choice === "oil"){
      cPhoto.setAttribute("src", oilPhotos[current]);
    }
    else if (choice === "ink"){
      cPhoto.setAttribute("src", inkPhotos[current]);
    } //--------------------------------------------------------------------------- end change photo

    var photoWidth = cPhoto.offsetWidth;
    var photoHeight = cPhoto.offsetHeight;

    // if (choice === "oil"){ //------------------------------------------------------ change title
    //   cTitle.innerHTML = oilTitles[current];
    // }
    // else{
    //   cTitle.innerHTML = inkTitles[current];
    // } //--------------------------------------------------------------------------- end change title

    var allSections = document.getElementById('info-pane').getElementsByTagName("SECTION");
    for (var i = 0; i < allSections.length; i++){ //------------------------------- make all invisible
      allSections[i].className = "invisible";
    }
    if (choice === "oil"){
      document.getElementById('oil-sections').getElementsByTagName("SECTION")[current].className = "visible";
    }
    else if (choice === "ink"){
      document.getElementById('ink-sections').getElementsByTagName("SECTION")[current].className = "visible";
    } //--------------------------------------------------------------------------- end make current visible

  }

  function switchTo(option){
    var opt = option;

    if (opt === "oil"){
      document.getElementById('opt1').className = "opt-selected"; //select oil option
      document.getElementById('opt2').className = "opt-notselected"; //dselect pen option
      choice = "oil";
      openPhoto(0);
    }
    else if (opt === "ink"){
      document.getElementById('opt1').className = "opt-notselected"; //dselect oil option
      document.getElementById('opt2').className = "opt-selected"; //select pen option
      choice = "ink";
      openPhoto(0);
    }
  }

  function loadNext(){
    // window.clearTimeout(timeoutHandle2);
    var num = current;

    changePhotos();
  }

  function changePhotos(){
    var num = current;

    var cPhoto = document.getElementById('photo').getElementsByTagName("IMG")[0];

    if (num < oilPhotos.length - 2){
      cPhoto.setAttribute("src", oilPhotos[num+1]); /* set current photo to next photo */
      current++;
    }
    else if (num < oilPhotos.length - 1){
      cPhoto.setAttribute("src", oilPhotos[num+1]); /* set current photo to next photo */
      current++;
    }
    else{
      cPhoto.setAttribute("src", oilPhotos[num-num]); /* set photo to first photo */
      current = 0;
    }
    // resizePhoto();
  }

  function fadeIn(){

  }

  function gotoPrevious(){
    if (choice === "oil"){
      if (current === 0)
        openPhoto(oilPhotos.length-1);
      else
        openPhoto(current-1);
    }
    else{
      if (current === 0)
        openPhoto(inkPhotos.length-1);
      else
        openPhoto(current-1);
    }
  }

  function gotoNext(){
    if (choice === "oil"){
      if (current === oilPhotos.length-1)
        openPhoto(0);
      else
        openPhoto(current+1);
    }
    else{
      if (current === inkPhotos.length-1)
        openPhoto(0);
      else
        openPhoto(current+1);
    }
  }

</script>
