<?php

echo '<form method="post" action="http://localhost/blog-mada/index.php?page=contact">
  <div class="form-group">
    <label for="exampleInputPassword1">Nume</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nume">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>
  </div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form><br><br>';