<div  class="footer-last">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-outer">
                                <div class="contact-heading">
                                    <h2>Company info</h2>
                                </div>
                                <div class="content-inner">
                                    <p class="fist in">Miklol Consulting & Research </p>
                                    <p class="secnd"><span class="iconcont"><?php $adress= $contact['Address']; $text_line = explode("floor",$adress);

print $text_line[0]; ?><a> <?php print $text_line[1]; ?></a></span> </p> 
                                    <p class="third"><span>Need Help? Call us now:</span>
                                        <br/><?php echo $contact['PhoneNo']; ?></p>
                                    <p class="frth"><span>Visit Our Office: </span>
                                        <br/>Monday - Satday: 9.00am to 5.00pm</p>
                                </div>
                            </div>
                        </div>
                        <div class="ful-width col-lg-3 xol-md-3 col-xs-12 col-sm-3">
                            <div class="contact-outer">
                                <div class="contact-heading">
                                    <h2>Useful links</h2>
                                </div>
                                <div class="content-inner">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="main"><a href="index.php"> Home </a></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="main"><a href="company-overview.php"> About </a></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="main"><a href="services.php" > Service</a></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="main"><a href="contact.php"> Contact</a></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 xol-md-5 col-xs-12 col-sm-5">
                            <div class="contact-outer">
                                <div class="contact-heading">
                                    <h2>NEWSLETTER SIGNUP</h2>
                                </div>
                                <div class="content-inner">
                                    <p class="fist">Subscribing to our mailing list and receive weekly newsletter with latest news and offers.</p>
                                    <form action="index.php">
                                        <div class="form-outer">
                                            <div class="column-1 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="email" placeholder="Add your E-mail Address" name="email">
                                                </div>
                                            </div>
                                            <div class="column-1 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-default"><img src="homepage2/img-1/right-arrow.svg" alt="image" class="arrow" ></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="media-social">
                                        <div class="left-n">
                                            <p>*We never spam!</p>
                                        </div>
                                        <div class="right-n">
                                            <ul class="list-inline">
                                                <li class="txt">Follow us :</li>
                                                <li><a><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a><i class="fab fa-twitter"></i></a></li>
                                                <li><a><i class="fab fa-skype"></i></a></li>
                                                <li><a><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------sec-11------------------------------------footer-last--------------------------------------->
            <div style="padding:0;" class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                            <ul>
                                <li>Copyright © <script>document.write(new Date().getFullYear())</script> Miklol consulting & Research , All Right Reserved</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                            <ul class="link">
                                <li class="bor"><a href="#"> </a></li>
                                <li><a href="#"> </a></li>
                                <li><a href="#" class="back-to-top" title="Back to top"><i class="fas fa-angle-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!------sec-11------------------------------------footerlast-end--------------------------------------->
        </main>
    </div>
    <!--primary-mobile-nav-->
    <div class="primary-mobile-nav header-v1" id="primary-mobile-nav" role="navigation">
        <a href="#" class="close-canvas-mobile-panel">×</a>
        <ul id="primary-menu2" class="menu">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="company-overview.php">About</a>
            </li>
            <li>
                <a href="service.php">Services</a>
            </li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div id="off-canvas-layer" class="off-canvas-layer"></div>