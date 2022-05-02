<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>News Page</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<style>
body {
  padding: 0;
  color: #000;
  margin: 0 auto;
  text-align: center;
}
.clearFix:after {
  content: "";
  display: block;
  clear: both;
  visibility: hidden;
  font-size: 0px;
  height: 0;
}
.container {
  width: 940px;
  margin: 0 auto;
}
.header {
  padding: 10px 0;
  margin: 10px 0px 5px 0px;
  background-color: #ddd;
}
.content .main {
  float: left;
  width: 600px;
  margin-bottom: 10px;
}
.blog {
  padding: 20px 0;
  margin-bottom: 10px;
  border: 1px solid green;
}
.blog img{
  width:50%;
  margin:0 auto;
}
.title {
  font-size: 13px;
  text-align: left;
}
.content .aside {
  float: right;
  margin-bottom: 10px;
  width: 330px;
  text-align: left;
}
.section01 {
  margin-bottom: 10px;
  border: 1px solid green;
}
.section01 .list {
  margin-left: 0px;
}
.section01 ul .list a {
  list-style-type: none;
}
.footer {
  padding: 5px;
  margin-bottom: 10px;
  background-color: #ddd;
}
h2 {
  position: relative;
  color: green;
  font-style: bold;
  -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
  animation-name: example;
  animation-duration: 4s;
}
@keyframes  example {
  0% {
    left: 0px;
    top: 0px;
  }
  25% {
    left: 200px;
    top: 0px;
  }
}
#mySearch {
  width: 90%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block
}
#myMenu li a:hover {
  background-color: #eee;
}
</style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Review of E-market</h1>
      <div class="title">
        <h2>News(discount items)</h2>
      </div>
    </div>
    <div class="content clearFix">
      <div class="main" >
        <div class="blog">
          <img src="images/paper.jpg" class="card-img-top" alt="..."><hr>
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="blog">
          <img src="images/stickynote.jpg" class="card-img-top" alt="..."><hr>
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="aside">
        <div class="section01"> 
          <div class="search_box" style="background-color:#bbb;">
            <h2>Categories</h2>
            <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
            <ul id="myMenu">
              <li><a href="#">HTML</a></li>
              <li><a href="#">CSS</a></li>
              <li><a href="#">JavaScript</a></li>
              <li><a href="#">PHP</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">jQuery</a></li>
              <li><a href="#">SQL</a></li>
              <li><a href="#">Bootstrap</a></li>
              <li><a href="#">Node.js</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer"><p>Footer</p></div></div>
   </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\blog\resources\views/news.blade.php ENDPATH**/ ?>