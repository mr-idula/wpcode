<!DOCTYPE html>
<html>
	<head>
		<title>Comments System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</head>
  <style>
    * {
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
body {
    background-color: #FFFFFF;
    margin: 0;
    font-family: Georgia;
}
.navtop {
    background-color: lavender;
    height: 100px;
    width: 100%;
    border: 0;
}
.navtop div {
    display: flex;
    margin: 0 auto;
    width: 1000px;
    height: 100%;
}
.navtop div h1, .navtop div a {
    display: inline-flex;
    align-items: center;
}
.navtop div h1 {
    flex: 1;
    font-size: 24px;
    padding: 0;
    margin: 0;
    color: black;
    font-weight: normal;
}
.navtop div a {
    padding: 0 20px;
    text-decoration: none;
    color: black;
    font-weight: bold;
}
.navtop div a i {
    padding: 2px 8px 0 0;
}
.navtop div a:hover {
    color: #ecf0f6;
}
.content {
    width: 1000px;
    margin: 0 auto;
}
.content h2 {
    margin: 0;
    padding: 25px 0;
    font-size: 22px;
    border-bottom: 1px solid #ebebeb;
    color: #666666;
}
.comments .comment_header {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #eee;
    padding: 15px 0;
    margin-bottom: 10px;
    align-items: center;
}
.comments .comment_header .total {
    color: #777777;
    font-size: 14px;
}
.comments .comment_header .write_comment_btn {
    margin: 0;
}
.comments .write_comment_btn, .comments .write_comment button {
    display: inline-block;
    background-color: #565656;
    color: #fff;
    text-decoration: none;
    margin: 10px 0 0 0;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 600;
    border: 0;
}
.comments .write_comment_btn:hover, .comments .write_comment button:hover {
    background-color: #636363;
}
.comments .write_comment {
    display: none;
    padding: 20px 0 10px 0;
}
.comments .write_comment textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    height: 150px;
    margin-top: 10px;
}
.comments .write_comment input {
    display: block;
    width: 250px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 10px;
}
.comments .write_comment button {
    cursor: pointer;
}
.comments .comment {
    padding-top: 10px;
}
.comments .comment .name {
    display: inline;
    padding: 0 5px 3px 0;
    margin: 0;
    font-size: 16px;
    color: #555555;
}
.comments .comment .date {
    color: #888888;
    font-size: 14px;
}
.comments .comment .content {
    padding: 5px 0 5px 0;
}
.comments .comment .reply_comment_btn {
    display: inline-block;
    text-decoration: none;
    margin-bottom: 10px;
    font-size: 14px;
    color: #888888;
}
.comments .comment .replies {
    padding-left: 30px;
}
  </style>
	<body>

	    <nav class="navtop">
	    	<div>
	    		<h1> Neighborhood Gems Forum</h1>
          <a href="home.php" class="btn btn-outline-info mr-1" role="button">Back To Home Page</a>
	    	</div>
	    </nav>

		<div class="content home" style="background-color: lightblue">
			<p><b>List Local Businesses that you would like to see added to the website!</b>
      Add as many as you would like :) To see your additions, after you hit submit, refresh the page!</p>
		</div>
    <div class="comments"></div>

<script>
const comments_page_id = 1; // This number should be unique on every page
fetch("comments.php?page_id=" + comments_page_id).then(response => response.text()).then(data => {
	document.querySelector(".comments").innerHTML = data;
	document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
		element.onclick = event => {
			event.preventDefault();
			document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
		};
	});
	document.querySelectorAll(".comments .write_comment form").forEach(element => {
		element.onsubmit = event => {
			event.preventDefault();
			fetch("comments.php?page_id=" + comments_page_id, {
				method: 'POST',
				body: new FormData(element)
			}).then(response => response.text()).then(data => {
				element.parentElement.innerHTML = data;
			});
		};
	});
});
</script>
	</body>
</html>
