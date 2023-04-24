<?php include_once("../head.php"); ?>
<body>
    <?php include_once("../header.php"); ?>
    <main>
        <article>
            <h1>Viewing the Log</h1>
            <p>
                A simple and common command with a world of options.
            </p>
            <h2>Git Log</h2>
            <p>
                At its core, <span class="commandblock">git log</span> will display information about each commit present in the history. We will look at a few flags to modify the output.
            </p>
            <h2>Formatting</h2>
            <p>
                Often, it is useful to see a more detailed description of how a repository has changed over time. The <span class="commandblock">--stat</span> flag will display the number of insertions and deletions to the content of files within each commit. Using <span class="commandblock">-p</span> produces a similar result, but displays the changes themselves too.
            </p>
            <p>
                On the other hand, it may be more beneficial to have a more compact display of the history. This can be done with <span class="commandblock">--oneline</span>, which limits each commit to a single line of output. For a little more information, <span class="commandblock">--decorate</span> will show which commits are the heads of each branch.
            </p>
            <h2>Displaying Visually</h2>
            <p>
                In a repository with multiple active branches, it would be helpful to see what branches each commit belong to. The <span class="commandblock">--graph</span> flag will present each branch as a vertical line with asterisks to represent which branch each commit belongs to.
            </p>
            <h2>Shortlog</h2>
            <p>
                The output can be further simplified, and formatted at the same time, with a similar command: <span class="commandblock">git shortlog</span>. This command is particularly useful for creating summaries of the work that has been done. It accepts nearly all flags and options that <span class="commandblock">git log</span> does.
            </p>
        </article>
        <?php include_once("../sidebar.php"); ?>
    </main>
    <?php include_once("../footer.php"); ?>
</body>
