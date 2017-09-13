@extends('layouts.master')

@section('title')

@endsection

@section('content')


    <section class="populer-course">
        <div class="container">
            <h2 class="pop-cap">popular courses</h2>
            <hr>
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
                  <div class="caption">
                    <h3>php</h3>
                    <p>PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>
                    <p><a href="php-read.php" class="btn btn-primary" role="button">read more</a> <a href="php-test.php" class="btn btn-primary" role="button">test</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
                  <div class="caption">
                    <h3>java</h3>
                    <p>Java is a high-level programming language originally developed by Sun Microsystems and released in 1995. Java runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX.</p>
                    <p><a href="java-read.php" class="btn btn-primary" role="button">read more</a> <a href="java-test.php" class="btn btn-primary" role="button">test</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
                  <div class="caption">
                    <h3>C</h3>
                    <p>C is a general-purpose, procedural, imperative computer programming language developed in 1972 by Dennis M. Ritchie at the Bell Telephone Laboratories to develop the UNIX operating system.</p>
                    <p><a href="c-read.php" class="btn btn-primary" role="button">read more</a> <a href="c-test.php" class="btn btn-primary" role="button">test</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
                  <div class="caption">
                    <h3>html/css</h3>
                    <p>HTML (HyperText Markup Language) is the most basic building block of the Web.<br>
                    Cascading Style Sheets (CSS) are a stylesheet language used to describe the presentation of a document written in HTML or XML
                    </p>
                    <p><a href="html-read.php" class="btn btn-primary" role="button">read more</a> <a href="html-test.php" class="btn btn-primary" role="button">test</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
                  <div class="caption">
                    <h3>phython</h3>
                    <p>Python is a widely used high-level programming language for general-purpose programming, created by Guido van Rossum and first released in 1991.</p>
                    <p><a href="phython-read.php" class="btn btn-primary" role="button">read more</a> <a href="phython-test.php" class="btn btn-primary" role="button">test</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
                  <div class="caption">
                    <h3>c+</h3>
                    <p>C+ is a general-purpose programming language. It has imperative, object-oriented and generic programming feature.</p>
                    <p><a href="cplus-read.php" class="btn btn-primary" role="button">read more</a> <a href="cplus.php" class="btn btn-primary" role="button">test</a></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    <section class="faq-section" id="faq">
    <div class="container">
        <div class="faq">
            <h2>FAQ</h2>
            <div class="btn-term">
                <a href="php-faq.php"><button class="btn btn-success btn-lg">php</button></a>

                <a href="java-faq.php"><button class="btn btn-info btn-lg">java</button></a>

                <a href="c-faq.php"><button class="btn btn-primary btn-lg">c</button></a>

                <a href="html-faq.php"><button class="btn btn-success btn-lg">html/css</button></a>

                <a href="phython-faq.php"><button class="btn btn-info btn-lg">phython</button></a>

                <a href="cplus-faq.php"><button class="btn btn-primary btn-lg">c+</button></a>
            </div>
        </div>
    </div>
    </section>
        
    </section>
    <section class="about us" id="about-us">
        <div class="container">
            
            <div class="row skill-bar">
                <div class="col-md-6 we-are">
                    <h3>who we are</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quia temporibus fugit quam expedita eius aliquam ullam excepturi. Beatae fugiat cupiditate commodi eum culpa id quaerat modi aliquid ad unde!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quia temporibus fugit quam expedita eius aliquam ullam excepturi. Beatae fugiat cupiditate commodi eum culpa id quaerat modi aliquid ad unde!</p>
                </div>
                <div class="col-md-6">
                    <h3>show your skill</h3>
                    <div class="progres-bar">
                        <span>php</span>
                        <div class="progress">
                          
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </div>  
                    <div class="progres-bar">
                        <span>c</span>
                        <div class="progress">
                          
                          <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                            50%
                          </div>
                        </div>

                    </div>
                    <div class="progres-bar">
                        <span>java</span>
                        <div class="progress">
                          
                          <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                            85%
                          </div>
                        </div>

                    </div>
                    <div class="progres-bar">
                        <span>phython</span>
                        <div class="progress">
                          
                          <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                            55%
                          </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container">
        <h3>follow us on</h3>
        <ul>
            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            
        </ul>
            
        </div>
    </footer>
    

@endsection