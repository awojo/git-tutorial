<?php include_once("../head.php"); ?>
<body>
    <?php include_once("../header.php"); ?>
    <main>
        <article>
            <h1>Submodules and Subtrees</h1>
            <p>
                Two ways to embed other repositories into your own.
            </p>
            <h2>Submodules</h2>
            <p>
                It is a common scenario for a repository to depend on another repository. On first thought, one may simply copy the files into their repository's directory and call it a day. This, however, prevents fetching future updates to that dependency without manually replacing the copied files.
            </p>
            <p>
                Submodules provide a way to embed a specific commit of a repository into your own through <span class="commandblock">git submodule add &lt;URL&gt;</span>. Doing so will create a subdirectory and immediately clone the submodule.
            </p>
            <p>
                Once your respository contains submodules, others will need to complete a few extra steps after cloning your repository. Both <span class="commandblock">git submodule init</span> and <span class="commandblock">git submodule update</span> will need to be ran so that all submodules are present.
            </p>
            <h2>Subtrees</h2>
            <p>
                Subtrees offer an alternative to submodules. A major upside to subtrees is that no extra commands are necessary after cloning a repository containing subtrees, they are included automatically. 
            </p>
            <p>
                The command <span class="commandblock">git subtree add --prefix &lt;directory&gt; &lt;URL&gt; &lt;branch&gt; --squash</span> will clone the repository into <span class="commandblock">directory</span> and add a merge commit to the branch's history. Afterwards, the subtree can be updated with <span class="commandblock">git subtree pull --prefix &lt;directory&gt; &lt;URL&gt; &lt;branch&gt; --squash</span>.
            </p>
        </article>
        <?php include_once("../sidebar.php"); ?>
    </main>
    <?php include_once("../footer.php"); ?>
</body>
