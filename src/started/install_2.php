<?php include_once("../head.php"); ?>
<body>
    <?php include_once("../header.php"); ?>
    <main>
        <article>
	        <h2>Installing Git on macOS</h2>
            <p>Take a look at the Git site's macOS download page on their site: <a href="https://git-scm.com/download/mac/" target="_blank">Installing Git on macOS</a></p>
            <p>or check out the screen snip here:</p>
            <a href="/img/Git download for macOS page.png"><img src="/img/Git download for macOS page.png" alt="Git website image" class="center-img"></a>
            <p>Notice that the macOS download page begins with the explanation that you will need to choose from one of the available installers, for which they provide links to those packages. We used the Tim Harper binary installer.</p>
            <p>Installing software on a mac is typically as simple as double-clicking on the package from the downloads folder, double clicking on the Install folder, then following the screen prompts.</p>
            <a href="/img/mac install example.png"><img src="/img/mac install example.png" alt="Git install folder example on mac" class="center-img"></a>
            <p>However, certain security features designed to protect your Mac from malware may require a workaround when downloading the Git and GitHub Desktop software. If you get an error message such as “[name] can’t be opened because it was not downloaded from the App Store.”, this is happening because the software is from an ‘unsigned developer’ according to Apple/Mac.</p>
            <p>Help for this type of error can be found on the apple.com/support website, but for your convenience, here is the workaround:</p>
            <a href="/img/mac install allow step1.png"><img src="/img/mac install allow step1.png" class="center-img"></a>
            <a href="/img/mac install allow step 2.png"><img src="/img/mac install allow step 2.png" class="center-img"></a>
            <h3><a href="/src/started/install.php">Return to the Getting Started with Git Checklist</a></h3>
            <?php include_once("../comments.php"); ?>
        </article>
        <?php include_once("../sidebar.php"); ?>
    </main>
    <?php include_once("../footer.php"); ?>
</body>
