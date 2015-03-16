<?php
$pagetitle = "API - documentation";
include 'includes/header.php';
?>


<div class="api_div1">
    <h1>How to use the un-social media API</h1>
    <p>The API allows you to take a users name and password and retreive post data. This allows you to take infomation formated in JSON and export it to your chosen location securly.</p>   
</div>

<div class="api_div2">
    <h1>Accessing JSON data</h1>
    <p>You will be using x files to get user data, api_write.php</p>
    <hr>
    <p><?php echo $baseurl."api_write.php"; ?> - will hold your JSON data</p>
    <p>A users name and password are required to access data, the users information is to be passed into the url like so: /api_write.php?name=username&pass=password</p> 
    <p>If you had a user with the username of dave and a password of ardvark the you would enter the following into the browser: /api_write.php?name=dave&pass=ardvark</p>
    <p>What the page will give you is JSON data for you to parse and use as you wish. Your data will look like this: {"posts":[{"date":"2015-03-12","content":"this is a post"},{"date":"2013-11-11","content":"this is a  another post"}]}</p>

    <hr>

    <h1>Using JSON</h1>
    <p>To securly make use of the API you will have to create a file that using jquerys ajax function to get your json data. This will hide the password and username in the url we just worked with. It is in your hands to not expose this information by using the url in a manner that it can be seen.</p>
    <p>Using .ajax looks like this: <br>
        var username = "users name here"; <br>
        var userpass = "users password here"; <br>
        $.ajax({ <br>
        url : "<?php echo $baseurl."api_write.php"; ?>?name="+username+"&pass="+userpass+"", <br>
        dataType: 'json',<br>
        type: 'get',<br>
        cache: false,<br>
        success : function(data){<br>
    });
</p>
<p>At this point you have data which is an object you can parse and do as you wish with it, adding the following will alternate printing the date and posts content each line:<br>
    var i = 0;<br>
    while(data.posts[i].date != null){<br>
    $(document.body).append(data.posts[i].date); //date of post <br>
    $(document.body).append(data.posts[i].content);// post content <br>
    //add logic to format content i.e. put it into a table or div, what ever fits your needs<br>
    i++;<br></p>
</div>

<div class="api_div1">
    <h1>Simple copy, paste, and use...</h1>
    <p>
        var username = "users name here"; <br>
        var userpass = "users password here"; <br>
        $.ajax({ <br>
        url : "<?php echo $baseurl."api_write.php"; ?>?name="+username+"&pass="+userpass+"", <br>
        dataType: 'json',<br>
        type: 'get',<br>
        cache: false,<br>
        success : function(data){<br>
        var i = 0;<br>
        while(data.posts[i].date != null){<br>
        $(document.body).append(data.posts[i].date); //date of post <br>
        $(document.body).append(data.posts[i].content);// post content <br>
        //add logic to format content i.e. put it into a table or div, what ever fits your needs<br>
        i++;<br>
    };
}
});
</p>
</div>

<?php 
include 'includes/footer.php';
?>