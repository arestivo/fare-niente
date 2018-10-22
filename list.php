<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans+Condensed:300" rel="stylesheet">
  </head>

  <body>
    <header>
      <h1><a href="index.php"><i class="fas fa-bed"></i> Fare Niente</a></h1>
      <nav>
        <ul>
          <li>username</li>
          <li><a href="action_logout.php">Logout</a></li>
        </ul>
      </nav>
    </header>

    <section id="lists">

      <article class="list">
        <header><h2>Things to do</h2></header>
        <ol>
          <li>
            <a href="action_delete_item.php?id=1"><i class="fas fa-trash"></i></a>
            <label><input type="checkbox">Buy milk</label>
          </li>
          <li>
            <a href="action_delete_item.php?id=2"><i class="fas fa-trash"></i></a>
            <label><input type="checkbox" checked>Walk the dog</label>
          </li>
          </ol>
        <form action="action_add_item.php" method="post">
          <input type="hidden" value="1">
          <input type="text" placeholder="Add item">
        </form>
      </article>

      <article class="list">
        <header><h2>Things NOT to do</h2></header>
        <ol>
          <li>
            <a href="action_delete_item.php?id=3"><i class="fas fa-trash"></i></a>
            <label><input type="checkbox" checked>Break a leg</label>
          </li>
          <li>
            <a href="action_delete_item.php?id=4"><i class="fas fa-trash"></i></a>
            <label><input type="checkbox">Crash the car</label>
          </li>
          <li>
            <a href="action_delete_item.php?id=5"><i class="fas fa-trash"></i></a>
            <label><input type="checkbox" checked>Fail the exam</label>
          </li>
        </ol>
        <form action="action_add_item.php" method="post">
          <input type="hidden" value="2">
          <input type="text" placeholder="Add item">
        </form>
      </article>

      <article class="new-list">
        <form action="action_add_list.php" method="post">
          <input type="text" placeholder="Add list">
        </form>
      </article>

    </section>

  </body>
</html>