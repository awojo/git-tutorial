<?php include_once("../head.php"); ?>
<body>
    <?php include_once("../header.php"); ?>
    <main>
        <article>
            <h1>Synchronization</h1>
            <p>
                Now that you've gotten through the basics, it's time to get to what makes Git so useful.
            </p>
            <h2>Git remote</h2>
            <p>
                Git repositories are able to contain references to other repositories, and <span class="commandblock">git remote</span> is how you manage these connections. Rather than being direct links to other repositories, these connections can be thought of as bookmarks. They act as shortcuts so that the complete URL is not required for every command involving a remote repository.
            </p>
            <p>
                Primarily, the <span class="commandblock">git remote</span> command provides a way to interact with a repository's <span class="commandblock">./.git/config</span> file. Using the command as is will list all connections made to other repositories. Using the verbose option <span class="commandblock">git remote -v</span> will include the urls.
            </p>
            <h2>Creating, modifying, and removing connections</h2>
            <p>
                Making a connection to another repository is as simple as running the following command: <span class="commandblock">git remote add &lt;name&gt; &lt;url&gt;</span>. Afterwards, the parameter used for <span class="commandblock">&lt;name&gt;</span> can be used as a shortcut to the URL.
            </p>
            <p>
                Similarly, <span class="commandblock">git remote rm &lt;name&gt;</span> can be used to remove a connection, and <span class="commandblock">git remote rename &lt;old-name&gt; &lt;new-name&gt;</span> will rename a connection.
            </p>
            <h2>Using connections</h2>
            <p>
                After creating a remote, its name can be used as an argument to other Git commands, such as <span class="commandblock">git fetch</span> or <span class="commandblock">git push</span>.
            </p>
            <p>
                In order to download the changes that others have made to your repository, the <span class="commandblock">git fetch &lt;remote&gt;</span> command can be used to fetch all commits and files from the remote repository. However, this command will not actually update your working copy. Instead, Git will store these changes in your repository's <span class="commandblock">./.git/objects</span> directory, waiting for you to merge them in.
            </p>
            <p>
                Instead, you can use the <span class="commandblock">git pull &lt;remote&gt;</span> command to do both at once, erasing any uncommitted and in progress work in the process.
            </p>
            <p>
                On the other hand, <span class="commandblock">git push &lt;remote&gt; &lt;branch&gt;</span> is how you upload your changes so that others can fetch them.
            </p>
            <h2>GitHub Desktop</h2>
            <p>
                This process is heavily streamlined in GitHub's Desktop app, allowing anyone to sync their repository with just a few button presses.
            </p>
            <p>
                If you haven't uploaded your repository to GitHub yet, then Desktop should look similar to this. Note the "Publish repository" button in the top right.
            </p>
            <a href="/img/gh-desktop1.png"><img src="/img/gh-desktop1.png" class="center-img"></a>
            <p>
                After you have uploaded your repository, that button will say "Fetch origin", which behaves just like the command. If you've made commits that aren't uploaded yet, it will instead say "Push origin".
            </p>
        </article>
        <?php include_once("../sidebar.php"); ?>
    </main>
    <?php include_once("../footer.php"); ?>
</body>
