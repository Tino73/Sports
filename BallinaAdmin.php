<!DOCTYPE HTML>
<html>

<head>
  <title>Football Blogs</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- perdore class="logo_colour" me ja ndru ngjyren me ja bo t bardh -->
		  <?php
if(!isset($_SESSION))
{	
session_start();
}
?>
<h1>
Mir&euml Se Erdh&eumlt <?php echo $_SESSION['Name']; ?></h1>
          <h1><a href="homepage.html"><span class="logo_colour">Best Sports Blogs: The Best Sport Sites to Read</span></a></h1>
          <h2>Last updated May 14th, 2020</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- bone class="selected" ncilen faqe don per me e selektu me t hint-->
          <li class="selected"><a href="homepage.html">Home</a></li>      
          <li><a href="footlab.html">The Football Lab</a></li>
          <li><a href="transfertavern.html">Transfer Tavern</a></li>
		  <li><a href="footparadise.html">Football Paradise</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- side bar divi -->
        <h3 id="red_color">Latest News</h3>
        <h4>Leo Messi reveals his top 5 players</h4>
        <h5>May 14th, 2020</h5>
        <p>Lionel Messi Reveals His Top Five Best Players In World Football, Excluding Himself And Cristiano Ronaldo<br /><a href="https://www.sportbible.com/football/news-messi-names-his-top-five-excluding-himself-and-ronaldo-20200514">Read more</a></p>
        <p></p>
        <h4>Jose Mourhino explains how Inter Milan Beat Barcelona</h4>
        <h5>May 14th, 2020</h5>
        <p>He's revealed how he beat one of the best teams in modern football history.<br /><a href="https://www.sportbible.com/football/news-legends-jose-mourinho-explains-how-inter-milan-beat-barcelona-in-the-ucl-20200514">Read more</a></p>
        <h3>Best Sport News: </h3>
        <ul>
          <li><a href="https://www.sportbible.com/football"><span  class="green_color">Sport Bible</span></a></li>
          <li><a href="https://www.bbc.com/sport"><span  class="green_color">BBC - Sport</span></a></li>
          <li><a href="https://www.independent.co.uk/"><span  class="green_color">INDEPENDENT</span></a></li>
          <li><a href="https://www.theguardian.com/uk/sport"><span  class="green_color">The Guardian</span></a></li>
        </ul>
      </div>
      <div id="content">
	  
	  <form action="ShtoLajmin.php" method="post">
               Shto Lajmi:
			   <br>
                  <input type="text" name="lajmi" placeholder="Emri">
               <br>
				<input type="submit" VALUE="Ruaj">
              </form>
	  
	  
	  
        <!-- main contenti vjen qetu-->
		<h1>We Bring You Closer To Sports</h1>
        <p>Sport is one of those things that you’ll have to go a long way to find somebody that has no interest in. Whether it’s football, cricket, rugby, swimming or athletics, most people will have some sort of interest in a sport, be it watching or taking part.</p>
        <p>And because of this, there are countless numbers of sport blogs on the internet for you to keep up with your chosen sport on.</p>
        <p>There are many quality sports blogs out there; general sites that cover a wide range of sports and sport-specific blogs that will focus on one individual sport and specialise in the ins and outs of the that sport.</a>.</p>
        <p>We’ve compiled a list of the best sport blogs for you to check out and enjoy. We’ll cover a range of sports and also include a few general sport blogs too.</p>
        <p>What’s our criteria? We’ll be including blogs that provide genuinely good content and expert insights to their specific sport. We’ll also take into account how easy the
		site is to use, design will play a small part too, but ultimately we’re looking for the best sport blogs, so we’ll be checking out the blog awards scene too.</p>
		<h2>Here are the TOP 3 best Sport blogs: </h2>
        <p>Make sure to click on the title to see more</p>
        <ul>
          <li><a href="footlab.html"><span  class="green_color">The Football Lab</span></a></li>
          <li><li><a href="transfertavern.html"><span  class="green_color">Transfer Tavern</span></a></li></li>
          <li><a href="footparadise.html"><span  class="green_color">Football Paradise</span></a></li>
        </ul>
      </div>
    </div>
	<!-- pjesa e fundit -->
    <div id="footer">
       <span class = "black_color"> | Projekti Pjesa 1  | Punuan: </span><a href="https://github.com/Tino73/InxhWeb"><span class="green_color"> Altin Thaçi </span></a> <span class = "black_color"> dhe </span><a href="https://github.com/endrit-html/InxhinieriWeb"><span class="green_color"> Endrit Zekaj </span></a> <span class = "black_color"> | </span>
    </div>
  </div>
</body>
</html>
