<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Sign Up to our Mailing List!</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <h1>Sign Up to Our Mailing List!</h1>
        
        <form action="process.php" method="post">
            <fieldset>
			<legend>Sign Up</legend>
                <div>
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div>            
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div>            
                    <label for="format">Mail format</label>
                    <select name="format" id="format">
                        <option value="plain">Plain text</option>
                        <option value="html">HTML</option>
                    </select>
                </div>
                <div>            
                    <input type="checkbox" name="tac" id="tac" value="yes" />
                    <label for="tac">Tick this box to confirm you have read our <a href="#">terms and conditions</a></label>
                </div>
                <div>            
                    <input type="submit" name="submit" value="SUBMIT" />
                </div>
            </fieldset>
        </form>
		
		
        
    </body>
</html>
