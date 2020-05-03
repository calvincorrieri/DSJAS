<!--
DSJAS - Default theme
Support navbar component file
-->

<nav class="navbar navbar-fluid navbar-expand-lg navbar-dark bg-dark text-light">
    <div class="navbar-brand">
        <img src="/assets/logo.png" width="30" height="30" alt="logo">
        <a class="navbar-brand" href="<?php echo (getBankURL() . "/user/Dashboard.php"); ?>"><?php echo (getBankName() . "<i> - Online</i>"); ?></a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo (getBankURL() . "/user/Dashboard.php"); ?>">Home</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAccounts" role="button" data-toggle="dropdown">
                    Accounts
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/user/accounts">My accounts</a>
                    <a class="dropdown-item" href="/user/manage">Manage</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/user/Apply.php">Apply for new</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo (getBankURL() . "/user/transfer"); ?>">Transfers</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo (getBankURL() . "/support/Fraud"); ?>">Fraud</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo (getBankURL() . "/support/Contact"); ?>">Contact</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo (getBankURL() . "/user/Logout.php"); ?>">Logout</a>
            </li>
        </ul>
    </div>

    <div class="justify-right form-inline">
        <a class="btn btn-outline-primary" href="/" style="margin-right: 25px">Return to home</a>
    </div>
</nav>