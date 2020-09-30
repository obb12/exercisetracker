<html><head>
      <title>Exercise Tracker | Free Code Camp</title>
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>

   <body style="">
      <div class="container">
         <h1>Exercise tracker</h1>
          <form action="/api/exercise/new-user" method="post">
            <h3>Create a New User</h3>
            <p><code>POST /api/exercise/new-user</code></p>
            <input id="uname" type="text" name="username" placeholder="username">
            <input type="submit" value="Submit">
          </form>
          <form action="/api/exercise/add" method="post">
            <h3>Add exercises</h3>
            <p><code>POST /api/exercise/add</code></p>
            <input id="uid" type="text" name="userId" placeholder="userId*">
            <input id="desc" type="text" name="description" placeholder="description*">
            <input id="dur" type="text" name="duration" placeholder="duration* (mins.)">
            <input id="dur" type="text" name="date" placeholder="date (yyyy-mm-dd)">
            <input type="submit" value="Submit">
          </form>
          <p><strong>GET users's exercise log: </strong><code>GET /api/exercise/log?{userId}[&amp;from][&amp;to][&amp;limit]</code></p>
          <p><strong>{ }</strong> = required, <strong>[ ]</strong> = optional</p>
          <p><strong>from, to</strong> = dates (yyyy-mm-dd); <strong>limit</strong> = number</p>
      </div>



</body></html>
