<?php
    include_once ('config.php');
    $query="SELECT*FROM resume_maker";
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Page-Style-link -->
    <link rel="stylesheet" href="Css/resume.css?v=<?php echo time(); ?>">
    <!-- Page-Style-link -->
    <title>Resume</title>
  </head>
  <body>
    <div class="container">
      <!-- left-side: start  -->
      <div class="left">
        <!-- profile-section: start -->
        <div class="profile-photo">
          <div class="photo">
            <img
              src="images/profile-photo-around.png"
              alt="profile-photo-around"
              class="profile-border"
            />
            <div class="pic bg-color-lite"></div>
          </div>
          <div class="name">
            <p class="text-color-mid font-raleway">
              John<span class="nickname">Smith</span>
            </p>
            <p class="text-color-mid font-raleway job">Web Developer</p>
          </div>
        </div>
        <!-- profile-section: start -->
        <div class="profile">
          <div class="sec-name first">
            <div class="round-icon color-purple">
              <img src="icons/profile-icon.png" alt="people-icon" />
            </div>
            <div class="pro">
              <p class="text-uppercase font-iceland text-color-lite">Profile</p>
            </div>
          </div>
          <div class="pro-text font-opensans text-color-dark">
            <p>
              Lorem ipsumus et estum doolor sita amet, consectetur it lisar
              adipiscing elit. Aenean condimentum ante ut magna convallis
              egestas. Nulla et quam sodales, ultrices odio eget. Aenean
              condimentum ante ut magna convallis egestas. Nulla .
            </p>
          </div>
        </div>
        <!-- profile-section: end -->
        <!-- contact-section: start  -->
        <div class="contact">
          <div class="sec-name second">
            <div class="round-icon color-purple">
              <img src="icons/call-icon.png" alt="call-icon" />
            </div>
            <div class="pro">
              <p class="text-uppercase font-iceland text-color-lite">Contact</p>
            </div>
          </div>
          <div class="contact-items">
            <div class="item item1">
              <div class="button-ash color-ash d-in"></div>
              <p class="d-in text-color-dark font-opensans">+ 000 1234 5678</p>
            </div>
            <div class="under-line color-ash"></div>
            <div class="item item2">
              <div class="button-ash color-ash d-in"></div>
              <p class="d-in text-color-dark font-opensans">e-mail@email.com</p>
            </div>
            <div class="under-line color-ash"></div>
            <div class="item item3">
              <div class="button-ash color-ash d-in"></div>
              <p class="d-in text-color-dark font-opensans">
                52 Blvd Sesame, CA
              </p>
            </div>
          </div>
        </div>
        <!-- contact-section: end  -->
        <!-- social-section: start  -->
        <div class="social">
          <div class="sec-name third">
            <div class="round-icon color-purple">
              <img src="icons/social-icon.png" alt="call-icon" />
            </div>
            <div class="pro">
              <p
                class="text-uppercase font-iceland text-color-lite header-font"
              >
                Social
              </p>
            </div>
          </div>
          <div class="contact-items">
            <div class="item item1">
              <div class="button-ash color-ash d-in"></div>
              <p class="d-in text-color-dark font-opensans">facebook.com/you</p>
            </div>
            <div class="under-line color-ash"></div>
            <div class="item item2">
              <div class="button-ash color-ash d-in"></div>
              <p class="d-in text-color-dark font-opensans">twitter.com/you</p>
            </div>
            <div class="under-line color-ash"></div>
            <div class="item item3">
              <div class="button-ash color-ash d-in"></div>
              <p class="d-in text-color-dark font-opensans">driddle.com/you</p>
            </div>
            <div class="under-line color-ash"></div>
            <div class="item item4">
              <div class="button-ash color-ash d-in"></div>
              <p class="d-in text-color-dark font-opensans">driddle.com/you</p>
            </div>
          </div>
        </div>
        <!-- social-section: end  -->
      </div>
      <!-- left-side: end -->
      <!-- right-side: start  -->
      <div class="right bg-color-dark">
        <div class="back">
          <div class="work-experience bg-color-lite border">
            <div class="round-icon color-pink d-in">
              <img src="icons/bag-icon.png" alt="bag-icon" />
            </div>
            <p
              class="text-uppercase font-iceland text-color-mid header-font d-in"
            >
              work experience
            </p>
            <div class="dots">
              <div class="dot one"></div>
              <div class="dot two"></div>
              <div class="dot three"></div>
            </div>
            <div class="ex-section">
              <div class="ex-sec-items d-in">
                <div class="cir d-in">
                  <div class="circle d-in"></div>
                </div>
                <div class="ex-text d-in">
                  <p class="text-uppercase text-color-mid font-raleway">
                    Graphic river
                    <span class="text-color-white">- Jan 2010 - feb 2016</span>
                  </p>
                  <p class="sub font-raleway d-in">Graphic Designer</p>
                  <p class="sub-text font-opensans d-in">
                    Consectetur adipiscing elit. Aenean condimentum ante ut
                    magna convallis egestas. Nulla et quam sodales, ultrices
                    odio eget, ultricies ipsum.Lore ipsum dolor sit amet quantum
                    estares betare mina.
                  </p>
                </div>
              </div>
              <div class="under-line color-ash under-line-right"></div>
              <div class="ex-sec-items d-in">
                <div class="cir d-in">
                  <div class="circle d-in"></div>
                </div>
                <div class="ex-text d-in">
                  <p class="text-uppercase text-color-mid font-raleway">
                    Theme forest
                    <span class="text-color-white">- Jan 2010 - feb 2016</span>
                  </p>
                  <p class="sub font-raleway d-in">Web Developer</p>
                  <p class="sub-text font-opensans d-in">
                    Consectetur adipiscing elit. Aenean condimentum ante ut
                    magna convallis egestas. Nulla et quam sodales, ultrices
                    odio eget, ultricies ipsum.Lore ipsum dolor sit amet quantum
                    estares betare mina.
                  </p>
                </div>
              </div>
              <div class="under-line color-ash under-line-right"></div>
              <div class="ex-sec-items d-in">
                <div class="cir d-in">
                  <div class="circle d-in"></div>
                </div>
                <div class="ex-text d-in">
                  <p class="text-uppercase text-color-mid font-raleway">
                    Audio Jungle
                    <span class="text-color-white">- Jan 2010 - feb 2016</span>
                  </p>
                  <p class="sub font-raleway d-in">Sound Producer</p>
                  <p class="sub-text font-opensans d-in">
                    Consectetur adipiscing elit. Aenean condimentum ante ut
                    magna convallis egestas. Nulla et quam sodales, ultrices
                    odio eget, ultricies ipsum.Lore ipsum dolor sit amet quantum
                    estares betare mina.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- education-section: start -->
          <div class="education bg-color-lite border">
            <div class="round-icon color-pink d-in">
              <img src="icons/education-icon.png" alt="bag-icon" />
            </div>
            <p
              class="text-uppercase font-iceland text-color-mid header-font d-in"
            >
              Education
            </p>
            <div class="dots">
              <div class="dot one"></div>
              <div class="dot two"></div>
              <div class="dot three"></div>
            </div>
            <div class="ex-section">
              <div class="ex-sec-items d-in">
                <div class="bar d-in">
                  <div class="bars d-in"></div>
                </div>
                <div class="ex-text d-in">
                  <p class="text-uppercase text-color-mid font-raleway">
                    Master Degree
                    <span class="text-color-white">- Jan 2010 - feb 2016</span>
                  </p>
                  <p class="sub font-raleway d-in">
                    Graphic Designer High School
                  </p>
                </div>
              </div>
              <div class="under-line color-ash under-line-right edu-un"></div>
              <div class="ex-sec-items d-in">
                <div class="bar d-in">
                  <div class="bars d-in bar-blue"></div>
                </div>
                <div class="ex-text d-in">
                  <p class="text-uppercase text-color-mid font-raleway">
                    Bachelor Degree
                    <span class="text-color-white">- Jan 2010 - feb 2016</span>
                  </p>
                  <p class="sub font-raleway d-in">ThemForest University</p>
                </div>
              </div>
              <div class="under-line color-ash under-line-right edu-un"></div>
              <div class="ex-sec-items d-in">
                <div class="bar d-in">
                  <div class="bars d-in bar-violate"></div>
                </div>
                <div class="ex-text d-in">
                  <p class="text-uppercase text-color-mid font-raleway">
                    Creative License
                    <span class="text-color-white">- Jan 2010 - feb 2016</span>
                  </p>
                  <p class="sub font-raleway d-in">Code River Class</p>
                </div>
              </div>
            </div>
          </div>
          <!-- education-section: end -->
          <!-- skills-section: start -->
          <div class="skills bg-color-lite border">
            <div class="round-icon color-pink d-in">
              <img src="icons/education-icon.png" alt="bag-icon" />
            </div>
            <p
              class="text-uppercase font-iceland text-color-mid header-font d-in"
            >
              Skills
            </p>
            <div class="dots">
              <div class="dot one"></div>
              <div class="dot two"></div>
              <div class="dot three"></div>
            </div>
            <div class="bar-graph-section">
              <div class="bar-graph">
                <img src="images/grid.png" alt="" />
                <img src="images/grid.png" alt="" class="bar-img2" />
              </div>
              <div class="platforms">
                <div class="gradient java bar-width"></div>
                <div class="gradient html bar-width"></div>
                <div class="gradient css bar-width"></div>
                <div class="gradient muse bar-width"></div>
                <div class="gradient edge bar-width"></div>
                <div class="gradient premiere bar-width"></div>
                <div class="gradient joomla bar-width"></div>
                <div class="gradient photoshop bar-width"></div>
              </div>
              <div class="sections-names">
                <p class="java text-uppercase text-color-mid font-resize">
                  Java
                </p>
                <p class="html text-uppercase text-color-mid font-resize">
                  HTML
                </p>
                <p class="css text-uppercase text-color-mid font-resize">CSS</p>
                <p class="muse text-uppercase text-color-mid font-resize">
                  Muse
                </p>
                <p class="edge text-uppercase text-color-mid font-resize">
                  Edge
                </p>
                <p class="premiere text-uppercase text-color-mid font-resize">
                  Premiere
                </p>
                <p class="joomla text-uppercase text-color-mid font-resize">
                  Joomla
                </p>
                <p class="photoshop text-uppercase text-color-mid font-resize">
                  Photoshop
                </p>
              </div>
            </div>
          </div>
          <!-- skills-section: end -->
        </div>
      </div>
      <!-- right-side: start  -->
    </div>
  </body>
</html>
