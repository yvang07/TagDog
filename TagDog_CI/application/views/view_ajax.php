<h1>This is the demo page for the simple AJAX post in CodeIgniter Using JQuery</h1>

<p>Username: myusername | Password: mypassword</p>
<p>Try to enter nothing in the fields and click the Submit button.<br/>
Try to mismatch the username and/or password and click the Submit button. </p>

    
    <div style="text-align:right; width:500px;" >
    <div id="form_message"></div>
      <form name="ajax_form" id ="ajax_form" method="post">
    
          Username/Email:*<input type="text" name="username" id="username" size="30" /><br/><br/>
          Password:*<input type="password" name="password" id="password" size="30" /><br/><br/>
          <input type="submit" value="Submit" name="login_submit" id="login_submit" />

      </form>
    </div>
