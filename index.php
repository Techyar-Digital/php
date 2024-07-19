<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<meta name="google-site-verification" content="0EDwQp3sEszKlbXfUGXHKNjj71H_mpp99ZGGx0SUeP4" />
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
<link rel='stylesheet' href='css/icons.css'>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<title>Admin Panel</title>
<script src="js/update-website-status.js"></script>
</head>
<body>
    
    
<?php
session_start();
// Check if user is not logged in, redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html');
    exit;
}
?>

    <nav>
        <div class="nav-bar-logo">
            <i class="fa-regular fa-bars" id="side-nav"></i>
            <a href="#"><img src="img/logo.png" alt="logo"></a>
        </div>
        <i id="account-details" class="fi fi-rr-menu-dots-vertical three-dots"></i>
    </nav>

    <!--2nd Nav Start-->

    <div id="content-wrapper">
        <div class="second-nav">
            <div class="profile">
                <div class="profile-photo">
                    <img src="assets/profile-avatar.webp" alt="Admin Profile Picture">
                </div>
                <div class="profile-name-royality">
                    <strong class="profile-name">MD Hasan Ejaz</strong>
                    <small class="royality">owner</small>
                </div>
            </div>
            <a href="" class="active"><i class="fi fi-rr-dashboard"></i>Dashboard</a>
            <a href=""><i class="fi fi-rr-settings"></i>General Setting</a>
            <a href="file-management.php"><i class="fi fi-rr-apps-add"></i>Apk Management</a>
            <a href=""><i class="fi fi-rr-interactive"></i>Ads Click</a>
            <a href=""><i class="fi fi-rr-search"></i>YouTube Analyzer</a>
            <a href=""><i class="fi fi-rr-rotate-right"></i>Page Reload</a>
            <a href=""><i class="fi fi-rr-chart-histogram"></i>Website Statics</a>
            <a href=""><i class="fi fi-rr-lightbulb-on"></i>Techyar Ideas</a>
            <a href=""><i class="fi fi-rr-multiple-alt"></i>Techyar Digital</a>
            <a href=""><i class="fi fi-rr-money-bill-wave"></i>Payments Manager</a>
            <a href=""><i class="fi fi-rr-sign-in-alt"></i>Login History</a>
        </div>
    </div>

    <!--2nd Nav End-->
    

    <!--Main Body Content Start-->
    <!--Main Body Content Start-->
    <!--Main Body Content Start-->

    <main>
        
        <!--Website Status Change Start-->
        
        <div class="web-connection">
        <div class="left">
            <i class="fi fi-rr-check-circle status-icon">&nbsp;│</i>
            <span class="website-status">Website is now active!</span>
        </div>
        <div class="toggle-icon-box">
            <i class="fi fi-rr-toggle-on toggle-status-act"></i>
        </div>
    </div>

        <!--Website Status Change End-->

        <h2 class="page-title">Dashboard</h2>

    <div class="row">
        <div class="title-boxes">
            <div class="box">
                <div class="box-left">
                    <div class="icon-title">
                        <i class="fi fi-rr-coins"></i>
                        <span class="box-title">Total Earning</span>
                    </div>
                    <div class="box-des-ratio">
                        <span class="box-description">Rs. <span>6,800</span></span>
                        <span class="ratio">+10%</span>
                    </div>
                </div>
                <div class="box-right">
                    <i class="fi fi-rr-coins"></i>
                </div>
            </div>

            <div class="box">
                <div class="box-left">
                    <div class="icon-title">
                        <i class="fa-regular fa-globe-pointer" style="padding: 6px 6px;"></i>
                        <span class="box-title">Total Visits</span>
                    </div>
                    <div class="box-des-ratio">
                        <span class="box-description"><span>5.3k</span> Visits</span>
                        <span class="ratio-neg">-8%</span>
                    </div>
                </div>
                <div class="box-right">
                    <i class="fa-regular fa-globe-pointer"></i>
                </div>
            </div>

            <div class="box">
                <div class="box-left">
                    <div class="icon-title">
                        <i class="fi fi-rr-ad"></i>
                        <span class="box-title">Ad Clicks</span>
                    </div>
                    <div class="box-des-ratio">
                        <span class="box-description"><span>468</span> Clicks</span>
                        <span class="ratio">+33%</span>
                    </div>
                </div>
                <div class="box-right">
                    <i class="fi fi-rr-ad"></i>
                </div>
            </div>

            <div class="box">
                <div class="box-left">
                    <div class="icon-title">
                        <i class="fi fi-rr-users-alt"></i>
                        <span class="box-title">Total Users</span>
                    </div>
                    <div class="box-des-ratio">
                        <span class="box-description"><span>3.2k</span> Users</span>
                        <span class="ratio">+5%</span>
                    </div>
                </div>
                <div class="box-right">
                    <i class="fi fi-rr-ad"></i>
                </div>
            </div>
        </div>
    </div>

    <!--Message Tab Start-->
    <!--Message Tab Start-->

    <section class="message-recent-logins">
        <div class="messages">
            <div class="message-title">Messages</div>
            <div class="message-box">
                <div class="message-details-profile">
                    <div class="message-profile-recent-message">
                        <div class="message-profile-picture">
                            <img src="assets/profile-avatar.webp" alt="Profile Picture">
                        </div>
                        <div class="message-profile-name-recent-message">
                            <span class="message-profile-name">Arfan Ali</span>
                            <small class="recent-message">Can I get more info about you services</small>
                        </div>
                    </div>
                    <div class="message-date-time">
                        <small>5:30 PM</small>
                        <small>27-MAY-2024</small>
                    </div>
                </div>
                <div class="message-details-profile">
                    <div class="message-profile-recent-message">
                        <div class="message-profile-picture">
                            <img src="assets/profile-avatar-1.webp" alt="Profile Picture">
                        </div>
                        <div class="message-profile-name-recent-message">
                            <span class="message-profile-name">Ayesha Ansari</span>
                            <small class="recent-message">Sir mjhay mazeed kitna pay krna hoga</small>
                        </div>
                    </div>
                    <div class="message-date-time">
                        <small>3:10 AM</small>
                        <small>27-MAY-2024</small>
                    </div>
                </div>
                
                
            </div>
        </div>

        <!--Login History Start-->
        <!--Login History Start-->

<?php
// Function to read the last n lines of a file
function tail($file, $lines = 4) {
    $f = fopen($file, "rb");
    fseek($f, -1, SEEK_END);
    if (fread($f, 1) != "\n") $lines--;
    $output = '';
    $chunkSize = 4096;
    while (ftell($f) > 0 && $lines >= 0) {
        $seek = min(ftell($f), $chunkSize);
        fseek($f, -$seek, SEEK_CUR);
        $chunk = fread($f, $seek);
        $output = $chunk . $output;
        fseek($f, -strlen($chunk), SEEK_CUR);
        $lines -= substr_count($chunk, "\n");
    }
    while ($lines++ < 0) {
        $output = substr($output, strpos($output, "\n") + 1);
    }
    fclose($f);
    return array_reverse(explode("\n", trim($output))); // Reverse the order to get the latest entries first
}

// Read the last 4 login attempts from the log file
$logFile = 'login_attempts.log';
$lastEntries = tail($logFile);

// Display the login history
echo '<div class="login-history">';
echo '<h2>Login History</h2>';

$counter = 0;
foreach ($lastEntries as $entry) {
    if (empty($entry)) continue;
    // Extract the date-time, status, and mobile number from the log entry
    preg_match('/\[(.*?)\] (Successful|Failed) login: (.*)/', $entry, $matches);
    $dateTime = $matches[1];
    $status = $matches[2];
    $mobileNumber = $matches[3];
    
    $statusClass = $status === 'Successful' ? 'login-status-positive' : 'login-status-negative';
    $statusText = $status === 'Successful' ? 'success' : 'Failed';

    echo '<div class="history-box">';
    echo '<span class="login-date-time">' . date('d-m-y [h:i A]', strtotime($dateTime)) . '</span>';
    echo '<span class="attemped-mobile-numbers">' . $mobileNumber . '</span>';
    echo '<span class="' . $statusClass . '">' . $statusText . '</span>';
    echo '</div>';

    $counter++;
    if ($counter >= 4) break; // Display only the last 4 entries
}

echo '</div>';
?>



    </section>

    <!--Message Tab End-->
    <!--Message Tab End-->
    

    <!--Paid Users Of TechYar Ideas-->
    <!--Paid Users Of TechYar Ideas-->

    <section class="message-recent-logins">

        <div class="paid-users-box"></div>
        
    </section>

    </main>

    <!--Main Body Content End-->
    <!--Main Body Content End-->
    <!--Main Body Content End-->
    
    
    
    
    
</body>
<script src="js/logoutTimer.js"></script>
<script src="js/nav.js"></script>
<script src="js/second-nav.js"></script>
<script src="js/earning-graph.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>