<html>
  <head>
    <link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />
  </head>
  <body>
    <?php
    if (array_key_exists('content', $_POST)) {
      
	  $query = $_POST['content'];
	  
	  echo "You wrote:<pre>\n";
      echo htmlspecialchars($query);
      echo "\n</pre>"; 
	  
	  $encoded_query = urlencode($query);
      $myurl = 'http://semanticweb.cs.vu.nl/dss/sparql/?query=' .$encoded_query;	
	  
	  echo "Your SPARQL request URL becomes:" ;
	  echo '<a href="'; 
	  echo $myurl; 
	  echo '">';
	  echo $myurl ;
	  echo '</a>';
      echo "\n</pre>"; 
	  }
    ?>
    <form action="/sign" method="post">
      <div><textarea name="content" rows="15" cols="90">
 SELECT ?lat ?long ?name WHERE 
{
?p1 skos:exactMatch ?pg.
?pg geo:name ?name.
?pg wgs84:lat ?lat.
?pg wgs84:long ?long.
}
LIMIT 20  
	</textarea></div>
      <div><input type="submit" value="PewPew"></div>
    </form>
  </body>
</html>