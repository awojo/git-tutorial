<?php include_once("../head.php"); ?>
<body>
    <?php include_once("../header.php"); ?>
    <main>
        <article>
            <h1>Merging and Rebasing</h1>
            <p>
                Both are methods of combining changes from one branch to another.
            </p>
            <h2>Merging</h2>
            <p>
                The simplest and safest way to combine changes is with the <span class="commandblock">git merge &lt;branch&gt;</span> command. Doing so creates a "merge commit" in the checked out branch that adds the history of the branch taken as a parameter to the checked out branch. Merging is commonly done as it does not modify the involved branches.
            </p>
            <p>
                The downside, however, is that each time you merge, you gain an additional superfluous commit that can bloat the commit history, especially in very active repositories.
            </p>
            <h2>Rebasing</h2>
            <p>
                Instead of creating additional commits, the <span class="commandblock">git rebase &lt;branch&gt;</span> command moves the current branches commits onto the end of the given branch. The command re-writes the history of the repository and results in a completely linear path of commits with the rebased commits being the most recent.
            </p>
            <p>
                While this seems enticing keep the commit history clean, it can be damaging to a collaborative workflow if used incorrectly.
            </p>
            <h2>The Golden Rule of Rebasing</h2>
            <p>
                Rebasing should never be done into a public branch. This is because new commits are made with the contents of all previous commits so that their order can be changed to being linear, meaning that your version of the public branch has diverged from everyone elses. After this bifurcation, only a merge can combine the two versions of the branch.
            </p>
            <h2>GitHub Desktop</h2>
            <p>
                Merging is trivial when using Desktop with the help of the button at the bottom of the branch menu.
            </p>
            <a href="/img/gh-desktop-merge.png"><img src="/img/gh-desktop-merge.png" class="center-img-tall"></a>
            <p>
                The option to rebase is located within the branch label, rather than the previous menu. 
            </p>
            <a href="/img/gh-desktop-rebase.png"><img src="/img/gh-desktop-rebase.png" class="center-img-tall"></a>
        </article>
        <?php include_once("../sidebar.php"); ?>
    </main>
    <?php include_once("../footer.php"); ?>
</body>
