<!DOCTYPE HTML> 
<html id='signup-namechecker' class="simple-signup" role='document'> 
  <head>
    
    <style type="text/css">
      #login {
        display: block;
        position: relative;
        float: right;
        top: 0;
        right: auto;
        font-weight: 700;
        font-size: 14px;
        margin-left: 30px;
        padding: 6px 8px; }
    </style>
    <style type="text/css">
      #signup-namechecker.simple-signup{
      }

        #signup-namechecker.simple-signup #logo a{
          width: 178px;
          height: 47px;
          background-position: 0 0;
        }


        #signup-namechecker.simple-signup nav.mainnav{
          margin: 15px 0 0 0;
        }


          #signup-namechecker.simple-signup #login{
            padding: 4px 52px 4px 0;
            background: #008AA4;
            font-weight: normal;
            text-shadow: none;
            -moz-transition: all .3s ease-in-out; 
            -webkit-transition: all .3s ease-in-out;  
            -ms-transition: all .3s ease-in-out;  
            -o-transition: all .3s ease-in-out;  
            transition: all .3s ease-in-out;
          }

            #signup-namechecker.simple-signup #login:after{
              content: ' ';
              display: block;
              position: absolute;
              right: 0;
              top: 0;
              height: 100%;
              width: 30px;
              background: url('https://mailchimp.com/images/sprites/arrows.png') no-repeat 0 6px;
            }

            #signup-namechecker.simple-signup #login:hover{
              background: #0B97B2;
            }

        #signup-namechecker.simple-signup .content{
          width: 480px;
        }

          #signup-namechecker.simple-signup .content.main h1{
            line-height: 120%;
          }

          #signup-namechecker.simple-signup .content.main p{
            font-size: 15px;
          }

          #signup-namechecker.simple-signup .content.main form input[type="text"], #signup-namechecker.simple-signup .content.main form input[type="email"], #signup-namechecker.simple-signup .content.main form input[type="password"]{
            outline: none;
          }

            #signup-namechecker.simple-signup .content.main form input[type="text"]:focus, #signup-namechecker.simple-signup .content.main form input[type="email"]:focus, #signup-namechecker.simple-signup .content.main form input[type="password"]:focus{
              border: 1px solid #45bcd2;
              -webkit-box-shadow: 0px 0px 4px 0 #B1E1ED;
              box-shadow: 0px 0px 4px 0 #B1E1ED;
            }

          #signup-namechecker.simple-signup .content.main form small a{
            text-decoration: underline;
          }

        #signup-namechecker.simple-signup footer .colophon{
          text-align: left;
          padding-top: 20px;
        }
    </style>
  </head> 
  <body> 
    
      <header class='u3' id='signup-header'> 
        <div class='line' id='navbox'> 
          <div class='content'> 
            <div class='unit size1of2'> 
              <hgroup> 
                <h1 id='logo'> 
                  <a href='http://mailchimp.com/' title='Email Marketing and Email List Manager, MailChimp.com'> 
                    ChimpEmail Marketing and Email List Manager, MailChimp.com
                  </a> 
                </h1> 
              </hgroup> 
            </div> 
            <div class='unit size1of2'> 
              <nav class='mainnav' role='navigation'> 
                <a href='http://login.mailchimp.com' id='login' class="btn small" rel='prefetch'>Log In</a> 
              </nav> 
            </div> 
          </div> 
        </div> 
        <div class='line content'> 
          <div class='pagetitle'> 
          </div> 
          <nav class='subnav'></nav> 
        </div> 
      </header> 
      <section> 
        <div class='content main'> 
          <div class='line top0'> 
            <div class='unit size1of1'> 
              <div class='in15'> 

                
                <h1 class='bottom15'>Get Started with a Free Account</h1>
                <h3 class="h2 thin bottom30">Sign up in 30 seconds. No credit card required.</h3>
                <form action='/svc_signup_voxel/post.php' id='signupform' method='post' name='tryit' role='form'> 
                  <input name='formURL' type='hidden' value='https://mailchimp.com/signup/' /> 
                  <input name='confirmationURL' type='hidden' value='http://mailchimp.com/signup/success/' /> 
                  <input name='activationREF' type='hidden' value='' /> 
                  <div class='line bottom30'> 
                    <label for='email'>Email</label> 
                    <div class='field-wrap two-column'>
                      <input class='required med ' id='email' name='email' type='email' value='' /> 
                      <div class='field-help context'>What&rsquo;s your email address?</div>
                                          </div>
                  </div> 
                  <div class='line bottom30'> 
                    <label for='username'>Username</label> 
                    <div class="field-wrap two-column">
                      <input class='required med ' id='username' name='username' type='text' value='' /> 
                      <div class='field-help context'>Choose a username that contains only letters and numbers, or use your email address.</div>
                                          </div>
                  </div> 
                  <div class='line'> 
                    <label for='password'>Password</label> 
                    <div class="field-wrap two-column">
                      <input value="" class="required med" id="password" name="password" type="password" autocomplete="off" />
                      <div class="field-help context">
                        Choose a password that's at least six characters, including a number or special character. 
                      </div>
                                          </div>
                  </div> 
                  <div class='line'> 
                    <input id='referral' name='referral' type='hidden' value='mailchimp abuse desk' /> 
                  </div> 
                  <div class='line'> 
                    <div class='unit size1of2'> 
                      <div class='right15'> 
                        <input class='orange btn' name='submit' type='submit' value='Create My Account' /> 
                      </div> 
                    </div> 
                  </div> 
                  <div class='line bottom52'> 
                    <small> 
                      By clicking this button, you agree to MailChimp's <a href='http://mailchimp.com/legal/terms/' target="_blank">Anti-spam Policy &amp; Terms of Use</a>.
                    </small> 
                  </div> 
                </form> 
              </div> 
            </div> 
          </div> 
        </div> 
      </section> 
    <footer> 
      <div class='content'> 
        <div class='line'> 
          <div class='colophon'> 
            <p>&copy; 2001-2012 All Rights Reserved. MailChimp&reg; is a registered<br/> trademark of The Rocket Science Group</p> 
          </div> 
        </div> 
      </div> 
    </footer>
    
  </body> 
</html> 