<?php include_once("head.php"); ?>
<body>
    <?php include_once("header.php"); ?>
    <main>
        <article>
            <h1>Feedback</h1>
            <p>Thank you for visiting our website! we would like to get your feedback on how we can improve and what you like about it.</p>
            <br>
            <p class="center">Please Enter your E-mail below:</p>
            <form class="center">
                <label for="User">E-mail</label>
                <input type="text" id="User" name="User">
                <p>How can we improve? What would you like to see more of? and what did you like about the website?</p>
                <textarea id="message" name="message" rows="25" cols="80"></textarea>
                <br>
                <input type="submit" value="Submit">
            </form>
        </article>
        <?php include_once("sidebar.php"); ?>
    </main>
    <?php include_once("footer.php"); ?>
</body>
