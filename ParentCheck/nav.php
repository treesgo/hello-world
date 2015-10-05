  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ParentCheck</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="signup.php">sign up</a></li>
        <li><a href="home.php">other</a></li>
      </ul>
      <ul class="nav pull-right">
        <li>
        <form class="form-inline" method="post" action="checklogin.php">
        <input  name="myusername" type="text" id="myusername" class="input-small" placeholder="Username" >
        <input name="mypassword" type="password" id="mypassword" class="input-small" placeholder="Password" >
        <button type="submit" name="Submit" value="Login" class="btn" >Submit</button>
        </form>
        </li>
      </ul>
    </div>
  </div>
</nav>